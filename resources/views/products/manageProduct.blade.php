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
                      
                    
                    <div class="card-footer text-right">
                        <a href="{{ url('tukau/administrator/product/create') }}" class="btn btn-primary">Add New</a>
                    </div>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{session('success')}}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category_id</th>
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
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->weight}}</td>
                                    <td>{{$product->image}}</td>
                                    <td>{{$product->description}}</td>
                                    <td width="20%">
                                        <a class="btn btn-primary  btn-sm" href="/tukau/administrator/product/{{$product->id}}/edit/" role="button">Edit</a>
                                        <a class="btn btn-danger  btn-sm" method="delete" href="/tukau/administrator/product/{{$product->id}}/delete" role="button">Delete</a>
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
@endsection