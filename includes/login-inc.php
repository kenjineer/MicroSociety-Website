<?php

session_start(); // para tumabok sa buong site



if (isset($_POST['login-submit']))
{

    include 'dbmain.php';

    $stud_id = mysqli_real_escape_string($conn, $_POST['stud_id']);
    $stud_pass = mysqli_real_escape_string($conn, $_POST['stud_pass']);

    if (empty($stud_id)|| empty($stud_pass))
    {
        header ("Location: ../login.html?login==Empty!");
        exit();
    }

    else
    {
        $sql = "SELECT * FROM users_cpe WHERE (stud_id='$stud_id' OR stud_email='$stud_id')";
        $result=mysqli_query($conn,$sql);
        $resultCheck= mysqli_num_rows($result);

        if($resultCheck < 1)
        {
            header ("Location: ../login_failed.html?login==error1!");
            exit();        
        }
        
        else {
            
            if ($row = mysqli_fetch_assoc($result))
            {
                $hashedPassCheck = password_verify($stud_pass,$row['stud_pass']);

                //tinitignan kung tugma
                if ($hashedPassCheck == false)
                {
                    header ("Location: ../login_failed.html?login==error2!");
                    exit();             
                }

                elseif ($hashedPassCheck == true)
                {

                    $_SESSION['u_name']= $row['stud_sname'];
                    $_SESSION['u_cpega']= $row['cpega'];
                    $_SESSION['u_cpesem']= $row['cpesem'];
                    $_SESSION['u_cpedays']= $row['cpedays'];
                    $_SESSION['u_edays']= $row['edays'];
                    $_SESSION['u_icpepmem']= $row['icpepmem'];
                    $_SESSION['u_icpeptb']= $row['icpeptb'];
                    $_SESSION['u_icpepga']= $row['icpepga'];
                    $_SESSION['u_icpepchal']= $row['icpepchal'];
                    $_SESSION['u_icpepnatcon']= $row['icpepnatcon'];
                    $_SESSION['u_icpeplympics']= $row['icpeplympics'];
                    $_SESSION['u_icpepcon']= $row['icpepcon'];

                    header("Location: ../indexlogin.php?login=success!");
                    exit();
                }
            }
        }
    }

}
else
{
    header ("Location: ../login.html?login==error!");
    exit();
}