<?php
    
        include('connect.php');

        $query = "SELECT * FROM tbl_stories";

        $getAllStories = $pdo->prepare($query);
        $getAllStories->execute();

        $stories = array();

        while($user = $getAllStories->fetch(PDO::FETCH_ASSOC)) {

            
            // $currentuser['avatar'] = $user['user_avatar'];

            $stories[] = $user;
        }
        
        echo json_encode($stories);
?>