<?php
include('../../components/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $query = "SELECT * FROM `signup_page` WHERE `email`='$email'";
    $result = mysqli_query($myconnect, $query);

    if (mysqli_num_rows($result)== 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start the session
            session_start(); // Start the session
            $_SESSION['sno']=$user['sno'];
            $_SESSION['LoggedIN']=true;
            $_SESSION['username'] = $user['username']; // Store username in session
            $_SESSION['email'] = $user['email']; // Optionally store email
            
            // Redirect to home page
            header("location: ../../home.php");
            exit();
        }
         else {
            echo "Error: Incorrect password.";
            echo $password;
        }
    } else {
        echo "Error: No account found with that email.";
    }
}
else{
    echo'nothing';
}
?>
