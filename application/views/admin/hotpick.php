<div class="container-fluid nav-hidden" id="content">
		<input type="hidden" id="listid" value="<?php echo $listid; ?>" />
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Listing Hotpick</h1>
					</div>
<!--					<div class="pull-right">
						
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
					</div>-->
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-basic.html">Admin</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Hotpick</a>
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
                                                                        List Hot pick Tanggal <?php if(isset($tanggal_hotpick)){
                                                                            echo $tanggal_hotpick;
                                                                        } ?>
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
                                                                                        
											<th>Gambar</th>
											<th>RefId</th>
											<th class='hidden-350'>Tipe</th>
											<th >Lokasi</th>
											<th >Harga</th>
                                                                                        <th >Kantor</th>
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                        <?php if(isset($listings_hotpick)){
                                                                            foreach($listings as $listing)
                                                                            {?>
                                                                                <tr>
                                                                                    
                                                                                    <td><a href="#"><img style="max-width: 20px; max-height: 20px" src="<?php echo NODE_URL."/getimagelisting?id=".$listing->listingid; ?>" /></a></td>
                                                                                    <td class="listingid"><?php echo $listing->listingid; ?></td>
                                                                                    <td><?php echo $listing->nama_tipe; ?></td>
                                                                                    <td><?php echo $listing->nama_lokasi; ?></td>
                                                                                    <td><?php echo $listing->harga; ?></td>
                                                                                    <td><?php echo $listing->nama_kantor; ?></td>
                                                                                </tr>
                                                                                
                                                                            <?php }
                                                                        }?> 	
									</tbody>
								</table>
								
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
                                                                        Pilih data property yang akan di jadikan  (MAX <?php if(isset($max)){ echo $max;} ?>)
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
                                                                                        <th><input id="selectall" type="checkbox" /></th>
											<th>Gambar</th>
											<th>RefId</th>
											<th class='hidden-350'>Tipe</th>
											<th >Lokasi</th>
											<th >Harga</th>
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                        <?php if(isset($listings)){
                                                                            foreach($listings as $listing)
                                                                            {?>
                                                                                <tr>
                                                                                    <td><input type="checkbox" class="selectedlist" /></td>
                                                                                    <td><a href="#"><img style="max-width: 20px; max-height: 20px" src="<?php echo NODE_URL."/getimagelisting?id=".$listing->listingid; ?>" /></a></td>
                                                                                    <td class="listingid"><?php echo $listing->listingid; ?></td>
                                                                                    <td><?php echo $listing->nama_tipe; ?></td>
                                                                                    <td><?php echo $listing->nama_lokasi; ?></td>
                                                                                    <td><?php echo $listing->harga; ?></td>
                                                                                </tr>
                                                                                
                                                                            <?php }
                                                                        }?> 	
									</tbody>
								</table>
								
							</div>
						</div>
                                            <a href="#" onclick="submithotpick();" class="btn btn-primary" >Submit ke Hotpick Minggu ini</a>
					</div>
				</div>
                            <br/>
                            
                            
			</div>
		</div>
	</div>