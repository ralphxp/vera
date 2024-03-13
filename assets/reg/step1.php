<?php

if(isset($_POST["submit"])){
  
    $fname = check($_POST['FirstName']);
    $lname = check($_POST['LastName']);
    $prog = @check($_POST['programme']);
    $reg = @check($_POST['regno']);
    $occ = @check($_POST['occupation']);
    $pno1 = check($_POST['pno1']);
    $pno2 = check($_POST['pno2']);
    $postal = check($_POST['postal']);
    $city = check($_POST['city']);
    $region = check($_POST['region']);
    $uname = check($_POST['uname']);
    $pword = check($_POST['password']);
    $pword = md5($pword);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $date_reg = date('Y-m-d');
    $status = 0;

    $sql= "INSERT INTO tenant VALUES (' ','$fname','$lname','$prog','$reg','$occ','$pno1','$pno2','$email','$postal','$city','$region','$uname','$pword', '$date_reg', '$status')";

    $insert = mysqli_query($con, $sql);

    if($insert){
        $last_id=mysqli_insert_id($con);
        $_SESSION['insert_id'] = $last_id;
        $_SESSION['step']   = 2;
    }else{
        $_SESSION['msg'] = mysqli_error($con);
    }

    header('location: register.php?step=2');

}

?>