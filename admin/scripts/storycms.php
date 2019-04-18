<?php
function createStory($fname,$story,$image){
		include('connect.php');

		$create_story_query = 'INSERT INTO tbl_stories(name,story,img)';
		$create_story_query .= ' VALUES(:fname,:story,:image)';
		$create_story_set = $pdo->prepare($create_story_query);
		$create_story_set->execute(
			array(
				':fname'=>$fname,
				':story'=>$story,
				':image'=>$image
			)
		);

		//sending an eail when a new user is created
		//refer to send_email.php
		if($create_story_set->rowCount()){
            redirect_to('index.php');
        }else {
            $message = 'An error has occured. Try again later';
			return $message;
		}
    }

    function editStory($id, $fname, $story, $image) {
        
		include('connect.php');
		$update_story_query = 'UPDATE tbl_stories SET name=:fname, story=:story,';
		$update_story_query .=' img=:image';
		$update_story_query .=' WHERE ID = :id';
		$update_story_set = $pdo->prepare($update_story_query);
		$update_story_set->execute(
			array(
				':fname'=>$fname,
                ':story'=>$story,
                ':image'=>$image,
				':id'=>$id
			)
		);
		//When update successfully, redirect user to index.php
		if($update_story_set->rowCount()){
			redirect_to('index.php');
		}else{
			//otherwise, return an error message
			$message = 'Story not updated.';
			return $message;
		}
	}
    
    ?>