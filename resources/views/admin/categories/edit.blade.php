@extends('adminlte::page')

@section('title', 'Cadastrar Categoria | Laravel Repositories')

@section('content_header')
    <h1>
       Editar Categoria: {{ $category->title }}
    </h1>
    
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Categoria</h3>
                </div>
                <div class="card-body">
                    @include('admin.includes.alerts')
                    <form method="POST" action="{{ route('categories.update', $category->id) }}">
                        <input type="hidden" name="_method" value="PUT" />
                        @include('admin.categories._partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop