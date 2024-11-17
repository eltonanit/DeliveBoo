@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <div class="card w-md-75 border-primary">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <p class="m-0">Modifica Ristorante</p>
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                        <a href="{{ route('admin.restaurants.index', $restaurant->id) }}"
                            class="text-white link-underline link-underline-opacity-0">
                            <div id="my_back_button" class="d-flex align-items-center">
                                <i id="my_left_arrow" class="bi bi-arrow-left"></i>
                                <p class="m-0">Indietro</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.restaurants.update', ['restaurant' => $restaurant->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 mb-3 col-md-4">
                                    <label class="form-label" for="name">Nome Ristorante <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-md" type="text" name="name" id="name" @error('name') is-invalid @enderror
                                        placeholder="Nome Ristorante" value="{{ old('name', $restaurant->name) }}">
                                     @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3 col-md-4">
                                    <label class="form-label" for="address">Indirizzo <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-md" type="text" name="address" id="address" class="form-control form-control-md" 
                                    placeholder="Indirizzo Ristorante" value="{{ old('address', $restaurant->address) }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3 col-md-4">
                                    <label class="form-label" for="phone">Numero Ristorante <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" id="phone" class="form-control form-control-md" placeholder="Numero Ristorante" value="{{ old('phone', $restaurant->phone) }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="type_ids" class="d-block mb-3">Tipologia Ristorante <span class="text-danger">*</span></label>
                                    <div class="row">
                                        @foreach($types as $type)
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <label class="mb-2 mb-md-3 cursor_pointer">
                                                    <input type="checkbox" name="type_ids[]" value="{{ $type->id }}" 
                                                        {{ in_array($type->id, old('type_ids', $restaurant->types->pluck('id')->toArray())) ? 'checked' : '' }} 
                                                        class="type-checkbox cursor_pointer">
                                                    {{ $type->name }}
                                                </label><br>
                                            </div>
                                        @endforeach
                                        @error('type_ids')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <span class="text-secondary fst-italic"><span class="text-danger">*</span> = campi obbligatori</span>

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