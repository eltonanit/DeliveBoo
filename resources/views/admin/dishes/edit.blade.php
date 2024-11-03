@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                <h1>Modifica Ristorante</h1>
            </div>
            <div class="col-12">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('admin.dishes.update', ['dish' => $dish->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="label-form">Nome Piatto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm"
                                placeholder="Nome Piatto" value="{{ old('name', $dish->name) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="col-12 mb-3">
                            <label class="label-form">Ingredienti Piatto</label>
                            <input type="text" name="address" id="" class="form-control form-control-sm"
                                placeholder="Ingredienti Piatto" value="{{ old('address', $dish->address) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="col-12 mb-3">
                            <label class="label-form">Portata</label>
                            <input type="tel" name="phone" id="" class="form-control form-control-sm"
                                placeholder="Portata" value="{{ old('phone', $dish->phone) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <label class="label-form">Descrizione</label>
                            <input type="tel" name="phone" id="" class="form-control form-control-sm"
                                placeholder="Descrizione" value="{{ old('phone', $dish->phone) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <label class="label-form">Prezzo</label>
                            <input type="tel" name="phone" id="" class="form-control form-control-sm"
                                placeholder="Prezzo" value="{{ old('phone', $dish->phone) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <label class="label-form">Visibile</label>
                            <input type="tel" name="phone" id="" class="form-control form-control-sm"
                                placeholder="Visibile" value="{{ old('phone', $dish->phone) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <label class="label-form">Vegetariano</label>
                            <input type="tel" name="phone" id="" class="form-control form-control-sm"
                                placeholder="Vegetariano" value="{{ old('phone', $dish->phone) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        {{-- <div class="col-12 mt-3 mb-3">
                            @if ($dish->image != null)
                                <img class="dish-image" src="{{ asset('./storage/' . $dish->image) }}"
                                    alt="{{ $dish->name }}">
                            @else
                                <img class="dish-image" src="{{ asset('img/test-Piatto.jpg') }}" alt="{{ $dish->name }}">
                            @endif
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            <label for="" class="control-label">Immagine Piatto</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm">
                        </div> --}}
                        <div class="col-12 mt-3 text-center">
                            <button type="submit" class="btn btn-success">Salva</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
