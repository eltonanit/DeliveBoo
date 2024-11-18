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
                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</td> <!-- Solo la data senza orario -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-4 bg-white border border-black mb-5">
            <h3 class="text-danger text-center mb-3">Statistiche Ordini</h3>
            
            <!-- Grafico 1: Numero Ordini per Data -->
            <div class="mb-4">
                <h5>- Numero Ordini per Data</h5>
                <canvas id="orderCountChart"></canvas>
                <hr style="border: 1px solid black; margin: 20px 0;">
            </div>
        
            <!-- Grafico 2: Totale Incassato per Data -->
            <div class="mb-4">
                <h5>- Totale Incassato per Data (€)</h5>
                <canvas id="totalSalesChart"></canvas>
                <hr style="border: 1px solid black; margin: 20px 0;">
            </div>
        
            <!-- Grafico 3: Distribuzione degli Ordini per Piatto -->
            <div class="mb-4">
                <h5>- Distribuzione degli Ordini per Piatto (per Quantità)</h5>
                <canvas id="dishesCountChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script>
    // Passaggio dei dati da Laravel a JavaScript
    const ordersByDate = @json($ordersGroupedByDate); // Ordini raggruppati per data
    const totalSales = @json($totalsByDate); // Totale per data
    const orderCount = @json($ordersCountByDate); // Numero di ordini per data
    const dishesCount = @json($dishesCount); // Totali ordini per piatto

    // Grafico 1: Numero di Ordini per Data
    var ctxOrderCount = document.getElementById('orderCountChart').getContext('2d');
    var orderCountChart = new Chart(ctxOrderCount, {
        type: 'bar',
        data: {
            labels: Object.keys(ordersByDate),
            datasets: [{
                label: 'Numero di Ordini',
                data: Object.values(orderCount),
                backgroundColor: '#3498db',
                borderColor: '#2980b9',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { beginAtZero: true, ticks: { color: 'black' } },
                y: { beginAtZero: true, ticks: { color: 'black' } }
            }
        }
    });

    // Grafico 2: Totale Incassato per Data
    var ctxTotalSales = document.getElementById('totalSalesChart').getContext('2d');
    var totalSalesChart = new Chart(ctxTotalSales, {
        type: 'bar',
        data: {
            labels: Object.keys(ordersByDate),
            datasets: [{
                label: 'Totale Incassato (€)',
                data: Object.values(totalSales),
                backgroundColor: '#2ecc71',
                borderColor: '#27ae60',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { beginAtZero: true, ticks: { color: 'black' } },
                y: { beginAtZero: true, ticks: { color: 'black' } }
            }
        }
    });

    // Grafico 3: Distribuzione degli Ordini per Piatto (per Quantità)
    var ctxDishesCount = document.getElementById('dishesCountChart').getContext('2d');
    var dishesCountChart = new Chart(ctxDishesCount, {
        type: 'pie',
        data: {
            labels: Object.keys(dishesCount),
            datasets: [{
                label: 'Distribuzione Ordini per Piatto (Quantità)',
                data: Object.values(dishesCount),
                backgroundColor: ['#f39c12', '#e74c3c', '#9b59b6', '#34495e', '#1abc9c'],
                borderColor: '#ffffff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    labels: { color: 'black' }
                },
                tooltip: {
                    titleColor: 'white',
                    bodyColor: 'white'
                },
                datalabels: {
                    color: 'white',  // Colore del testo delle etichette (visibile in tutti gli spicchi)
                    anchor: 'center',
                    align: 'center',
                    backgroundColor: 'rgba(0, 0, 0, 0.6)',  // Colore di sfondo per le etichette
                    borderRadius: 5,  // Raggio angoli per il bordo dello sfondo
                    font: {
                        weight: 'bold', // Grassetto per le etichette
                        size: 14 // Dimensione del testo
                    },
                    formatter: function(value, context) {
                        let label = context.chart.data.labels[context.dataIndex];
                        return label + ': ' + value + ' ordini'; // Quantità totale per piatto
                    }
                }
            }
        }
    });
</script>
@endsection
