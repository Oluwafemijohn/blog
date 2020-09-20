<?php
function validateUser($user)
{
    
    $errors = array();
    if (empty($user['names'])){
        array_push($errors, "Username is required");
    }
    if (empty($user['email'])){
        array_push($errors, "Email is required");
    }
    if (empty($user['password'])){
        array_push($errors, "Password is required");
    }
  
    if ($user['passwordConf'] !== $user['password']){
        array_push($errors, "Password do not match");
    }
    // $existingUser = selectOne('u', ['email' => $user['email']]);
    // if($existingUser){
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser= selectOne('u', ['email' => $user['email']]);
    if($existingUser){
        if(isset($user['update-user']) && $existingUser['id'] != $user['id']){
            array_push($errors, 'User with that email alreaddy exists');
        }
        if(isset($user['add-user'])){
            array_push($errors, 'User with that email alreaddy exists');
        }
    }
    
    return $errors;
}

function validateLogin($user)
{
    
    $errors = array();
    if (empty($user['email'])){
        array_push($errors, "Email is required");
    }
  
    if (empty($user['password'])){
        array_push($errors, "Password is required");
    }
  
 
    return $errors;
}