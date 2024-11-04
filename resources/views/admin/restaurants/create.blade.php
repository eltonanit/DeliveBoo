@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Aggiungio nuovo ristorante</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Nome Ristorante -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="name"><i class="bi bi-pencil-fill me-2"></i>
                                            Nome</label>
                                        <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            type="text" name="name" id="name" value="{{ old('name') }}"
                                            placeholder="Inserisci il nome del ristorante">
                                        {{-- @error('name')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <!-- Indirizzo Ristorante -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="address"><i
                                                class="bi bi-calendar-address-fill me-2"></i> Indirizzo</label>
                                        <input class="form-control form-control-lg @error('address') is-invalid @enderror"
                                            type="text" name="address" id="address" value="{{ old('address') }}">
                                        {{-- @error('address')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <!-- Telefono del Ristorante -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="phone"><i class="bi bi-image-fill me-2"></i>
                                            Telefono del Ristorante</label>
                                        <input class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                            type="tel" name="phone" id="phone"
                                            placeholder="Inserisci il link dell'Telefono">
                                        {{-- @error('phone')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror --}}
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
