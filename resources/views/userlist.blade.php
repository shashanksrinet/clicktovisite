@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


<main>
    <section class="pt-10 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-body p-5">

                        <!-- Search Form -->
                        <form method="GET" action="{{ url()->current() }}" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Search by name or campaign">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Current Fund</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $index => $user)
                                        <tr>
                                            <th>{{ $users->firstItem() + $index }}</th>
                                            <td>{{ $user->name ?? '-' }}</td>
                                            <td>{{ $user->email ?? '-' }}</td>
                                            <td>{{ $user->phone ?? '-' }}</td>
                                            <td>{{ $user->balance ?? '-' }}</td>
                                            <td>{{ $user->created_at ?? '-' }}</td>
                                            <td>{{ $user->updated_at ?? '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No results found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links -->
                        <div class="mt-3">
                            {{ $users->withQueryString()->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection