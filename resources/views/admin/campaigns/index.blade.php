@extends('admin.app')
@section('content')
<style>
    .campaign-status-note {
        display: flex;
        align-items: center;
        background-color: #f0f8ff;
        /* Light blue background */
        border: 1px solid #d1e7ff;
        /* Slightly darker blue border */
        padding: 10px 15px;
        border-radius: 8px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #0056b3;
        /* Darker blue text */
        margin: 20px 0;
        /* Spacing around the note */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Light shadow */
    }

    .campaign-status-note i {
        margin-right: 8px;
        /* Space between icon and text */
        color: #007bff;
        /* Icon color */
        font-size: 18px;
    }
</style>
<!-- DataTables CSS -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->

<!-- DataTables JS -->
<!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
<div style="margin-bottom: 10px;">
    <a href="{{ route('campaign.create') }}" class="btn btn-primary">Create Campaign</a>
    <div class="campaign-status-note">
        <i class="fas fa-info-circle"></i> <!-- Optional Icon -->
        <span>Your campaign status is updated automatically every 10 minutes to provide the latest information.</span>
    </div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Format</th>
            <th>Daily limit</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $campaign)
        <tr>
            <td>{{ $campaign->id }}</td>
            <td>{{ $campaign->campaign_name }}</td>
            <td>{{ $campaign->campaign_type }}</td>
            <td>{{ $campaign->daily_limit }}</td>
            <td>{{ $campaign->end_date }}</td>
            <td>{{ $campaign->current_status == '' ? $campaign->campaign_status : $campaign->current_status }}</td>
            <td>
                <a href="{{ route('campaign.edit', $campaign->id) }}" class="btn btn-warning">Edit</a>

                @if($campaign->campaign_status == 'stopped by user')
                <!-- Display Start Button -->
                <form action="{{ route('campaign.start', $campaign->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Start</button>
                </form>
                @else
                <!-- Display Stop Button -->
                <form action="{{ route('campaign.stop', $campaign->id) }}" method="POST" style="display:inline;" onsubmit="return confirmStop();">
                    @csrf
                    <button type="submit" class="btn btn-danger">Stop</button>
                </form>
                @endif

                <form action="{{ route('campaign.destroy', $campaign->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });

    function confirmStop() {
        return confirm('Are you sure you want to stop this campaign?');
    }

    function confirmDelete() {
        return confirm('Are you sure you want to delete this campaign?');
    }
</script>

@endsection