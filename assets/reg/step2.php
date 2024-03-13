<?php

if(isset($_POST["submit"])){

    $price = $_POST['price'];
    $dur = $_POST['duration'];
    $dur1 = $dur - 1;
    $term = (int)$_POST['term'];
    $contract = $_POST['contract'];
    $house = $_POST['house'];
    $price = (int)$_POST['price'];
    $total_rent = $dur * $price;
    $rent_per_term =$total_rent / $term;
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

    $sql1 = "INSERT INTO contract VALUES (' ','$last_id', '$house','$dur','$total_rent','$term','$rent_per_term','$start_day', '$end_date', '$date_reg1', '$stat')";
  
    $insert = mysqli_query($con, $sql1);

    

    if($insert){
        $sql3 = "UPDATE house SET status= '$contract' WHERE house_id = '$house'";
        mysqli_query($con, $sql3);

        $_SESSION['step']   = 3;
    }else{
        $_SESSION['msg'] = mysqli_error($con);
    }

    header('location: register.php?step=3');

}

?>