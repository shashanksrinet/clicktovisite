@extends('admin.app')
@section('content')

<style>
    /* Custom CSS to display radio buttons in one row */
    .radio-buttons-row {
        display: flex;
        justify-content: space-between;
        /* width: 300px; */
        /* Adjust width as needed */
    }

    #end_date {
        background-color: white;
    }

    .radio-buttons-row {
        display: flex;
        justify-content: space-between;
    }

    .campaign-option {
        border: 2px solid #007bff;
        /* Blue border color */
        border-radius: 5px;
        /* Rounded corners */
        padding: 10px;
        /* Space inside the border */
        margin-right: 10px;
        /* Space between options */
        background-color: #f8f9fa;
        /* Light background color */
        text-align: center;
        /* Center align text */
        width: 100%;
        /* Ensure full width in flex container */
        box-sizing: border-box;
        /* Include padding and border in element's total width and height */
    }

    .campaign-option:last-child {
        margin-right: 0;
        /* Remove margin from the last option */
    }

    .form-check-input {
        margin-right: 10px;
        /* Space between radio button and label */
    }
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Campaign Details</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('campaign.store') }}" method="POST" id="createCampaignForm">
                        @csrf

                        <div class="form-group">
                            <label for="campaign_name">Campaign Name *</label>
                            <input type="text" class="form-control" id="campaign_name" name="campaign_name" required>
                        </div>

                        <div class="form-group">
                            <label for="campaign_type">Campaign Type *</label>
                            <div class="radio-buttons-row d-flex justify-content-between">
                                <div class="form-check campaign-option">
                                    <input class="form-check-input" type="radio" name="campaign_type" id="clicks" value="clicks" onchange="updateText(this)">
                                    <label class="form-check-label" for="clicks">Clicks</label>
                                </div>
                                <div class="form-check campaign-option">
                                    <input class="form-check-input" type="radio" name="campaign_type" id="visite" value="visite" onchange="updateText(this)">
                                    <label class="form-check-label" for="visite">Website Visite</label>
                                </div>
                                <div class="form-check campaign-option">
                                    <input class="form-check-input" type="radio" name="campaign_type" id="youtube_views" value="youtube_views" onchange="updateText(this)">
                                    <label class="form-check-label" for="youtube_views">Video Views</label>
                                </div>
                            </div>
                            @error('campaign_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div id="rate" style="color: red;"></div>
                        </div>

                        <div class="form-group">
                            <label for="target_url">Target URL *:</label>
                            <input type="text" class="form-control" id="target_url" name="target_url" required>
                            @error('target_url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="country">Country:</label>
                            <select class="form-control" name="country">
                                <option value="IN" selected>India</option>
                            </select>
                            <input type="hidden" name="country_name" value="India" />
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <select id="city-select" name="city[]" multiple="multiple" style="width: 100%;"></select>
                        </div>

                        <input type="hidden" id="city-ids" name="city_code" />

                        <div class="form-group">
                            <label for="device">Device:</label>
                            <select class="form-control" name="device">
                                <option value="1">Desktop</option>
                                <option value="2">Mobile</option>
                                <option value="1,2">Both</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="daily_limit" id="limit-text">Daily limit *:</label>
                            <input type="number" step="1" class="form-control" id="daily_limit" name="daily_limit" min="100" max="10000" required>
                            @error('daily_limit')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="end_date">Campaign End Date *:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                            @error('end_date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Add Fund Modal -->
<div class="modal fade" id="addFundModal" tabindex="-1" role="dialog" aria-labelledby="addFundModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFundModalLabel">Low Balance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Looks like your balance is currently zero. To create a campaign, please add some funds to your account. Thank you!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="location.href='/add-fund';">Add Funds</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#createCampaignForm').on('submit', function(event) {
        const advertiserBalance = <?php echo $userBalance ?>;
        if (advertiserBalance === 0) {
            event.preventDefault(); // Prevent form submission
            $('#addFundModal').modal('show'); // Show the modal
        }
    });

    function updateText(radio) {
        const limitText = document.getElementById('limit-text');
        const limitTextRate = document.getElementById('rate');
        switch (radio.value) {
            case 'clicks':
                limitText.innerText = 'Daily click limit:';
                limitTextRate.innerText = 'Cost per click: ₹0.10';
                break;
            case 'visite':
                limitText.innerText = 'Daily visite limit:';
                limitTextRate.innerText = 'Cost per website visite: ₹0.20';
                break;
            case 'youtube_views':
                limitText.innerText = 'Daily Video views limit:';
                limitTextRate.innerText = 'Cost per video views: ₹0.25';
                break;
            default:
                limitText.innerText = 'Daily click/visite/views limit:';
                limitTextRate.innerText = '';
        }
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);

    flatpickr("#end_date", {
        dateFormat: "Y-m-d",
        minDate: tomorrow.toISOString().split('T')[0], // Set to today or any other date you prefer
    });
</script>
<script>
    $(document).ready(function() {
        $('#city-select').select2({
            ajax: {
                url: '/search-cities',
                data: function(params) {
                    return {
                        search: params.term, // The search term from the Select2 input
                        type: 'GET'
                    };
                },
                processResults: function(data) {
                    // Transform the response into the format expected by Select2
                    return {
                        results: $.map(data, function(city) {
                            return {
                                id: city.id,
                                text: city.name
                            };
                        })
                    };
                },
                cache: true,
                beforeSend: function() {
                    // Show loading spinner (you can adjust this as needed)
                    $('#city-select').siblings('.select2-container').find('.select2-selection').addClass('loading');
                },
                complete: function() {
                    // Hide loading spinner (you can adjust this as needed)
                    $('#city-select').siblings('.select2-container').find('.select2-selection').removeClass('loading');
                },
                error: function(xhr) {
                    console.log("An error occurred: " + xhr.status + " " + xhr.statusText);
                }
            }
        });
    });

    // Update hidden input field with selected city IDs
    $('#city-select').on('change', function() {
        var selectedIds = $(this).val(); // Get the selected city IDs
        $('#city-ids').val(JSON.stringify(selectedIds)); // Store as JSON string in hidden input
    });



    function searchCities(query) {
        if (query.length === 0) return; // Don't trigger API if the input is empty

        // Cancel previous API request if any
        if (this.ajaxRequest) {
            this.ajaxRequest.abort();
        }

        this.ajaxRequest = $.ajax({
            url: '/search-cities',
            type: 'GET',
            data: {
                query: query
            },
            beforeSend: function() {
                // Show loading spinner
                $('#city-select').select2('open').select2('close');
            },
            success: function(data) {
                // Clear old results
                $('#city-select').empty();

                // Add new results
                $.each(data, function(index, city) {
                    if ($('#city-select option[value="' + city.id + '"]').length === 0) {
                        let newOption = new Option(city.name, city.id, false, false);
                        $('#city-select').append(newOption).trigger('change');
                    }
                });

                // Open the dropdown to show the results
                $('#city-select').select2('open').select2('close');
            },
            complete: function() {
                // Hide loading spinner
                $('#city-select').select2('close');
            },
            error: function(xhr) {
                console.log("An error occurred: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

    $('.select2-search__field').on('keyup', function() {
        let query = $(this).val();
        searchCities(query);
    });
</script>
@endsection