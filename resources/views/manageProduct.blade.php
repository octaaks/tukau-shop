@extends('layouts/admin')

@section('title', 'Kelola Product')

@section('container')

<div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                    
                    </div>
                    <div class="card-body">
                      
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                    @forelse ($products as $product)
                                    <tr>    
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td>{{ $product->parent_id }}</td>
                                        <td>
                                            <a>edit</a>
                                            
                                         
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">No records found</td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('tukau/administrator/product/create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection