<div class="container-fluid nav-hidden" id="content">
<div id="main">
        <div class="container-fluid">
                <div class="page-header">
                        <div class="pull-left">
                                <h1>Timeline</h1>
                        </div>
                        
                </div>
                <div class="breadcrumbs">
                        <ul>
                                <li>
                                        <a href="<?php echo base_url() ?>">Home</a>
                                        <i class="icon-angle-right"></i>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>news">News & Update</a>
                                        <i class="icon-angle-right"></i>
                                </li>
                                
                        </ul>
                        <div class="close-bread">
                                <a href="#"><i class="icon-remove"></i></a>
                        </div>
                </div>
                <div class="row-fluid">
                        <div class="span12">
                                <div class="box box-color box-bordered">
                                        <div class="box-title">
                                                <h3>
                                                        <i class="icon-reorder"></i>
                                                        Timeline
                                                </h3>
                                        </div>
                                        <div class="box-content nopadding">
                                                <ul class="timeline">
                                                    <?php if(isset($feeds)){
                                                            foreach ($feeds as $obj){?>
                                                             <li>
                                                                    <div class="timeline-content">
                                                                            <div class="left">
                                                                                    <div class="icon">
                                                                                        <?php if($obj->type == "listing"){?>
                                                                                            <i class="icon-home"></i>
                                                                                        <?php }else{ ?>
                                                                                            <i class="icon-user"></i>
                                                                                        <?php }?>   
                                                                                    </div>
                                                                                    <div class="date">
                                                                                        <?php  
                                                                                            $time = new DateTime($obj->waktuupdate);
                                                                                            echo date_format($time, 'M d'); 
                                                                                        ?>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="activity" id="activity">
                                                                                 <?php if($obj->type == "listing"){?>
                                                                                <div class="user"><span><?php echo $obj->nama; ?> mendaftarkan listing ref id : </span><a href="<?php echo base_url()."listing/".$obj->id; ?>"><?php echo $obj->id; ?></a> </div>
                                                                                    
                                                                                    <ul class="timeline-images" id="<?php echo "list_".$obj->id; ?>">
                                                                                        
                                                                                    </ul>
                                                                                 <?php }else{ ?>   
                                                                                    <div class="user"><span><?php echo $obj->nama; ?> mendaftarkan customer baru  : </span><a href="<?php echo base_url()."customer/detail?customerid=".$obj->id; ?>"><?php echo $obj->id; ?></a> </div>
                                                                                    
                                                                                 <?php }?>   
                                                                            </div>
                                                                    </div>
                                                                    <div class="line"></div>
                                                            </li>
                                                      <?php }
                                                            
                                                    } ?>
                                                       
                                                   
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
</div>