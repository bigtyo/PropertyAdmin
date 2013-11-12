<div class="container-fluid nav-hidden" id="content">
		
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Customer Database Management</h1>
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
                                                <div class="box box-color box-bordered lightred">
                                                        <div class="box-title">
                                                                <h3>
                                                                        <i class="icon-magic"></i>
                                                                        Vertical steps
                                                                </h3>
                                                        </div>
                                                        <div class="box-content nopadding">
                                                                <form class='form-horizontal form-wizard wizard-vertical' id="ssss">

                                                                      <div class="step" >
                                                                        <ul class="wizard-steps steps-3">
                                                                                <li onclick="activateForm(this,1);" class='active liform'>
                                                                                        <div class="single-step">
                                                                                                <span class="title">1</span>
                                                                                                <span class="circle">
                                                                                                </span>
                                                                                                <span class="description">
                                                                                                        Informasi Pemilik
                                                                                                </span>
                                                                                        </div>
                                                                                </li>
                                                                                <li onclick="activateForm(this,2);">
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
                                                                                <li onclick="activateForm(this,3);">
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
                                                                                                        <option value="1" >Rumah</option>
                                                                                                        <option value="2" >Ruko</option>
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
                                                                                            <label  class="control-label">Lain-lain</label>
                                                                                            <div class="controls">
                                                                                                    <label class="checkbox">
                                                                                                            <input type="checkbox" name="checkbox" /> Furnish
                                                                                                    </label>

                                                                                            </div>
                                                                                    </div>
                                                                               </div>
                                                                                <div class='span6'>
                                                                                    <div class="control-group">
                                                                                            <label for="selTipe" class="control-label">Tipe Listing</label>
                                                                                            <div class="controls">
                                                                                                <select name="select" id="selTipe" class="input-large">
                                                                                                        <option value="1" >Stock</option>
                                                                                                        <option value="2" >Open</option>
                                                                                                        <option value="3" >Exclusive</option>
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
                                                                                            <label for="textarea" class="control-label">Alamat Lengkap</label>
                                                                                            <div class="controls">
                                                                                                <textarea  name="textfield" id="Alamat_Lengkap"  class="input-large"> </textarea>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    <div class="control-group">
                                                                                            <label for="text" class="control-label">Peta</label>
                                                                                            <div class="controls" >
                                                                                                <div id="map-canvas"></div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                              </div>
                                                                                
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-actions">
                                                                                <input type="reset" class="btn" value="Back" id="back">
                                                                                <input type="button" class="btn btn-primary" value="Next" id="next">
                                                                                <input type="button" class="btn btn-primary" value="Submit" onclick="addListingBaru();"  id="btnSubmit">
                                                                        </div>
                                                                </form>
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                        </div>
                </div>
</div>
				


<!--<div id="map-canvas"></div>-->