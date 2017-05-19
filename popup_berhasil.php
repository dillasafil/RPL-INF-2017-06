<?php
	echo'<div id="popup">
				<div class="box-popup">
				<a href="#" class="close-button" id="close">cancel</a>
						<h1>TERIMA KASIH</h1>
						<div>
							<p>PEMBAYARAN ANDA, TELAH BERHASIL</p>
							<table style="text-align:left; margin-right:auto; margin-left:auto;">
								<tr>
									<td>Atas Nama</td>
									<td>: '.$nama_tkp.'</td>
								</tr>
								<tr>
									<td>Nama rekening</td>
									<td id="namarek"></td>
								</tr>
								<tr>
									<td>Tujuan rekening</td>
									<td id="rek"></td>
								</tr>
							</table>
						</div>
				</div>
			</div>';
?>