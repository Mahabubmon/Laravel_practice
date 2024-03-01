@extends('backend.mastertemplate.master')

@section('overView-content')
    @include('backend.includes.overView')
@endsection

@section('main-content')
<div class="sales-boxes">
    <!-- Your sales boxes content here -->
    <canvas id="barChart" width="400" height="400"></canvas>
</div>
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
    console.log("Canvas element: ", ctx); // Debugging: Check if canvas element is correctly retrieved

    // Check if Chart.js is loaded
    console.log("Chart.js version: ", Chart.version); // Debugging: Check if Chart.js is loaded and its version

    // Create the bar chart
    if (ctx) {
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        });
    } else {
        console.error("Canvas element not found!"); // Debugging: Log an error if canvas element is not found
    }
</script>
@endpush
