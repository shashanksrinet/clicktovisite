@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<style>
    .custom-pagination nav {
        display: inline-block;
    }

    .custom-pagination .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        border-radius: 5px;
    }

    .custom-pagination .page-item {
        margin: 0 3px;
    }

    .custom-pagination .page-link {
        padding: 8px 12px;
        color: #007bff;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: white;
        text-decoration: none;
        transition: 0.3s ease-in-out;
    }

    .custom-pagination .page-link:hover {
        background-color: #f1f1f1;
        color: #0056b3;
    }

    .custom-pagination .page-item.active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .custom-pagination .page-item.disabled .page-link {
        color: #999;
        pointer-events: none;
        background-color: #eee;
    }
    .rounded-l-md{
        display: none !important;
    }
    .rounded-r-md{
        display: none !important;
    }
</style>


<main>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow rounded">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">User List</h5>
                            <form method="GET" action="{{ url()->current() }}" class="d-flex">
                                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control form-control-sm me-2" placeholder="Search name or email">
                                <button class="btn btn-light btn-sm" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0 text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Balance</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $index => $user)
                                            <tr>
                                                <td>{{ $users->firstItem() + $index }}</td> <!-- 0, 1, 2 -->
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone ?? '-' }}</td>
                                                <td>{{ number_format($user->balance, 2) }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->updated_at }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7">No data found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="custom-pagination d-flex justify-content-center mt-4">
                            {{ $users->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection