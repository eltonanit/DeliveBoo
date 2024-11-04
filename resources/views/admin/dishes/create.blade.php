@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Aggiungi Nuovo Piatto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Nome Piatto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="name"><i class="bi bi-pencil-fill me-2"></i> Nome
                                            Piatto</label>
                                        <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            type="text" name="name" id="name" value="{{ old('name') }}"
                                            placeholder="Inserisci il nome del piatto">
                                        {{-- @error('name')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror --}}
                                    </div>
                                </div>



                                <!-- Portata -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="course"><i class="bi bi-card-list me-2"></i>
                                            Portata</label>
                                        <select name="course" id="course"
                                            class="form-select @error('course') is-invalid @enderror" required>
                                            <option value="" disabled selected>Seleziona la portata</option>
                                            <option value="Appetizer">Antipasto</option>
                                            <option value="First">Primo</option>
                                            <option value="Second">Secondo</option>
                                            <option value="Side">Contorno</option>
                                            <option value="Dessert">Dessert</option>
                                        </select>
                                        {{-- @error('course')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <!-- Descrizione -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="description"><i
                                                class="bi bi-chat-square-text me-2"></i> Descrizione</label>
                                        <textarea name="description" id="description"
                                            class="form-control form-control-sm @error('description') is-invalid @enderror" placeholder="Descrizione">{{ old('description') }}</textarea>
                                        {{-- @error('description')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <!-- Prezzo -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="price"><i class="bi bi-currency-euro me-2"></i>
                                            Prezzo</label>
                                        <input class="form-control form-control-lg @error('price') is-invalid @enderror"
                                            type="text" name="price" id="price" value="{{ old('price') }}"
                                            placeholder="Inserisci il prezzo">
                                        {{-- @error('price')
                                            <div class="text-danger"> {{ $message }} </div>
                                            @enderror --}}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="restaurant_id"><i
                                                class="bi bi-currency-euro me-2"></i>
                                            id</label>
                                        <input
                                            class="form-control form-control-lg @error('restaurant_id') is-invalid @enderror"
                                            type="text" name="restaurant_id" id="restaurant_id"
                                            value="{{ old('restaurant_id') }}" placeholder="Inserisci il prezzo">
                                        {{-- @error('restaurant_id')
                                                <div class="text-danger"> {{ $message }} </div>
                                            @enderror --}}
                                    </div>
                                </div>

                                <!-- Visibile -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label"><i class="bi bi-eye me-2"></i> Visibile</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="visible"
                                                    id="visible_yes" value="1" checked>
                                                <label class="form-check-label" for="visible_yes">Sì</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="visible"
                                                    id="visible_no" value="0">
                                                <label class="form-check-label" for="visible_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vegetariano -->
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label"><i class="bi bi-leaf me-2"></i> Vegetariano</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="vegetarian"
                                                    id="vegetarian_yes" value="1">
                                                <label class="form-check-label" for="vegetarian_yes">Sì</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="vegetarian"
                                                    id="vegetarian_no" value="0" checked>
                                                <label class="form-check-label" for="vegetarian_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Pulsante di Invio -->
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-success px-5">
                                        <i class="bi bi-save me-2"></i> Salva
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
