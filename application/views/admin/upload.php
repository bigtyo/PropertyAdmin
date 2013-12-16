<div id="modalAktivitas" class="modal hide fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="../admin/submitdokumen" method="post" enctype="multipart/form-data">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" >Add Dokumen</h3>
			</div>
			<div class="modal-body" id='modalContent'>
                            <input id="modalId" type="hidden" name="dokumenid" value="<?php if(isset($dokumen)) echo $dokumen->DOKUMENID; ?>" />
				<div class="control-group">
                                    <label for="nama" class="control-label">Deskripsi Dokumen</label>
                                    <div class="controls">
                                        <textarea id="nama" name="nama"><?php if(isset($dokumen)){
                                                    echo "value='".$dokumen->NAMA."'";
                                                }?></textarea>
<!--                                            <input type="textare" name="nama" id="nama" 
                                                <?php if(isset($dokumen)){
                                                    echo "value='".$dokumen->NAMA."'";
                                                }?> class="input-large">-->
                                    </div>
                                </div>
                                <input type="file" name="dokumen" />
                                
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button type="submit" class="btn btn-primary" id="btnSimpan" >Save changes</button>
			</div>
    </form>
</div>
<div class="container-fluid nav-hidden" id="content">
    
		<div id="main">
			<div class="container-fluid ">
				<div class="page-header">
					<div class="pull-left">
						<h1>Detail Listing</h1>
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
                                                                    List Dokumen <?php if(isset($officename)) echo "Office ".$officename; ?>
                                                            </h3>
                                                    </div>
                                                    <div class="box-content nopadding">
                                                            <table class="table table-hover table-nomargin">
                                                                    <thead>
                                                                            <tr>
                                                                                    
                                                                                    <th>Nama Dokumen</th>
                                                                                    <th>Deskripsi</th>
                                                                                    
                                                                                    <th class='hidden-480'>Action</th>
                                                                            </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if(isset($listdokumen)){ 
                                                                            foreach($listdokumen as $obj){ ?>
                                                                            <tr>
                                                                                <td><a download="<?php echo $obj->PATH; ?>" href="<?php echo DOKUMEN_UPLOAD_PATH.$obj->PATH; ?>" ><?php echo $obj->PATH; ?></a></td>
                                                                                <td><?php echo $obj->NAMA; ?></td>
                                                                                
                                                                                <td class='hidden-480'><a href="#modalAktivitas" onclick="modalUser('<?php echo $obj->DOKUMENID; ?>')" class="btn" data-toggle="modal">Edit</a><a class="btn" href="#">Delete</a></td>
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
                                                    <a href="#modalAktivitas" id="btnAddDokumen" role="button" class="btn btn-primary"  data-toggle="modal" >Add Dokumen Baru</a>
                                            </div>
                                    </div>
                                </div>
                           </div>
    
		</div>
</div>