<?php

    $userEmails=array("test1@email.com", "test2@email.com", "test3@email.com");
    $userPasswords=array("pwd1", "pwd2", "pwd3");
    $userCount=count($userEmails);
    
    //hashmap of users
    $users=array();
    for($i=0; $i<$userCount; $i++){
        $users[$userEmails[$i]] = $userPasswords[$i];
    }

    if (isset($_POST['login'])) {
        $email1 = $_POST['email1'];
        $pwd1 = $_POST['pwd1'];
        if ($users[$email1] == $pwd1) {
            echo "You have successfully been logged in <br />";
            echo "Username: " . $email1 . "<br />";
            echo "Password: " . $pwd1 . "<br />";
}
        else{
            echo "User does not exist. Please try again or register a new user";
        }
    }

    if(isset($_POST['signup'])){
        $email2=$_POST['email2'];
        $pwd2 = $_POST['pwd2'];
        if (array_key_exists($email2, $users)) {
            echo "That email is already associated with a user <br />";
        }
        else{
            $users[$email2] = $pwd2;
            echo "You have succesfully signed up! Thank you for registering for RouteIt " . "<br />";
        }
        foreach ($users as $key => $value){
            echo 'List of registered users: <br />'
            echo 'email: ' . $key . "<br />";
            echo 'pwd: ' . $value . "<br />";
        }
    }

    


?>
<a href="index.html">Click here to return to main page</a>
