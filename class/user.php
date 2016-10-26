<?php

/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 1/23/16
 * Time: 8:56 PM
 */

require_once dirname(__FILE__) .'/../config.php';

class User
{
    public $id;
    public $email;
    public $lastLogin;
    public $last_name;
    public $first_name;
    public $href;
    public $username;
    public $password;
    public $img_url;
    public $groups;

    private $logged_in = false;


    private static function _create_id($account) {
        $href = $account->href;

        $array = explode("/", $href);
        return end($array);
    }

    public function __construct() {
        register_shutdown_function(array($this, '__destruct'));
    }

    public function __destruct() {
        return true;
    }

    // CRUD
    //
    public static function create_user($user) {
        global $stormpath_client;
        global $stormpath_directory;

        $account = $stormpath_client->dataStore->instantiate(\Stormpath\Stormpath::ACCOUNT);
        $account->email = $user->email;
        $account->givenName = $user->first_name;
        $account->password = $user->password;
        $account->surname = $user->last_name;
        $account->username = $user->username;

        $customData = $account->customData;
        $customData->lastLogin = date(DATE_RFC2822);

        try {
            $created_user = $stormpath_directory->createAccount($account);

            $new_account = $stormpath_client->dataStore->getResource($created_user->href, \Stormpath\Stormpath::ACCOUNT);
            $customData = $new_account->customData;
            $customData->id = self::_create_id($new_account);
            $customData->save();

            $rv = "success";
        } catch (\Stormpath\Resource\ResourceError $re) {
            $rv = 'Message: ' . $re->getMessage();
        }

        return $rv;
    }

    public static function update_user($old_user, $new_user) {
        global $client;

        try {
            $rv = '';

            if ($old_user) {
                $account = $client->dataStore->getResource($old_user->href, \Stormpath\Stormpath::ACCOUNT);
                $account->email = $new_user->email;
                $account->givenName = $new_user->first_name;
                $account->surname = $new_user->last_name;
                $account->username = $new_user->username;
                $account->save();

                $customData = $account->customData;
                $customData->save();
                $rv = "success";
            }
        } catch (\Stormpath\Resource\ResourceError $re) {
            $rv = 'Message: ' . $re->getMessage();
        }

        return $rv;
    }

    public static function delete_user($user) {
        global $client;

        $account = $client->dataStore->getResource($user, \Stormpath\Stormpath::ACCOUNT);
        $account->delete();
    }

    // Getter and Setters
    //
    public function set_user_from_account($user) {
        $this->first_name = $user->givenName;
        $this->last_name = $user->surname;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->href = $user->href;

        $customData = $user->customData;

        $this->lastLogin = $customData->lastLogin;
        $this->img_url = $customData->imgURL;
        $this->id = $customData->id;

        $groups = array();

        foreach($user->groups as $grp) {
            $groups[] = $grp->name;
        }

        $this->groups = $groups;
    }

    public static function get_account_by_id($id) {
        global $client;

        return $client->dataStore->getResource(STORMPATH_API_ACCOUNTS. $id, \Stormpath\Stormpath::ACCOUNT);
    }

    public function get_logged_in() {
        return $this->logged_in;
    }

    public function set_logged_in($true_false) {
        $this->logged_in = $true_false;
    }

    public function set_password($password) {
        global $stormpath_client;

        try {
            $account = $stormpath_client->dataStore->getResource($this->href, \Stormpath\Stormpath::ACCOUNT);
            $account->password = $password;
            $account->save();

            $rv = "success";
        } catch (\Stormpath\Resource\ResourceError $re) {
            $rv = 'Message: ' . $re->getMessage();
        }

        return $rv;
    }

    // Action Methods
    //
    public static function authenticate($username="", $password="", $remember="no") {
        global $stormpath_application;

        // Create tokens
        $passwordGrant = new \Stormpath\Oauth\PasswordGrantRequest($username, $password);
        $auth = new \Stormpath\Oauth\PasswordGrantAuthenticator($stormpath_application);
        $verify = new \Stormpath\Oauth\VerifyAccessToken($stormpath_application);

        try {
            $tokens = $auth->authenticate($passwordGrant);
            $access_token = $tokens->getAccessTokenString();
            $refresh_token = $tokens->getRefreshTokenString();
            $_SESSION['at'] = $access_token;

            $result = $verify->verify($access_token);

            $current_user = new User();
            $current_user->set_user_from_account($result->getAccount());
            $current_user->set_logged_in(true);
            $customData = $result->getAccount()->customData;
            $customData->lastLogin = date(DATE_RFC2822);
            $customData->save();

            $_SESSION['cud'] = $current_user->id;
            $_SESSION['rt'] = $refresh_token;

            return $current_user;
        } catch (\Stormpath\Resource\ResourceError $re) {
            $access = date("Y/m/d H:i:s");
            syslog(LOG_WARNING, "Unauthorized client: $access {$_SERVER['REMOTE_ADDR']} ({$_SERVER['HTTP_USER_AGENT']})");
            return NULL;
        }
    }

    public static function verify($access_token, $id) {
        global $stormpath_application;

        $verify = new \Stormpath\Oauth\VerifyAccessToken($stormpath_application);

        try {
            $result = $verify->verify($access_token);

            $current_user = new User();
            $current_user->set_user_from_account($result->getAccount());
            self::after_successful_login();

            return $current_user;
        } catch (\Stormpath\Resource\ResourceError $re) {
            try {
                $refresh_token = $_SESSION['rt'];
                $refreshGrant = new \Stormpath\Oauth\RefreshGrantRequest($refresh_token);
                $auth = new \Stormpath\Oauth\RefreshGrantAuthenticator($stormpath_application);
                $result = $auth->authenticate($refreshGrant);
                $new_access_token = $result->getAccessTokenString();
                $new_refresh_token = $result->getRefreshTokenString();

                $_SESSION['at'] = $new_access_token;
                $_SESSION['rt'] = $new_refresh_token;

                $result = $verify->verify($new_access_token);

                $current_user = new User();
                $current_user->set_user_from_account($result->getAccount());

                self::after_successful_login();
                return $current_user;
            } catch (\Stormpath\Resource\ResourceError $re) {
                self::logout();
            }
        }
    }

    public static function after_successful_login() {
        session_regenerate_id();

        $_SESSION['logged_in'] = true;

        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['last_login'] = time();

    }

    public static function logout() {
        $_SESSION['rt'] = "";
        $_SESSION['logged_in'] = false;
        $_SESSION['at'] = false;
        $_SESSION['cud'] = false;

        unset($_SESSION['logged_in']);
        unset($_SESSION['at']);
        unset($_SESSION['cud']);
        unset($_SESSION['rt']);

        session_destroy();
    }

    public static function forgot_password($email) {
        global $stormpath_application;

        try {
            $account = $stormpath_application->sendPasswordResetEmail($email);
            return "An email will be sent to you to update your password.";
        } catch (\Stormpath\Resource\ResourceError $re) {
            return $re->getMessage();
        }
    }

    public static function verify_password_reset($token) {
        global $stormpath_application;

        try {
            $account = $stormpath_application->verifyPasswordResetToken($token);
            $user = new User();
            $user->set_user_from_account($account);
            return $user;
        } catch (\Stormpath\Resource\ResourceError $re) {
        }
    }

    public static function verify_email_token($token) {
        try {
            $account = \Stormpath\Client::verifyEmailToken($token);

            $user = User::authenticate($account->username, $account->password);
            return $user;
        } catch (\Stormpath\Resource\ResourceError $re) {
            var_dump($re);
        }
    }

}

session_start();