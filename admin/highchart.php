<?php
include('../koneksi.php');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Data Tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <!-- Highcharts -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <title>Highchart</title>
</head>

<body>

  <main>
    <div class="container mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
              <div class="card-title">Coba Highchart</div>
              <hr>

              <?php

              $chart = mysqli_query($koneksi, "SELECT count(*) as nilai , MONTH(checkin) as bulan FROM `transaksi` GROUP BY MONTH(checkin);");
              while ($row = mysqli_fetch_array($chart)) {
                $data[] = array(
                  $row['bulan'],
                  floatval($row['nilai'])
                );
              }
              $json = json_encode($data);

              ?>

              <div id="grafik"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">
    Highcharts.chart('grafik', {
    chart: {
    type: 'column'
    },
    title: {
    text: 'Curah Hujan'
    },
    subtitle: {
    text: 'Latihan Highcharts'
    },
    yAxis: {
    title: {
    text: 'Curah hujan per menit'
    },
    reversed: true
    },
    xAxis: {
    type: 'category', 
    accessibility: {
    rangeDescription: 'Waktu'
    }
    },
    tooltip: {
    pointFormat: '{point.y} mm',
    shared: true
    },
    legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
    },
    plotOptions: {
    series: {
    label: {
    connectorAllowed: false
    }
    }
    },
    series: [{
    name: 'Curah Hujan',
    lineWidth: 2,
    data: <?= $json ?>,
    color:'green'
    }],
    responsive: {
    rules: [{
    condition: {
    maxWidth: 500
    },
    chartOptions: {
    legend: {
    layout: 'horizontal',
    align: 'center',
    verticalAlign: 'bottom'
    }
    }
    }]
    }

    
});
  </script>
</body>


</html>