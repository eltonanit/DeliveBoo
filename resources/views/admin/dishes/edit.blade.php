@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                <h1>Modifica Piatto</h1>
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
                            <div class="mb-3">
                                <label for="course" class="form-label">Portata</label>
                                <select name="course" id="course" class="form-select" required>
                                    <option value="Appetizer" {{ $dish->course === 'Appetizer' ? 'selected' : '' }}>
                                        Antipasto</option>
                                    <option value="First" {{ $dish->course === 'First' ? 'selected' : '' }}>Primo</option>
                                    <option value="Second" {{ $dish->course === 'Second' ? 'selected' : '' }}>Secondo
                                    </option>
                                    <option value="Side" {{ $dish->course === 'Side' ? 'selected' : '' }}>Contorno
                                    </option>
                                    <option value="Dessert" {{ $dish->course === 'Dessert' ? 'selected' : '' }}>Dessert
                                    </option>
                                </select>
                            </div>
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <label class="label-form">Descrizione</label>
                            <textarea name="description" id="" class="form-control form-control-sm" placeholder="Descrizione">{{ old('description', $dish->description) }}</textarea>
                            {{-- @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <label class="label-form">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control form-control-sm"
                                placeholder="Nome Piatto" value="{{ old('price', $dish->price) }}">
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <!-- Id ristorante (momentaneo) -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <input
                                    class="form-control form-control-lg @error('restaurant_id') is-invalid @enderror"
                                    type="hidden" name="restaurant_id" id="restaurant_id"
                                    value="{{ old('restaurant_id', $dish->restaurant_id) }}" placeholder="Inserisci il prezzo">
                                {{-- @error('restaurant_id')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror --}}
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="mb-3">
                                <label class="form-label">Visibile</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="visible" id="visible_yes"
                                            value="1" {{ $dish->visible ? 'checked' : '' }}>
                                        <label class="form-check-label" for="visible_yes">Sì</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="visible" id="visible_no"
                                            value="0" {{ !$dish->visible ? 'checked' : '' }}>
                                        <label class="form-check-label" for="visible_no">No</label>
                                    </div>
                                </div>
                            </div>
                            {{-- @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="col-12 mb-3">
                            <div class="mb-3">
                                <label class="form-label">Vegetariano</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="vegetarian" id="vegetarian_yes"
                                            value="1" {{ $dish->vegetarian ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vegetarian_yes">Sì</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="vegetarian" id="vegetarian_no"
                                            value="0" {{ !$dish->vegetarian ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vegetarian_no">No</label>
                                    </div>
                                </div>
                            </div>
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
