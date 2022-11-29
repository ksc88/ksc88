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
          
          [{'v':'dirops', 'f':'Atul Gupta	<div style="color:red; font-style:italic">Director/Ops</div>'},
           '', 'DIR/OPS'],
          [{'v':'jtgmPlanning','f':'Planning <div style="color:red; font-style:italic">( Rajeev Sharma)Jt.GM Corporate Planning </div>'}, 'dirops', 'Jt.GM Corporate Planning'],
          [{'v':'jtgmBusiness','f':'Planning <div style="color:red; font-style:italic">( Birendra Singh)Jt.GM Corporate Planning </div>'}, 'dirops', 'Jt.GM Corporate Planning'],
          [{'v':'awmPlanning','f':'Assistant Works Manager Planning <div style="color:red; font-style:i A.K talic">(Amit Patel) </div>'}, 'jtgmPlanning', 'Jt.GM Corporate Planning'],
          ['Contcat Mgt of all Indentors & IFDs <div style="color:red; font-style:italic">( Sujit Das JWM &   Ravindra Dharia,CM) </div>', 'awmPlanning', ''],
          ['QA,PRM,ATPs,Customer FeedBack,Defect Anly. & CV Commitee Rports & Retention(QA)<div style="color:red; font-style:italic">(  sunil Bhatia,JWM) </div>', 'awmPlanning', 'QA,PRM,ATPs,Customer,Complaints,Customer FeedBack,Defect Anly. & CV Commitee Rports & Retention(QA)'],
          ['Fys,Proc Inv,Material Coverage Monitoring,Vendor Complaints & Abbri. <div style="color:red; font-style:italic">(  Avinash Verma,JWM(SG) &   V.P Sharma,ASO) </div>', 'awmPlanning', 'Fys,Proc Inv,Material Coverage Monitoring,Vendor Complaints & Abbri'],
          ['Consigneewise Dispatch Report Achv. Report & 40 % Payment Bill <div style="color:red; font-style:italic">(  Akash Singh,JWM &   Ramjeet Yadav,Ass.) </div>', 'awmPlanning', 'Consigneewise Dispatch Report Achv. Report & 40 % Payment Bill'],
          ['EO(Civil & P&M),FysPrc of P&M and Civil Cases & Loss Stmt <div style="color:red; font-style:italic">(  Amriteshwar Srivastava,JWM)', 'awmPlanning', 'EO(Civil & P&M),FysPrc of P&M and Civil Cases & Loss Stmt'],
          ['Reports a & returns Correspondence with Higher Auth. Parliamentary Corespondance &Audit Reply <div style="color:red; font-style:italic">(  A.K Vyas,SG)', 'awmPlanning', 'R&D,IPR &IDex'],
          ['R&D,IPR &IDex<div style="color:red; font-style:italic">(  Soumya Rajan Swain,JWM &   Robin Kujur LDC,)', 'jtgmBusiness', 'R&D,IPR &IDex'],
          ['Marketing & Export <div style="color:red; font-style:italic">(Deepika Patel JWM &  Piyush Kumar JWM)', 'jtgmBusiness', 'Marketing & Export '],
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
                 <div class="col-md-4 float-right" ><input class="form-control input-sm"placeholder="pl. type for search" type="text" id="search"></div>
<input class="btn btn-primary float-right" type="button" value="Go" onclick="search(document.getElementById('search').value)">
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