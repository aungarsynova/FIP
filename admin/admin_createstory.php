<?php 
    //check if user is loged in
	require_once('scripts/config.php');
    confirm_logged_in();
    //only create user when submitted
	if(isset($_POST['submit'])){
		//Do some preprocess for the data
		// if user adds uneccessary spaces, trim gets rid of space before and after string
		$fname = trim($_POST['fname']);
		$story = trim($_POST['story']);
		$image = trim($_POST['image']);

		//Validation?
		if(empty($fname) || empty($story) || empty($image)){
			$message = 'Please fill the required fields';
		}else{
            //creates user as a result
			$result = createStory($fname,$story,$image);
			
			$message = $result;
		}
	}
?>

<!--user create form-->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create User</title>
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
	<h2>Create Story</h2>
	<form action="admin_createstory.php" method="post">
		<label for="first-name">Full Name</label>
		<input type="text" id="first-name" name="fname" value=""><br><br>

		<label for="username">Story</label>
		<input type="text" id="username" name="story" value=""><br><br>

		<label for="image">Image</label>
		<input type="text" id="avatar" name="image" value=""><br><br>

		<button type="submit" name="submit">Create User</button>
	</form>

</body>
</html>