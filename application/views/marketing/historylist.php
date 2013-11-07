<?php

foreach($histories as $history)
{ ?>
    <tr>
        <td><?php $history->TANGGAL; ?></td>
        <td><?php $history->KOTA;?></td>
        <td><?php $history->AREA;?></td>
        <td><?php $history->TIPEPROPERTY;?></td>
        <td><?php $history->RANGE;?></td>
        <td><?php $history->LUAST;?></td>
        <td><?php $history->LUASB;?></td>
        <td><?php $history->KAMAR_TIDUR;?></td>
        <td><?php $history->MATCH;?></td>
    </tr>
<?php 
}
?>
