    <?php

    $username = $_REQUEST['name'];
    $pass     = $_REQUEST['pass'];
    $email    = $_REQUEST['email'];


    if($username ==""){

        echo "Please Enter the UserName";
    }
    elseif($pass==""){

        echo "Please Enter The Pass";
    }

    elseif($email==""){

        echo "Please Enter the Email";
    }
    else{

        echo "All is Correct Goes On..!!!";
    }

    ?> 
