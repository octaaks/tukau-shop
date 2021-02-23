@extends('layouts/admin')

@section('container')


@php
    $formTitle = !empty($product) ? 'update' : 'New'
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border=bottom">
                    <h2> {{  $formTitle }} Form Product </h2>
                </div>
                <div class="card-body">
                @include('partials.flash', ['$errors' => $errors])
                    
                    @if (!empty($product))
                        {!! Form::model($product, ['url' => ['tukau/administrator/product/create', $product->id], 'method' => 'PUT' ]) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'tukau/administrator/product/create']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Product name']) !!}
                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection