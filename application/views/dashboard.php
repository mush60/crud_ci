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
			$data['username'] = $this->session->userdata('username');
			$this->load->view('layout/navbar', $data);
		?>
		<!-- END NAVBAR -->
		<!-- here sidebar -->
		<?php

			$data = array('sidemenu' => $smenu );

			$this->load->view('layout/sidebar', $data['sidemenu']);

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