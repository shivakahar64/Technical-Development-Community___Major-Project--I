<?php
    session_start();
    $error = '';
    if (isset($_POST['signin'])) {
        if (empty($_POST['email']) || empty($_POST['pass'])) {
    $error = "Email or Password is invalid";
    }
    else{
   
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    
    $conn = mysqli_connect('localhost', '', '', '');
  
    $query = "SELECT Email, Password from Registration where Email=? AND Password=? LIMIT 1";
  
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();
    $stmt->bind_result($Email, $Password);
    $stmt->store_result();
    if( $stmt->num_rows > 0 ){
        while($stmt->fetch()){
    $_SESSION['client_user'] = $Email; 
    echo "<script> alert('Login Successfully!!') </script>";
    echo "<script>setTimeout(\"location = 'dashboard.php';\",1000);</script>";
        }
    }
    
    }
    mysqli_close($conn);
    }
    ?>