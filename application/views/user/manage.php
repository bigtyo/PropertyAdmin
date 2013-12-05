<div id="modalAktivitas" class="modal hide fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" >Add User</h3>
			</div>
			<div class="modal-body" id='modalContent'>
				
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary" id="btnSimpan" data-dismiss="modal">Save changes</button>
			</div>
</div>
<div class="container-fluid nav-hidden" id="content">
    <input type="hidden" id="marketing" value="<?php echo $adminid; ?>" />
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Detail Listing</h1>
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
							<a href="tables-basic.html">Listing</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Detail</a>
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
                                                                    List User <?php if(isset($officename)) echo "Office ".$officename; ?>
                                                            </h3>
                                                    </div>
                                                    <div class="box-content nopadding">
                                                            <table class="table table-hover table-nomargin">
                                                                    <thead>
                                                                            <tr>
                                                                                    <th>Login</th>
                                                                                    <th>Nama</th>
                                                                                    <th>Telepon</th>
                                                                                    <th class='hidden-350'>Marketing</th>
                                                                                    <th class='hidden-350'>Admin</th>
                                                                                    <th class='hidden-350'>Principal</th>
                                                                                    <th class='hidden-480'>Action</th>
                                                                            </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if(isset($users)){ 
                                                                            foreach($users as $user){ ?>
                                                                            <tr>
                                                                                <td><?php echo $user->USERID; ?></td>
                                                                                <td><?php echo $user->NAMA; ?></td>
                                                                                <td><?php echo $user->TELEPON; ?></td>
                                                                                <td class='hidden-350'><input type="checkbox" class="checkbox" <?php if($user->MARKETINGID != null && $user->MARKETINGID > 0) echo "checked='checked'"; ?> /></td>
                                                                                <td class='hidden-350'><input type="checkbox" class="checkbox" <?php if($user->ADMINID != null && $user->ADMINID > 0) echo "checked='checked'"; ?> /></td>
                                                                                <td class='hidden-350'><input type="checkbox" class="checkbox" <?php if($user->PRINCIPALID != null && $user->PRINCIPALID > 0) echo "checked='checked'"; ?> /></td>
                                                                                <td class='hidden-480'><a href="#modalAktivitas" onclick="modalUser('<?php echo $user->USERID; ?>')" class="btn" data-toggle="modal">Edit</a><a class="btn" href="#">Delete</a></td>
                                                                            </tr>
                                                                         <?php   }
                                                                         }?>

                                                                    </tbody>
                                                            </table>
<!--                                                            <div class="table-pagination">
                                                                    <a href="#" class='disabled'>First</a>
                                                                    <a href="#" class='disabled'>Previous</a>
                                                                    <span>
                                                                            <a href="#" class='active'>1</a>
                                                                            <a href="#">2</a>
                                                                            <a href="#">3</a>
                                                                    </span>
                                                                    <a href="#">Next</a>
                                                                    <a href="#">Last</a>
                                                            </div>-->

                                                    </div>
                                                    <a href="#modalAktivitas" id="btnAddUser" role="button" class="btn btn-primary"  data-toggle="modal" >Add User Baru</a>
                                            </div>
                                    </div>
                                </div>
                           </div>
    
		</div>
</div>