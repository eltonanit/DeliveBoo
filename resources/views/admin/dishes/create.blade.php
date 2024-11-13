@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card w-md-75 border-primary">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <p class="m-0">Crea Nuovo Piatto</p>
                        <a href="{{ route('admin.restaurants.show', $restaurant->id) }}"
                            class="text-white link-underline link-underline-opacity-0">
                            <div id="my_back_button" class="d-flex align-items-center">
                                <i id="my_left_arrow" class="bi bi-arrow-left"></i>
                                <p class="m-0">Indietro</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.restaurants.dishes.store', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}"> --}}

                            <div class="row">
                                <!-- Nome Piatto -->
                                <div class="col-12 mb-3 col-md-6">
                                    <label class="form-label" for="name">
                                        <i class="bi bi-pencil-fill me-2"></i> Nome Piatto <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control form-control-md @error('name') is-invalid @enderror"
                                        type="text" name="name" id="name" value="{{ old('name') }}"
                                        placeholder="Inserisci il nome del piatto" required>
                                    @error('name')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <!-- Portata -->
                                <div class="col-12 mb-3 col-md-6">
                                    <label class="form-label" for="course">
                                        <i class="bi bi-card-list me-2"></i> Portata <span class="text-danger">*</span>
                                    </label>
                                    <select name="course" id="course"
                                        class="form-select @error('course') is-invalid @enderror" required>
                                        <option value="" disabled selected>Seleziona la portata</option>
                                        <option value="Appetizer">Antipasto</option>
                                        <option value="First">Primo</option>
                                        <option value="Second">Secondo</option>
                                        <option value="Side">Contorno</option>
                                        <option value="Dessert">Dessert</option>
                                    </select>
                                    @error('course')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <!-- Prezzo -->
                                <div class="col-12 mb-3 col-md-6">
                                    <label class="form-label" for="price">
                                        <i class="bi bi-currency-euro me-2"></i> Prezzo <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control form-control-md @error('price') is-invalid @enderror"
                                        type="text" name="price" id="price" value="{{ old('price') }}"
                                        placeholder="Inserisci il prezzo" required>
                                    @error('price')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3 col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-sm-flex justify-content-end">
                                            <!-- Visibile -->
                                            <div>
                                                <label class="form-label"><i class="bi bi-eye me-2"></i> Visibile</label>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="visible" id="visible_yes" value="1" checked required>
                                                        <label class="form-check-label" for="visible_yes">Sì</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="visible" id="visible_no" value="0" required>
                                                        <label class="form-check-label" for="visible_no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <!-- Vegetariano -->
                                            <div>
                                                <label class="form-label"><i class="bi bi-leaf me-2"></i> Vegetariano</label>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="vegetarian" id="vegetarian_yes" value="1" required>
                                                        <label class="form-check-label" for="vegetarian_yes">Sì</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="vegetarian" id="vegetarian_no" value="0" checked required>
                                                        <label class="form-check-label" for="vegetarian_no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Descrizione -->
                                <div class="col-12">
                                    <label class="form-label" for="description">
                                        <i class="bi bi-chat-square-text me-2"></i> Descrizione <span class="text-danger">*</span>
                                    </label>
                                    <textarea name="description" id="description" rows="5"
                                        class="form-control form-control-sm @error('description') is-invalid @enderror" placeholder="Descrizione" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <!-- Pulsante di Invio -->
                                <div class="col-12 d-flex justify-content-center mt-4 mb-3">
                                    <button type="submit" class="btn btn-outline-primary border-primary btn-lg shadow px-4">
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
