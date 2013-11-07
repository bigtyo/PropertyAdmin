
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
										<label for="textfield" class="control-label">User Id:</label>
										<div class="controls">
											<label for="textfield" class="control-label">AmyLee</label>
										</div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Real Name :</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label">Amy Jasmine Lee</label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Age:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label">30 Years Old</label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Phone:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label">085646162619</label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label for="textfield" class="control-label">Email:</label>
                                                                                    <div class="controls">
                                                                                            <label for="textfield" class="control-label">Amy.lee@gmail.com</label>
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
                                                                            <tr style="cursor:pointer">
                                                                                <td><a href="listingdetail.php"><img src="img/rumah70.jpg"></a></td>
                                                                                <td>211</td>
                                                                                <td >Ruko</td>
                                                                                <td>Jl Darmahusada</td>
                                                                                
                                                                                <td>Rp 650.000.000</td>
                                                                                <td>(Agen Diponegoro)Yudhi - 08532412314</td>
                                                                                
                                                                                
                                                                            </tr>
                                                                            <tr  style="cursor:pointer">
                                                                                <td><a href="listingdetail.php"><img src="img/rumah70.jpg"></a></td>
                                                                                <td>211</td>
                                                                                <td >Ruko</td>
                                                                                <td>Jl Darmahusada 3 Blok C no 10</td>
                                                                                
                                                                                <td>Rp 750.000.000</td>
                                                                                <td>John Doe - 08538797894</td>
                                                                                
                                                                                
                                                                            </tr>
                                                                            <tr  style="cursor:pointer">
                                                                                <td><a href="listingdetail.php"><img src="img/rumah70.jpg"></a></td>
                                                                                <td>211</td>
                                                                                <td >Ruko</td>
                                                                                <td>Jl Darmahusada</td>
                                                                                
                                                                                <td>Rp 550.000.000</td>
                                                                                <td>(Agen Pakuwon City)Arie - 08537777794</td>
                                                                         </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                            
                            
			</div>
		</div>
	</div>