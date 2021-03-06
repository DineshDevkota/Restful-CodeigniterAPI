
<h1>Associated Bands</h1>
<!-- content wrapper -->
<div class="content-wrap">
	<!-- inner content wrapper -->
	<div class="wrapper">
		<section class="panel">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped custom-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name of Band</th>
								<th>Genre</th>
								<th>View Options</th>
								
							</tr>
						</thead>
						<tbody>
                            <?php foreach($data as $key=>$value){?>
                              <tr>
								<td><?php echo $key+1;?></td>
								<td><?php echo $value->BandName;?></td>
								<td><?php echo $value->GenreName;?></td>								
								<td><a class="btn btn-info"
									href='/db/GetAlbumsByBandID/<?php echo $value->BandID;?>'>Albums</a>
									<a class="btn btn-primary"
									href='/db/GetRodiesByBandID/<?php echo $value->BandID;?>'>Rodies</a>
									<a class="btn btn-success"
									href='/db/GetArtistByBandID/<?php echo $value->BandID;?>'>Artists</a>
									</td>
									
							 </tr>                                                
                             <?php  }?>                                             
                       </tbody>
					</table>
					<a class="btn btn-info" onclick="window.history.back()">Back</a>
				</div>
			</div>
		</section>
	</div>
</div>
