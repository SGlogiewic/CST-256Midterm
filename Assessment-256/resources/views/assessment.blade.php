<html>
<head>
	<title>Please fill out the following</title>
</head>
<body>
	<div>
		<form action="addUser" method="post">
		{{csrf field()}}
			<!-- Table div -->
			<div class="demo-table">
				<div class="form-head">Please fill out the info boxes</div>
				<!-- Begin firstname -->
				<div class="form-column">
					<div>
						<label for="firstname">First Name</label>
						<span id="user-info" class="error-info"></span>
					</div>
					<div>
						<input name="firstname" id="firstname_info" type="text" class="demo-input-box">
						<?php echo $errors->first('firstname')?>
					</div>
				</div>
				<!-- End firstname -->
				<!-- Begin lastname -->
				<div class="form-column">
					<div>
						<label for="lastname">Last Name</label>
						<span id="lastname-info" class="error-info"></span>
					</div>
					<div>
						<input name="lastname" id="lastname" type="text" class="demo-input-box">
						<?php echo $errors->first('lastname')?>
					</div>
				</div>
				<!-- End lastname -->
				<!-- Begin age -->
				<div class="form-column">
					<div>
						<label for="age">Age</label>
						<span id="user-info" class="error-info"></span>
					</div>
					<div>
						<input name="age" id="age_info" type="int" class="demo-input-box">
						<?php echo $errors->first('age')?>
					</div>
				</div>
				<!-- End age -->
				<!-- Begin email -->
				<div class="form-column">
					<div>
						<label for="email">Email</label>
						<span id="user-info" class="error-info"></span>
					</div>
					<div>
						<input name="email" id="email_info" type="text" class="demo-input-box">
						<?php echo $errors->first('email')?>
					</div>
				</div>
				<!-- End email -->
				<div>
					<input type="submit" class="btnLogin">
				</div>
			</div>
			<!-- End table div -->
		</form>
	</div>
	
</body>

</html>
<?php
if ($isSuccessful && $isSuccessfulAdd)
{
    $conn->addNewUser();
    system.out.println("User has been successfully added");
    return true;
}
else
{
    System.out.println("User has not been added");
    return false;
}
