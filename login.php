<?php 
if (isset($_POST['login-submit'])) {
  
  require '../test.php';
  
  $mailuid = $_POST['mailuid'];
  $password = $_POST['password'];

  if (empty($mailuid) || empty ($password)) {
 header("Location: http://pondner.com");
  exit();
    
}
  else {
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_smtmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: http://pondner.com");
  exit();
  }

else {
  
  mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid );
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($result)) {
    $pwdCheck = password_verify($password, $row['pwdUsers']);
if ($pwdCheck == false) {
   header("Location: http://pondner.com");
  exit();
  
}
    else if ($pwdCheck == true) {
      session_start();
      $_SESSION['userId'] = $row['idUsers'];
      $_SESSION['userUid'] = $row['uidUsers'];
      
        header("Location: http://pondner.com/?login=success");
  exit();
  }
  else{
    
    header("Location: http://pondner.com");
  exit();
    
    
  }
  } 
  }
}
}
?>