<div class="container-fluid nav-hidden" id="content">
    
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Detail Listing</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats">
							<li class='satgreen'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">324</span>
									<span>Properties Sold</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-basic.html">Report</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Listing Terjual</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div>
                                <div class="row-fluid">
                                    <div class='span12'>
                                       <div class="control-group">
                                                <label for="date_awal" class="control-label">Range Tanggal</label>
                                                <div class="controls">
                                                        <input type="text" name="date_awal" id="date_awal"  class="input-large datepicker">
                                                        <input type="text" name="date_akhir" id="date_akhir"  class="input-large datepicker">
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
                                        <input type="button" class="btn btn-primary" id="btnRefresh" value="refresh" />
                                   </div>
                                    
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                            <div class="box box-color box-bordered">
                                                    <div class="box-title">
                                                            <h3>
                                                                    <i class="icon-table"></i>
                                                                    Laporan Listing / Customer Baru per Marketing <?php if(isset($officename)) echo "Office ".$officename; ?>
                                                            </h3>
                                                    </div>
                                                    <div class="box-content nopadding">
                                                            <table class="table table-hover table-nomargin">
                                                                    <thead>
                                                                            <tr>
                                                                                    <th>Nama Marketing</th>
                                                                                    <th>Alamat</th>
                                                                                    <th class='hidden-350'>Email</th>
                                                                                    <th class='hidden-350'>Telepon</th>
                                                                                    <th class='hidden-350'>Listing Baru</th>
                                                                                    <th class='hidden-350'>Customer Baru</th>
                                                                                    
                                                                            </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if(isset($marketings)){ 
                                                                            foreach($marketings as $marketing){ ?>
                                                                            <tr>
                                                                                <td><?php echo $marketing->NAMA; ?></td>
                                                                                
                                                                                <td><?php echo $marketing->ALAMAT; ?></td>
                                                                               <td><?php echo $marketing->EMAIL; ?></td>
                                                                                <td><?php echo $marketing->TELEPON; ?></td>
                                                                                
                                                                                <td><?php echo $marketing->jml_listing; ?></td>
                                                                                <td><?php echo $marketing->jml_customer; ?></td>
                                                                                
                                                                            </tr>
                                                                         <?php   }
                                                                         }?>

                                                                    </tbody>
                                                            </table>
<!--                                                            <div class="table-pagination">
                                                                    <a href="#" class='disabled'>First</a>
                                                                    <a href="#" class='disabled'>Previous</a>
                                                                    <span>
                                                                            <a href="#" class='active'>1</a>
                                                                            <a href="#">2</a>
                                                                            <a href="#">3</a>
                                                                    </span>
                                                                    <a href="#">Next</a>
                                                                    <a href="#">Last</a>
                                                            </div>-->

                                                    </div>
                                                    
                                            </div>
                                    </div>
                                </div>
                           </div>
    
		</div>
</div>