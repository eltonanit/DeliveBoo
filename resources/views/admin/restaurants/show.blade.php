@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body board-menu py-4 px-5">
                        <!-- Titolo -->
                        <div class="container">
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <h2 class="display-6 text-center text-white fw-bold">{{ $restaurant->name }}</h2>
                                        <p class="text-white fst-italic"> 
                                            @foreach($restaurant->types as $type)
                                            {{ $type->name }}{{ !$loop->last ? ', ' : '' }} <!-- $loop(variabile fornita da blade)->last che permette di verificare se stai processando l'ultimo elemento -->
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="text-white">
                                        <div id="my_new_dish">
                                            <a href="{{ route('admin.restaurants.dishes.create', $restaurant->id) }}" 
                                                class="text-white link-underline link-underline-opacity-0">
                                                Aggiungi nuovo piatto
                                            </a>
                                            <i class="bi bi-pencil-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-white">
                                    <div class="col-12 d-flex justify-content-center mb-4">
                                        <div class="me-5">
                                            <h3>Sede:</h3>
                                            <div>- {{ $restaurant->address }}</div>
                                        </div>
                                        <div>
                                            <h3>Telefono:</h3>
                                            <div>- {{ $restaurant->phone }}</div>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- Tabella dettagli ristorante -->
                                <table class="table border-white border-top table-dark my-5">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Piatto</th>
                                            <th>portata</th>
                                            <th>Descrizione</th>
                                            <th>Prezzo</th>
                                            <th>Veg</th>
                                            <th>Azioni</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @forelse ($restaurant->dishes as $dish)
                                            <tr class="{{ $dish->visible ? '' : 'text-decoration-line-through'}}">
                                                <td class="text-white">{{ $dish->name }}</td>
                                                <td class="text-white">{{ $dish->course }}</td>
                                                <td class="text-white">{{ $dish->description }}</td>
                                                <td class="text-white">{{ $dish->price }} €</td>
                                                <td class="text-white">{{ $dish->vegetarian ? 'Sì' : 'No' }}</td>
    
                                                <td>
                                                    <div class="dropend">
                                                        <button type="button" class="btn btn-sm btn-light border"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu py-2">
                                                            <!-- Dropdown menu links -->
                                                            <li class="d-flex flex-column align-items-center">
                                                                <div class="d-flex justify-content-between mb-2">
                                                                    <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}" class="btn btn-sm btn-warning">Modifica <i class="bi bi-pencil-square"></i></a>
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <form action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}" method="POST" class="d-inline">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger">Cancella <i
                                                                            class="bi bi-trash3"></i></button>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="6" class="text-white">Nessun piatto disponibile.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                 <!-- Pulsante per ripristinare tutti i piatti soft deleted -->
                                 <div class="row text-center mb-3">
                                    <div class="col-12">
                                        <form action="{{ route('admin.dishes.restoreAll', $restaurant->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">Ripristina tutti i piatti eliminati</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Messaggi di successo o errore -->
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <!-- Pulsante di ritorno -->
                                <div class="col-12 d-flex justify-content-center mt-5">
                                    <a href="{{ route('admin.restaurants.index', $restaurant->id) }}"
                                        class="text-white link-underline link-underline-opacity-0">
                                        <div id="my_back_button" class="d-flex align-items-center">
                                            <i id="my_left_arrow" class="bi bi-arrow-left"></i>
                                            <p class="m-0">Indietro</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
