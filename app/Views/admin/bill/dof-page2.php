<div class="container">
<div class="row">
<div class="col-lg-12  table-responsive  " id="printableArea">
    <h2 class="mb-2">FYs Total 60% AND 40 % Agianst Total Target Value</h2> 
    <p class="float-right text-danger bg-warning ">*All values are including GST</p>
    <div class="table-responsive " > 
<table class="table table-hover table-bordered table-sm table-light text-wrap text-primary text-right" >
    <thead class="text-uppercase">
    <tr class="table-active">   
    <th>FY</th> 
    <th class="text-center"> Total target Value</th>
    <th class="text-center"> 60% </th>                                          
    <th class="text-center"> 40% </th>                                          
                          
    <?php                                                     
    require_once 'currencyFormat.php';
    require_once 'Exception/currencyFormatInvalidNumber.php';
    require_once 'Exception/currencyFormatNumberOverflow.php';
    $ntw = new \currencyFormat\currencyFormat(); ?>
    </tr>
 
</thead>
    <tbody>
    <?php $count = 1; foreach ($row_three as $row) :?>
    <tr ><td><?= esc($row['fy']) ;?></td>
    <?php $total_contract_value = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", round($row['total_contract_value'],0));  ?>
    <?php $total_60 = round($row['total_contract_value'] *0.6,0); 
    $total_40 = round($row['total_contract_value'] *0.4,0); 
    $total_60 = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $total_60);
    $total_40 = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $total_40);
    ?>
    <td ><?= esc($total_contract_value ) ;?></td>
    <td><?php echo $total_60; ?> </td>
    <td><?php echo $total_40; ?></td>
    </tr><?php $count++;endforeach ?>
    </tbody>
</table>
</div><hr>
</div>   <!-- Col Closed -->


<div class="col-lg-6  table-responsive" id="printableArea">
<h3> FYs Invoice OutStandings Againest 60 %</h3> 
<p class="float-right text-danger bg-warning p-1 ">*All values are including GST</p>
<table class="table table-hover table-bordered table-sm table-light text-wrap text-center" >
        <!-- <button class="col-2 btn btn-info float-right m-2" onclick="printDiv('columnchart_material')">Print</button> -->
    <thead class="thead-light">
    <tr class="table-active">   
    <!-- <th>FY</th>  -->
    <th> FY </th>
    <th> Invoice Value</th>                                      
    <th> OutStanding</th>                                                              
    <?php                                                     
    require_once 'currencyFormat.php';
    require_once 'Exception/currencyFormatInvalidNumber.php';
    require_once 'Exception/currencyFormatNumberOverflow.php';
    $ntw = new \currencyFormat\currencyFormat(); ?>
    </tr>
    </thead>
<tbody>
    <?php $count = 1; foreach ($row_three_2 as $row) :?>
<tr>      
<td><?=esc($row['invoice_fy']); ?></td>
<?php $total_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['total_inv_value']);  ?>
<td><?= esc($total_inr) ; echo '<br>('.$ntw->numToWord($row['total_inv_value']) .')' ;?></td>
<td><?= $total_outstd = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['outstanding']); esc($total_outstd); echo '<br>('.$ntw->numToWord($row['outstanding']) .')' ;?></td>    
</tr><?php $count++;endforeach ?>
</tbody>
    </table>
    </div> 

<div class="col-lg-6  table-responsive" id="printableArea">
<h3> FYs Invoice OutStandings Againest 40 %</h3> 
    <p class="float-right text-danger bg-warning p-1 ">*All values are including GST</p>
    <table class="table table-hover table-bordered table-sm table-light text-wrap text-center" >
        <!-- <button class="col-2 btn btn-info float-right m-2" onclick="printDiv('columnchart_material')">Print</button> -->
    <thead class="thead-light">
    <tr class="table-active">   
    <!-- <th>FY</th>  -->
    <th> FY </th>
    <th> Invoice Value</th>                                      
    <th> OutStanding</th>                                                              
    <?php                                                     
    require_once 'currencyFormat.php';
    require_once 'Exception/currencyFormatInvalidNumber.php';
    require_once 'Exception/currencyFormatNumberOverflow.php';
    $ntw = new \currencyFormat\currencyFormat(); ?>
    </tr></thead>
<tbody><?php $count = 1; foreach ($row_two as $row) :?>
<tr>      
    	<td><?=esc($row['invoice_fy']); ?></td>
        <?php $total_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['total_inv_value']);  ?>
        <td><?= esc($total_inr) ; echo '<br>('.$ntw->numToWord($row['total_inv_value']) .')' ;?></td>
        <td><?= $total_outstd = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['outstanding']); esc($total_outstd); echo '<br>('.$ntw->numToWord($row['outstanding']) .')' ;?></td>    
</tr><?php $count++;endforeach ?>
</tbody>
</table>
</div>  

<!-- Col Closed -->
   
    </div>
    </div>
</div>  <!--container -->