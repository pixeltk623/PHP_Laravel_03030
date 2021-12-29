<?php
	
    include_once 'config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $profilePic = $_FILES['profile_pic'];
    if (isset($_POST['hobby'])) {
        $hobby = implode(",", $_POST['hobby']);
   	} else {
        $hobby = '';
   	}
	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	} else {
		$gender = '';
	}

    $ext = strtolower(pathinfo($profilePic['name'], PATHINFO_EXTENSION));
    $size = round($profilePic['size']/1024);
    $isValid = false;

    $fileName = '';
    
    if($profilePic['size']<1){
        $fileE =  '<small class="text-danger">File is Not Selected</small>';
    } else {

        if (!(in_array($ext, ALLOW_EXT))) {
            $fileE =  '<small class="text-danger">Not Allow</small>';
        } else {
            if ($size>=50 && $size<=250) {
                $isValid = true;

                $fileName = time().".".$ext;
            } else {
                $fileE =  '<small class="text-danger">Size is not valid</small>';
            }    
        }
    }

    if (($name && $email && $city && $gender && $hobby)!='' && $isValid==true) {
        move_uploaded_file($profilePic['tmp_name'], "uploads/".$fileName);
        $query = "INSERT INTO `employees`(`name`, `email`, `gender`, `hobby`, `city`, `file_name`) VALUES ('$name','$email', '$gender', '$hobby', '$city', '$fileName')";

        $result = mysqli_query($conn, $query);

        if ($result) {

        	echo json_encode(['status' => true, 'message' => 'New Record Added']);

        } else {
            echo json_encode(['status' => false, 'message' => 'Something Error']);
        }
    } 

?>