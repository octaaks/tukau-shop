@extends('layouts/admin')

@section('title', 'Edit Produk')

@section('container')

<div class="content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Pengguna
                    </h3>
                </div>
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @endif

                    <form method="POST" action="/tukau/administrator/product/{{$product->id}}/update"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-9">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $product->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="category_id"
                                        class="col-md-3 col-form-label text-md-right">Category</label>

                                    <div class="col-md-9">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <!-- <option selected value="{{ $product->category_id }}">
                                                {{$product->Categories()->first()->name}}</option> -->
                                            <option value="1">Sayuran</option>
                                            <option value="2">Ikan dan ternak</option>
                                            <option value="3">Buah-buahan</option>
                                            <option value="4">Bumbu dan rempah</option>
                                            <option value="5">Beras dan biji-bijian</option>
                                            <option value="6">Makanan beku</option>
                                            <option value="7">Siap makan</option>
                                            <option value="8">Groceries</option>
                                            <option value="9">Siap masak</option>
                                        </select>
                                        @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-3 col-form-label text-md-right">Price</label>

                                    <div class="col-md-9">
                                        <input id="price" type="text"
                                            class="form-control @error('price') is-invalid @enderror" name="price"
                                            value="{{ $product->price }}" required autocomplete="price">

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="weight" class="col-md-3 col-form-label text-md-right">Weight</label>

                                    <div class="col-md-9">
                                        <input id="weight" type="text"
                                            class="form-control @error('weight') is-invalid @enderror" name="weight"
                                            value="{{ $product->weight }}" required autocomplete="weight">

                                        @error('weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description"
                                        class="col-md-3 col-form-label text-md-right">Description</label>

                                    <div class="col-md-9">
                                        <input id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror"
                                            name="description" value="{{ $product->description }}" required autocomplete="description">

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div align="center" class="form-group">
                                <img style="margin-bottom:20px; width:160px; height:160px;" src="{{$product->image}}">

                                <input value="" type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div align="right" class="col">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <!-- ///////////////////////////////////////////// -->
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection