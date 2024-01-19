@extends('layouts.mainlayout')

@section('title', 'Users Detail')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">User Detail</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">list of new registered user</li>
        </ol>

        <div class="mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
        </div>

        <div class="my-5">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" readonly value="{{ $user->username }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" class="form-control" readonly value="{{ $user->phone }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Addres</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control">{{ $user->address }}</textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label>
                <input type="text" class="form-control" readonly value="{{ $user->status }}">
            </div>
            <div class="mt-3 d-flex justify-content-end">
                @if ($user->status == 'inactive')
                    <a href="/user-approve/{{ $user->slug }}" class="btn btn-primary me-3">Approve</a>
                @endif
            </div>
        </div>

    </div>

@endsection
