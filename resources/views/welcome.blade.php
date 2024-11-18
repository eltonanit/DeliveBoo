@extends('layouts.app')
@section('content')
    <div class="container py-5 d-flex align-items-center min-vh-100">
        <div class="row">
            <div class="col-12 text-center d-flex flex-column align-items-center">
                <h1 class="display-4 font-weight-bold fw-bold">Benvenuto su DeliveBoo!</h1>
                <p class="my-5 w-75 fst-italic lh-lg">" Gestisci il tuo ristorante e fai crescere il tuo business con DeliveBoo, 
                    la piattaforma che ti permette di raggiungere nuovi clienti e semplificare la gestione dei tuoi ordini. 
                    Il nostro pannello di controllo intuitivo ti offre tutti gli strumenti necessari per monitorare le vendite in tempo reale, 
                    gestire il menu e ottimizzare le consegne. Unisciti agli oltre 1000 ristoratori che hanno già scelto DeliveBoo per 
                    espandere la loro presenza digitale. "</p>
                <a href="{{ route('register') }}"
                    class="btn btn-outline-primary text-white border-white btn-lg shadow">Registra il tuo ristorante!
                </a>
                <span class="text-white my-3">oppure</span>
                <a href="{{ route('admin.restaurants.index') }}"
                    class="btn btn-outline-primary text-white border-white btn-lg shadow">Visualizza il tuo ristorante!
                </a>
            </div>
        </div>
    </div>
@endsection
