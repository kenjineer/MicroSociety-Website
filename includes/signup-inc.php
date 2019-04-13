
<?php
session_start(); // para tumakbo sa buong site
    

if (isset($_POST['signup-submit'])){

    include_once 'dbmain.php';
    
    $stud_id=mysqli_real_escape_string($conn,$_POST['stud_id']);
    $stud_fname=mysqli_real_escape_string($conn, $_POST['stud_fname']);
    $stud_mname=mysqli_real_escape_string($conn, $_POST['stud_mname']);
    $stud_sname=mysqli_real_escape_string($conn, $_POST['stud_sname']);
    $stud_year=mysqli_real_escape_string($conn, $_POST['stud_year']);
    $stud_section=mysqli_real_escape_string($conn, $_POST['stud_section']);
    $stud_section=strtoupper($stud_section);
    $stud_cont=mysqli_real_escape_string($conn, $_POST['stud_cont']);
    $stud_email=mysqli_real_escape_string($conn, $_POST['stud_email']);
    $stud_pass=mysqli_real_escape_string($conn, $_POST['stud_pass']);
    $stud_mem=mysqli_real_escape_string($conn, $_POST['stud_mem']);

    
    if (empty($stud_id)||empty($stud_fname)||empty($stud_mname)||empty($stud_sname)||empty($stud_year)||empty($stud_section)||empty($stud_cont)||empty($stud_email)||empty($stud_pass))
    {
//         echo "dumaan ka dito";
        //status: working
        header ("Location: ../register.html?signup=Empty!");
        exit();

    }
    else
    {
        // check if input char are valid
        // status: on progress
        
        if (!preg_match("/^[a-zA-Z \s]*$/",$stud_sname)) //tinitignan kung pasok ba o hindi
        {
         
           header ("Location: ../register.html?signup=Invalid!");
            exit();

        }
        else
        {
            // check if email is valid    
            //sinasala
               $stud_email = filter_var($stud_email,FILTER_SANITIZE_EMAIL); //sinasala
            
            
            if (!filter_var($stud_email, FILTER_VALIDATE_EMAIL))  //tinitignan kung pasok ba o hindi
        
            {
              
               header ("Location: ../register.html?signup=invalid E-mail!");
                exit();

            }
                
            else
            {

                $sql = "SELECT * FROM users_cpe WHERE stud_id='$stud_id'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck >0){

                    header ("Location: ../register.html?signup=user taken!"); // kung nagamit ng unang 
                    exit();

                }
                
                else
                {
                    //hassh the pass
                    $stud_pass = password_hash($stud_pass, PASSWORD_DEFAULT);
                    //insert the users into the db
                    $sql = "INSERT INTO users_cpe (stud_id,stud_fname,stud_mname,stud_sname,stud_year,stud_section,stud_cont,stud_email,stud_pass,stud_mem,icpepmem) 
                    VALUE ('$stud_id','$stud_fname','$stud_mname','$stud_sname','$stud_year','$stud_section','$stud_cont','$stud_email','$stud_pass','$stud_mem','$stud_mem');";

                    mysqli_query($conn, $sql);

                    header ("Location: ../login_success.html?signup=success!");
                    exit();

                }
            }

        }

    }

}else{

    header("Location: ../register.html");
    exit();
}

?>