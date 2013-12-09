<div class="container-fluid nav-hidden" id="content">
		
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Customer Database Management</h1>
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
							<a href="tables-basic.html">Marketing Tools</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Customer Database Management</a>
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
                                                <input type="hidden" id="tempid" value="<?php echo $tempid; ?>" />
                                                <div class="box box-color box-bordered lightred">
                                                        <div class="box-title">
                                                                <h3>
                                                                        <i class="icon-magic"></i>
                                                                        Vertical steps
                                                                </h3>
                                                        </div>
                                                        <div class="box-content nopadding">
                                                                <div class='form-horizontal form-wizard wizard-vertical' >

                                                                      <div class="step" >
                                                                        <ul class="wizard-steps steps-3">
                                                                                <li onclick="activateForm(this,1);" class='active liform' id="li1">
                                                                                        <div class="single-step">
                                                                                                <span class="title">1</span>
                                                                                                <span class="circle">
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Informasi Pemilik
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
                                                                                <li onclick="activateForm(this,2);" id="li2">
                                                                                        <div class="single-step">
                                                                                                <span class="title">
                                                                                                        2</span>
                                                                                                <span class="circle">
                                                                                                        <span class="active"></span>
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Spesifikasi Property
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
                                                                                <li onclick="activateForm(this,3);" id="li3">
                                                                                        <div class="single-step">
                                                                                                <span class="title">
                                                                                                        3</span>
                                                                                                <span class="circle">
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Alamat, lokasi dan Peta
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
<!--                                                                                <li id="li4">
                                                                                        <div class="single-step">
                                                                                                <span class="title">
                                                                                                        4</span>
                                                                                                <span class="circle">
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Gambar
                                                                                                </span>
                                                                                        </div>
                                                                                </li>-->
                                                                        </ul>
                                                                           <div class="form-content" id="form1">
                                                                               <div class='span12'>
                                                                                   <div class="control-group">
                                                                                            <label for="text" class="control-label">Nama</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="textfield" id="L_Nama_Pemilik"  class="input-large">
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Nomor Telepon</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="textfield" id="L_Telepon_Pemilik"  class="input-large">
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Email</label>
                                                                                            <div class="controls">
                                                                                                <input type="text" name="textfield" id="L_Email_Pemilik"  class="input-large">
                                                                                            </div>
                                                                                    </div>
                                                                               </div>
                                                                                
                                                                               
                                                                            </div>
                                                                           <div class="form-content" id="form2" style="display:none">
                                                                               <div class='span6'>
                                                                                   <div class="control-group">
                                                                                        <label for="selProp" class="control-label">Tipe Property</label>
                                                                                        <div class="controls">
                                                                                                <select name="select" id="selProp" class="input-large">
                                                                                                    <?php if(isset($tipeproperty)){
                                                                                                        foreach($tipeproperty as $obj){ ?>
                                                                                                            <option value="<?php echo $obj->TIPEPROPID; ?>" ><?php echo $obj->NAMA_TIPE; ?></option>
                                                                                                            
                                                                                                        <?php }
                                                                                                    } ?>
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
                                                                                            <label for="selHadap"  class="control-label">Lain-lain</label>
                                                                                            <div class="controls">
                                                                                                    <label class="checkbox">
                                                                                                            <input type="checkbox" name="checkbox" /> Furnish
                                                                                                    </label>

                                                                                            </div>
                                                                                    </div>
                                                                                   <div class="control-group">
                                                                                            <label  class="control-label">Hadap</label>
                                                                                            <div class="controls">
                                                                                                <select name="hadap" id="selHadap" class="input-large">
                                                                                                    <?php if(isset($hadap)){
                                                                                                        foreach($hadap as $obj){ ?>
                                                                                                            <option value="<?php echo $obj->hadapid; ?>" ><?php echo $obj->hadap; ?></option>
                                                                                                            
                                                                                                        <?php }
                                                                                                    } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                    </div>
                                                                                   <a href="../upload/listing?listingid=<?php echo $tempid; ?>" onclick="return !window.open(this.href, 'Rumah Super', 'width=500,height=500')" target="_blank" class="btn ">Upload Photo</a> 
                                                                               </div>
                                                                                <div class='span6'>
                                                                                    <div class="control-group">
                                                                                            <label for="selTipe" class="control-label">Tipe Listing</label>
                                                                                            <div class="controls">
                                                                                                <select name="select" id="selTipe" class="input-large">
                                                                                                    <?php if(isset($tipelisting)){
                                                                                                        foreach($tipelisting as $obj){ ?>
                                                                                                            <option value="<?php echo $obj->TIPELISTINGID; ?>" ><?php echo $obj->NAMA; ?></option>
                                                                                                            
                                                                                                        <?php }
                                                                                                    } ?>
                                                                                                        
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="textarea" class="control-label">Sertifikat</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="textfield" id="sertifikat"  class="spinner input-mini">
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
                                                                                    <div class="control-group">
                                                                                            <label for="textarea" class="control-label">Harga</label>
                                                                                            <div class="controls">
                                                                                                    <input type="text" name="textfield" id="Harga"  class="spinner input-medium">
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                               
                                                                                    
                                                                                
                                                                          </div>
                                                                          <div class="form-content" id="form3" style="display:none">
                                                                              <div class='span12'>
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
                                                                                                    <?php if(isset($kota)){
                                                                                                        foreach($kota as $obj){ ?>
                                                                                                            <option value="<?php echo $obj->KOTAID; ?>" ><?php echo $obj->NAMA_KOTA; ?></option>
                                                                                                            
                                                                                                        <?php }
                                                                                                    } ?>
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="selArea" class="control-label">Area</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selArea" class="input-large">
                                                                                                        <?php if(isset($area)){
                                                                                                            foreach($area as $obj){ ?>
                                                                                                                <option value="<?php echo $obj->AREAID; ?>" ><?php echo $obj->NAMA_AREA; ?></option>

                                                                                                            <?php }
                                                                                                        } ?>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="selLokasi" class="control-label">Lokasi</label>
                                                                                            <div class="controls">
                                                                                                    <select name="select" id="selLokasi" class="input-large">
                                                                                                       <?php if(isset($lokasi)){
                                                                                                            foreach($lokasi as $obj){ ?>
                                                                                                                <option value="<?php echo $obj->LOKASIID; ?>" ><?php echo $obj->NAMA_LOKASI; ?></option>

                                                                                                            <?php }
                                                                                                        } ?>
                                                                                                    </select>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                            <label for="textarea" class="control-label">Alamat Lengkap</label>
                                                                                            <div class="controls">
                                                                                                <textarea  name="textfield" id="Alamat_Lengkap"  class="input-large"> </textarea>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Peta</label>
                                                                                            <div class="controls" >
                                                                                                <div class="box">
                                                                                                        <div class="box-title">
                                                                                                                <h3>
                                                                                                                        <i class="icon-map-marker"></i>
                                                                                                                        Peta lokasi
                                                                                                                </h3>
                                                                                                        </div>
                                                                                                        <div class="box-content">
                                                                                                                <div id="map4"></div>
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                              </div>
                                                                                
                                                                            </div>
