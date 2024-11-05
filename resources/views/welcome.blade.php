@extends('layouts.app')
@section('content')
    <div class="container py-5 d-flex align-items-center min-vh-100">
        <div class="row">
            <div class="col-12 text-center d-flex flex-column align-items-center">
                <h1 class="display-4 font-weight-bold fw-bold">Benvenuto su DeliveBoo!</h1>
                <p class="my-5 w-75 fst-italic lh-lg">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum. "</p>
                <a href="{{ route('admin.restaurants.index') }}"
                    class="btn btn-outline-primary text-white border-white btn-lg shadow">Visualizza i tuoi ristoranti!</a>
            </div>
        </div>
    </div>
@endsection
