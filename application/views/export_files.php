<?php
$error = "  bg-soft-danger text-danger ";
$success = "  bg-soft-success text-success ";
$success_text = "  text-success ";
$error_text = "  text-danger ";

?>

<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<h4 class="page-title">Export Files</h4>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-between align-items-center">
				<form class="" method="get" action="<?php echo base_url() ?>export">
					<div class="input-group">
						<input type="text" name="tax_id" class="form-control" placeholder="Tax Id"
							   aria-label="Tax Id" required
							   value="<?php echo $this->input->get('tax_id') ?>">
						<div class="input-group-append">
							<button class="btn btn-primary waves-effect waves-light" type="submit">Search</button>
						</div>
					</div>
				</form>
			</div>

			<div class="mt-3">
				<h5 class="mb-2">Uploaded File</h5>

				<div class="row mx-n1 no-gutters">
					<div class="col-xl-4 col-lg-4">
						<div class="card m-1 shadow-none border">
							<div class="p-2">
								<div class="row align-items-center">
									<div class="col-auto">
										<div class="avatar-sm">
											<span class="avatar-title rounded <?php echo $file1_path != '#' ? $success : $error ?>">
												<i class="mdi mdi-folder font-18"></i>
											</span>
										</div>
									</div>
									<div class="col pl-0">
										<a href="<?php echo $file1_path ?>" <?php echo $file1_path != '#' ? 'download' : '' ?>
										   class="font-weight-bold <?php echo $file1_path != '#' ? $success_text : $error_text ?>">Letter
											File <?php echo $file1_path == '#' ? 'Not Uploaded' : '' ?></a>
									</div>
								</div> <!-- end row -->
							</div> <!-- end .p-2-->
						</div> <!-- end col -->
					</div> <!-- end col-->

					<div class="col-xl-4 col-lg-4">
						<div class="card m-1 shadow-none border">
							<div class="p-2">
								<div class="row align-items-center">
									<div class="col-auto">
										<div class="avatar-sm">
											<span class="avatar-title rounded <?php echo $file2_path != '#' ? $success : $error ?>">
												<i class="mdi mdi-folder font-18"></i>
											</span>
										</div>
									</div>
									<div class="col pl-0">
										<a href="<?php echo $file2_path ?>" <?php echo $file2_path != '#' ? 'download' : '' ?>
										   class="font-weight-bold <?php echo $file2_path != '#' ? $success_text : $error_text ?>">File
											A <?php echo $file2_path == '#' ? 'Not Uploaded' : '' ?></a>
									</div>
								</div> <!-- end row -->
							</div> <!-- end .p-2-->
						</div> <!-- end col -->
					</div> <!-- end col-->
					<div class="col-xl-4 col-lg-4">
						<div class="card m-1 shadow-none border">
							<div class="p-2">
								<div class="row align-items-center">
									<div class="col-auto">
										<div class="avatar-sm">
											<span class="avatar-title rounded <?php echo $file3_path != '#' ? $success : $error ?>">
												<i class="mdi mdi-folder font-18"></i>
											</span>
										</div>
									</div>
									<div class="col pl-0">
										<a href="<?php echo $file3_path ?>" <?php echo $file3_path != '#' ? 'download' : '' ?>
										   class="font-weight-bold <?php echo $file3_path != '#' ? $success_text : $error_text ?>">File
											2 <?php echo $file3_path == '#' ? 'Not Uploaded' : '' ?></a>
									</div>
								</div> <!-- end row -->
							</div> <!-- end .p-2-->
						</div> <!-- end col -->
					</div> <!-- end col-->
				</div>


			</div>


		</div>
	</div>
</div>
