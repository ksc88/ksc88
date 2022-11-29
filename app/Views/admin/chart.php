<html>
   <head>
      <title>Google Charts Tutorial</title>
      <script type = "text/javascript" src = "<?= base_url('/public/assets/js/loader.js')?>">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
   </head>
   
   <body  >

     <?php //echo '<pre>'; print_r($row)?>
     <div class="container " id = "printchart">

      <div  id = "container" style = "width: 550px; height: 400px; ">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Total Invoice Value'],
               <?php foreach($row as $key ) { ?>
               ['<?php echo $key['invoice_fy'];?>',  <?php echo $key['total_invoice'] ;?>],<?php } ?>
            ]);   

            var options = {title: 'Total Invoice Value (in INR)'}; 

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
      
      </div>
   </body>
</html>
