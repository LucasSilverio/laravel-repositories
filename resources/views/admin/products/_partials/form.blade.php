@csrf
<div class="form-group">
    <input type="text" class="form-control" value="{{ $product->name ?? old('name') }}" name="name" placeholder="Nome" />
</div>
<div class="form-group">
    <input type="text" class="form-control" value="{{ $product->url ?? old('url') }}" name="url" placeholder="URL" />
</div>
<div class="form-group">
    <input type="text" class="form-control" value="{{ $product->price ?? old('price') }}" name="price" placeholder="Preço" />
</div>
<div class="form-group">
    <select name="category_id" class="form-control">
        <option value="" disabled selected>Categoria</option>
        @foreach ($categories as $category)
            <option value=" {{ $category->id }} "
                @if (isset($product->category_id) && $product->category_id == $category->id ) selected @endif
            >{{ $category->title }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Descrição">{{ $product->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>