<!DOCTYPE html>
<html lang="en">

<head>
	<title>Resume</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Responsive Resume Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900"
		rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>

	<header class="sticky-top">
		<nav class="navbar navbar-expand-lg bg-dark-subtle p-3 ">
			<div class="container">
				<a class="navbar-brand fw-bold" href="#">CV MAKER</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active fw-medium" aria-current="page"
								href="./index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-medium" href="./cv.php">Resume</a>
						</li>

					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search"
							aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<article class="resume-wrapper text-center position-relative">
			<?php
			include 'config.php';
			// include 'insert.php';
			


			$sql = "SELECT * FROM personalinfo, jobrequred, education";

			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)) {

				while ($row = mysqli_fetch_assoc($result)) {

					?>

					<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
						<header class="resume-header pt-4 pt-md-0">
							<div class="row">
								<div
									class="col-block col-md-auto resume-picture-holder text-center text-md-start">
									<img class="picture" src="assets/images/profile.jpg" alt="">
								</div><!--//col-->
								<div class="col">
									<div class="row p-4 justify-content-center justify-content-md-between">
										<div class="primary-info col-auto">
											<h1
												class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
												<?php echo $row['pfname']; ?> 		<?php echo $row['plname']; ?>
											</h1>
											<div class="title mb-3">Full Stack Developer</div>
											<ul class="list-unstyled">
												<li class="mb-2"><a class="text-link" href="#"><i
															class="far fa-envelope fa-fw me-2"
															data-fa-transform="grow-3"></i><?php echo $row['pemail']; ?></a>
												</li>
												<li><a class="text-link" href="#"><i
															class="fas fa-mobile-alt fa-fw me-2"
															data-fa-transform="grow-6"></i><?php echo $row['pphone']; ?></a>
												</li>
											</ul>
										</div><!--//primary-info-->
										<div class="secondary-info col-auto mt-2">
											<ul class="resume-social list-unstyled">
												<li class="mb-3"><a class="text-link" href="#"><span
															class="fa-container text-center me-2"><i
																class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/stevedoe</a>
												</li>
												<li class="mb-3"><a class="text-link" href="#"><span
															class="fa-container text-center me-2"><i
																class="fab fa-github-alt fa-fw"></i></span>github.com/username</a>
												</li>
												<li class="mb-3"><a class="text-link" href="#"><span
															class="fa-container text-center me-2"><i
																class="fab fa-codepen fa-fw"></i></span>codepen.io/username/</a>
												</li>
												<li><a class="text-link" href="#"><span
															class="fa-container text-center me-2"><i
																class="fas fa-globe"></i></span>yourwebsite.com</a>
												</li>
											</ul>
										</div><!--//secondary-info-->
									</div><!--//row-->

								</div><!--//col-->
							</div><!--//row-->
						</header>
						<div class="resume-body p-5">
							<section class="resume-section summary-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
									Career Summary</h2>
								<div class="resume-section-content">
									<p class="mb-0"><?php echo $row['jobcareer']; ?> </p>
								</div>
							</section><!--//summary-section-->
							<div class="row">
								<div class="col-lg-9">
									<section class="resume-section experience-section mb-5">
										<h2
											class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
											Work Experience</h2>
										<div class="resume-section-content">
											<div class="resume-timeline position-relative">
												<article
													class="resume-timeline-item position-relative pb-5">

													<div class="resume-timeline-item-header mb-2">
														<div class="d-flex flex-column flex-md-row">
															<h3
																class="resume-position-title font-weight-bold mb-1">
																<?php echo $row['jobtitle']; ?></h3>
															<div class="resume-company-name ms-auto">Startup
																Hub
															</div>
														</div><!--//row-->
														<div class="resume-position-time">
															<?php echo $row['jobsubtitle']; ?>
														</div>
													</div><!--//resume-timeline-item-header-->
													<div class="resume-timeline-item-desc">
														<p><?php echo $row['jobexperience']; ?>
														</p>
														<h4
															class="resume-timeline-item-desc-heading font-weight-bold">
															Achievements:</h4>
														<p>Praesentium voluptatum deleniti atque corrupti
															quos
														</p>
														<ul>
															<li>Lorem ipsum dolor sit amet, 80% consectetuer
																adipiscing elit.</li>
															<li>At vero eos et accusamus et iusto odio
																dignissimos.</li>
															<li>Blanditiis praesentium voluptatum deleniti
																atque
																corrupti.</li>
															<li>Maecenas tempus tellus eget.</li>
														</ul>
														<h4
															class="resume-timeline-item-desc-heading font-weight-bold">
															Technologies used:</h4>
														<ul class="list-inline">
															<li class="list-inline-item"><span
																	class="badge bg-secondary badge-pill"><?php echo $row['jobskill']; ?></span>
															</li>

														</ul>
													</div><!--//resume-timeline-item-desc-->

												</article><!--//resume-timeline-item-->

												<article
													class="resume-timeline-item position-relative pb-5">

													<div class="resume-timeline-item-header mb-2">
														<div class="d-flex flex-column flex-md-row">
															<h3
																class="resume-position-title font-weight-bold mb-1">
																<?php echo $row['jobtitle']; ?></h3>
															<div class="resume-company-name ms-auto">Google
															</div>
														</div><!--//row-->
														<div class="resume-position-time">
															<?php echo $row['jobsubtitle']; ?></div>
													</div><!--//resume-timeline-item-header-->
													<div class="resume-timeline-item-desc">
														<p><?php echo $row['jobexperience']; ?>
														</p>
														<h4
															class="resume-timeline-item-desc-heading font-weight-bold">
															Achievements</h4>
														<p>Cum sociis natoque penatibus et magnis dis
															parturient

														</p>
														<h4
															class="resume-timeline-item-desc-heading font-weight-bold">
															Technologies used:</h4>
														<ul class="list-inline">
															<li class="list-inline-item"><span
																	class="badge bg-secondary badge-pill"><?php echo $row['jobskill']; ?></span>
															</li>

														</ul>
													</div><!--//resume-timeline-item-desc-->

												</article><!--//resume-timeline-item-->


											</div><!--//resume-timeline-->


										</div>
									</section><!--//experience-section-->
								</div>
								<div class="col-lg-3">
									<section class="resume-section skills-section mb-5">
										<h2
											class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
											Skills &amp; Tools</h2>
										<div class="resume-section-content">
											<div class="resume-skill-item">
												<h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
												<ul class="list-unstyled mb-4">
													<li class="mb-2">
														<div class="resume-skill-name">Angular</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 98%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
													<li class="mb-2">
														<div class="resume-skill-name">React</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 94%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
													<li class="mb-2">
														<div class="resume-skill-name">JavaScript</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 96%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>

													<li class="mb-2">
														<div class="resume-skill-name">Node.js</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 92%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
													<li class="mb-2">
														<div class="resume-skill-name">HTML/CSS/SASS/LESS
														</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 96%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
												</ul>
											</div><!--//resume-skill-item-->

											<div class="resume-skill-item">
												<h4 class="resume-skills-cat font-weight-bold">Backend</h4>
												<ul class="list-unstyled">
													<li class="mb-2">
														<div class="resume-skill-name">Python/Django</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 95%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
													<li class="mb-2">
														<div class="resume-skill-name">Ruby/Rails</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 92%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
													<li class="mb-2">
														<div class="resume-skill-name">PHP</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 86%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
													<li class="mb-2">
														<div class="resume-skill-name">WordPress/Shopify
														</div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark"
																role="progressbar" style="width: 82%"
																aria-valuenow="25" aria-valuemin="0"
																aria-valuemax="100"></div>
														</div>
													</li>
												</ul>
											</div><!--//resume-skill-item-->


										</div><!--resume-section-content-->
									</section><!--//skills-section-->
									<section class="resume-section education-section mb-5">
										<h2
											class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
											Education</h2>
										<div class="resume-section-content">
											<ul class="list-unstyled">
												<li class="mb-2">
													<div class="resume-degree font-weight-bold">
														<?php echo $row['etitle']; ?></div>
													<div class="resume-degree-org">
														<?php echo $row['eversity']; ?>
													</div>
													<div class="resume-degree-time">
														<?php echo $row['epassyear']; ?></div>
												</li>
												<li>
													<div class="resume-degree font-weight-bold">
														<?php echo $row['etitle']; ?></div>
													<div class="resume-degree-org">
														<?php echo $row['eversity']; ?>
													</div>
													<div class="resume-degree-time">
														<?php echo $row['epassyear']; ?></div>
												</li>
											</ul>
										</div>
									</section><!--//education-section-->


									<section class="resume-section language-section mb-5">
										<h2
											class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
											Language</h2>
										<div class="resume-section-content">
											<?php
											if ($row['elanguage'] == '1') {
												$row['elanguage'] = 'English';
											} else {
												$row['elanguage'] = 'Bangla';
											}
											?>
											<ul class="list-unstyled resume-lang-list">
												<li class="mb-2">
													<span class='resume-lang-name font-weight-bold'>
														<?php echo $row['elanguage'] ?>
													</span>
													<small
														class="text-muted font-weight-normal">(Native)</small>
												</li>
											</ul>
										</div>
									</section><!--//language-section-->

								</div>
							</div><!--//row-->
						</div><!--//resume-body-->


					</div>
				<?php }
			} ?>
		</article>
	</main>


	<footer class="footer text-center pt-2 pb-5">

	</footer>



</body>

</html>