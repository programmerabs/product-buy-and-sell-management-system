<?php 
include 'config/config.php';
include 'db.php';
?>
<?php
$db=new Database;
?>
<?php
if (isset($_POST['key']) && $_POST['key'] == 'login') {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $role = 'Admin';
    if($role=='Admin'){
       $sql=$db->select("select * from admin_tbl where admin_email='$email'");
         if($sql->num_rows > 0){
        while($admindata=$sql->fetch_assoc()){
          $admin_pass=$admindata['admin_pass'];
          $admin_email=$admindata['admin_email'];
          $admin_id=$admindata['id'];
      }
      if($password==$admin_pass){
         session_start();
          $_SESSION['sid']      =session_id();
          $_SESSION['login']    =true;
          $_SESSION['loginrole']='admin';
          $_SESSION['email']    =$admin_email;
          $_SESSION['admin_id']    =$admin_id;
       echo json_encode(['status' => 'admin', 'msg' => 'Login Successfull']);
        exit();
    }else{
      echo json_encode(['status' => 0, 'msg' => 'Invaild Password']);
      exit();
    }
    }else{
      echo json_encode(['status' => 0, 'msg' => 'Invaild Email Address']);
      exit();
    }
exit();
    }
}
//log out
if(isset($_POST['key']) && $_POST['key'] == 'logout'){
 session_start();
 session_unset();
 session_destroy();
 
}