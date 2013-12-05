<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        
        
	<title>FLAT - Dynamic tables</title>
        <style type="text/css">
            
            #map-canvas { height: 100% }
        </style>
        <!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- Tagsinput -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- chosen -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/chosen/chosen.css">
	<!-- multi select -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/multiselect/multi-select.css">
	<!-- timepicker -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- colorpicker -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/colorpicker/colorpicker.css">
	<!-- Datepicker -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/datepicker/datepicker.css">
	<!-- Daterangepicker -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/daterangepicker/daterangepicker.css">
	<!-- Plupload -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/plupload/jquery.plupload.queue.css">
	<!-- select2 -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/themes.css">
        <!-- colorbox -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/colorbox/colorbox.css">
        <!-- Notify -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/gritter/jquery.gritter.css">

        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fileupload.css">
        <!-- gmap -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/gmap/gmap3-menu.css">
</head>

<body>
    
	<div id="modal-user" class="modal hide">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="user-infos">Jane Doe</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<div class="span2">
					<img src="<?php echo base_url();?>img/demo/user-1.jpg" alt="">
				</div>
				<div class="span10">
					<dl class="dl-horizontal" style="margin-top:0;">
						<dt>Full name:</dt>
						<dd>Jane Doe</dd>
						<dt>Email:</dt>
						<dd>jane.doe@janedoesemail.com</dd>
						<dt>Address:</dt>
						<dd>
							<address> <strong>John Doe, Inc.</strong>
								<br>
								7195 JohnsonDoes Ave, Suite 320
								<br>
								San Francisco, CA 881234
								<br> <abbr title="Phone">P:</abbr>
								(123) 456-7890
							</address>
						</dd>
						
					</dl>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">Close</button>
		</div>
	</div>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">Rumah Super Admin</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<ul class='main-nav'>
				<li class='active'>
					<a href="index.php">
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>News & Update</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/news">News & Update</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/newsmanage">News Setting</a>
						</li>
<!--						<li>
							<a href="<?php echo base_url();?>index.php/forms-validation.html">Validation</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/forms-wizard.html">Wizard</a>
						</li>-->
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Listings</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/listing">Property Listings Management</a>
						</li>
                                                
                                                
<!--						<li>
							<a href="<?php echo base_url();?>index.php/listing/detail">Detail Listing</a>
						</li>-->
<!--						<li>
							<a href="<?php echo base_url();?>index.php/components-sidebarwidgets.html">Sidebar widgets</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-messages.html">Messages &amp; Chat</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-gallery.html">Gallery &amp; Thumbs</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-tiles.html">Tiles</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-icons.html">Icons &amp; Buttons</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-elements.html">UI elements</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-typography.html">Typography</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-bootstrap.html">Bootstrap elements</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/components-grid.html">Grid</a>
						</li>-->
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Customer Management</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/customer">Customer Management</a>
						</li>
<!--						<li>
							<a href="<?php echo base_url();?>index.php/customer/detail">Prospects Management</a>
						</li>-->
						
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Marketing Tools</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/customer">Customer Database Management</a>
						</li>
						<li class="dropdown-submenu">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Email Tools</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="<?php echo base_url();?>index.php/email/blast">Blast Email</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/email/sendlisting">Send Listing via Email</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/email/template">Email Template Management</a></li>
                                                    </ul>
							
						</li>
						
						
					</ul>
				</li>
                                <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Report</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Laporan Marketing</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="<?php echo base_url();?>index.php/reportlistingsold">Listing Terjual</a></li>
                                                        
                                                        
                                                    </ul>
							
						</li>
						
						<li class="dropdown-submenu">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Laporan Performa Marketing</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="<?php echo base_url();?>index.php/report/absensi">Absensi</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/reportlisting">Laporan Listing / Buyer baru per marketing</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/report/activity">Aktivitas Marketing</a></li>
                                                    </ul>
							
						</li>
						
						
					</ul>
				</li>
                                
                                <?php if((isset($isadmin) && $isadmin) || (isset($isprincipal) && $isprincipal)){ ?>
                                <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Admin Tools</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/admin/callin">Call In</a>
						</li>
                                                
                                                    <li>
                                                        <a href="<?php echo base_url();?>index.php/admin/adminlisting">Verify Listing</a>
                                                    </li>
                                                
                                                <li>
							<a href="<?php echo base_url();?>index.php/admin/hotpick">Update Hotpick</a>
						</li>
                                                
						<li>
							<a href="<?php echo base_url();?>index.php/admin/upload">Upload dokumen presentasi</a>
						</li>
						
					</ul>
				</li>
                                
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>User / Role Management</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/users/manage">User Management</a>
						</li>
						
						<li>
							<a href="<?php echo base_url();?>index.php/users/role">Role Management</a>
						</li>
						
					</ul>
				</li>
				<?php } ?>
			</ul>
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
						<ul class="dropdown-menu pull-right message-ul">
							<li>
								<a href="<?php echo base_url();?>index.php/listingadmin.php">
									
									<div class="details">
										<div class="name">Alert</div>
										<div class="message">
											3 Listing ber status Expired.
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/listingadmin.php">
									>
									<div class="details">
										<div class="name">Alert</div>
										<div class="message">
											2 Listing berstatus Unverified
										</div>
									</div>
									<div class="count">
										<i class="icon-comment"></i>
										<span>3</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									
									<div class="details">
										<div class="name">Reminder</div>
										<div class="message">
											Harap mengupdate Hot Pick List
										</div>
									</div>
								</a>
							</li>
							
						</ul>
					</li>
					
					
					
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="<?php echo base_url();?>img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo base_url();?>index.php/more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/login/logout">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
