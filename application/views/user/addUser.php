<input id="modalId" type="hidden" value="<?php if(isset($user)) echo $user->USERID; ?>" />
   <div class="control-group">
        <label for="nama" class="control-label">User id</label>
        <div class="controls">
                <input type="text" name="nama" id="login" 
                    <?php if(isset($user)){
                        echo "value='".$user->USERID."'";
                    }?> class="input-large">
        </div>
    </div>
    <div class="control-group">
        <label for="selJenis" class="control-label">Office</label>
        <div class="controls">
            
                <select name="select" id="selOffice" class="input-large">
                   <?php if(isset($office)){
                       
                       foreach($office as $obj){?>
                         <option value="<?php echo $obj->OFFICEID; ?>" 
                                 <?php if(isset($useroffice) && $obj->OFFICEID === $useroffice) echo "selected='true'"; ?>
                          ><?php echo $obj->NAMA; ?></option>
                       <?php }
                   } ?>     
                </select>
        </div>
    </div>
    <div class="control-group">
        <label for="nama" class="control-label">Nama User</label>
        <div class="controls">
                <input type="text" name="nama" id="nama" 
                    <?php if(isset($user)){
                        echo "value='".$user->NAMA."'";
                    }?> class="input-large">
        </div>
    </div>
    <div class="control-group">
        <label for="ket" class="control-label">Email</label>
        <div class="controls">
                <input type="text" name="email" id="email" 
                    <?php if(isset($user)){
                        echo "value='".$user->EMAIL."'";
                    }?> class="input-large">
        </div>
    </div>
    <div class="control-group">
        <label for="ket" class="control-label">Telepon</label>
        <div class="controls">
                <input type="text" name="telepon" id="telepon" 
                    <?php if(isset($user)){
                        echo "value='".$user->TELEPON."'";
                    }?> class="input-large">
        </div>
    </div>
