@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
<style>
    .card-count {
        font-size: 30px;
    }
</style>
<!-- <div id="layoutSidenav_content"> -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">welcome to rental buku</li>
        </ol>
        <div class="row">

            <div class="col-xl-4 col-md-4">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Books</div>
                    <div class="card-count">{{ $book_count }}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Categorys</div>
                    <div class="card-count">{{ $category_count }}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Users</div>
                    <div class="card-count">{{ $user_count }}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
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
                            <th>User</th>
                            <th>Book Title</th>
                            <th>Rent Date</th>
                            <th>Return Date</th>
                            <th>Actual Return Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Book Title</th>
                            <th>Rent Date</th>
                            <th>Return Date</th>
                            <th>Actual Return Date</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                        </tr>
                        <!-- <td colspan="7" style="text-align: center">No data</td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<!-- </div> -->
@endsection