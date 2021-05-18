<?php
                session_start();
                $Email = "";
                $Password = "";
                $errors = array();
                $db = mysqli_connect('localhost', '', '', '');

                
                    if(isset($_POST['Registration_Button'])) {
                            $Name = mysqli_real_escape_string($db,  $_POST ['name']);
                            $Email = mysqli_real_escape_string($db,  $_POST ['email']);
                            $Gender = mysqli_real_escape_string($db,  $_POST ['male']);
                            $Mobile_Number = mysqli_real_escape_string($db,  $_POST ['number']);
                            $Aadhar_Number = mysqli_real_escape_string($db,  $_POST ['aadhar']);
                            $Password = mysqli_real_escape_string($db,  $_POST ['pass']);
                            $Re_password = mysqli_real_escape_string($db,  $_POST ['re_pass']);
                        
                            if (empty($Name)){ array_push($errors, "name is required");}
                            if (empty($Email)) { array_push($errors, "Email is required"); } 
                            if (empty($Gender)) { array_push($errors, "Gender is required"); }
                            if (empty($Mobile_Number)) { array_push($errors, "Mobile Number is required"); }
                            if (empty($Aadhar_Number)) { array_push($errors, "Aadhar Number is required"); }
                            if (empty($Password)) { array_push($errors, "Password is required"); }
                            if ($Password != $Re_password) {
	                            array_push($errors, "The two passwords do not match");
	                            echo "<script> alert('Registered Failed! Different Password..')</script>";
                                echo "<script>setTimeout(\"location = 'Registration_Page.php';\",1000);</script>";
                            }
                            
                            
                        $user_check_query = "SELECT * FROM Registration WHERE Email='$Email' or Mobile_Number='$Mobile_Number' LIMIT 1";
                        $result = mysqli_query($db, $user_check_query);
                        $user = mysqli_fetch_assoc($result);
                        if ($user) { 
                                    if ($user['email'] === $Email) {
                                            array_push($errors, "Email is already exists");
                                        }
                                    if ($user['number'] === $Mobile_Number) {
                                                array_push($errors, "Number is already exists");
                                                }
                                    }
                                    
                                if (count($errors) == 0) {
  	                            //$Password = md5($Re_password);
  	                            $query = "INSERT INTO Registration (Name, Email, Gender, Mobile_Number, Aadhar_Number, Password, Re_password) 
  			                    VALUES('$Name','$Email','$Gender','$Mobile_Number','$Aadhar_Number','$Password','$Re_password')";
  	                            $_SESSION['email'] = $Email;
  	                         
                             	$_SESSION['success'] = "You are now logged in";
                             	$link = mysqli_query($db, $query);
                                if($link){
                                            echo "<script> alert('Register Successfully!!') </script>";
                                            echo "<script>setTimeout(\"location = 'ID-10/user_login.php';\",1000);</script>";
                                    } else {
                                            echo "<script> alert('Registered Failed! Email or Number is already registered, Maybe...')</script>";
                                            echo "<script>setTimeout(\"location = 'ID-10/Registration_Page.php';\",1000);</script>";
                                          }
                     }
}
                       
                        if (isset($_POST['signin'])) {
                            $Email = mysqli_real_escape_string($db, $_POST['email']);
                            
                            if (empty($Email)) {
                                array_push($errors, "Email is required");
                                }
                            
                            $Password = mysqli_real_escape_string($db, $_POST['pass']);
                            
                            if (empty($Password)) {
                                array_push($errors, "Password is required");
                            }
                    if (count($errors) == 0) {
                         $query = "SELECT * FROM Registration WHERE Email='$Email' AND Password='$Password'";
                         $results = mysqli_query($db, $query);
                         if (mysqli_num_rows($results) == 1) {
                         $_SESSION['name'] = $Name;
                         $_SESSION['email'] = $Email;
                         $_SESSION['success'] = "You are now logged in";
                         if($results){
                                            echo "<script> alert('Entered Details Are Correct For Login Process ....') </script>";
                                            echo "<script>setTimeout(\"location = 'ID-8/dashboard.php';\",0);</script>";
                                    }
                         }else {
                                 array_push($errors, "Wrong username/password combination");
                          }
                 }
                }
                

?>