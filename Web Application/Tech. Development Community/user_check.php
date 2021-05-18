<?php
  
    $conn = mysqli_connect('localhost', '', '', '');
    session_start();
    $user_check = $_SESSION['client_user'];
    $pay_dt = $_SESSION['Curr_d_t'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT Email from Registration where Email = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_client_session = $row['Email'];
?>