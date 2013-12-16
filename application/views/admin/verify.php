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
									<ul class="gallery">
										<li>
											<a href="#">
												<img src="img/demo/1.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/1.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="img/demo/2.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/2.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="img/demo/3.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/3.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="img/demo/4.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/4.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="img/demo/5.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/5.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="img/demo/6.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/6.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
                                                                                <li>
											<a href="#">
												<img src="img/demo/7.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/7.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
                                                                                <li>
											<a href="#">
												<img src="img/demo/8.jpg" alt="">
											</a>
											<div class="extras">
												<div class="extras-inner">
													<a href="img/demo/big/8.jpg" class="colorbox-image cboxElement" rel="group-1"><i class="icon-search"></i></a>
													<a href="#"><i class="icon-pencil"></i></a>
													<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>
												</div>
											</div>
										</li>
										
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
											<label for="textfield" id="listingid" class="control-label"><?php echo $listing->listingid; ?></label>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Harga :</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo "Rp ".number_format($listing->harga, 2, ',', '.'); ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Tipe</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->nama_tipe; ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Jumlah Kamar Tidur</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->kamar_tidur; ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Jumlah Kamar Mandi</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->kamar_mandi; ?></label>
										</div>
									</div>
                                                                        <div class="control-group notedittest">
										<label for="textfield" class="control-label">Luas Tanah</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->luas_tanah; ?> Meter Persegi</label>
										</div>
									</div>
                                                                        <div class="control-group notedittest">
										<label for="textfield" class="control-label">Luas Bangunan</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->luas_bangunan; ?> Meter Persegi</label>
										</div>
									</div>
                                                                        <div class="control-group edittest"  >
										<label for="textfield" class="control-label">Status</label>
										<div class="controls">
											<select name="select" id="select" class="input-large">
												<option value="1">Verivied</option>
												<option value="2">Expired</option>
												<option value="3">Unverivied</option>
												
											</select>
										</div>
									</div>
                                                                    <div class="control-group edittest">
										<label for="textfield" class="control-label">Tipe Listing</label>
										<div class="controls">
											<select name="select" id="select" class="input-large">
												<option value="1">Stock</option>
												<option value="2">Open</option>
												<option value="3">Exclusive</option>
												
											</select>
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
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->sertifikat; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Jumlah Kamar Tidur</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->kamar_tidur; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Jumlah Kamar Mandi</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->kamar_mandi; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group notedittest">
                                                                                                    <label for="textfield" class="control-label">Luas Tanah</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->luas_tanah; ?> Meter Persegi</label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group notedittest">
                                                                                                    <label for="textfield" class="control-label">Luas Bangunan</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->luas_bangunan; ?> Meter Persegi</label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Lantai</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->lantai; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Daya Listrik</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->daya_listrik. " Watt"; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Garasi</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->garasi; ?></label>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="control-group">
                                                                                                    <label for="textfield" class="control-label">Jalur Telepon</label>
                                                                                                    <div class="controls">
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->jalur_telepon; ?></label>
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
                                                                                                            <label for="textfield" class="control-label"><?php echo $listing->alamat_lengkap; ?></label>
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
                                                                                
									</div>
								</div>
							</div>
						</div>
						
					</div>
                            <br/>
                            
			</div>
		</div>
	</div>