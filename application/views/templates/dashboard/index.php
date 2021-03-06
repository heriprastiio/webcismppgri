<!--Ini Page templates/dashboard/index.php-->
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $juduldashboard; ?></h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-8 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Informasi Pendaftaran PSB SMP PGRI 32</h6>
					</div>
					<div class="card-body">
						<div class="text-center">
							<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
						</div>
						<h4>Petunjuk Pendaftaran</h4>
						<ol class="list-group p-3">
							<?php echo "Dari controller"; ?>
							<!--							Echo key value dari controller-->
							<?php foreach ($juduldashboard as $item) {
								echo $item->isi_pengumuman;
							}
							?>
							<li>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
								constantly updated collection of beautiful svg images that you can use
								completely free and without attribution!
							</li>
							<!--						<a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on-->
							<!--							unDraw &rarr;</a>-->
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->