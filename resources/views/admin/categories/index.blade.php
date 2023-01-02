@extends('adminlte::page')

@section('title', 'Listagem Categorias | Laravel Repositories')

@section('content_header')
    <h1>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Adicionar</a>
        Categorias
    </h1>
    
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Dashboard</a></li>
        <li><a href="/admin/categories" class="active">Categorias</a></li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('categories.search') }}" class="form form-inline" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="Título" class="form-control" value="{{ $data['title'] ?? '' }}"/>
                    <input type="text" name="url" placeholder="URL" class="form-control" value="{{ $data['url'] ?? '' }}"/>
                    <input type="text" name="description" placeholder="Descrição" class="form-control" value="{{ $data['description'] ?? '' }}"/>
                    <button type="submit" class="btn btn-info">Pesquisar</button>
                </form>
                @if (isset($data))
                    <a href="{{ route('categories.index') }}">(x) Limpar filtros</a>
                @endif
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                @include('admin.includes.alerts')
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Url</th>
                            <th width="150px" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td scope="row"><?php echo $category->id ?></td>
                                <td scope="row"><?php echo $category->title ?></td>
                                <td scope="row"><?php echo $category->url ?></td>
                                <td scope="row">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="badge bg-yellow">
                                        Editar
                                    </a>
                                    <a href="{{ route('categories.show', $category->id) }}" class="badge bg-blue">
                                        Detalhes
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if (isset($data))
                    {!! $categories->appends($data)->links() !!}
                @else
                    {!! $categories->links() !!}
                @endif
                
            </div>
        </div>
    </div>
@stop