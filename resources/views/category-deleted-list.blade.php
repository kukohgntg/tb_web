@extends('layouts.mainlayout')

@section('title', 'Deleted Category')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Deleted Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">list of deleted category</li>
        </ol>

        <div class="mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Deleted Categories
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($deletedCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="category-restore/{{ $item->slug }}">restore</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-end">
            <a href="categories" class="btn btn-primary me-3">Back</a>
        </div>
    </div>

@endsection
