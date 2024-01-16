@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Are you sure to delete {{ $category->name }}?</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">if you delete this ......</li>
        </ol>
        <div class="mt-3 d-flex justify-content-end">
            <a href="/category-destroy/{{ $category->slug }}" class="btn btn-danger me-3">Sure</a>
            <a href="/categories" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
@endsection
