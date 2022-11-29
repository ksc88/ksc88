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
          
          [{'v':'dirfin', 'f':'Sanjeev Saxena<div style="color:red; font-style:italic">Director/Finance</div>'},
           '', 'DIR/FIn'],
          [{'v':'wmfin','f':'Budgeting & Policy Matters <div style="color:red; font-style:italic">(Anand Dubey) </br>WM/Corp. Finance</div>'}, 'dirfin', 'WM/Corp. Finance'],
          [{'v':'awmCorpAcc','f':'Banking,Investment,Audits,Bills & Taxation<div style="color:red; font-style:talic">Rajeev Arora <br>(AWM/Corp. Account) </div>'}, 'dirfin', '(AWM/Corp. Account)'],
          [{'v':'cs','f':'CS<div style="color:red; font-style:talic">Suresh Kumar Gupta <br> </div>'}, 'dirfin', '(AWM/Corp. Account)'],
          ['Budget <div style="color:red; font-style:italic">Nitin Sharma </br>(JWM/SG) </div>', 'wmfin','">(Nitin Sharma,JWM/SG)'],
          ['Pricing & Costing <div style="color:red; font-style:italic">S.N Pusthy </br>(JWM) </div>', 'wmfin','">S.N Pusthy(JWM)'],
          ['Commercial Accounting <div style="color:red; font-style:italic">Suneel Diwakar</br>(JWM) </div>', 'awmCorpAcc','">S.N Pusthy(JWM)'],
          ['Bills <div style="color:red; font-style:italic">Roopesh Shrivastava </br>(JWM) </div>', 'awmCorpAcc','">Roopesh Shrivastava (JWM) '],
          ['Audit & Banking <div style="color:red; font-style:italic">Arvind Kumar</br>(JWM) </div>', 'awmCorpAcc','">Arvind Kumar(JWM)'],
             ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script>
   <div class="container">
    <div class="row p-2">
        <div class="card p-4">
            
            <div class="float-right"> 
     
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