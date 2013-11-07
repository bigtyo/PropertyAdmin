<div class="container-fluid nav-hidden" id="content">
		
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Property Listing</h1>
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
							<a href="tables-basic.html">Marketing Tools</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Email Listing</a>
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
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Tipe Data
								</h3>
							</div>
                                                    <div class="box-content nopadding">
                                                        <div class="control-group edittest" style="margin-left: 10px" >
                                    
                                                                <label for="textfield" class="control-label">Data Listing</label>
                                                                <div class="controls">
                                                                    <select name="select" id="selectOffice" class="input-large">
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
											<th class="hidden-350">Tipe</th>
											<th>Alamat</th>
											<th>Harga</th>
                                                                                        <th>Agen</th>
                                                                                        <th>Kontak</th>
                                                                                        
                                                                                        <th>Tipe Listing</th>
                                                                                        <th>Match</th>
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                            <?php foreach ($listings as $listing) {?>
                                                                                <tr style="cursor:pointer">
                                                                                    <td><a href="listingdetail.php"><img src="img/rumah70.jpg"></a></td>
                                                                                    <td><?php echo "211"; ?></td>
                                                                                    <td class="hidden-350"><?php echo "Rumah"; ?></td>
                                                                                    <td><?php echo "Jl Darma Husada 3 / 14"; ?></td>
                                                                                    <td><?php echo "Rp 650.000.000"; ?></td>
                                                                                    <td><?php echo "Me"; ?></td>
                                                                                    <td><?php echo "085621766622"; ?></td>

                                                                                    <td><span class="label label-satgreen"><?php echo "Exclusive" ?></span></td>
                                                                                    <td><a href='buyer_match.php'><?php echo "4 Match"; ?></a></td>
                                                                                </tr>           
                                                                            <?php } ?>
                                                                            
                                                                            
                                                                            
                                                                        </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
