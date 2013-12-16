<?php if(isset($dokumen)){
    foreach($dokumen as $obj)
    { ?>
        <tr style="display: table-row;">
            <td><span class="label label-info"><i class="icon-plus"></i></span><a download="<?php echo $obj->PATH; ?>" href="<?php echo DOKUMEN_UPLOAD_PATH.$obj->PATH; ?>"><?php echo $obj->PATH; ?></a></td>
            <td><?php echo $obj->NAMA; ?></td>
        </tr>
<?php }
} ?>