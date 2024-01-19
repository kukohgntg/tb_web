@extends('layouts.mainlayout')

@section('title', 'Banned Users')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Banned Users List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">list of user</li>
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
                        @foreach ($bannedUser as $item)
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
                                    <a href="/user-restore/{{ $item->slug }}">restore</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-end">
            <a href="/registered-users" class="btn btn-primary me-3">Aprove User</a>
            <a href="/user-banned" class="btn btn-secondary">Banned User</a>
        </div>
    </div>

@endsection
