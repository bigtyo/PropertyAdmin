<div class="container-fluid nav-hidden" id="content">
		<input type="hidden" id="marketingid" value="<?php echo $marketingid; ?>" />
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Email Listing</h1>
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
							<a href="tables-dynamic.html">Blast Email</a>
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
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>Email Sender</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class="form-horizontal form-bordered">
                                                                    <div class="control-group">
										<label class="control-label">Opsi Penerima Email</label>
										<div class="controls">
											<label class="checkbox">
                                                                                            <input type="radio" id="all" name="radio" /> Send to all Contacts
											</label>
											<label class="checkbox">
                                                                                     
                                                                                            <input type="radio" id="some" name="radio" /> Send to Specific contacts
											</label>
										</div>
                                                                    </div>
                                                                    <div class="control-group">
										<label class="control-label">Opsi Pesan Email</label>
										<div class="controls">
											<label class="checkbox">
                                                                                            <input type="checkbox" name="checkbox" id="istemplate" /> Menggunakan Template
											</label>
											
										</div>
                                                                    </div>

                                                                     <div class="control-group" id="receiver">
											<label for="textfield" class="control-label">Penerima Email</label>
											<div class="controls">
												<select name="s2" id="s2" class='select2-me input-block-level' multiple="multiple">
													<?php if(isset($customers)){
                                                                                                            foreach($customers as $customer)
                                                                                                            {?>
                                                                                                                <option value="<?php echo $customer->CUSTOMERID;?>"><?php echo $customer->NAMA; ?></option>
                                                                                                            <?php }
                                                                                                        }?>
												</select>
											</div>
										</div>
                                                                        <div class="control-group">
											<label for="textfield" class="control-label">Judul</label>
											<div class="controls">
												<input type="text" name="textfield" id="textfieldSubject" placeholder="Judul Email" class="input-xlarge">
											</div>
										</div>
									<div class="control-group" id="controltemplate" style="display:none">
											<label for="textfield" class="control-label">Select with search</label>
											<div class="controls">
												<div class="input-xlarge">
                                                                                                    <select name="select" id="select" class="chosen-select">
                                                                                                        <?php if(isset($templates)){
                                                                                                            foreach($templates as $template)
                                                                                                            {?>
                                                                                                                <option value="<?php echo $template->TEMPLATEID;?>"><?php echo $template->NAMA; ?></option>
                                                                                                            <?php }
                                                                                                        }?>
												
													
                                                                                                    </select>
                                                                                                </div>
											</div>
										</div>
									<div class="control-group" id="controlmsg">
										<label for="textarea" class="control-label">Message</label>
										<div class="controls">
											<textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
										</div>
									</div>
                                                                        
									<div class="form-actions">
										<input type="button" id="btnSend" class="btn btn-primary" value="Send!" />
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                            
			</div>
		</div>
	</div>