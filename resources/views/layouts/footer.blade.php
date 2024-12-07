			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright m-auto">
						Copyright@2024  | <a href="https://qbit-tech.com" target="_Blank">QBit Tech</a>, All Right Reserve.
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('admin')}}/assets/js/core/jquery-3.7.1.min.js"></script>
	<script src="{{asset('admin')}}/assets/js/core/popper.min.js"></script>
	<script src="{{asset('admin')}}/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('admin')}}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="{{asset('admin')}}/assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="{{asset('admin')}}/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('admin')}}/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="{{asset('admin')}}/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{asset('admin')}}/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('admin')}}/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('admin')}}/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
	<script src="{{asset('admin')}}/assets/js/plugin/jsvectormap/world.js"></script>

	<!-- Dropzone -->
	<script src="{{asset('admin')}}/assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="{{asset('admin')}}/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="{{asset('admin')}}/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="{{asset('admin')}}/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- jQuery Validation -->
	<script src="{{asset('admin')}}/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="{{asset('admin')}}/assets/js/plugin/summernote/summernote-lite.min.js"></script>

	<!-- Select2 -->
	<script src="{{asset('admin')}}/assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('admin')}}/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Owl Carousel -->
	<script src="{{asset('admin')}}/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('admin')}}/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Kaiadmin JS -->
	<script src="{{asset('admin')}}/assets/js/kaiadmin.creative.min.js"></script>

	<!-- Kaiadmin DEMO methods, don't include it in your project! -->
	<script src="{{asset('admin')}}/assets/js/setting-demo.js"></script>
	<!-- <script src="{{asset('admin')}}/assets/js/demo.js"></script> -->
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-select"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>



    @stack('script')



	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
     @if (session('success'))
     <script>
         $(document).ready(function () {
             $.notify({
                 // Options
                 message: '{{ session('success') }}'
             }, {
                 // Settings
                 type: 'success',
                 delay: 3000,
                 allow_dismiss: true,
                 placement: {
                     from: "top",
                     align: "right"
                 }
             });
         });

     </script>
     @endif

     @if (session('danger'))
     <script>
         $(document).ready(function () {
             $.notify({
                 // Options
                 message: '{{ session('danger') }}'
             }, {
                 // Settings
                 type: 'danger',
                 delay: 3000,
                 allow_dismiss: true,
                 placement: {
                     from: "top",
                     align: "right"
                 }
             });
         });

     </script>
     @endif
     @if (session('error'))
     <script>
         $(document).ready(function () {
             $.notify({
                 // Options
                 message: '{{ session('error ') }}'
             }, {
                 // Settings
                 type: 'danger',
                 delay: 3000,
                 allow_dismiss: true,
                 placement: {
                     from: "top",
                     align: "right"
                 }
             });
         });

     </script>
     @endif

</body>
</html>
