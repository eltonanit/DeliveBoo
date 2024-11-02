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
    <!-- l'ho buttata giù in due minuti per darvi un idea di come la immaggino (colori a caso, possiamo farla anche bianca semplice).I piatti a destra avrebbero la show, l'edit e il delete-->
    <div class="container py-5 container-show">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body borad-menu p-5">
                        <!-- Titolo -->
                        <h2 class="display-6 text-center mb-4 text-uppercase text-white fw-bold">{{ $restaurant->name }}</h2>

                        <!-- Tabella dettagli ristorante -->
                        <table class="table border-white border-top table-dark">
                            <tbody>
                                <tr>
                                    <td class="text-white">Piatto 1</td>
                                </tr>
                                <tr>
                                    <td class="text-white">Piatto 2</td>
                                </tr>
                                <tr>
                                    <td class="text-white">Piatto 3</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-white">- {{ $restaurant->address }}</div>
                            </div>
                            <div class="col-12">
                                <div class="text-white">- {{ $restaurant->phone }}</div>
                            </div>
                        </div>

                        <!-- Pulsante di ritorno -->
                        <div class="text-center mt-5">
                            <a href="{{ route('restaurants.index') }}"
                                class="btn btn-primary btn-sm rounded-pill px-4 shadow">
                                <i class="bi bi-arrow-left me-2"></i> Torna alla lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
