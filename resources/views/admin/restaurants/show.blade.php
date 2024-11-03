@extends('layouts.app')

@section('content')
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
                            <thead class="table-dark">
                                <tr>
                                    <th>Piatto</th>
                                    <th>Ingredienti</th>
                                    <th>Prezzo</th>
                                    <th>Veg</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($dishes as $dish)
                                    <tr>
                                        <td class="text-white">{{ $dish->name }}</td>
                                        <td class="text-white">{{ $dish->description }}</td>
                                        <td class="text-white">{{ $dish->price }} €</td>
                                        <td class="text-white">{{ $dish->vegetarian ? 'Sì' : 'No' }}</td>

                                        <td>
                                            <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}"
                                                class="btn btn-sm btn-warning ">
                                                Edit
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
