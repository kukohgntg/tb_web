@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Book List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">you can add book here</li>
        </ol>

        <div class="mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Rent logs
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($books as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->book_code }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @foreach ($item->categories as $category)
                                        {{ $category->name }}<br>
                                    @endforeach
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="/book-edit/{{ $item->slug }}">edit</a>
                                    <a href="/book-delete/{{ $item->slug }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-3 d-flex justify-content-end">
            <a href="book-add" class="btn btn-primary me-3">Add Data</a>
            <a href="book-deleted" class="btn btn-secondary">Deleted Data</a>
        </div>
    </div>
@endsection
