<html>
  <head>
    <script type="text/javascript" src="<?php echo base_url('/public/assets/js/gchart/loader.js')?>"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar'], 'language': 'hi_in'});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Total Invoice', { role: 'style' },'Outstanding' ],
        
          <?php foreach($row as $key ) { ?>
               ['<?php echo $key['invoice_fy'];?>',  <?php echo $key['total_invoice'] ;?>,'color: #e5e4e2', <?php echo $key['outstanding'] ;?>], <?php } ?>

        ]);
        var options = {
          chart: {
            title: 'TCL Total OutStanding and Invoice Values',
            subtitle: 'Total Invoice value and Outstanding 21-22 and 22-23',
         
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
   
    <div id="columnchart_material" style="width: 600px; height: 500px;" ></div> 
  
  </body>
</html>
