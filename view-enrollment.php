<?php
//database connection
require_once('logics/dbconnection.php');
$sqlFetchStudent = mysqli_query($conn,
"SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
while($fetchStudentRecords = mysql_fetch_array($sqlFetchStudent))
{
    $fullname = $fetchStudentsRecords['fullname'];
    $phone = $fetchStudentsRecords['phonenumber'];
    $email = $fetchStudentsRecords['email'];
}
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?> 
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">    
	<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-tittle">Personal Information</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Full Name: <span class="float-right badge badge-primary">Daniel Lewis</span></li>
                        <li class="list-group-item">Email: <span class="float-right badge badge-secondary">Nyambokilewis4@gmail.com</span></li>
                        <li class="list-group-item">Phone Number: <span class="float-right badge badge-danger">+254741185868</span></li>
                </div>
    <?php require_once('includes/scripts.php')?>
</body>
</html>