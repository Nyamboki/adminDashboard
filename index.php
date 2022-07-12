<?php
require_once('logics/dbconnection.php');
//count all enrolled students
$queryAllStudents=mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryAllStudents);

//count by gender
$queryAllFemale = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='Female'");
$countAllFemale = mysqli_num_rows($queryAllFemale);
$queryAllMale = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='Male'");
$countAllMale = mysqli_num_rows($queryAllMale);
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?> 
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
		

	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
					<div class="card-body"></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body"></div>
					<span><i class="fa fa-group fa-3x"></i></span>
					<span class="float-right badge badge-dark"><?php echo $countAllStudents?></span>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available Courses</span>
					</div>
					<div class="card-body"></div>
					<span><i class="fa fa-folder-open fa-3x"></i></span>
					<span class="float-right"><?php echo $countAllFemale ?></span>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>campuses</span>
					</div>
					<div class="card-body"></div>
					<span><i class="fa fa-graduation-cap fa-3x"></i></span>
					<span class="float-right">00</span>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Users</span>
					</div>
					<div class="card-body"></div>
					<span><i class="fa fa-users fa-3x"></i></span>
					<span class="float-right">00</span>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
					<div class="card-body"></div>
					<span><i class="fa fa-line-chart fa-3x"></i></span>
					<span class="float-right">00</span>
					<div class="card-footer"></div>

				</div>
			</div>
		</div>

	</div>
	
    <?php require_once('includes/scripts.php') ?>
</body>
</html>