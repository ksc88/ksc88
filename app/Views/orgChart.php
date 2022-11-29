<?= $this->extend('homePageLayout/home_layout') ?>
<?= $this->section('content') ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'cmd', 'f':'Santosh Kumar Sinha<div style="color:red; font-style:italic">CMD</div>'},
           '', 'The CMD'],
         [   {'v':'dirops', 'f':' Atul Gupta	<div style="color:red; font-style:italic">Director/Ops </div><a href="<?=base_url('/pages/opsOrgChart')?>"> <i class="fas fa-hand-point-right  fa-lg" aria-hidden="true" style="color:olive;"> Pl. Click Here To Expand</i></a>'},
           'cmd', 'DIR/OPS'] ,
          [{'v':'dirhr', 'f':'Maj Gen Ravi Rajeshekhar Patil	<div style="color:red; font-style:italic">Director/Hr </div><a href="<?=base_url('/pages/opsOrgChart')?>"> <i class="fas fa-hand-point-right  fa-lg" aria-hidden="true" style="color:olive;">Pl. Click Here To Expand</i>'},
           'cmd', 'Director/Hr'],
          [{'v':'dirfin', 'f':'Dr. Sanjeev Kumar Saxena<div style="color:red; font-style:italic">Director/Fin </div><a href="<?=base_url('/pages/finOrgChart')?>"> <i class="fas fa-hand-point-right  fa-lg" aria-hidden="true" style="color:olive;">Pl. Click Here To Expand</i>'},
           'cmd', 'Director/Fin'],
          [{'v':'dirgov', 'f':'Chandraker Bharti <div style="color:red; font-style:italic">Director (Government Nominated) </div>'},
           'cmd', 'Director (Government Nominated)'],
          
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script>
   <div class="container">   
    <div class="row p-4">
        <div class="card p-4">
            <div class="p-4 float-right"> 
           
                 <button class="btn btn-warning" onclick="printDiv('chart_div')">Print</button>
            </div>
            <div class="mb-4" id="chart_div"></div> 
        </div>    
    </div>
    </div>

<script>
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}
function search(string){
window.find(string);
}
</script>

<?= $this->endSection() ?>