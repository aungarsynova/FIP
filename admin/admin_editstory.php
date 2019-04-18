<?php
	require_once('scripts/config.php');

	confirm_logged_in();
	$id = 1;

	$tbl = 'tbl_stories';
	$col = 'ID';
    
    //finds user and gets thrit info from database tables
	$found_story_set = getSingle($tbl, $col, $id);
	// echo $found_story_set['name'];
	if(is_string($found_story_set)){
		$message = 'Failed to get story info!';
	}

    //these are input fields taht require infor to be put in
	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$story = trim($_POST['story']);
		$image = trim($_POST['image']);
	


		//Validation
		if(empty($fname) || empty($story) || empty($image)){
			$message = 'Please fill the required fields';
		}else{
			//Do the edit
			$result = editStory($id, $fname, $story, $image);
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
	<h2>Edit story</h2>
	<?php if($found_story = $found_story_set->fetch(PDO::FETCH_ASSOC));?>
	<form action="admin_editstory.php" method="post">
		<label for="first-name">Full Name</label>
		<input type="text" id="first-name" name="fname" value="<?php echo $found_story['name'];?>"><br><br>

		<label for="username">Story</label>
		<input type="text" id="username" name="story" value="<?php echo $found_story['story'];?>"><br><br>

		<label for="image">Image</label>
		<input type="text" id="avatar" name="image" value="<?php echo $found_story['img'];?>"><br><br>

		<button type="submit" name="submit">Edit</button>
	</form>

</body>
</html>