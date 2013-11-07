<div class="container-fluid nav-hidden" id="content">
		
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Email Template Editor</h1>
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
							<a href="#">Marketing Tools</a>
							<i class="icon-angle-right"></i>
						</li>
                                                <li>
							<a href="#">Email Tools</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="emailtemplate.php">Blast Email</a>
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
								<h3><i class="icon-th-list">List Template <?php echo $nama_kantor ?></i></h3>
							</div>
							<div class="box-content nopadding">
                                                            <table class="table table-hover table-nomargin dataTable table-bordered">
									<thead>
										<tr>
                                                                                        
											<th>Nama Template</th>
											<th>Tipe</th>
											
											<th colspan="2">Aksi</th>
											
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                            <?php foreach ($templates as $template) {?>
                                                                                <tr style="cursor:pointer">
                                                                                    <td><?php echo $template->NAMA;  ?></td>
                                                                                    <td><?php echo "211"; ?></td>
                                                                                    <td><a href='#form_template' onclick="edit_template(<?php echo $template->TEMPLATEID ?>);">edit</a></td>
                                                                                    <td><a href='#delete' onclick="delete_template(<?php echo $template->TEMPLATEID ?>);">delete</a></td>
                                                                                </tr>           
                                                                            <?php } ?>
                                                                            
                                                                            
                                                                            
                                                                        </tbody>
								</table>
                                                            
                                                            
                                                                
									
								
                                                                
							</div>
						</div>
					</div>
				</div>
                            <br/>
                            
                            <div class="row-fluid" id="form_template">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>Email Template Editor</h3>
							</div>
							<div class="box-content nopadding">
                                                            <br/>
                                                            <div style="padding-left: 10px" class="control-group">
                                                                    <label for="textfield" class="control-label">Nama Template</label>
                                                                    <span style="display:none"  id="tempID" class="control-label"></span>
                                                                    <div class="controls">
                                                                            <input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge">
                                                                    </div>
                                                            </div>
                                                            <textarea name="ck" class="ckeditor span12" id="templateEditor" rows="5" style="visibility: hidden;"></textarea>

                                                            <div class="form-actions" style="padding-left: 10px">
                                                                <input type="button" id="saveTemplates" class="btn btn-primary" value="Save changes" onclick="saveTemplate();" />

                                                            </div>
                                                                
									
								
                                                                
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>