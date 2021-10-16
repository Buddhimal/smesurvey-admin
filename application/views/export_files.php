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
			<?php $this->load->view('template/alert_message')?>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title">Search By Tax Id</h4>
							<p class="text-muted font-13 mb-4">
							<form class="" method="get" action="<?php echo base_url() ?>export">
								<div class="input-group">
									<select name="business_unit" id="business_unit" class="form-control" required>
										<option value="" selected>Select Business Unit</option>
										<?php foreach ($business_units->result() as $row) { ?>
											<option value="<?php  echo $row->id ?>"
													<?php echo $this->input->get('business_unit') == $row->id ? "selected" : ""?>
											><?php echo $row->business_unit?></option>
										<?php } ?>
									</select>
									<input type="text" name="tax_id" class="form-control" placeholder="Tax Id or Email"
										   aria-label="Tax Id or Email" required style="margin-left: 10px;"
										   value="<?php echo $this->input->get('tax_id') ?>">
									<div class="input-group-append">
										<button class="btn btn-primary waves-effect waves-light" type="submit">Search</button>
									</div>
								</div>
							</form>
							</p>

							<table id="basic-datatable" class="table dt-responsive nowrap w-100">
								<thead>
								<tr>
									<th>Tax Id</th>
									<th>Email</th>
									<th>company Name </th>
									<th>Phone</th>
									<th>Company Type</th>
								</tr>
								</thead>


								<tbody>
								<?php if($user_data) { ?>
									<tr>
										<td><?php echo $user_data['tax_id']?></td>
										<td><?php echo $user_data['email']?></td>
										<td><?php echo $user_data['company_name']?></td>
										<td><?php echo $user_data['phone']?></td>
										<td><?php echo $user_data['company_type']?></td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							<?php if($user_data) { ?>
							<br>
							<button onclick="deleteRecord('<?php echo $user_data['id']?>')" class="btn btn-danger float-right">Delete Record</button>
							<?php } ?>
						</div> <!-- end card body-->
					</div> <!-- end card -->
				</div><!-- end col-->
			</div>
			<!-- end row-->

			<div class="mt-3">
				<h5 class="mb-2">Uploaded Files</h5>

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
										   class="font-weight-bold <?php echo $file2_path != '#' ? $success_text : $error_text ?>">File A : ภงด.1  (Por Ngor Dor 1)
											 <?php echo $file2_path == '#' ? 'Not Uploaded' : '' ?></a>
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
										   class="font-weight-bold <?php echo $file3_path != '#' ? $success_text : $error_text ?>">File B : งบการเงินล่าสุด (Latest Financial Doc)
											<?php echo $file3_path == '#' ? 'Not Uploaded' : '' ?></a>
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
