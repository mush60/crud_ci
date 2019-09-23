<!doctype html>
<html lang="en">

<!-- here head-part -->
	<?php
		$this->load->view('layout/head');
	?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- here sidebar -->
		<?php
			$this->load->view('layout/navbar');
		?>
		<!-- END NAVBAR -->
		<!-- here sidebar -->
		<?php

			$this->load->view('layout/sidebar');

		?>

		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Elements</h3>
					<div class="row">
						<!-- here content -->



					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->

	<!-- Here footer -->

	<?php
		$this->load->view('layout/foot');
	?>

	<!-- Here Js File -->
	<?php
		$this->load->view('layout/file_js');
	?>


</body>

</html>