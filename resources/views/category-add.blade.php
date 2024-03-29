@extends('layouts.mainlayout')

@section('title', 'Add Category')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Add New Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">you can't add listed category</li>
        </ol>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="category-add" method="post">
            @csrf
            <div class="">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection
