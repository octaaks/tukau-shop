@extends('layouts/admin')

@section('title', 'Kelola Product')

@section('container')

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adm/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adm/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adm/dist/css/adminlte.min.css') }}">
</head>

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="card-footer text-left">
                        <a href="{{ url('tukau/administrator/product/create') }}" class="btn btn-primary">Add New</a>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @endif

                    <table id="tb1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Price</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->Categories()->first()->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->weight}}</td>
                                <td><img style="width:64px; height:64px;" src="{{$product->image}}"></td>
                                <td>{{$product->description}}</td>
                                <td width="20%">
                                    <a class="btn btn-primary  btn-sm"
                                        href="/tukau/administrator/product/{{$product->id}}/edit/"
                                        role="button">Edit</a>
                                    <a class="btn btn-danger  btn-sm" method="delete"
                                        href="/tukau/administrator/product/{{$product->id}}/delete"
                                        role="button">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('adm/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<!-- <script src="{{ asset('adm/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<!-- DataTables  & Plugins -->
<script src="{{ asset('adm/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adm/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adm/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adm/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- <script src="{{ asset('daterangepicker/newpicker.js') }}"></script> -->
<!-- Page specific script -->
<script>
    jQuery(document).ready(function ($) {
        /* now you can use $ */

        $("#tb1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tb1_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection