<div class="container-fluid nav-hidden" id="content">
		
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Customer Database Management</h1>
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
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data Customer
								</h3>
							</div>
							<div class="box-content nopadding">
                                                            <table class="table table-hover table-nomargin dataTable table-bordered">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Email</th>
                                                                                        <th>Vendor</th>
                                                                                        <th>Buyer</th>
                                                                                        <th>Investor</th>
											<th class="hidden-350">Phone</th>
											<th class="hidden-350">Tanggal Lahir</th>
											<th class="hidden-350">Options</th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php foreach($customers as $customer) { ?>
                                                                            <tr>
                                                                                <td><?php echo $customer->NAMA; ?></td>
                                                                                <td><?php echo $customer->EMAIL; ?></td>
                                                                                <td><input type="checkbox" <?php if($customer->VENDOR == 1){ echo 'checked="checked"'; }  ?> /></td>
                                                                                <td><input type="checkbox" <?php if($customer->BUYER == 1){ echo 'checked="checked"'; }  ?> /></td>
                                                                                <td><input type="checkbox" <?php if($customer->INVESTOR == 1){ echo 'checked="checked"'; }  ?> /></td>
                                                                                <td class="hidden-350"><?php echo $customer->TELEPON; ?></td>
                                                                                <td class="hidden-350"><?php echo $customer->TGL_LAHIR; ?></td>
                                                                                <td class="hidden-350">
                                                                                    <a href="customer/detail?customerid=<?php echo $customer->CUSTOMERID?>" class="btn" rel="tooltip" title="View">
                                                                                        <i class="icon-search"></i>
                                                                                    </a>
                                                                                    <a  class="btn" rel="tooltip" onclick="edit(<?php echo $customer->CUSTOMERID?>)" title="Edit">
                                                                                        <i class="icon-edit"></i>
                                                                                    </a>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                            <br/>
                            <input type="button" id="btnShowUpload" class="btn btn-primary" onclick="showUpload();" value="Upload From Existing Data" />
                            <input type="button" id="btnShowSave" class="btn btn-primary" onclick="showNew();" value="Customer Baru" />
                            <div class="row-fluid" id ="frmupload" style="display: none">
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3><i class="icon-th-list"></i>File Uploader</h3>
								</div>
								<div class="box-content nopadding">
									<form action="#" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
										
										<div class="control-group">
											<label for="textfield" class="control-label">Custom file upload</label>
											<div class="controls">
												<div class="fileupload fileupload-exists" data-provides="fileupload"><input type="hidden" value="" name="">
													<div class="input-append">
														<div class="uneditable-input span3">
                                                                                                                    <i class="icon-file fileupload-exists"></i> 
                                                                                                                    <span class="fileupload-preview">Katalog.pdf</span>
                                                                                                                </div>
                                                                                                            <span class="btn btn-file">
                                                                                                                <span class="fileupload-new">Select file</span>
                                                                                                                <span class="fileupload-exists">Change</span>
                                                                                                                <input type="file" name="aaaa">
                                                                                                            </span>
                                                                                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-actions">
											<button type="button" id="btnUpload" class="btn btn-primary">Upload</button>
											<button type="button" id="btnCancel" onclick="cancelUpload();" class="btn">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                            <div class="row-fluid" id ="frmnew" style="display: none">
                                    <div class="span12">
                                            <div class="box box-color box-bordered">
                                                    <div class="box-title">
                                                            <h3><i class="icon-th-list"></i>New Customer</h3>
                                                    </div>
                                                    <div class="box-content nopadding">
                                                        <form action="#" method="POST" class="form-horizontal form-column form-bordered">
                                                                <div class="span6">
                                                                        
                                                                        <div class="control-group">
                                                                                <label for="selPropinsi" class="control-label">Nama</label>
                                                                                <div class="controls">
                                                                                        <input type="text" name="textfield" id="C_Nama"  class="input-medium textsave">
                                                                                </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label for="selArea" class="control-label">Email</label>
                                                                                <div class="controls">
                                                                                        <input type="text" name="textfield" id="C_Email"  class="input-medium textsave">
                                                                                </div>
                                                                        </div>

                                                                        <div class="control-group">
                                                                                <label for="textfield" class="control-label">Telepon</label>
                                                                                <div class="controls">
                                                                                    <input type="text" name="textfield" id="C_Telepon"  class="input-medium textsave">
                                                                                </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label for="password" class="control-label">Alamat</label>
                                                                                <div class="controls">
                                                                                        <input type="text" name="textfield" id="C_Alamat"  class="input-medium textsave">
                                                                                </div>
                                                                        </div>

                                                                        

                                                                </div>
                                                                <div class="span6">
                                                                        <div class="control-group">
                                                                                <label for="C_Tanggal" class="control-label">Tanggal Lahir</label>
                                                                                <div class="controls">
                                                                                    <input type="text" name="textfield" id="C_Tanggal"  class="input-medium datepicker">
                                                                                </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label for="C_Tanggal_NIKAH" class="control-label">Tanggal Pernikahan</label>
                                                                                <div class="controls">
                                                                                        <input type="text" name="textfield" id="C_Tanggal_Nikah"  class="input-medium datepicker">
                                                                                </div>
                                                                        </div>
                                                                        
                                                                        <div class="control-group">
                                                                                <label  class="control-label">Jenis Customer</label>
                                                                                <div class="controls">
                                                                                        <input type="checkbox" id="C_Buyer" name="checkbox" class="checksave" /> Buyer
                                                                                        <input type="checkbox" id="C_Vendor" name="checkbox" class="checksave" /> Vendor
                                                                                        <input type="checkbox" id="C_Investor" name="checkbox" class="checksave" /> Investor
                                                                                        

                                                                                </div>
                                                                        </div>

                                                                        

                                                                </div>
                                                                <div class="span12">
                                                                        <div class="form-actions">
                                                                                <input type="button" class="btn btn-primary" id="btnSave"  value="Save changes"/>
                                                                                <input type="button" class="btn" id="btnCancelSave" onclick="cancelNew();" value="Cancel" />
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