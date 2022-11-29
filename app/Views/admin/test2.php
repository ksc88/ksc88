<div style=" width: 600px;"> 
<div class="col-lg-12  table-responsive" id="printableArea"> 
    <div class="table-responsive " >                                          
    <table class="table table-striped table-bordered table-hover text-wrap" ><button class="col-2 btn btn-info float-right m-2" onclick="printDiv('columnchart_material')">Print</button>
    <thead class="text-uppercase">
    <tr class="table-active">   
    <!-- <th>FY</th> -->
   
    <th> Invoice Value</th>
                                            
    <th> OutStanding</th>                                          
                                      
                                         
                                
    <?php                                                     
    require_once 'currencyFormat.php';
    require_once 'Exception/currencyFormatInvalidNumber.php';
    require_once 'Exception/currencyFormatNumberOverflow.php';
    $ntw = new \currencyFormat\currencyFormat();
   // foreach ($row as $row) {  ?>
    </tr>
 
    </thead>
<tbody><?php $count = 1; foreach ($row_two as $row) :?>
<tr>      
<td><?= esc($row['invoice_fy']) ;?></td>

<?php $total_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['total_inv_value']);  ?>
<td><?= esc($total_inr) ; echo '<br>('.$ntw->numToWord($row['total']) .')' ;?></td>

<td><?= $total_outstd = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Outstandind']); esc($total_outstd); echo '<br>('.$ntw->numToWord($row['Outstandind']) .')' ;?></td>    


</tr><?php $count++;endforeach ?>

</tbody>
    </table>
    </div>
</div>
</div>


