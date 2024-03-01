@extends('backend.mastertemplate.master')

@section('overView-content')
@include('backend.includes.overView')
@endsection

@section('main-content')
<div class="sales-boxes">
    <!-- Your sales boxes content here -->
    <canvas id="barChart" width="400" height="400"></canvas>
</div>

<!-- Add a canvas element for the bar chart -->


@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data for the bar chart (sample data)
    var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Sales',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40] // Example sales data
        }]
    };

    // Configuration for the bar chart
    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    // Get the canvas element
    var ctx = document.getElementById('barChart').getContext('2d');

    // Create the bar chart
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    });
</script>
@endpush
