<link href="<?php echo base_url() ?>assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css"/>


<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<h4 class="page-title">Upload Users</h4>
					</div>
				</div>
			</div>

			<div class="row card-box">
				<?php $this->load->view('template/alert_message'); ?>
				<div class="col-md-12">

					<body id="tinymce" class="mce-content-body ">
					<h1 style="text-align: center;">
						<strong>Upload Customer From CSV</strong>
					</h1>

					<p style="text-align: center;"><img src="<?php echo base_url('assets/images/img.png'); ?>" alt=""
														width="150" height="150"></p>
					<h4>Instructions to upload files</h4>
					<blockquote>
						<p style="color:red">1. File should not be empty.</p>
						2. First row should be heading names. <br>
						3. Each column should not be empty.
					</blockquote>
					</p>
					<div class="alert" style="display: none;">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<strong>WARNING !</strong> Please upload valid CSV file.
					</div>
					</body>
					<div class="row">
						<div class="col-md-12">

							<form class="" action="<?php echo base_url() ?>upload_users"
								  id="frm_users" method="POST"
								  enctype="multipart/form-data">

								<div class="input-group">
									<select name="business_unit" id="business_unit" class="form-control" required>
										<option value="" selected>Select Business Unit</option>
										<?php foreach ($business_units->result() as $row) { ?>
											<option value="<?php echo $row->id ?>"
													<?php echo $this->input->get('business_unit') == $row->id ? "selected" : "" ?>
											><?php echo $row->business_unit ?></option>
										<?php } ?>
									</select>
								</div>
								<br>
								<br>
								<input type="file" name="users" data-plugins="dropify" required
									   data-allowed-file-extensions='["csv"]'/>
								<p class="text-muted text-center mt-2 mb-0">
									<button type="submit" class="btn btn-primary waves-effect waves-light">
										Upload
									</button>
								</p>
							</form>

						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- end row -->
	</div>
</div>
</div>


<!-- Plugins js -->
<script src="<?php echo base_url() ?>assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/dropify/js/dropify.min.js"></script>

<!-- Init js-->
<script src="<?php echo base_url() ?>assets/js/pages/form-fileuploads.init.js"></script>
