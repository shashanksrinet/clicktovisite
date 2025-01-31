@extends('admin.app')
@section('content')
<div class="">
    <h2 class="text-center">Campaign Report</h2>

    <form method="GET" action="{{ route('dashboard.index') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="date" name="start_date" class="form-control" value="{{ $startDate }}">
            </div>
            <div class="col-md-4">
                <input type="date" name="end_date" class="form-control" value="{{ $endDate }}">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <table id="campaign-report" class="display">
        <thead>
            <tr>
                <th>Date</th>
                <th>Campaign Name</th>
                <th>Impressions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($statistics as $statistic)
            <tr>
                <td>{{ $statistic->date }}</td>
                <td>{{ $statistic->campaign->campaign_name }}</td>
                <td>{{ $statistic->impressions }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#campaign-report').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "lengthChange": false
        });
    });
</script>
@endsection