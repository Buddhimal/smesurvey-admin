<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<h4 class="page-title">Widgets</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="col-md-12">
				<form class="" method="get" action="<?php echo base_url() ?>reports">
					<div class="input-group">
						<select name="business_unit" id="business_unit" class="form-control" required>
							<option value="" selected>Select Business Unit</option>
							<?php foreach ($business_units->result() as $row) { ?>
								<option value="<?php echo $row->id ?>"
										<?php echo $this->input->get('business_unit') == $row->id ? "selected" : "" ?>
								><?php echo $row->business_unit ?></option>
							<?php } ?>
						</select>
						<div class="input-group-append">
							<button class="btn btn-primary waves-effect waves-light" type="submit">Search</button>
						</div>
					</div>
				</form>
			</div>
			<br>
			<br>

			<div class="row">
				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
									<i class="fe-user-plus font-22 avatar-title text-primary"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $total_user ?></span></h3>
									<p class="text-muted mb-1 text-truncate">Total Suppliers</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->

				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
									<i class="fe-upload font-22 avatar-title text-warning"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $total_uploads ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">Doc Upload Complete</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->

				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
									<i class="fa-exclamation-circle font-22 avatar-title text-danger"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $total_user-$total_uploads ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">Doc Upload Incomplete</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->

				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-info border-info border">
									<i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $file_a_upload ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">File A Uploaded</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-info border-info border">
									<i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $file_b_upload ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">File B Uploaded</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
									<i class="fe-bar-chart-line- font-22 avatar-title text-primary"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $sme_count ?></span></h3>
									<p class="text-muted mb-1 text-truncate">SME Count</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
									<i class="fe-bar-chart-line- font-22 avatar-title text-warning"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $non_sme_count ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">NON SME Count</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
									<i class="fa-exclamation-circle font-22 avatar-title text-danger"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span
												data-plugin="counterup"><?php echo $goods_count ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">Goods/Factory Count</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
									<i class="fe-upload font-22 avatar-title text-warning"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $services_count ?></span>
									</h3>
									<p class="text-muted mb-1 text-truncate">Services/Wholesale/Retails Count</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
			</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="header-title">Uploaded Records</h4>

						<table id="basic-datatable" class="table dt-responsive nowrap w-100">
							<thead>
							<tr>
								<th>Tax Id</th>
								<th>Email</th>
								<th>Company Name</th>
								<th>Phone</th>
								<th>Company Type</th>
								<th>Letter File</th>
								<th>File A</th>
								<th>File B</th>
							</tr>
							</thead>


							<tbody>
							<?php foreach ($user_data->result() as $row) { ?>
								<tr>
									<td><?php echo $row->tax_id ?></td>
									<td><?php echo $row->email ?></td>
									<td><?php echo $row->company_name ?></td>
									<td><?php echo $row->phone ?></td>
									<td><?php echo $row->company_type ?></td>
									<td style="display: flex; justify-content: center;"><?php echo $row->letter_confirm ? '<span class="badge badge-success badge-pill">Uploaded</span>' : '<span class="badge badge-danger badge-pill">Not Uploaded</span>' ?></td>
									<td style="display: flex; justify-content: center;"><?php echo $row->file_a ? '<span class="badge badge-success badge-pill">Uploaded</span>' : '<span class="badge badge-danger badge-pill">Not Uploaded</span>' ?></td>
									<td style="display: flex; justify-content: center;"><?php echo $row->file_b ? '<span class="badge badge-success badge-pill">Uploaded</span>' : '<span class="badge badge-danger badge-pill">Not Uploaded</span>' ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>

					</div> <!-- end card body-->
				</div> <!-- end card -->
			</div><!-- end col-->
		</div>
		<!-- end row-->
	</div>
</div>
