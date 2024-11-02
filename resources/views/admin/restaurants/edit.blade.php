@extends('layouts.app')

@section('content')
    <div class="container py-5 container-show">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <!-- Titolo -->
                        <h2 class="display-6 text-center mb-4 text-uppercase fw-bold">Dettagli Ristorante</h2>

                        <!-- Tabella dettagli ristorante -->
                        <table class="table table-bordered table-hover shadow-sm rounded">
                            <tbody>
                                <tr>
                                    <th class="bg-light text-end w-50">Nome Ristorante:</th>
                                    <td class="fw-bold">{{ $restaurant->name }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Indirizzo Ristorante:</th>
                                    <td>{{ $restaurant->address }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Telefono Ristorante:</th>
                                    <td>{{ $restaurant->phone }}</td>
                                </tr>
                                {{-- <tr>
                                    <th class="bg-light text-end">Immagine relativa al progetto:</th>
                                    @if (Str::startsWith($restaurant->image_restaurant, 'https'))
                                        <td>
                                            <img src="{{ $restaurant->image_restaurant }}" alt="{{ $restaurant->name }}">
                                        </td>
                                    @else
                                        <td>
                                            <img src="{{ asset('storage/' . $restaurant->image_restaurant) }}"
                                                alt="{{ $restaurant->name }}" class="img-thumbnail">
                                        </td>
                                    @endif
                                </tr> --}}
                            </tbody>
                        </table>

                        <!-- Pulsante di ritorno -->
                        <div class="text-center mt-5">
                            <a href="{{ route('restaurants.index') }}"
                                class="btn btn-primary btn-lg rounded-pill px-4 shadow">
                                <i class="bi bi-arrow-left me-2"></i> Torna alla lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
