<?php
	echo'<div class="col-md-5 col-md-offset-4 box">
							<form id="send" data-toggle="validator" role="form" class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-sm-5" for="nama">Id tukang parkir</label>
									<div class="col-sm-offset-1 col-sm-6">
										<input type="text" class="form-control" id="" name="id" value="'.$id_tkp.'" readOnly required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-5" for="nama">Jumlah Iuran</label>
									<div class="col-sm-offset-1 col-sm-6">
										<input type="text" class="form-control" id="nama" name="juml" value="25000" readOnly required>
									</div>
								</div>
								<div class="form-group"> 
									<label class="control-label col-sm-5">Nama_Rek Tujuan</label>
									<div class="col-sm-offset-1 col-sm-6">
										<input type="text" class="form-control" data-minlength="6" name="namarektu" id="namarektu" placeholder="Nama_Rek Tujuan" required>
									</div>
								</div>
								
								<div class="form-group"> 
									<label class="control-label col-sm-5">No_Rek Tujuan</label>
									<div class="col-sm-offset-1 col-sm-6">
										<input type="number" class="form-control" name="norektu" id="norektu" placeholder="No_Rek Tujuan" required>
									</div>
								</div>
							  <div class="form-group"> 
								<div class="col-sm-offset-6 col-sm-8">
								  <button type="submit" class="btn btn-primary" style=" color:white;"><i class="fa fa-send"></i> Kirim</button>
								</div>
							  </div>
						</form>
					</div>';
?>