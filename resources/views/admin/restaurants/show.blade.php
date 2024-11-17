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
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="d-flex flex-column">
                                    <h2 class="display-6 text-center text-white fw-bold">{{ $restaurant->name }}</h2>
                                    <p class="text-white fst-italic">
                                        @foreach($restaurant->types as $type)
                                        {{ $type->name }}{{ !$loop->last ? ', ' : '' }}
                                        @endforeach
                                    </p>
                                </div>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    <p class="m-0">{{ session('success') }}</p>
                                </div>
                                @elseif(session('error'))
                                <div class="alert alert-danger">
                                    <p class="m-0">{{ session('error') }}</p>
                                </div>
                                @endif
                                <div class="text-white align-self-start">
                                    <div id="my_new_dish">
                                        <a href="{{ route('admin.restaurants.dishes.create', $restaurant->id) }}" class="text-white link-underline link-underline-opacity-0">
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
                                        <th>Portata</th>
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
                                                    <li class="d-flex flex-column align-items-center">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}" class="btn btn-sm btn-warning">
                                                                Modifica <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <!-- Bottone per aprire la modale di eliminazione -->
                                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                                data-bs-target="#deleteDishModal{{ $dish->id }}">
                                                                Cancella <i class="bi bi-trash3"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modale per confermare l'eliminazione del piatto -->
                                    <div class="modal fade" id="deleteDishModal{{ $dish->id }}" tabindex="-1"
                                        aria-labelledby="deleteDishModalLabel{{ $dish->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteDishModalLabel{{ $dish->id }}">Conferma eliminazione</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Sei sicuro di voler eliminare il piatto "{{ $dish->name }}"?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                                    <form action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <tr class="text-center">
                                        <td colspan="6" class="text-white">Nessun piatto disponibile.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Modale per ripristinare tutti i piatti eliminati -->
                            <div class="modal fade" id="restoreAllDishesModal" tabindex="-1" aria-labelledby="restoreAllDishesModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="restoreAllDishesModalLabel">Conferma ripristino</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler ripristinare tutti i piatti eliminati?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                            <form action="{{ route('admin.dishes.restoreAll', $restaurant->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Ripristina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bottone per aprire la modale di ripristino -->
                            <div class="row text-center mb-3">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#restoreAllDishesModal">
                                        Ripristina tutti i piatti eliminati
                                    </button>
                                </div>
                            </div>

                            <!-- Pulsante di ritorno -->
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <a href="{{ route('admin.restaurants.index', $restaurant->id) }}" class="text-white link-underline link-underline-opacity-0">
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
