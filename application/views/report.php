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
									<p class="text-muted mb-1 text-truncate">Total Users</p>
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
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $total_uploads ?></span></h3>
									<p class="text-muted mb-1 text-truncate">Total Uploads</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->

				<div class="col-md-6 col-xl-3">
					<div class="widget-rounded-circle card-box">
						<div class="row">
							<div class="col-6">
								<div class="avatar-lg rounded-circle bg-soft-success border-success border">
									<i class="fe-check-circle font-22 avatar-title text-success"></i>
								</div>
							</div>
							<div class="col-6">
								<div class="text-right">
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $full_complete ?></span></h3>
									<p class="text-muted mb-1 text-truncate">Full completed</p>
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
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $file_a_upload ?></span></h3>
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
									<h3 class="mt-1"><span data-plugin="counterup"><?php echo $file_b_upload ?></span></h3>
									<p class="text-muted mb-1 text-truncate">File B Uploaded</p>
								</div>
							</div>
						</div> <!-- end row-->
					</div> <!-- end widget-rounded-circle-->
				</div> <!-- end col-->
			</div>
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
								<th>Company Name </th>
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
									<td><?php echo $row->tax_id?></td>
									<td><?php echo $row->email?></td>
									<td><?php echo $row->company_name?></td>
									<td><?php echo $row->phone?></td>
									<td><?php echo $row->company_type?></td>
									<td style="display: flex; justify-content: center;"><?php echo  $row->letter_confirm ? '<span class="badge badge-success badge-pill">Uploaded</span>' : '<span class="badge badge-danger badge-pill">Not Uploaded</span>'?></td>
									<td style="display: flex; justify-content: center;"><?php echo  $row->file_a ? '<span class="badge badge-success badge-pill">Uploaded</span>' : '<span class="badge badge-danger badge-pill">Not Uploaded</span>'?></td>
									<td style="display: flex; justify-content: center;"><?php echo  $row->file_b ? '<span class="badge badge-success badge-pill">Uploaded</span>' : '<span class="badge badge-danger badge-pill">Not Uploaded</span>'?></td>
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
