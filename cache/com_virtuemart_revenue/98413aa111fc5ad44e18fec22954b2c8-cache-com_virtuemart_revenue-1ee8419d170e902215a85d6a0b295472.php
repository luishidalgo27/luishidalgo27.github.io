<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1433:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Pedidos', 'Total de artículos vendidos', 'Ingreso neto'], ['2023-01-10', 0,0,0], ['2023-01-11', 0,0,0], ['2023-01-12', 0,0,0], ['2023-01-13', 0,0,0], ['2023-01-14', 0,0,0], ['2023-01-15', 0,0,0], ['2023-01-16', 0,0,0], ['2023-01-17', 0,0,0], ['2023-01-18', 0,0,0], ['2023-01-19', 0,0,0], ['2023-01-20', 0,0,0], ['2023-01-21', 0,0,0], ['2023-01-22', 0,0,0], ['2023-01-23', 0,0,0], ['2023-01-24', 0,0,0], ['2023-01-25', 0,0,0], ['2023-01-26', 0,0,0], ['2023-01-27', 0,0,0], ['2023-01-28', 0,0,0], ['2023-01-29', 0,0,0], ['2023-01-30', 0,0,0], ['2023-01-31', 0,0,0], ['2023-02-01', 0,0,0], ['2023-02-02', 0,0,0], ['2023-02-03', 0,0,0], ['2023-02-04', 0,0,0], ['2023-02-05', 0,0,0], ['2023-02-06', 0,0,0], ['2023-02-07', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Martes, 10 Enero 2023 to Miércoles, 08 Febrero 2023',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}