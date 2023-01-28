@extends('adminlte::page')

@section('title', 'Listagem Categorias | Laravel Repositories')

@section('content_header')
    <h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">Adicionar</a>
        Produtos
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Preço</th>
                            <th width="150px" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td scope="row"><?php echo $product->name ?></td>
                                <td scope="row"><?php echo $product->category->title ?></td>
                                <td scope="row">R$ <?php echo $product->price ?></td>
                                <td scope="row">
                                    <a href="{{ route('products.edit', $product->id) }}" class="badge bg-yellow">
                                        Editar
                                    </a>
                                    <a href="{{ route('products.show', $product->id) }}" class="badge bg-blue">
                                        Detalhes
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@stop