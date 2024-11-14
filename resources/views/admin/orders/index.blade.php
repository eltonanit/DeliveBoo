@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-4"><a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary mb-3">Torna all'elenco ristoranti</a></div>
        <div class="col-12"><h1>Ordini per il ristorante: <span class="text-danger"> {{ $restaurant->name }} </span></h1></div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Elenco Ordini</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Ordine</th>
                        <th>Cliente</th>
                        <th>Totale</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer_name }} {{ $order->customer_surname }}</td>
                        <td>{{ $order->total_price }} €</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-4">
            <h3>Statistiche Ordini</h3>
            <canvas id="orderChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('orderChart').getContext('2d');
    var orderChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($orders->pluck('created_at')->map(function($date) {
                return \Carbon\Carbon::parse($date)->format('d M Y');
            })),
            datasets: [{
                label: 'Ordini per Data',
                data: @json($orders->pluck('total_price')),
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
