<?session_start();


?>

<?php include('../template.php'); ?>
<?php include('../dbh.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../signed.css">


<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->

				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['username']; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $_SESSION['user']['rolename']; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>

						<li>
							<a href="register.php">
							<i class="glyphicon glyphicon-user"></i>
							Register new user </a>
						</li>

            <li>
							<a href="register.php">
							<i class="glyphicon glyphicon-user"></i>
							Change user's level(s) </a>
						</li>

            <li>
              <a href="register.php">
              <i class="glyphicon glyphicon-user"></i>
              Delete user </a>
            </li>

						<li>
							<a href="addtask.php" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Add new task </a>
						</li>


              <li>
                <a href="addtask.php" target="_blank">
                <i class="glyphicon glyphicon-ok"></i>
                Reassign task to (next) level </a>
              </li>


              <li>
                <a href="addnewfunction.php" target="_blank">
                <i class="glyphicon glyphicon-ok"></i>
                Add new function </a>
              </li>



                <li>
                  <a href="addtask.php" target="_blank">
                  <i class="glyphicon glyphicon-ok"></i>
                  Reassign function to level </a>
                </li>



              <li>
  							<a href="addtask.php" target="_blank">
  							<i class="glyphicon glyphicon-ok"></i>
  							Add new level </a>
  						</li>


                    <li>
              							<a href="../logout.php">
              							<i class="glyphicon glyphicon-flag"></i>
              						Log out </a>
              						</li>


					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>

<br>
<br>
