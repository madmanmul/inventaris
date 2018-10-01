<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header bg-primary text-light text-center">
					 <h4>LAPORAN</h4>
			    </div>
				 	<div class="card-body">
						<form action="konten/rincian-laporan.php" method="post">
							<div class="form-group">
								<div class="label">
									Filter berdasarkan tanggal pembelian.
								</div>
							</div>
							<div class="form-group">
								<label>Tanggal Awal</label>
								<input class="form-control" type="date" name="tgl_awal"> &nbsp;

								<label>Tanggal Akhir</label>
								<input class="form-control" type="date" name="tgl_akhir"> &nbsp;

								<button class="btn btn-twice" type="submit" name="kirim" >Kirim</button>
							</div>
						</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
