<?php
// function for required input 
function requiredinput($input){
    if(empty($input)){
        return true;
    }else{
        return false;
    }
}
// function for min input 
function mininput($input,$key){
    if(strlen($input)<$key){
        return true;
    }else {
        return false;
    }
    
}
// function for max input 
function maxinput($input,$key){
    if(strlen($input)>$key){
        return true;
    }else {
        return false;
    }
}

// function for validateemail
function validateemail ($input){
    if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
        return true;
    }else {
        return false;
    }
}
function sameinput($input1,$input2){
    if($input1 != $input2){
        return true;
    }else {
        return false;
    }
}
function sessionstore($key,$value){
    return $_SESSION[$key] = $value;
}