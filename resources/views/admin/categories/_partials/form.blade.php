@csrf
<div class="form-group">
    <input type="text" name="title" value="{{ $category->title ?? old('title') }}" class="form-control" placeholder="Titulo" />
</div>
<div class="form-group">
    <input type="text" name="url" value="{{ $category->url ?? old('url') }}" class="form-control" placeholder="Url" />
</div>
<div class="form-group">
    <textarea name="description" class="form-control" cols='30' rows='10' placeholder="Descrição">{{ $category->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
</div>