<input id="modalId" type="hidden" value="<?php if(isset($promosi)) echo $promosi->AKTIVITASID; ?>" />
   <div class="control-group">
        <label for="tanggalAktivitas" class="control-label">Tanggal</label>
        <div class="controls">
            <?php if(isset($aktivitas)){?>
                <input type="text" name="textfield" id="tanggalAktivitas" class="input-medium datepick" 
                       value="<?php $datetime = strtotime($aktivitas->TANGGAL);
                                    $mysqldate = date("j F Y", $datetime);
                                    echo $mysqldate;?>" 
                />
            <?php
            }else{?>
                <input type="text" name="textfield" id="tanggalAktivitas" class="input-medium datepick">
            <?php
            } ?>
            
<!--            <span class="help-block">As dropdown</span>-->
	</div>
    </div>
    <div class="control-group">
        <label for="selJenis" class="control-label">Jenis Aktivitas</label>
        <div class="controls">
            
                <select name="select" id="selJenisAktivitas" class="input-large">
                   <?php if(isset($jenis)){
                       
                       foreach($jenis as $obj){?>
                         <option value="<?php echo $obj->JENISID; ?>" 
                                 <?php if(isset($aktivitas) && $obj->JENISID === $aktivitas->JENIS) echo "selected='true'"; ?>
                          ><?php echo $obj->AKTIVITAS; ?></option>
                       <?php }
                   } ?>     
                </select>
        </div>
    </div>
    <div class="control-group">
        <label for="nama" class="control-label">Nama Customer</label>
        <div class="controls">
                <input type="text" name="nama" id="nama_customer" 
                    <?php if(isset($aktivitas)){
                        echo "value='".$aktivitas->NAMA_CUSTOMER."'";
                    }?> class="input-medium">
        </div>
    </div>
    <div class="control-group">
        <label for="ket" class="control-label">Keterangan</label>
        <div class="controls">
            <textarea name="ket" id="keterangan"><?php if(isset($aktivitas)){
                        echo $aktivitas->KETERANGAN;
                    }?></textarea> 
        </div>
    </div>
