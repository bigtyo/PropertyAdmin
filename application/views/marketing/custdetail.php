
<div class="container-fluid nav-hidden" id="content">
    <input type="hidden" id="custId" value="<?php echo $customerid; ?>" />
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Detail Customer</h1>
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
										<label for="textfield" class="control-label">User ID:</label>
										<div class="controls">
											<label for="textfield" class="control-label"><?php echo $customer->CUSTOMERID; ?></label>
										</div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Real Name :</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->NAMA; ?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Tanggal Lahir:</label>
                                                                                    <div class="controls">
                                                                                        <label for="textfield" class="control-label"><?php echo $customer->tgl_lahir ; ?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Phone:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->TELEPON; ?></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Email:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label"><?php echo $customer->EMAIL; ?></label>
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
										<i class="icon-reorder"></i>
										Amy Lee's Activity
									</h3>
								</div>
								<div class="box-content nopadding">
									<ul class="timeline">
										<li>
											<div class="timeline-content">
												<div class="left">
													<div class="icon">
														<i class="icon-picture"></i>
													</div>
													<div class="date">23. Apr</div>
												</div>
												<div class="activity">
													<div class="user"><a href="visitormanage.php">Amy Lee</a> <span>melihat halaman untuk property</span><a href="#">#RefId 775</a> </div>
													
												</div>
											</div>
											<div class="line"></div>
										</li>
                                                                                <li>
											<div class="timeline-content">
												<div class="left">
													<div class="icon">
														<i class="icon-picture"></i>
													</div>
													<div class="date">25. Apr</div>
												</div>
												<div class="activity">
													<div class="user"><a href="visitormanage.php">Amy Lee</a> <span>melakukan pencarian dengan Keyword "Lokasi = Sidoarjo, Harga < Rp 500.000.000" </span></div>
													
												</div>
											</div>
											<div class="line"></div>
										</li>
                                                                                
                                                                                <li>
											<div class="timeline-content">
												<div class="left">
													<div class="icon">
														<i class="icon-picture"></i>
													</div>
													<div class="date">25. Apr</div>
												</div>
												<div class="activity">
													<div class="user"><a href="visitormanage.php">Amy Lee</a> <span>melihat halaman untuk property</span><a href="#">#RefId 777</a> </div>
													
												</div>
											</div>
											<div class="line"></div>
										</li>
									</ul>
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
									Permintaan Pencarian
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin dataTable table-bordered">
									<thead>
										<tr>
											<th>Tanggal</th>
											<th>Kota</th>
                                                                                        <th>Area</th>
											<th >Tipe Property</th>
											<th >Range Harga</th>
                                                                                        <th >Luas Tanah</th>
                                                                                        <th >Luas Bangunan</th>
											<th >Jumlah Kamar Tidur</th> <!-- class='hidden-350'-->
                                                                                        <th>Match</th>
										</tr>
									</thead>
									<tbody id="history">
                                                                            <?php if(isset($histories)){
                                                                                foreach($histories as $history)
                                                                                {?>
                                                                                    <tr>
                                                                                        <td><?php echo $history->TANGGAL; ?></td>
                                                                                        <td><?php echo $history->KOTA; ?></td>
                                                                                        <td><?php echo $history->AREA; ?></td>
                                                                                        <td><?php echo $history->TIPEPROP; ?></td>
                                                                                        <td><?php echo $history->range_harga; ?></td>
                                                                                        <td><?php echo $history->LUAST; ?></td>
                                                                                        <td><?php echo $history->LUASB; ?></td>
                                                                                        <td><?php echo $history->JMLKT; ?></td>
                                                                                        <td <?php echo 'id="refresh"'.$history->HISTORYID; ?> ><a href="../match/listing"><?php echo $history->matches; ?></a></td>
                                                                                    </tr>
                                                                                <?php }
                                                                            } ?>
                                                                        </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                            <br/>
                            <a href="#inputHistory" role="button" class="btn btn-primary" id="btnAdd">Masukkan pencarian baru</a>
                            <div class="row-fluid" id="inputHistory" style="display:none">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3><i class="icon-list"></i> Input Pencarian Customer</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class="form-horizontal form-column form-bordered">
									<div class="span6">
                                                                                <div class="control-group">
                                                                                        <label for="textarea" class="control-label">Range Harga</label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="textfield" id="rangeAwal"  class="spinner input-medium"> - 
                                                                                            <input type="text" name="textfield" id="rangeAkhir"  class="spinner input-medium">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="selPropinsi" class="control-label">Propinsi</label>
                                                                                        <div class="controls">
                                                                                                <select name="select" id="selPropinsi" class="input-large">
                                                                                                    <option value="1" >Jawa Timur</option>  
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="selArea" class="control-label">Area</label>
                                                                                        <div class="controls">
                                                                                                <select name="select" id="selArea" class="input-large">
                                                                                                    <option value="1" >Surabaya Timur</option>
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
                                                                                
										<div class="control-group">
                                                                                        <label for="textfield" class="control-label">Luas Bangunan</label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="textfield" id="luasB"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="password" class="control-label">Luas Tanah</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="luasT"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <div class="control-group">
                                                                                        <label for="textarea" class="control-label">Lantai</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="lantai"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="textarea" class="control-label">Kondisi</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="kondisi"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="textarea" class="control-label">Kamar Tidur</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="kamarTidur"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="textarea" class="control-label">Sertifikat</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="sertifikat"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                
									</div>
									<div class="span6">
                                                                                <div class="control-group">
                                                                                        <label for="selProp" class="control-label">Tipe Property</label>
                                                                                        <div class="controls">
                                                                                                <select name="select" id="selProp" class="input-large">
                                                                                                        
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
										<div class="control-group">
                                                                                        <label for="selKota" class="control-label">Kota</label>
                                                                                        <div class="controls">
                                                                                                <select name="select" id="selKota" class="input-large">
                                                                                                    <option value="1" >Surabaya</option>
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="selLokasi" class="control-label">Lokasi</label>
                                                                                        <div class="controls">
                                                                                                <select name="select" id="selLokasi" class="input-large">
                                                                                                    <option value="1" >Darma Husada</option>
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <div class="controls">
                                                                                                <label class="checkbox">
                                                                                                        <input type="checkbox" name="checkbox" /> Furnish
                                                                                                </label>

                                                                                        </div>
                                                                                </div>
                                                                                
										<div class="control-group">
                                                                                        <label for="textarea" class="control-label">Daya Listrik</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="listrik"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="textfield" class="control-label">Kamar Mandi</label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="textfield" id="kamarMandi"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="password" class="control-label">Garasi</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="garasi"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label for="textarea" class="control-label">Jalur Telepon</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" name="textfield" id="jalurTelepon"  class="spinner input-mini">
                                                                                        </div>
                                                                                </div>
                                                                                
									</div>
									<div class="span12">
										<div class="form-actions">
											<input type="button" class="btn btn-primary" id="btnSave" value="Save changes"/>
											<input type="button" class="btn" id="btnCancel" value="Cancel" />
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
			    </div>
			</div>
		</div>
	</div>