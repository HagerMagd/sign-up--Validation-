<?php
session_start();
include_once("function.php");
// using sanitize for name , and Remove Arabic letters.
$username=trim(filter_var($_POST['user_name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH)); 
// using sanitize for email
$useremail=filter_var($_POST['user_email'],FILTER_SANITIZE_EMAIL);
$userpassword=trim(htmlentities($_POST['password']));
$confirmpassword=$_POST['c_p'];
$errors=[];
if($_SERVER['REQUEST_METHOD']=='POST'){
    //validition for name
    if(requiredinput($username)){
        $errors[]='please enter your name'."<br>";
     
     }elseif(mininput($username,3) ){
        $errors[]="your name must greater than 3 "."<br>";
        
     }elseif(maxinput($username,20) ){
        $errors[]="your name must smaller than 20 "."<br>";
        
    }
    //validition for email
    if(requiredinput($useremail)){
        $errors[]='please enter your email' ."<br>";
      
    }elseif(validateemail($useremail)){ // using for filter email
        $errors[]="please enter a valid email";
        
    }
    //validition for password
    if(requiredinput($userpassword)){
        $errors[]='please enter your password'."<br>";
        
    }elseif(mininput($userpassword,3) ){
        $errors[]="your password must greater than 3 "."<br>";
        
     }elseif(maxinput($userpassword,20) ){
        $errors[]="your password must smaller than 20 "."<br>";
        
    }
    if(requiredinput($confirmpassword)){
        $errors[]='please confirm your password'."<br>";
       
    }elseif(sameinput($userpassword,$confirmpassword)){
        $errors[]='The two password are not same'."<br>";
    }
    if(empty($errors)){
        header("location:profile.php");
        sessionstore('username',$username);
        sessionstore('useremail',$useremail);
        sessionstore('userpassword',$userpassword);
        
      
    }else{
        sessionstore('errors',$errors);
      header("location:sign-up.php");
      
    }

}
else{
   echo "Not Supported this method";
}
echo "<br>";
