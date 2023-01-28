@extends('adminlte::page')

@section('title', 'Editar Produto | Laravel Repositories')

@section('content_header')
    <h1>
        Editar Produto
    </h1>
    
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Dashboard</a></li>
        <li><a href="/admin/products" class="active">Produtos</a></li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
               #form
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                @include('admin.includes.alerts')
                
                <form method="POST" class="form" action="{{ route('products.update', $product->id) }}">
                    @method('PUT')

                    @include('admin.products._partials.form')
                </form>
            </div>
        </div>
    </div>
@stop