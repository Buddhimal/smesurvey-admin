<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Footer Start -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<script>
					document.write(new Date().getFullYear())
				</script> &copy; SME System
			</div>

		</div>
	</div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>
<!-- Plugin js-->
<script src="<?php echo base_url() ?>assets/libs/parsleyjs/parsley.min.js"></script>

<!-- Validation init js-->
<script src="<?php echo base_url() ?>assets/js/pages/form-validation.init.js"></script>

<!-- Plugins js-->
<script src="<?php echo base_url(); ?>assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- Dashboard 2 init -->
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard-2.init.js"></script>

<!-- App js-->
<script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>

<!-- Sweet Alerts js -->
<!--<script src="--><?php //echo base_url(); ?><!--assets/libs/sweetalert2/sweetalert2.min.js"></script>-->

<!-- Sweet alert init js-->
<!--<script src="--><?php //echo base_url(); ?><!--assets/js/pages/sweet-alerts.init.js"></script>-->
<!-- Plugins js-->
<script src="<?php echo base_url(); ?>assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Dashboar 1 init js-->
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard-1.init.js"></script>
<!-- Init js -->
<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assets/libs/morris.js06/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/morris.init.js"></script>


<!-- third party js -->
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!--<script src="--><?php //echo base_url(); ?><!--assets/libs/footable/footable.all.min.js"></script>-->
<!--<script src="--><?php //echo base_url(); ?><!--assets/js/pages/foo-tables.init.js"></script>-->
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<!--<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>-->
<!--<script src=""></script>-->
<!--<script src=""></script>-->
<!-- third party js ends -->

</body>

<script>

	$(document).ready(function() {
		$("#basic-datatable").DataTable({
			language: {
				paginate: {
					previous: "<i class='mdi mdi-chevron-left'>",
					next: "<i class='mdi mdi-chevron-right'>"
				}
			},
			drawCallback: function() {
				$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
			}
		});
		var a = $("#datatable-buttons").DataTable({
			lengthChange: !1,
			buttons: [{
				extend: "copy",
				className: "btn-light"
			}, {
				extend: "csv",
				className: "btn-light"
			}, {
				extend: "excel",
				className: "btn-light",
			}],
			language: {
				paginate: {
					previous: "<i class='mdi mdi-chevron-left'>",
					next: "<i class='mdi mdi-chevron-right'>"
				}
			},
			drawCallback: function() {
				$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
			}
		});
		a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

		var b = $("#datatable-buttons2").DataTable({
			lengthChange: !1,
			buttons: [{
				extend: "copy",
				className: "btn-light"
			}, {
				extend: "csv",
				className: "btn-light"
			}, {
				extend: "excel",
				className: "btn-light",
				filename: 'Uploaded Records',
				title: "Uploaded Records",
				exportOptions: {
					format: {
						body: function (data, row, column, node ) {
							switch(column){
								case 0 :  return column === 0 ? data.replace(/<.*?>/ig, "") : data; break;
								case 1 :  return column === 1 ? data.replace(/<.*?>/ig, "") : data; break;
								case 2 :  return column === 2 ? data.replace(/<.*?>/ig, "") : data; break;
								case 3 :  return column === 3 ? "\0" + data : data; break;
								case 4 :  return column === 4 ? data.replace(/<.*?>/ig, "") : data; break;
								case 5 :  return column === 5 ? data.replace(/<.*?>/ig, "") : data; break;
								case 6 :  return column === 6 ? data.replace(/<.*?>/ig, "") : data; break;
								case 7 :  return column === 7 ? data.replace(/<.*?>/ig, "") : data; break;
								default : return data; break;
							}
						}
					}
				}
			}],
			language: {
				paginate: {
					previous: "<i class='mdi mdi-chevron-left'>",
					next: "<i class='mdi mdi-chevron-right'>"
				}
			},
			drawCallback: function() {
				$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
			}
		});
		b.buttons().container().appendTo("#datatable-buttons2_wrapper .col-md-6:eq(0)");

	});

	function deleteRecord(id){
		var url="<?php echo base_url()?>export/delete?id="+id
		Swal.fire({
			icon:'warning',
			title: 'Do you want to delete this record?',
			showCancelButton: true,
			confirmButtonText: 'Delete',
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				location.href = url;
			}
		})
	}

</script>

</html>
