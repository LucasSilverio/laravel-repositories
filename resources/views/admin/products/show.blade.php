@extends('adminlte::page')

@section('title', 'Cadastrar Categoria | Laravel Repositories')

@section('content_header')
    <h1>
       Detalhes do Produto
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Dashboard</a></li>
        <li><a href="/admin/categories" >Categorias</a></li>
        <li><a href="" class="active">Detalhes</a></li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $product->name }}</h3>
                </div>
                <div class="card-body">
                   <p><strong>ID: </strong>{{ $product->id }}</p>
                   <p><strong>Título: </strong>{{ $product->name }}</p>
                   <p><strong>Categoria: </strong>{{ $product->category->title }}
                   <p><strong>Url: </strong>{{ $product->url }}</p>
                   <p><strong>Preço: </strong>{{ $product->price }}</p>
                   <p><strong>Descrição: </strong>{{ $product->description }}</p>
                   
                   <hr>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Deletar o produto {{ $product->name }}</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@stop