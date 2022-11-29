<tbody>    <tr >   
<td  width="20%"><?= esc($row['invoice_fy']); ?></td>
<td style="color: #6667AB;"><?php echo'<p style="font-size:20px">' .($num=$num = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['contract_value']).
'<br><br>').'</p>'.'<p style=" color:green;font-size:12px;">'.$ntw->numToWord( $row['contract_value'] ) .'</p>'?></td>
<td style="color: #6667AB;"><?php echo'<p style="font-size:20px">' .($num=$num = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['total_invoice']).
'<br><br>').'</p>'.'<p style=" color:green;font-size:12px;">'.$ntw->numToWord( $row['total_invoice'] ) .'</p>'?></td>
<td><?php echo'<p style="font-size:24px">'.($num=$num = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['outstanding']).'</p>'.'<br><br>'.'<p style=" color:red ;font-size:12px;">'.$ntw->numToWord( $row['outstanding'] ).'</p>') ?></td>
<?php    } ?>   
</tr>
</tbody>