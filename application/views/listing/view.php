<div id="modalAktivitas" class="modal hide fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" >Modal header</h3>
			</div>
			<div class="modal-body" id='modalContent'>
				
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary" id="btnSimpan" data-dismiss="modal">Save changes</button>
			</div>
</div>
<div class="container-fluid nav-hidden" id="content">
    <input type="hidden" id="marketing" value="<?php echo $marketingid; ?>" />
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Detail Listing</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-basic.html">Listing</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Detail</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div>
                            
			    <div class="row-fluid">
				<div class="span6">
							<div class="box">
								<div class="box-title">
									<h3>
										<i class="icon-picture"></i>
										Gallery
									</h3>
								</div>
								<div class="box-content nopadding">
									<div class="highlight-toolbar">
										
									</div>
									<ul class="gallery" id="gallerylisting">
                                                                            
									</ul>
								</div>
							</div>
						</div>
                                <div class="span6">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> Summary</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class="form-horizontal form-striped">
									<div class="control-group">
										<label for="textfield" class="control-label">Reference ID:</label>
										<div class="controls">
											<label for="textfield" id="listingid" class="control-label"><?php echo $listing->LISTINGID; ?></label>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Harga :</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo "Rp ".number_format($listing->HARGA, 2, ',', '.'); ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Tipe</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->tipe_property; ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Jumlah Kamar Tidur</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->KAMAR_TIDUR; ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Jumlah Kamar Mandi</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->KAMAR_MANDI; ?></label>
										</div>
									</div>
                                                                        <div class="control-group notedittest">
										<label for="textfield" class="control-label">Luas Tanah</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->LUAS_TANAH; ?> Meter Persegi</label>
										</div>
									</div>
                                                                        <div class="control-group notedittest">
										<label for="textfield" class="control-label">Luas Bangunan</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->LUAS_BANGUNAN; ?> Meter Persegi</label>
										</div>
									</div>
                                                                        <div class="control-group edittest" style="display:none" >
										<label for="textfield" class="control-label">Status</label>
										<div class="controls">
											<select name="select" id="select" class="input-large">
												<option value="1">Verivied</option>
												<option value="2">Expired</option>
												<option value="3">Unverivied</option>
												
											</select>
										</div>
									</div>
                                                                    <div class="control-group edittest" style='display:none'>
										<label for="textfield" class="control-label">Tipe Listing</label>
										<div class="controls">
											<select name="select" id="select" class="input-large">
												<option value="1">Stock</option>
												<option value="2">Open</option>
												<option value="3">Exclusive</option>
												
											</select>
										</div>
									</div>
                                                                        <div class="control-group notedittest"  >
										<label for="textfield" class="control-label">Status</label>
                                                                                <div class="controls">
                                                                                    
                                                                                        <label for="textfield" class="control-label"><?php echo $listing->status_data; ?></label>
                                                                                    

										
                                                                                </div>
									
									</div>
                                                                    <div class="control-group notedittest">
										<label for="textfield" class="control-label">Tipe Listing</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->tipe_listing; ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Kontak Agen</label>
                                                                                <?php if(isset($contacts)) {
                                                                                        foreach($contacts as $contact){ ?>
                                                                                            <div class="controls">

                                                                                                        <label for="textfield" class="control-label"><?php echo $contact->NAMA; ?></label>
                                                                                                        <label for="textfield" class="control-label"><?php echo $contact->kantor; ?></label>
                                                                                                        <label for="textfield" class="control-label"><?php echo $contact->TELEPON; ?></label>
                                                                                                   


                                                                                            </div>
                                                                                <?php }
                                                                                } ?>
									</div>
                                                                       
									<div class="form-actions">
										<input id='test' style="padding-left: 10px" type="button" value='Edit' class="btn btn-primary"></input>
										
									</div>
								</form>
							</div>
						</div>
					</div>
                            </div>
                            <div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-reorder"></i>
										Spesifikasi dan Informasi
									</h3>
									<ul class="tabs">
										<li class="active">
											<a href="#t1" data-toggle="tab">Detail</a>
										</li>
										<li class="">
											<a href="#t2" data-toggle="tab">Alamat dan Lokasi</a>
										</li>
										<li class="">
											<a href="#t3" data-toggle="tab">Informasi Pemilik</a>
										</li>
                                                                               <?php if(!isset($isadmin) || (isset($isadmin) && $isadmin)){ ?>
                                                                                <li class="">
											<a href="#t4" data-toggle="tab">Aktivitas marketing</a>
										</li>
                                                                                <?php } ?>
									</ul>
								</div>
								<div class="box-content">
									<div class="tab-content">
										<div class="tab-pane active" id="t1">
											<h4>Informasi Detail</h4>
											<form action="#" method="POST" class="form-horizontal form-striped">
                                                                                            
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Sertifikat :</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->SERTIFIKAT; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Jumlah Kamar Tidur</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->KAMAR_TIDUR; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Jumlah Kamar Mandi</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->KAMAR_MANDI; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group notedittest">
                                                                                                    <label for="textfield" class="control-label">Luas Tanah</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->LUAS_TANAH; ?> Meter Persegi</label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group notedittest">
                                                                                                    <label for="textfield" class="control-label">Luas Bangunan</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->LUAS_BANGUNAN; ?> Meter Persegi</label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Lantai</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->LANTAI; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Daya Listrik</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->DAYA_LISTRIK. " Watt"; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Garasi</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->GARASI; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Jalur Telepon</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->JALUR_TELEPON; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </form>
										</div>
										<div class="tab-pane" id="t2">
											<h4>Alamat dan Lokasi</h4>
											<form action="#" method="POST" class="form-horizontal form-striped">
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Propinsi :</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->propinsi; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Kota</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->kota; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Area :</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->area; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Lokasi</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->lokasi; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Alamat:</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->ALAMAT_LENGKAP; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="span12">
                                                                                                    <div class="box">
                                                                                                            <div class="box-title">
                                                                                                                    <h3>
                                                                                                                            <i class="icon-map-marker"></i>
                                                                                                                            Peta
                                                                                                                    </h3>
                                                                                                            </div>
                                                                                                            <div class="box-content">
                                                                                                                <div id="map-canvas"></div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </form>
										</div>
										<div class="tab-pane" id="t3">
											<h4>Informasi Pemilik</h4>
											<form action="#" method="POST" class="form-horizontal form-striped">
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Nama Pemilik:</label>
                                                                                                    <div class="controls">
                                                                                                        <?php if(isset($vendor)){ ?>
                                                                                                            <label for="textfield" class="control-label"><?php echo $vendor->NAMA; ?></label>
                                                                                                                
                                                                                                       <?php }?>
                                                                                                            
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Alamat :</label>
                                                                                                    <div class="controls">
                                                                                                        <?php if(isset($vendor)){ ?>
                                                                                                            <label for="textfield" class="control-label"><?php echo $vendor->ALAMAT; ?></label>
                                                                                                                
                                                                                                       <?php }?>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Kontak</label>
                                                                                                    <div class="controls">
                                                                                                            <?php if(isset($vendor)){ ?>
                                                                                                            <label for="textfield" class="control-label"><?php echo $vendor->TELEPON; ?></label>
                                                                                                                
                                                                                                       <?php }?>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </form>
										</div>
                                                                                
                                                                                <?php if(!isset($isadmin) || (isset($isadmin) && $isadmin)){ ?>
                                                                                <div class="tab-pane" id="t4">
                                                                                    <h4>Media Promosi</h4>
                                                                                    
                                                                                    
                                                                                        <table class="table table-hover table-nomargin dataTable table-bordered">
                                                                                            <thead>
                                                                                                    <tr>

                                                                                                            <th>Tanggal</th>
                                                                                                            <th>Jenis Media</th>
                                                                                                            <th>Jumlah</th>
                                                                                                            <th>Actions</th>
                                                                                                            <!--<th>Lokasi</th>-->
                                                                                                            
                                                                                                    </tr>
                                                                                            </thead>
                                                                                            <tbody id="datapromosi">
                                                                                                <?php if(isset($promotions)){
                                                                                                    foreach($promotions as $promotion){?>
                                                                                                        <tr <?php echo "id='tr_pro_".$promotion->PROMOSIID."'"; ?>>
                                                                                                            <td><?php $datetime = strtotime($promotion->TANGGAL);
                                                                                                                      $mysqldate = date("j F Y", $datetime);
                                                                                                                      echo $mysqldate;?></td>
                                                                                                            <td><?php echo $promotion->PROMOSI; ?></td>
                                                                                                            <td><?php echo $promotion->JUMLAH; ?></td>
                                                                                                            <td><a role="button" class="btn" href="#modalAktivitas" onclick='showmodal("Promosi","<?php echo $promotion->PROMOSIID; ?>");' data-toggle="modal">edit</a>
                                                                                                                <a href="#" class="btn">delete</a></td>
                                                                                                            <!--<td></td>-->
                                                                                                        </tr>
                                                                                                    <?php }
                                                                                                } ?>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
<!--                                                                                        <button type="button" id="btnpromo" onclick="" class="btn btn-primary">Tambah</button>-->
                                                                                        <a href="#modalAktivitas" role="button" class="btn btn-primary" id='btnPromosi' onclick='showmodal("Promosi","");'  data-toggle="modal">Tambah</a>
                                                                                    <br/>
                                                                                    <h4>Customer Relation</h4>
                                                                                    
                                                                                    
                                                                                        <table class="table table-hover table-nomargin dataTable table-bordered">
                                                                                            <thead>
                                                                                                    <tr>

                                                                                                            <th>Tanggal</th>
                                                                                                                                                                                                                        
                                                                                                            <th>Jenis Aktivitas</th>
                                                                                                            
                                                                                                            <th>Nama Customer</th>
                                                                                                            <th>Keterangan</th>
                                                                                                            <th>Actions</th>
                                                                                                    </tr>
                                                                                            </thead>
                                                                                            <tbody id="dataaktivitas">
                                                                                                <?php if(isset($activities)){
                                                                                                    foreach($activities as $activity){?>
                                                                                                        <tr <?php echo "id='tr_akt_".$activity->AKTIVITASID."'"; ?>>
                                                                                                            <td>
                                                                                                                <?php $datetime = strtotime($activity->TANGGAL);
                                                                                                                      $mysqldate = date("j F Y", $datetime);
                                                                                                                      echo $mysqldate;?>
                                                                                                            </td>
                                                                                                            <td><?php echo $activity->AKTIVITAS; ?></td>
                                                                                                            <td><?php echo $activity->NAMA_CUSTOMER; ?></td>
                                                                                                            <td><?php echo $activity->KETERANGAN; ?></td>
                                                                                                            <td><a href="#modalAktivitas" role="button" class="btn" onclick='showmodal("Aktivitas","<?php echo $activity->AKTIVITASID; ?>");' data-toggle="modal" >edit</a>
                                                                                                                <a href="#" class="btn">delete</a></td>
                                                                                                            <!--<td></td>-->
                                                                                                        </tr>
                                                                                                    <?php }
                                                                                                } ?>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
<!--                                                                                    <button type="button" id="btnmarketing" onclick="" class="btn btn-primary">Tambah</button>-->
                                                                                    <a href="#modalAktivitas" role="button" class="btn btn-primary" id='btnPromosi' onclick='showmodal("Aktivitas","");'  data-toggle="modal">Tambah</a>
                                                                                </div>
                                                                                <?php } ?>
									</div>
								</div>
							</div>
						</div>
						
					</div>
                            <br/>
                            <button type="button" id="btnupload" onclick="window.location='buyer_match.php'" class="btn btn-primary">Buyer Match</button>
			</div>
		</div>
	</div>