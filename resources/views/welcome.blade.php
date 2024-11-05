@extends('layouts.app')
@section('content')
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="text-center">
            <h1 class="display-4 font-weight-bold mb-4">Benvenuti su DeliveBoo!</h1>
            <a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary btn-lg">Visualizza i tuoi ristoranti!</a>
        </div>
    </div>
@endsection
