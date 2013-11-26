<input id="modalId" type="hidden" value="<?php if(isset($promosi)) echo $promosi->PROMOSIID; ?>" />
   <div class="control-group">
        <label for="tanggalAktivitas" class="control-label">Tanggal</label>
        <div class="controls">
            <?php if(isset($promosi)){?>
            <input type="text" name="textfield" id="tanggalPromosi" class="input-medium datepick" 
                   value="<?php $datetime = strtotime($promosi->TANGGAL);
                                    $mysqldate = date("j F Y", $datetime);
                                    echo $mysqldate;?>" 
                />
            <?php
            }else{?>
                <input type="text" name="textfield" id="tanggalPromosi" class="input-medium datepick" />
            <?php
            } ?>
<!--            <span class="help-block">As dropdown</span>-->
	</div>
    </div>
    <div class="control-group">
        <label for="selJenis" class="control-label">Jenis Promosi</label>
        <div class="controls">
            
                <select name="select" id="selJenisPromosi" class="input-large">
                   <?php if(isset($jenis)){
                       foreach($jenis as $obj){?>
                         <option value="<?php echo $obj->JENISID; ?>" 
                                 <?php if(isset($promosi) && $obj->JENISID === $promosi->JENISPROMOSIID) echo "selected='true'"; ?> ><?php echo $obj->PROMOSI; ?></option>
                       <?php }
                   } ?>     
                </select>
        </div>
    </div>
    <div class="control-group">
        <label for="nama" class="control-label">Jumlah</label>
        <div class="controls">
                <input type="text" name="nama" id="jumlah" <?php if(isset($promosi)){
                        echo "value='".$promosi->JUMLAH."'";
                    }?>  class="input-mini spinner">
        </div>
    </div>
    
