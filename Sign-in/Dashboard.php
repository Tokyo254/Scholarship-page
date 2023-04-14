<?php

session_start();

if (isset($_SESSION["user_id"])) {

	$mysqli = require __DIR__ . "/database.php";

	$sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

	$result = $mysqli->query($sql);

	$user = $result->fetch_assoc();
}
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="./Dashboardstyle.css">

	<title>AdminHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text"><br>ICSSGreenhub <br></span>
		</a>

		<ul class="side-menu top">

			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#scholarships">
					<i class='bx bxs-graduation'></i>
					<span class="text">Scholarships</span>
				</a>
			</li>
			<li>
				<a href="#green-_ischool">
					<i class='bx bx-laptop'></i>
					<span class="text">Green iSchool</span>
				</a>
			</li>
			<li>
				<a href="#blogs">
					<i class='bx bxs-book'></i>
					<span class="text">Blogs</span>
				</a>
			</li>
			<li>
				<a href="#resources">
					<i class='bx bxs-group'></i>
					<span class="text">Resources</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#settings">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>

			<a href="#" class="profile"><i class='bx bxl-facebook-circle'></i></a>
			<a href="#" class="profile"><i class='bx bxl-instagram-alt'></i></a>
			<a href="#" class="profile"><i class='bx bxl-twitter'></i></a>
			<a href="#" class="profile"><i class='bx bxl-linkedin'></i></a>

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-user-circle'></i>
					<span class="text"><?php isset($user); ?>
						<p>Hello <?= htmlspecialchars($user["name"]); ?></p>
						<?php ?>
					</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-school'></i>
					<span class="text">
						<h3>1020</h3>
						<p>Primary</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>834</h3>
						<p>High School</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-graduation'></i>
					<span class="text">
						<h3>43</h3>
						<p>Undergraduate Slots</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Available Scholarships</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Fund</th>
								<th>Deadline</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="./img/download.png">
									<p>Mastercard Foundation</p>
								</td>
								<td>01-10-2024</td>
								<td><span class="status completed"><a href="./scholarship.html">Apply</a></span></td>
							</tr>
							<tr>
								<td>
									<img src="./img/download2.png">
									<p>Equity Group</p>
								</td>
								<td>01-10-2024</td>
								<td><span class="status completed"> <a href="./scholarship.html">Apply</a> </span></td>
							</tr>
							<tr>
								<td>
									<img src="./img/logo-wb-header-en.svg">
									<p>World Bank</p>
								</td>
								<td>01-10-2024</td>
								<td><span class="status process">Full</span></td>
							</tr>
							<tr>
								<td>
									<img src="./img/download (1).png">
									<p>United Nations</p>
								</td>
								<td>01-10-2024</td>
								<td><span class="status completed"><a href="./scholarship.html">Apply</a></span></td>
							</tr>
							<tr>
								<td>
									<img src="./img/img.jpg">
									<p>Standard Chartered Bank</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed"><a href="./scholarship.html">Apply</a></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Green ilearn</h3>
						<i class='bx bx-plus'></i>
						<i class='bx bx-filter'></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Technology</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Climate Garage</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p> Green and Sustainable Finance</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Ecology and conservation</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Public health</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<section id="wrapper">
		<div class="side">
			<div class="scholarships agile" id="scholarships">

			</div>
			<div class="green_ischool">

			</div>
			<div class="blogs">

			</div>
			<div class="resources">

			</div>
			<div class="settings">

			</div>

	</section>

	<script src="./Dashboardscript.js"></script>
</body>

</html>