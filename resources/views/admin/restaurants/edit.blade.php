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
                <form action="{{ route('admin.restaurants.update', ['restaurant' => $restaurant->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="label-form">Nome Ristorante</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Nome Ristorante" value="{{ old('name', $restaurant->name) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="col-12 mb-3">
                            <label class="label-form">Indirizzo Ristorante</label>
                            <input type="text" name="address" id="" class="form-control form-control-sm" placeholder="Indirizzo Ristorante" value="{{ old('address', $restaurant->address) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="col-12 mb-3">
                            <label class="label-form">Numero Ristorante</label>
                            <input type="tel" name="phone" id="" class="form-control form-control-sm" placeholder="Numero Ristorante" value="{{ old('phone', $restaurant->phone) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            @if($restaurant->image != null)
                                <img class="restaurant-image" src="{{ asset('./storage/'.$restaurant->image) }}" alt="{{ $restaurant->name }}">
                            @else
                                <img class="restaurant-image" src="{{ asset('img/test-ristorante.jpg') }}" alt="{{ $restaurant->name }}">
                            @endif
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            <label for="" class="control-label">Immagine Ristorante</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <button type="submit" class="btn btn-success">Salva</button>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection