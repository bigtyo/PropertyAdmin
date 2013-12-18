<div id="modalAktivitas" class="modal hide fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="../admin/event" method="post" enctype="multipart/form-data">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" >Add Event</h3>
			</div>
			<div class="modal-body" id='modalContent'>
                            <input id="modalId" type="hidden" name="eventid" value="<?php if(isset($event)) echo $event->eventid; ?>" />
                            <div class="control-group">
                                    <label for="nama" class="control-label">Judul</label>
                                    <div class="controls">
                                        <input id="judul" type="text" class="input-large" name="judul" <?php if(isset($event)){
                                                    echo "value='".$event->judul."'";
                                                }?> />
<!--                                            <input type="textare" name="nama" id="nama" 
                                                <?php if(isset($event)){
                                                    echo "value='".$event->judul."'";
                                                }?> class="input-large">-->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="tanggal" class="control-label">Tanggal</label>
                                    <div class="controls">
                                        <input id="tanggal" type="text" class="input-medium datepicker" name="tanggal" <?php if(isset($event)){
                                                    echo $event->tanggal;
                                                }?> />
                          
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="nama" class="control-label">Lokasi</label>
                                    <div class="controls">
                                        <input id="tempat" type="text" class="input-large" name="tempat" <?php if(isset($event)){
                                                    echo $event->tempat;
                                                }?> />
<!--                                            <input type="textare" name="nama" id="nama" 
                                                <?php if(isset($event)){
                                                    echo "value='".$event->judul."'";
                                                }?> class="input-large">-->
                                    </div>
                                </div>
				<div class="control-group">
                                    <label for="nama" class="control-label">Deskripsi Event</label>
                                    <div class="controls">
                                        <textarea id="description" name="description"><?php if(isset($event)){
                                                    echo "value='".$event->NAMA."'";
                                                }?></textarea>
<!--                                            <input type="textare" name="nama" id="nama" 
                                                <?php if(isset($event)){
                                                    echo "value='".$event->description."'";
                                                }?> class="input-large">-->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="gambar" class="control-label">Gambar</label>
                                    <div class="controls">
                                        <input type="file" name="gambar" />
                                    </div>
                                </div>
                                
                                
                                
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
						<h1>Events</h1>
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
							<a href="">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="">Admin</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="Admin/Event">Event</a>
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
                                                                        Form Event <?php if(isset($officename)){
                                                                            echo $officename;
                                                                        } ?>
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
                                                                                        
											<th>Gambar</th>
											<th>Judul</th>
											<th class='hidden-350'>Tanggal</th>
											<th >Lokasi</th>
											<th >Action</th>
                                                                                        
										</tr>
									</thead>
									<tbody id="datalisting">
                                                                        <?php if(isset($events)){
                                                                            foreach($events as $obj)
                                                                            {?>
                                                                                <tr>
                                                                                    
                                                                                    <td><a href="#"><img style="max-width: 100px; max-height: 100px" src="<?php echo EVENT_UPLOAD_PATH.$obj->gambar; ?>" /></a></td>
                                                                                    <td class="listingid"><?php echo $obj->judul; ?></td>
                                                                                    <td><?php echo $obj->tanggal; ?></td>
                                                                                    <td><?php echo $obj->Tempat; ?></td>
                                                                                    <td><a href="#modalAktivitas" class="btn" onclick="edit(<?php echo $obj->eventid; ?>)" data-toggle="modal" >Edit</a><a href="#" class="btn" >delete</a></td>
                                                                                </tr>
                                                                                
                                                                            <?php }
                                                                        }?> 	
									</tbody>
								</table>
								
							</div>
						</div>
                                        <a href="#modalAktivitas" class="btn" onclick="formNew()" data-toggle="modal" >Event baru</a>
                                    </div>
                                </div>
				
                            <br/>
                            
                            
			</div>
		</div>
	</div>