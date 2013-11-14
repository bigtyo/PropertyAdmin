<div class="container-fluid" id="content">
		
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Marketing Entry Report</h1>
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
							<a href="plugins-charts.html">Report</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="plugins-charts.html">Performance</a>
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
									<i class="icon-magic"></i>
									Call in 
								</h3>
							</div>
							<div class="box-content nopadding">
                                                            <form class='form-horizontal form-wizard wizard-vertical' id="ssss">

                                                                      <div class="step" >
                                                                        <ul class="wizard-steps steps-3">
                                                                                <li onclick="activateForm(this,1);" class='active liform' id="li1" style="cursor: pointer">
                                                                                        <div class="single-step">
                                                                                                
                                                                                                <span class="circle">
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Informasi Penelepon
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
                                                                                <li onclick="activateForm(this,2);" id="li2" style="cursor: pointer;display:none">
                                                                                        <div class="single-step">
                                                                                                
                                                                                                <span class="circle">
                                                                                                        <span class="active"></span>
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Spesifikasi Pencarian
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
                                                                                <li onclick="activateForm(this,3);" id="li3" style="cursor: pointer;display:none">
                                                                                        <div class="single-step">
                                                                                                
                                                                                                <span class="circle">
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Spesifikasi Listing
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
                                                                        </ul>
                                                                           <div class="form-content" id="form1">
                                                                               <div class="span12">
                                                                                   <div class="control-group">
                                                                                            <label for="firstname" class="control-label">Nama Lengkap</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="firstname" id="nama" class="input-xlarge">
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="anotherelem" class="control-label">Email</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="anotherelem" id="email" class="input-xlarge">
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="additionalfield" class="control-label">Telepon</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="additionalfield" id="telepon" class="input-xlarge">
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="additionalfield" class="control-label">Alamat Lengkap</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="additionalfield" id="alamat" class="input-xlarge">
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="additionalfield" class="control-label">Tipe Customer</label>
                                                                                             <div class="controls">
                                                                                                 <input type="checkbox" id="chk1" onclick="setTipeCustomer(1);" >
                                                                                                    <label for="chk3" class="control-label">Investor</label>
                                                                                             </div>





                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                        <div class="controls">
                                                                                                    <input type="checkbox" id="chk2" onclick="setTipeCustomer(2);" >
                                                                                                    <label for="chk1" class="control-label">Buyer</label>
                                                                                                </div>

                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                        <div class="controls">
                                                                                                    <input type="checkbox" id="chk3" onclick="setTipeCustomer(3);" >
                                                                                                    <label for="chk2" class="control-label">Vendor</label>
                                                                                                </div>

                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Pilih Marketing</label>
                                                                                            <div class="controls">
                                                                                                    <select name="gend" id="marketingid" class="ui-wizard-content">
                                                                                                            <?php if(isset($marketings)){ 
                                                                                                                foreach($marketings as $marketing)
                                                                                                                { ?>
                                                                                                                    <option value="<?php echo $marketing->MARKETINGID; ?>" ><?php echo $marketing->NAMA; ?></option>
                                                                                                                <?php }
                                                                                                             } ?>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                               </div>
                                                                                
                                                                               
                                                                            </div>
                                                                           <div class="form-content" id="form2" style="display:none">
                                                                               <div class="span12">
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Tipe Property</label>
                                                                                            <div class="controls">
                                                                                                    <select name="gend" id="selProp" class="ui-wizard-content">
                                                                                                            <option value="1">Rumah</option>
                                                                                                            <option value="2">Tanah</option>
                                                                                                            <option value="3">Ruko</option>
                                                                                                            <option value="4">Gudang</option>
                                                                                                            <option value="5">Gedung</option>
                                                                                                            <option value="6">Pabrik</option>
                                                                                                            <option value="7">Apartemen</option>
                                                                                                            <option value="8">Condotel</option>
                                                                                                            <option value="9">Stand</option>
                                                                                                    </select>
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
                                                                                            <label for="selKota" class="control-label">Kota</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selKota" class="input-large">
                                                                                                        <option value="1" >Surabaya</option>
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
                                                                                            <label for="selLokasi" class="control-label">Lokasi</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selLokasi" class="input-large">
                                                                                                        <option value="1" >Darma Husada</option>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Range Harga</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="additionalfield" id="harga_awal" class="input-large"/>
                                                                                                <input type="text" name="additionalfield" id="harga_akhir" class="input-large"/>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group">
                                                                                            <label for="luas_tanah" class="control-label">Luas Tanah</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="additionalfield" id="luas_tanah" class="input-large"/>
                                                                                                
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Luas Bangunan</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="additionalfield" id="luas_bangunan" class="input-large"/>
                                                                                                
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Jumlah Kamar Tidur</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="additionalfield" id="kamar_tidur" class="input-large"/>
                                                                                                
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Jumlah Kamar Mandi</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="additionalfield" id="kamar_mandi" class="input-large"/>
                                                                                                
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                          </div>
                                                                          <div class="form-content" id="form3" style="display:none">
                                                                               <div class="span12">
                                                                                   <div class="control-group">
                                                                                            <label for="text" class="control-label">Tipe Property</label>
                                                                                            <div class="controls">
                                                                                                    <select name="gend" id="selProp_listing" class="ui-wizard-content">
                                                                                                            <option value="1">Rumah</option>
                                                                                                            <option value="2">Tanah</option>
                                                                                                            <option value="3">Ruko</option>
                                                                                                            <option value="4">Gudang</option>
                                                                                                            <option value="5">Gedung</option>
                                                                                                            <option value="6">Pabrik</option>
                                                                                                            <option value="7">Apartemen</option>
                                                                                                            <option value="8">Condotel</option>
                                                                                                            <option value="9">Stand</option>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="selPropinsi" class="control-label">Propinsi</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selPropinsi_listing" class="input-large">
                                                                                                        <option value="1" >Jawa Timur</option>  
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="selKota" class="control-label">Kota</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selKota_listing" class="input-large">
                                                                                                        <option value="1" >Surabaya</option>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="selArea" class="control-label">Area</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selArea_listing" class="input-large">
                                                                                                        <option value="1" >Surabaya Timur</option>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>

                                                                                    <div class="control-group">
                                                                                            <label for="selLokasi" class="control-label">Lokasi</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selLokasi_listing" class="input-large">
                                                                                                        <option value="1" >Darma Husada</option>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="anotherelem" class="control-label">Alamat Lengkap</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="anotherelem" id="alamat_listing" class="input-xlarge">
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                
                                                                                   
                                                                               </div>
                                                                                
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-actions">
<!--                                                                                <input type="reset" class="btn" value="Back" id="back">
                                                                                <input type="button" class="btn btn-primary" value="Next" id="next">-->
                                                                                <input type="button" class="btn btn-primary" value="Submit" onclick="addCallinBaru();"  id="btnSubmit">
                                                                        </div>
                                                                </form>
								
							</div>
						</div>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
</div>