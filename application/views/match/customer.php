
<div class="container-fluid nav-hidden" id="content">
    <input type="hidden" id="custId" value="<?php echo $customerid; ?>" />
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Detail Customer</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-basic.html">Customer Management</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Prospect Management</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div>
                            
                            <div class="row-fluid">
                                <div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> Summary</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class="form-horizontal form-striped">
                                                                    <div class="row-fluid">
                                                                        <div class ="span2">
                                                                            <img src="img/demo/user-1.jpg">
                                                                        </div>
                                                                        <div class="span10">
                                                                            
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Nama Lengkap :</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->NAMA;?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Tanggal Lahir:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->tgl_lahir;?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Telepon:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->TELEPON;?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Email:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->EMAIL;?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="form-actions">
										<button style="padding-left: 10px" type="submit" class="btn btn-primary">Send Email</button>
										
									</div>
                                                                        </div>
                                                                    </div>
									
								</form>
							</div>
						</div>
					</div>
                            </div>
                            
                            
                            <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Tipe Data
								</h3>
							</div>
                                                    <div class="box-content nopadding">
                                                        <div class="control-group edittest" style="margin-left: 10px">
                                    
                                                                <label for="textfield" class="control-label">Data Listing</label>
                                                                <div class="controls">
                                                                    <select name="select" id="select" class="input-large">
                                                                        <option value="1">Personal</option>
                                                                        <option value="2">Office</option>
                                                                        <option value="3">Global</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                 </div>
                            <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Listing Property
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin dataTable table-bordered">
									<thead>
										<tr>
                                                                                        
											<th>Gambar</th>
											<th>RefId</th>
											<th>Tipe</th>
											<th>Alamat</th>
                                                                                        <th>Harga</th>
                                                                                        <th>Kontak</th>
                                                                                        
                                                                                        
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                            <?php if(isset($listings)) { 
                                                                                foreach($listings as $listing) {?>
                                                                                    <tr style="cursor:pointer">
                                                                                        <td><a href="listingdetail.php"><img src="img/rumah70.jpg"></a></td>
                                                                                        <td><?php echo $listing->LISTINGID; ?></td>
                                                                                        <td >Rumah</td>
                                                                                        <td><?php echo $listing->ALAMAT_LENGKAP; ?></td>

                                                                                        <td><?php echo $listing->HARGA; ?></td>
                                                                                        <td><?php echo $listing->CUSTOMERID; ?></td>


                                                                                    </tr>
                                                                                    
                                                                            <?php }
                                                                                
                                                                                } ?>
                                                                            
                                                                            
                                                                         </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                            
                            
			</div>
		</div>
	</div>