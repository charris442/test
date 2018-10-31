
<?php
if (isset($_POST['signup-submit'])) {
 require 'test.php';
  $username = $_POST['uid'];
  $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
  if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    
    header("Location: http://pondner.com/?".$username."&mail=".$email);
    exit();
  }
  else{
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=? ";
    $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: http://pondner.com");
    exit();
  }
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if(resultCheck > 0) {
          header("Location: http://pondner.com");
    exit();
        }
      
  else {
    $sql = "INSERT INTO users (uidUsers, emailusers, pwdUsers) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: http://pondner.com");
    exit();
    }
    else {
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "sss", $username,$email, $hashedPwd);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      header("location: http://pondner.com");
      exit();
    }
  }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else{
  header("location: http://pondner.com");
      exit();
}
?>