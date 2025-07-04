<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignStatistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::where('user_id', auth()->id())->get();
        return view('admin.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        $userBalance = Auth::user()->balance;
        return view('admin.campaigns.create', compact('userBalance'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'campaign_name' => 'required',
            'campaign_type' => 'required',
            'target_url' => 'required|url',
            'country' => 'required',
            'city' => 'nullable',
            'device' => 'nullable',
            'daily_limit' => 'required',
            'end_date' => 'required',
        ]);

        //try {
        $campaign = new Campaign();
        $campaign->user_id          = Auth::id();
        $campaign->campaign_name    = $request->input('campaign_name');
        $campaign->campaign_type    = $request->input('campaign_type');
        $campaign->target_url       = $request->input('target_url');
        $campaign->country          = $request->input('country');
        $campaign->country_name     = $request->input('country_name');
        $campaign->city_code        = json_encode($request->input('city_code'));
        $campaign->city             = json_encode($request->input('city'));
        $campaign->device           = $request->input('device');
        $campaign->daily_limit      = $request->input('daily_limit');
        $campaign->end_date         = $request->input('end_date');
        $campaign->campaign_status  = 'created by user';
        $campaign->save();

        $city = $request->input('city_code') ? array_map('intval', json_decode($request->input('city_code'))) : [];
        $device = $request->input('device') ? array_map('intval', explode(',', $request->input('device'))) : [];

        $data = [
            'CampaignForm' => [
                'name' => $request->input('campaign_name'),
                'link' => $request->input('target_url'),
                'pricing' => 'cpm',
                'groupId' => 1
            ],
            'CampaignSettingsForm' => [
                'frequency' => 4,
                'cost' => 0.36,
                'country' => [
                    'IN' => 0.36
                ],
                'cityListType' => 'include',
                'city' => $city,
                'region' => [],
                'device' => $device,
                'os' => [],
                'osVersions' => [],
                'browser' => [],
                'browserLang' => [],
                'connectionType' => 1,
                'isp' => [],
                'budgetLimitTotal' => '',
                'budgetLimitDaily' => 100,
                'clicksLimitTotal' => '',
                'clicksLimitDaily' => $request->input('daily_limit'),
                'audiencesType' => '',
                'audiences' => [],
                'autoRules' => [],
                'autoLaunch' => true,
                'trafficQuality' => 'standard',
                'trafficCategories' => ['mainstream', 'adult']
            ],
            'CampaignScheduleForm' => [
                'timezone' => 'user',
                'utcZone' => 3,
                'day' => [],
                'startDate' => date('Y-m-d'),
                'endDate' => $request->input('end_date')
            ]
        ];

        // API Key
        $apiKey = env('API_KEY');

        // Send POST request to the API with API key in headers
        $apiResponse = Http::withHeaders([
            'accept' => 'application/json',
            'X-Api-Key' => $apiKey,
            'Content-Type' => 'application/json'
        ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/create-popunder', $data);

        if (isset($apiResponse['success']) && $apiResponse['success'] === true && isset($apiResponse['data']['id'])) {

            $campaign->api_id = $apiResponse['data']['id'];
            $campaign->api_status = $apiResponse['data']['message'];
            $campaign->api_response = json_encode($apiResponse);
            $campaign->save();
        }

        return redirect()->route('campaign.index');
    }

    public function edit(Campaign $campaign)
    {
        return view('admin.campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'campaign_name' => 'required|string|max:255',
            'target_url' => 'required|url',
            'country' => 'required|string|size:2',
            'device' => 'required|in:1,2,1,2',
            'daily_limit' => 'required|integer|min:100|max:10000',
            'end_date' => 'required|date',
        ]);

        $campaign = Campaign::findOrFail($id);

        $campaign->campaign_name = $request->input('campaign_name');
        $campaign->target_url = $request->input('target_url');
        $campaign->country = $request->input('country');
        $campaign->device = $request->input('device');
        $campaign->daily_limit = $request->input('daily_limit');
        $campaign->end_date = $request->input('end_date');

        $campaign->save();

        // Decode the city_code from JSON format
        $cityCodes = json_decode($campaign->city_code, true);

        // Check if cityCodes is null or empty
        if (is_null($cityCodes) || empty($cityCodes)) {
            $city = [];
        } else {
            // Convert the array to the format expected by the API (an array of integers)
            $city = array_map('intval', $cityCodes);
        }
        $device = $request->input('device') ? array_map('intval', explode(',', $request->input('device'))) : [];

        $data = [
            'CampaignForm' => [
                'name' => $request->input('campaign_name'),
                'link' => $request->input('target_url'),
                'pricing' => 'cpm',
                'groupId' => 1
            ],
            'CampaignSettingsForm' => [
                'frequency' => 4,
                'cost' => 0.36,
                'country' => [
                    'IN' => 0.36 // Static country data for India
                ],
                'cityListType' => 'include',
                'city' => $city, // Static city ID
                'region' => [],
                'device' => $device, // Static device types
                'os' => [],
                'osVersions' => [],
                'browser' => [],
                'browserLang' => [],
                'connectionType' => 1,
                'isp' => [],
                'budgetLimitTotal' => '', // Static total budget
                'budgetLimitDaily' => 100,  // Static daily budget
                'clicksLimitTotal' => '', // Static total clicks limit
                'clicksLimitDaily' => $request->input('daily_limit'),  // Static daily clicks limit
                'audiencesType' => '',
                'audiences' => [],
                'autoRules' => [],
                'autoLaunch' => true,
                'trafficQuality' => 'standard',
                'trafficCategories' => ['mainstream', 'adult'] // Traffic categories
            ],
            'CampaignScheduleForm' => [
                'timezone' => 'user',
                'utcZone' => 3,
                'day' => [],
                'startDate' => date('Y-m-d'), // Static start date
                'endDate' => $request->input('end_date')   // Static end date
            ]
        ];

        // API Key
        $apiKey = env('API_KEY');

        $url = "https://evadavapi.com/api/v2.2/advertiser/campaigns/update-popunder?id={$campaign->api_id}";
        // Send POST request to the API with API key in headers
        $apiResponse = Http::withHeaders([
            'accept' => 'application/json',
            'X-Api-Key' => $apiKey,
            'Content-Type' => 'application/json'
        ])->post($url, $data);

        if (isset($apiResponse['success']) && $apiResponse['success'] === true && isset($apiResponse['data']['message'])) {
            $campaign->api_status = $apiResponse['data']['message'];
            $campaign->api_response = json_encode($apiResponse);
            $campaign->save();
        }
        return redirect()->route('campaign.index');
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        // API URL
        $url = "https://evadavapi.com/api/v2.2/advertiser/campaigns/stop?id={$campaign->api_id}";

        // API key
        $apiKey = env('API_KEY');

        // Make the POST request
        $apiResponse = Http::withHeaders([
            'accept' => 'application/json',
            'X-Api-Key' => $apiKey,
        ])->post($url);

        if (isset($apiResponse['success']) && $apiResponse['success'] === true && isset($apiResponse['data']['message'])) {
            $campaign->api_status = $apiResponse['data']['message'];
            $campaign->api_response = json_encode($apiResponse);
            $campaign->save();
        }
        

        return redirect()->route('campaign.index');
    }

    public function stopCampaign($id)
    {
        $campaign = Campaign::findOrFail($id);

        // Update the api_status to "stopped by user"
        $campaign->campaign_status = 'stopped by user';
        $campaign->save();

        // API URL
        $url = "https://evadavapi.com/api/v2.2/advertiser/campaigns/stop?id={$campaign->api_id}";

        // API key
        $apiKey = env('API_KEY');

        // Make the POST request
        $apiResponse = Http::withHeaders([
            'accept' => 'application/json',
            'X-Api-Key' => $apiKey,
        ])->post($url);

        if (isset($apiResponse['success']) && $apiResponse['success'] === true && isset($apiResponse['data']['message'])) {
            $campaign->api_status = $apiResponse['data']['message'];
            $campaign->api_response = json_encode($apiResponse);
            $campaign->save();
        }

        return redirect()->route('campaign.index')->with('success', 'Campaign has been stopped.');
    }

    public function startCampaign($id)
    {
        $campaign = Campaign::findOrFail($id);

        if (Carbon::parse($campaign->end_date)->lt(Carbon::today())) {
            // Return a user-friendly message
            return response()->json(['message' => 'The campaign has already ended and cannot be started again.'], 400);
        }

        // Update the api_status to "stopped by user"
        $campaign->campaign_status = 'start by user';
        $campaign->save();

        // API URL
        $url = "https://evadavapi.com/api/v2.2/advertiser/campaigns/activate?id={$campaign->api_id}";

        // API key
        $apiKey = env('API_KEY');

        // Make the POST request
        $apiResponse = Http::withHeaders([
            'accept' => 'application/json',
            'X-Api-Key' => $apiKey,
        ])->post($url);

        if (isset($apiResponse['success']) && $apiResponse['success'] === true && isset($apiResponse['data']['message'])) {
            $campaign->api_status = $apiResponse['data']['message'];
            $campaign->api_response = json_encode($apiResponse);
            $campaign->save();
        }

        return redirect()->route('campaign.index')->with('success', 'Campaign has been start.');
    }

    public function searchCities(Request $request)
    {
        $term = $request->input('search', '');

        if (empty($term)) {
            return response()->json([]);
        }
        // Perform the API call to search for cities
        $response = Http::get('https://evadavapi.com/api/v2.2/reference/country-cities-list', [
            'limit' => 10,
            'offset' => '',
            'country' => 'IN',
            'term' => $term,
            'access-token' => env('API_KEY'),
        ]);

        // Check if the response is successful
        if ($response->successful()) {
            $data = $response->json();

            // Check if the success field is true and data contains cities
            if ($data['success'] && isset($data['data']['cities'])) {
                return response()->json($data['data']['cities']);
            }
        }

        // Return an error if the API call failed
        return response()->json(['error' => 'Unable to fetch cities'], 500);
    }


    public function updateCampaignStatus()
    {
        // Fetch all campaign records
        $campaigns = Campaign::withTrashed()->get();
        
        // API key and URL from environment variables or config
        $apiKey = env('API_KEY');
        
        foreach ($campaigns as $campaign) {
            try {
                // Build the request URL
                $url = 'https://evadavapi.com/api/v2.2/advertiser/campaigns/get';
                
                // Fetch campaign status from API
                $response = Http::withHeaders([
                    'accept' => 'application/json',
                    'X-Api-Key' => $apiKey,
                ])->get($url, [
                    'id' => $campaign->api_id, // Assuming api_id is the ID in your table
                    'extended' => 'true',
                    'access-token' => $apiKey,
                ]);

                // Decode API response
                $responseBody = $response->json();
                
                if ($responseBody['success']) {
                    $data = $responseBody['data']['campaign'];
                    
                    // Update campaign record
                    $campaign->current_status = $data['status'] ?? 'unknown'; // Default to 'unknown' if not set
                    $campaign->moderation_status = $data['moderation_status'] ?? 'unknown'; // Default to 'unknown' if not set
                    $campaign->save();
                }
            } catch (\Exception $e) {
                dd($e->getMessage());
                // Handle exceptions such as API errors
                //\Log::error("Failed to update status for campaign ID {$campaign->api_id}: " . $e->getMessage());
            }
        }

        return response()->json(['message' => 'Campaign statuses updated successfully']);
    }

    public function CampaignStatisticsUpdate()
    {
        $apiKey = env('API_KEY');
        $url = 'https://evadavapi.com/api/v2.2/advertiser/stats/date';

        $campaigns = Campaign::withTrashed()->get();  // Get all campaigns, including soft-deleted ones

        foreach ($campaigns as $campaign) {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'X-Api-Key' => $apiKey,
                'Content-Type' => 'application/json'
            ])->post($url, [
                'period' => '',
                'day' => now()->format('d.m.Y'),  // today's date in the required format now()->format('d.m.Y')
                'campaignId' => 0,
                'campaignIds' => [$campaign->api_id],  // replace with the correct API campaign ID
                'creativeId' => 0,
                'creativeIds' => [],
                'format' => 'popunder',
                'pricing' => 'cpm',
                'country' => [],
                'os' => [],
                'browser' => [],
            ]);

            try {
                $data = $response->json();
                //dd($data);
                if (isset($data['data']['stat'])) {
                    $stat = reset($data['data']['stat']);
                    // Retrieve existing campaign statistic for today
                    $existingStatistic = CampaignStatistic::where('campaign_id', $campaign->api_id)
                    ->where('date', now()->format('Y-m-d'))
                    ->first();

                    // Determine impressions for deduction
                    $impressions = $stat['impressions'];
                    $deductionImpressions = 0;

                    if ($existingStatistic) {
                        // Calculate difference in impressions
                        $impressionsDiff = $impressions - $existingStatistic->impressions;
    
                        // Deduct only if the new impressions are greater than the existing ones
                        if ($impressionsDiff > 0) {
                            $deductionImpressions = $impressionsDiff;
                        }
                    } else {
                        // If there's no existing record, deduct the full impressions
                        $deductionImpressions = $impressions;
                    }

                    //try {
                        CampaignStatistic::updateOrCreate(
                            [
                                'campaign_id' => $campaign->api_id,
                                'date' => now()->format('Y-m-d'),
                            ],
                            [
                                'impressions' => $stat['impressions'],
                                'clicks' => $stat['clicks'],
                                'cost' => $stat['cost'],
                            ]
                        );
                        
                        /// Calculate wallet deduction based on campaign type
                        $walletDeduction = 0;
                        if ($campaign->campaign_type == 'clicks') {
                            $walletDeduction = $deductionImpressions * 0.10;  // Rate per click
                        } elseif ($campaign->campaign_type == 'visite') {
                            $walletDeduction = $deductionImpressions * 0.20;  // Rate per visit
                        } elseif ($campaign->campaign_type == 'youtube_views') {
                            $walletDeduction = $deductionImpressions * 0.25;  // Rate per YouTube view
                        }
                        // Deduct from user's wallet
                        if ($walletDeduction > 0) {
                            $user = $campaign->user;  // Assuming a relationship exists
                            $user->balance -= $walletDeduction;
        
                            try {
                                $user->save();
                            } catch (\Exception $e) {
                                dd($e->getMessage());
                            }
                        }
                        echo "success";
                    // } catch (\Exception $e) {
                    //     dd($e->getMessage());
                    // }
                }
            } catch (\Exception $e) {
                dd($e->getMessage());
                //throw $th;
            }
        }
    }
    //Eva Dev API section
    // public function campaignCreateByAPI()
    // {
    //     //ClickAdu API Documentatio
    //     //https://adv.clickadu.com/apiIntegration
    //     //https://faq.clickadu.com/en/articles/6234995-api-integration-guide
    //     //https://faq.clickadu.com/en/articles/6234861-api-documentation
    //     //https://faq.clickadu.com/en/articles/6234931-onclick-campaign-creation-example

    //     // Prepare data
    //     //$campaign = Campaign::first();
    //     //$campaign->id;

    //     $data = [
    //         'CampaignForm' => [
    //             'name' => 'API Campaign',
    //             'link' => 'https://styleplusehub.com/?utm_source=ads2&utm_medium=cpc&utm_campaign=nishant_demoEvaDev',
    //             'pricing' => 'cpm',
    //             'groupId' => 1
    //         ],
    //         'CampaignSettingsForm' => [
    //             'frequency' => 4,
    //             'cost' => 0.10,
    //             'country' => [
    //                 'IN' => 0.10 // Static country data for India
    //             ],
    //             'cityListType' => 'include',
    //             'city' => [1261481], // Static city ID
    //             'region' => [],
    //             'device' => [1, 2], // Static device types
    //             'os' => [],
    //             'osVersions' => [],
    //             'browser' => [],
    //             'browserLang' => [],
    //             'connectionType' => 1,
    //             'isp' => [],
    //             'budgetLimitTotal' => 1000, // Static total budget
    //             'budgetLimitDaily' => 100,  // Static daily budget
    //             'clicksLimitTotal' => 1000, // Static total clicks limit
    //             'clicksLimitDaily' => 100,  // Static daily clicks limit
    //             'audiencesType' => '',
    //             'audiences' => [],
    //             'autoRules' => [],
    //             'autoLaunch' => true,
    //             'trafficQuality' => 'standard',
    //             'trafficCategories' => ['mainstream', 'adult'] // Traffic categories
    //         ],
    //         'CampaignScheduleForm' => [
    //             'timezone' => 'user',
    //             'utcZone' => 3,
    //             'day' => [],
    //             'startDate' => '2024-09-18', // Static start date
    //             'endDate' => '2024-09-20'   // Static end date
    //         ]
    //     ];

    //     // API Key
    //     $apiKey = env('API_KEY');

    //     // Send POST request to the API with API key in headers
    //     $response = Http::withHeaders([
    //         'accept' => 'application/json',
    //         'X-Api-Key' => $apiKey,
    //         'Content-Type' => 'application/json'
    //     ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/create-popunder', $data);

    //     try {
    //         dd($responseData = $response->json());
    //         //code...
    //     } catch (\Exception $e) {
    //         dd($e->getMessage());
    //         //throw $th;
    //     }
    //     if ($response->successful()) {
    //         echo "pass";
    //         // Decode response
    //         $responseData = $response->json();
    //         dd($responseData);

    //         // Store the response data in the database
    //         //$campaign = new Campaign();
    //         //$campaign->fill($data); // Ensure Campaign model has fillable properties
    //         //$campaign->api_response = json_encode($responseData);
    //         //$campaign->save();

    //         //return redirect()->back()->with('success', 'Campaign created successfully!');
    //     } else {
    //         echo "failed";
    //         //return redirect()->back()->with('error', 'Failed to create campaign. Please try again.');
    //     }
    // }
}
