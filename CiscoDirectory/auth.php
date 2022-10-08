<?php
session_start();
include 'login_db.php';

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username))
    {
        header("Location: login.php?error=Username is required");
    } else if (empty($password))
    {
        header("Location: login.php?error=Password is required");
    } else
    {
        $stmt = $conn->prepare("SELECT * From user_account WHERE username=?");
        $stmt->execute([$username]);

        if ($stmt->rowCount() === 1)
        {
                $user = $stmt->fetch();

                $user_id = $user['user_id'];
                $user_name = $user['username'];
                $user_password = $user['password'];

                if ($username === $user_name) 
                {
                    if (password_verify($password, $user_password))
                    {
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['user_name'] = $user_name;
                        $_SESSION['user_password'] = $user_password;

                        header("Location: admin_profile.php");
                    } else
                    {
                        header("Location: login.php?error=Incorrect Username or Password");
                    }
                }else
                {
                    header("Location: login.php?error=Incorrect Username or Password");
                }
        } else
        {
            header("Location: login.php?error=Incorrect Username or Password");
        }
    }
}


?>