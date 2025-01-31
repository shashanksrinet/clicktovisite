@extends('admin.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
<style>
    .radio-buttons-row {
        display: flex;
        justify-content: space-between;
        width: 300px;
    }
</style>
<form action="{{ route('campaign.update', $campaign->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="campaign_name">Campaign Name</label>
        <input type="text" class="form-control" id="campaign_name" name="campaign_name" value="{{ old('campaign_name', $campaign->campaign_name) }}" required>
    </div>
    <!-- <div class="radio-buttons-row">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campaign_type" id="clicks" value="clicks" {{ $campaign->campaign_type == 'clicks' ? 'checked' : '' }} onchange="updateText(this)">
                <label class="form-check-label" for="clicks">
                    Clicks
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campaign_type" id="visite" value="visite" {{ $campaign->campaign_type == 'visite' ? 'checked' : '' }} onchange="updateText(this)">
                <label class="form-check-label" for="visite">
                    Website Visite
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campaign_type" id="youtube_views" value="youtube_views" {{ $campaign->campaign_type == 'youtube_views' ? 'checked' : '' }} onchange="updateText(this)">
                <label class="form-check-label" for="youtube_views">
                    Video Views
                </label>
            </div>
        </div> -->
    <div id="rate" style="color: red;"></div>
    <div class="form-group">
        <label for="target_url">Target URL: *</label>
        <input type="text" class="form-control" id="target_url" name="target_url" value="{{ old('target_url', $campaign->target_url) }}">
    </div>

    <div class="form-group">
        <label for="country">Country:</label>
        <select class="form-control" name="country">
            <option value="IN" {{ $campaign->country == 'IN' ? 'selected' : '' }}>India</option>
        </select>
        <input type="hidden" name="country_name" value="India" />
    </div>

    <!-- <div class="form-group">
            <label for="city">City:</label>
            <select id="city-select" name="city[]" multiple="multiple" style="width: 100%;">
                
            </select>
        </div> -->

    <!-- Hidden input to store city IDs -->
    <!-- <input type="hidden" id="city-ids" name="city_code" value="{{ old('city_code', $campaign->city_code) }}" /> -->

    <div id="loading-icon" class="spinner"></div>
    <div class="form-group">
        <label for="device">Device:</label>
        <select class="form-control" name="device">
            <option value="1" {{ $campaign->device == '1' ? 'selected' : '' }}>Desktop</option>
            <option value="2" {{ $campaign->device == '2' ? 'selected' : '' }}>Mobile</option>
            <option value="1,2" {{ $campaign->device == '1,2' ? 'selected' : '' }}>Both</option>
        </select>
    </div>

    <div class="form-group">
        <label for="daily_limit" id="limit-text">Daily limit:</label>
        <input type="number" step="1" class="form-control" id="daily_limit" name="daily_limit" min="100" max="10000" value="{{ old('daily_limit', $campaign->daily_limit) }}">
    </div>

    <div class="form-group">
        <label for="end_date">Campaign End Date:</label>
        <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $campaign->end_date) }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);

    flatpickr("#end_date", {
        dateFormat: "Y-m-d",
        minDate: tomorrow.toISOString().split('T')[0], // Set to today or any other date you prefer
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#city-select').select2();
    });
</script>
@endsection