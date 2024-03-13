<?php

if(isset($_POST["submit"])){

    $cpno1 = check($_POST['cpno1']);
    $cpno2 = check($_POST['cpno2']);
    $cpno3 = check($_POST['cpno3']);
    $cpno4 = check($_POST['cpno4']);
    $cfname1 = check($_POST['fname1']);
    $cfname2 = check($_POST['fname2']);
    $clname1 = check($_POST['lname1']);
    $clname2 = check($_POST['lname2']);
    $c_occu1 = check($_POST['occu1']);
    $c_occu2 = check($_POST['occu2']);
    $nature1 = check($_POST['nature1']);
    $nature2 = check($_POST['nature2']);
    $city1 = check($_POST['city1']);
    $city2 = check($_POST['city2']);
    $region1 = check($_POST['region1']);
    $region2 = check($_POST['region2']);
    $cemail1 = filter_var($_POST['email1'], FILTER_SANITIZE_EMAIL);
    $cemail2 = filter_var($_POST['email2'], FILTER_SANITIZE_EMAIL);
    $p_address1 = check($_POST['p_address1']);
    $p_address2 = check($_POST['p_address2']);
  
    if(date('d')<27){
        $end_date = date('Y-m-t', strtotime('+'.$dur1.' month'));
    }else{
        $end_date = date('Y-m-t', strtotime('+'.$dur1.' month'));
    }
    if((date('d')<27)){
        $start_day = date('Y-m-01');
    }else{
        $start_day = date('Y-m-01', strtotime('+1 month'));
    }

    $last_id = $_REQUEST['tID'];
    $date_reg1 = date('Y-m-d H:i:s');
    $stat = "Active";

    $sql2= "INSERT INTO tenant_contacts VALUES (' ','$last_id','$cfname1','$clname1','$c_occu1','$nature1','$cpno1','$cpno3','$cemail1','$p_address1','$city1','$region1','$cfname2','$clname2','$c_occu2','$nature2','$cpno2','$cpno4', '$cemail2', '$p_address2', '$city2', '$region2')";
  
    $insert = mysqli_query($con, $sql2);
    if($insert){

        echo "<script type='text/javascript'>alert('Welcome, Your contract begins on $start_day and ends on $end_date.');</script>";
        echo '<style>body{display:none;}</style>';
    }else{
        $_SESSION['msg'] = mysqli_error($con);
    }

    header('location: login.php');

}

?>