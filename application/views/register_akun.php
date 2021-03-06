<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5 col-xl-9 mx-auto w-100 p-3" style="width: 18rem";>
<!--		<div class="card-body p-0 w-100">-->
		<div class="col-10col-lg-6">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Buat Akun PSB SMP PGRI 32 2021</h1>
						</div>
						<form class="user" method="post" action="<?= base_url('Auth/register_akun'); ?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name" value="<?= set_value('name') ?>">
								<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email') ?>">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
									<?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Register Account
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="forgot-password.html">Forgot Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="<?= base_url('Auth'); ?>">Already have an account? Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
