@extends('layouts.app')

@section('content')
    <div class="container py-5 container-show">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body borad-menu p-5">
                        <!-- Titolo -->
                        <div class="container py-5">
                            <div class="d-flex justify-content-between">
                                <h2 class="display-6 text-center mb-4 text-uppercase text-white fw-bold">{{ $restaurant->name }}</h2>
                                <div class="text-center">
                                    <a href="{{ route('admin.restaurants.dishes.create', $restaurant->id) }}" class="btn btn-primary btn-lg">
                                        <i class="bi bi-plus-square me-2"></i> Aggiungi nuovo piatto
                                    </a>
                                </div>
                            </div>

                            <!-- Tabella dettagli ristorante -->
                            <table class="table border-white border-top table-dark">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Piatto</th>
                                        <th>Ingredienti</th>
                                        <th>Prezzo</th>
                                        <th>Veg</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($restaurant->dishes as $dish)
                                        <tr>
                                            <td class="text-white">{{ $dish->name }}</td>
                                            <td class="text-white">{{ $dish->description }}</td>
                                            <td class="text-white">{{ $dish->price }} €</td>
                                            <td class="text-white">{{ $dish->vegetarian ? 'Sì' : 'No' }}</td>
                                            <td>
                                                <a href="{{ route('admin.restaurants.dishes.edit', ['restaurant' => $restaurant->id, 'dish' => $dish->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.restaurants.dishes.destroy', ['restaurant' => $restaurant->id, 'dish' => $dish->id]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-white">Nessun piatto disponibile.</td>
                                        </tr>
                                    @endforelse
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
                                <a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary btn-sm rounded-pill px-4 shadow">
                                    <i class="bi bi-arrow-left me-2"></i> Torna alla lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
