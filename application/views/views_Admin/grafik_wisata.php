<?php  ?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<?php include "head.php"; ?>
	<script src="<?php echo base_url('asset/css_admin/assets/js/jquery-latest.js');?>"></script> 
	<script>
		var refreshId = setInterval(function()
		{
			$('#container').load('<?php echo site_url('c_admin/show_realtime_grafik_wisata') ?>');
		}, 10000);
	</script>
</head>
<body>
	<?php include "headernmenu.php"; ?>

	<div class="breadcrumbs">
		<div class="col-sm-4">
			<div class="page-header float-left">
				<div class="page-title">
					<h1>Dashboard</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="page-header float-right">
				<div class="page-title">
					<ol class="breadcrumb text-right">
						<li class="active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div id="container"></div>
		<button id="plain">Plain</button>
		<button id="inverted">Inverted</button>
		<button id="polar">Polar</button>
	</div>

	<!-- Right Panel -->
	<?php include "script.php" ?>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script type="text/javascript">
		
		
		var chart = Highcharts.chart('container', {

			title: {
				text: 'Chart.update'
			},

			subtitle: {
				text: 'Plain'
			},

			xAxis: {
				categories: <?php echo $category; ?>
			},

			series: [{
				type: 'column',
				colorByPoint: true,
				data: <?php echo $htm; ?>,
				showInLegend: false
			}]

		});


		$('#plain').click(function () {
			chart.update({
				chart: {
					inverted: false,
					polar: false
				},
				subtitle: {
					text: 'Plain'
				}
			});
		});

		$('#inverted').click(function () {
			chart.update({
				chart: {
					inverted: true,
					polar: false
				},
				subtitle: {
					text: 'Inverted'
				}
			});
		});

		$('#polar').click(function () {
			chart.update({
				chart: {
					inverted: false,
					polar: true
				},
				subtitle: {
					text: 'Polar'
				}
			});
		});
	</script>
</body>
</html>