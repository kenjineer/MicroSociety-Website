<?php
session_start(); // para tumakbo sa buong site

if (isset($_POST['cpega_submit'])){

    include_once 'dbmain.php';
    
    	$cpega_submit=mysqli_real_escape_string($conn,$_POST['cpega']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET cpega = 'PENDING' WHERE stud_sname = '$_SESSION[u_name]';";

            mysqli_query($conn, $sql);
            $_SESSION['u_cpega']= $row['cpega'];
            
            header ("Location: ../regcpegapen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['cpesem_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['cpesem']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET cpesem = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_cpesem']= $row['cpesem'];

            header ("Location: ../regcpesempen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['cpedays_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['cpedays']);
        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET cpedays = 'PENDING' WHERE stud_sname = '$_SESSION[u_name]';";

            mysqli_query($conn, $sql);
            $_SESSION['u_cpedays']= $row['cpedays'];

            header ("Location: ../regcpedayspen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['edays_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['edays']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET edays = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_edays']= $row['edays'];

            header ("Location: ../regedayspen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpepmem_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpepmem']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpepmem = 'PENDING' ;";
            mysqli_query($conn, $sql);
            $sql = "UPDATE users_cpe SET stud_mem = 'PENDING' ;";
            mysqli_query($conn, $sql);
            $_SESSION['u_icpepmem']= $row['icpepmem'];

            header ("Location: ../icpepmempen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpeptb_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpeptb']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpeptb = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_icpeptb']= $row['icpeptb'];

            header ("Location: ../icpeptbpen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpepga_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpepga']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpepga = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_icpepga']= $row['icpepga'];

            header ("Location: ../icpepgapen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpepchal_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpepchal']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpepchal = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_icpepchal']= $row['icpepchal'];

            header ("Location: ../icpepchalpen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpepnatcon_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpepnatcon']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpepnatcon = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_icpepnatcon']= $row['icpepnatcon'];

            header ("Location: ../cipepnatconpen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpeplympics_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpeplympics']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpeplympics = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_icpeplympics']= $row['icpeplympics'];

            header ("Location: ../icpeplympicspen.php?register=pending");
            exit();
        }      
}
elseif (isset($_POST['icpepcon_submit'])){

    include_once 'dbmain.php';
    
    	$cpesem_submit=mysqli_real_escape_string($conn,$_POST['icpepcon']);

        $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
            $sql = "UPDATE users_cpe SET icpepcon = 'PENDING' ;";

            mysqli_query($conn, $sql);
            $_SESSION['u_icpepcon']= $row['icpepcon'];

            header ("Location: ../icpepconpen.php?register=pending");
            exit();
        }      
}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
