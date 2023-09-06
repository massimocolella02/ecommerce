@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('products.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nameproduct" class="form-label">Categoria prodotto</label>
                <select class="form-select" name="category">
<<<<<<< HEAD
                    <option></option>
=======
                    <option selected></option>
>>>>>>> c691522ccd74bb98191ae4ba5dc32b36280ad42e
                    @foreach ($categories as $elem)
                    <option value="{{$elem->id}}">{{$elem->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
              <label for="nameproduct" class="form-label">Nome prodotto</label>
              <input type="text" class="form-control" id="nameproduct" name="name">
            </div>

            <div class="mb-3">
                <label for="brandproduct" class="form-label">Brand prodotto</label>
                <input type="text" class="form-control" id="brandproduct" name="brand">
            </div>

            <div class="mb-3">
                <label for="priceproduct" class="form-label">Prezzo prodotto</label>
                <input type="number" class="form-control" id="priceproduct" name="price">
            </div>

            <div class="mb-3">
                <label for="descriptionproduct" class="form-label">Descrizione prodotto</label>
                <input type="textarea" class="form-control" id="descriptionproduct" name="description">
            </div>

            <div class="mb-3">
                <label for="colorproduct" class="form-label">Colore prodotto</label>
                <input type="textarea" class="form-control" id="colorproduct" name="color">
            </div>
            
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection