<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!--Start your project here-->  

    <!--Main layout-->
    <div class="container">
        <!--First row-->
        <div class="row">
            <!--First columnn-->
            <div class="col-md-4">

<canvas id="donutChart1"></canvas>

            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-md-4">

<canvas id="donutChart2"></canvas>

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-md-4">

<canvas id="donutChart3"></canvas>

            </div>
        </div>
        <!--/.First row-->

        <!--Second row-->
        <div class="row">
            <!--First columnn-->
            <div class="col-md-12">

<canvas id="barChart"></canvas>

            </div>
            <!--First columnn-->
        </div>
        <!--/.Second row-->
    </div>
    <!--/.Main layout-->

<!--/Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
    $(function () {

        var donutData1 = [
            {
                value: 300,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Red"
            },
            {
                value: 50,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow"
            }
        ]

        var donutData2 = [
            {
                value: 440,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Red"
            },
            {
                value: 90,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green"
            },
            {
                value: 180,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow"
            }
        ]

        var donutData3 = [
            {
                value: 200,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Red"
            },
            {
                value: 70,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green"
            },
            {
                value: 140,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow"
            }
        ]

        var barData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
            ]
        };
       
        var option = {
        responsive: true,
        };

       
        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("barChart").getContext('2d');
        var barChart = new Chart(ctx).Bar(barData, option); //'Line' defines type of the chart.
        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("donutChart1").getContext('2d');
        var donutChart1 = new Chart(ctx).Pie(donutData1, option); //'Line' defines type of the chart.
        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("donutChart2").getContext('2d');
        var donutChart2 = new Chart(ctx).Pie(donutData2, option); //'Line' defines type of the chart.
        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("donutChart3").getContext('2d');
        var donutChart3 = new Chart(ctx).Pie(donutData3, option); //'Line' defines type of the chart.
    });
    </script>
</body>

</html>
