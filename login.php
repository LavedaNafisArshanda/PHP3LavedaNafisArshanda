<?php
 $user = $_POST["username"]; 
 $pass = $_POST["password"]; 
    if ($user == "Laveda" && $pass == "54321") {     
            echo "Login Berhasil"; 
        } else {     
            echo "Login Gagal";
        } 
?> 