<!--                                                                          <div class="form-content" id="form4" style="display:none">
                                                                              <div class="span12">
                                                                                   <div class="control-group">
                                                                                            <label for="textarea" class="control-label">Gambar</label>
                                                                                            <div class="controls">
                                                                                                  <ul class="gallery" id="gallery">
                                                                                                    <li>
                                                                                                            <a href="#">
                                                                                                                <img src="<?php echo base_url(); ?>img/demo/1.jpg" alt="">
                                                                                                            </a>
                                                                                                            <div class="extras">
                                                                                                                    <div class="extras-inner">
                                                                                                                            <a href="<?php echo base_url(); ?>img/demo/big/1.jpg" class='colorbox-image' rel="group-1"><i class="icon-search"></i></a>
                                                                                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                                                                                            <a href="#" class='del-gallery-pic'><i class="icon-trash"></i></a>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </li>

                                                                                                </ul>  
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="control-group">
                                                                                        
                                                                                            <label for="textarea" class="control-label">Pilih Gambar</label>
                                                                                            <div class="controls">
                                                                                                <form id="fileupload" action="/upload/server/php/" method="POST" enctype="multipart/form-data">
                                                                                                    <input type="hidden" id="listingid" />
                                                                                                    <span class="btn btn-success fileinput-button">
                                                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                                                        <span>Select files...</span>
                                                                                                         The file input field used as target for the file upload widget 
                                                                                                        <input  type="file" name="files[]" multiple>
                                                                                                    </span>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                     The global progress bar 
                                                                                                    <div id="progress" class="progress">
                                                                                                        <div class="progress-bar progress-bar-success"></div>
                                                                                                    </div>
                                                                                                     The container for the uploaded files 
                                                                                                    <div id="files" class="files"></div>
                                                                                                </form>
                                                                                                
                                                                                               <div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" />
                                                                                                        </div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                                                                                            
                                                                                                        </div>
													<div>
														<span class="btn btn-file">
                                                                                                                    <span class="fileupload-new">Select image</span>
                                                                                                                    <span class="fileupload-exists">Change</span>
                                                                                                                    <input type="file" name='imagefile' />
                                                                                                                </span>
														<a href="#" id="galerryAdd" class="btn fileupload-exists" data-dismiss="fileupload">Add</a>
													</div>
												</div>
                                       
                                                                                                
                                                                                            </div>
                                                                                    </div>
                                                                                   
                                                                                   
                                                                               </div>
                                                                          </div>-->
                                                                        </div>

                                                                        <div class="form-actions">
                                                                                <input type="reset" class="btn" value="Back" id="back">
                                                                                <input type="button" class="btn btn-primary" value="Next" id="next">
<!--                                                                            <input type="button" class="btn btn-primary" value="Submit" onclick="addListingBaru();"  id="btnSubmit">-->
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                        </div>
                </div>
</div>
				


<!--<div id="map-canvas"></div>-->