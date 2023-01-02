@extends('adminlte::page')

@section('title', 'Cadastrar Categoria | Laravel Repositories')

@section('content_header')
    <h1>
       Detalhes Categoria: {{ $category->title }}
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
                    <h3 class="card-title">Categoria</h3>
                </div>
                <div class="card-body">
                   <p><strong>ID: </strong>{{ $category->id }}</p>
                   <p><strong>Título: </strong>{{ $category->title }}</p>
                   <p><strong>Url: </strong>{{ $category->url }}</p>
                   <p><strong>Descrição: </strong>{{ $category->description }}</p>
                   <hr>
                    <form action="{{ route('categories.destroy', $category->id) }}" class="form" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@stop