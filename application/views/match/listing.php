<div class="container-fluid nav-hidden" id="content">
		
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
											<label for="textfield" class="control-label"><?php echo $listing->LISTINGID; ?></label>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Harga :</label>
										<div class="controls">
											<label for="textfield" class="control-label">Rp <?php echo $listing->HARGA; ?></label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Tipe</label>
										<div class="controls">
											<label for="textfield" class="control-label">Rumah</label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Jumlah Kamar</label>
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
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Luas Tanah</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->LUAS_TANAH; ?> Meter Persegi</label>
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="textfield" class="control-label">Luas Bangunan</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $listing->LUAS_BANGUNAN; ?> Meter Persegi</label>
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
									List Customer yang sedang mencari Property ini
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin dataTable table-bordered">
									<thead>
										<tr>
                                                                                        
											<th>Nama</th>
											<th>Email</th>
											<th>Telepon</th>
											<th>Alamat</th>
                                                                                        <th>Range Harga Pencarian</th>
                                                                                        
                                                                                        
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                            <?php if(isset($customers)){
                                                                            foreach($customers as $customer){ ?>
                                                                            
                                                                            <tr style="cursor:pointer">
                                                                                <td><?php echo $customer->NAMA; ?></td>
                                                                                <td><?php echo $customer->EMAIL; ?></td>
                                                                                <td><?php echo $customer->TELEPON; ?></td>
                                                                                <td><?php echo $customer->ALAMAT; ?></td>
                                                                                <td><?php echo $customer->RANGE_HARGA; ?></td>
                                                                                
                                                                                
                                                                                
                                                                            </tr>
                                                                            <?php }
                                                                            }?>
                                                                         </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                            
                            
                            
			</div>
		</div>
	</div>