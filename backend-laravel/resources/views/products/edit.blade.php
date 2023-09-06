@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nameproduct" class="form-label">Categoria prodotto</label>
            <select class="form-select" name="category">
                @foreach ($categories as $elem)
                <option value="{{$elem->id}}"
                    @foreach ($pivot as $item)
                        @if ($item->category_id == $elem->id)
                            selected
                        @endif
                    @endforeach
                    >{{$elem->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
          <label for="nameproduct" class="form-label">Nome prodotto</label>
          <input type="text" class="form-control" id="nameproduct" name="name" value="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label for="brandproduct" class="form-label">Brand prodotto</label>
            <input type="text" class="form-control" id="brandproduct" name="brand" value="{{ $product->brand }}">
        </div>

        <div class="mb-3">
            <label for="priceproduct" class="form-label">Prezzo prodotto</label>
            <input type="number" class="form-control" id="priceproduct" name="price" value="{{ $product->price }}">
        </div>

        <div class="mb-3">
            <label for="descriptionproduct" class="form-label">Descrizione prodotto</label>
            <input type="textarea" class="form-control" id="descriptionproduct" name="description" value="{{ $product->description }}">
        </div>

        <div class="mb-3">
            <label for="colorproduct" class="form-label">Colore prodotto</label>
            <input type="textarea" class="form-control" id="colorproduct" name="color" value="{{ $product->color }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
@endsection