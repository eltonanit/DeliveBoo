@extends('layouts.app')
@section('content')
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="text-center">
            <h1 class="display-4 font-weight-bold mb-4">Benvenuti su DeliveBoo!</h1>
            <p class="lead mb-5">Ordina i tuoi piatti preferiti dai migliori ristoranti della città, consegnati direttamente
                a casa tua.</p>
            <a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary btn-lg">Scopri i Ristoranti</a>
        </div>
    </div>
@endsection
