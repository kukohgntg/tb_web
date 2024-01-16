@extends('layouts.mainlayout')

@section('title', 'Edit Category')

@section('content')

        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">edit current category</li>
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

            <form action="/category-edit/{{ $category->slug }}" method="post">
                @csrf
                @method('put')
                <div class="">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}"
                        placeholder="Category Name">
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>

@endsection
