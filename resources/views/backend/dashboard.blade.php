@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
					-->

                    <style>
                        .highcharts-figure, .highcharts-data-table table {
                        min-width: 320px; 
                        max-width: 660px;
                        margin: 1em auto;
                        }

                        .highcharts-data-table table {
                            font-family: Verdana, sans-serif;
                            border-collapse: collapse;
                            border: 1px solid #EBEBEB;
                            margin: 10px auto;
                            text-align: center;
                            width: 100%;
                            max-width: 500px;
                        }
                        .highcharts-data-table caption {
                        padding: 1em 0;
                        font-size: 1.2em;
                        color: #555;
                        }
                        .highcharts-data-table th {
                            font-weight: 600;
                        padding: 0.5em;
                        }
                        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                        padding: 0.5em;
                        }
                        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                        background: #f8f8f8;
                        }
                        .highcharts-data-table tr:hover {
                        background: #f1f7ff;
                        }
                    </style>

                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                    <figure class="highcharts-figure">
                    <div id="container"></div>
                    <p class="highcharts-description">
                        This pie chart shows how the chart legend can be used to provide
                        information about the individual slices.
                    </p>
                    </figure>


                    <script>
                        // Build the chart
                        Highcharts.chart('container', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Browser market shares in January, 2018'
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        accessibility: {
                            point: {
                            valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                            }
                        },
                        series: [{
                            name: 'Brands',
                            colorByPoint: true,
                            data: [{
                            name: 'Chrome',
                            y: 61.41,
                            sliced: true,
                            selected: true
                            }, {
                            name: 'Internet Explorer',
                            y: 11.84
                            }, {
                            name: 'Firefox',
                            y: 10.85
                            }, {
                            name: 'Edge',
                            y: 4.67
                            }, {
                            name: 'Safari',
                            y: 4.18
                            }, {
                            name: 'Other',
                            y: 7.05
                            }]
                        }]
                        });
                    </script>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
