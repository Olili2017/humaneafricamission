<?php

    use Engine\Config;
    use Engine\Cookie;
    use Engine\Session;

    session_start();

    $sys = parse_ini_file("sys.ini",true);

    $GLOBALS["config"] = array(
        'mysql' => array(
            "host" => $sys["Application"]['db_host'],
            "username" => $sys["Application"]['db_user'],
            "password" => $sys["Application"]['db_password'],
            "db" => $sys["Application"]['db_name']
        ), 
        'remember' => array(
            "cookie_name" => "ham_hash",
            "expiry" => 604800
        ), 
        'session' => array(
            "session_name" => "ham_user",
            "token_name" => "ham_token"
        ), 
        'system' => array(
            "name" => "Humane Africa Mission",
            "name_short" => "HAM",
            "version" => "V1.0.0"
        )
    );

    spl_autoload_register(function($class)
    {
	    $file_loc = DOCUMENT_ROOT."/assets/php/".strtolower($class).".class.php";
	    $file_loc = str_replace("\\", "/", $file_loc);
	    //die($file_loc);
        require_once($file_loc);
    });

    require_once("../functions/sanitize.php");

    if(Cookie::exists(Config::get('remember/cookie_name') && !Session::exists(Config::get('session/session_name')))){
        $hash = Cookie::get(Config::get('remember/cookie_name'));
        $hashCheck = Database::getInstance()->get('users_session', array('hash', "=", $hash));

        if($hashCheck->count()){
            $user = new User($hashCheck->first()->user_id);
            $user->login();
        }
    }
?>
