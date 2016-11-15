<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/3/16
 * Time: 5:39 AM
 */

// Stormpath
//define('STORMPATH_APIKEY', '.stormpath/apiKey.properties');
//define('STORMPATH_DIRECTORY_PATH', 'https://api.stormpath.com/v1/directories/7k54P2jbKEvYW3iKjqtIOE');
//define('STORMPATH_APPLICATION_PATH', 'https://api.stormpath.com/v1/applications/7k4EWPDP5JH2nmeiIHFHlG');
//
//require_once('vendor/autoload.php');
//
//$apiKeyFile = STORMPATH_APIKEY;
//\Stormpath\Client::$apiKeyFileLocation = $apiKeyFile;
//$builder = new \Stormpath\ClientBuilder();
//$stormpath_client = $builder->setApiKeyFileLocation($apiKeyFile)->build();
//$stormpath_directory = $stormpath_client->dataStore->getResource(STORMPATH_DIRECTORY_PATH, \Stormpath\Stormpath::DIRECTORY);
//$stormpath_application = $stormpath_client->dataStore->getResource(STORMPATH_APPLICATION_PATH, \Stormpath\Stormpath::APPLICATION);
//
//$policy = $stormpath_application->oauthPolicy;
//$policy->accessTokenTtl = 'PT1M';
//$policy->refreshTokenTtl = 'P7D';
//$policy->save();

// Database
define('DB_USER', 'dom');
define('DB_PASSWORD', 'bwdhLshS9aLUFnzh');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('DB_NAME', 'girlscouts');



