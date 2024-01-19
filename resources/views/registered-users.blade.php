@extends('layouts.mainlayout')

@section('title', 'Registered Users')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">New Registered User List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">list of new registered user</li>
        </ol>

        <div class="mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                User List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($registeredUsers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->username }}</td>
                                <td>
                                    @if ($item->phone)
                                        {{ $item->phone }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <a href="/user-detail/{{ $item->slug }}">detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-end">
            <a href="/users" class="btn btn-secondary me-3">Back</a>
        </div>
    </div>

@endsection
