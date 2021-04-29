@extends('layouts/main')

@section('title', 'Profil Saya')

@section('container')

<div class="content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h4 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Profil Saya
                    </h4>
                </div>
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @endif

                    <form method="POST" action="/profile/update" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">Nama</label>

                                    <div class="col-md-9">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $user->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>

                                    <div class="col-md-9">
                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $user->email }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-md-3 col-form-label text-md-right">No HP</label>

                                    <div class="col-md-9">
                                        <input id="no_hp" type="text"
                                            class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                            value="{{ $user->no_hp }}" required autocomplete="no_hp">

                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-3 col-form-label text-md-right">Alamat</label>

                                    <div class="col-md-9">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ $user->address }}" required autocomplete="address">

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div align="center" class="form-group">
                                    <img style="margin-bottom:20px; width:160px; height:160px;" src="{{$user->image}}">

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