<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// load database utils
include_once 'db.php';
include_once 'logging.php';

$db = new Mysqlidb ('localhost', 'wtiiaas', 'WYqmw6t9RN7NCl9U', 'wtiiaas');

function authenticate($key_guid) {
  $db = MysqliDb::getInstance();

  $db->where('key_guid = \''.$key_guid.'\'');
  $key = $db->getOne('apikeys', null, array('client_id', 'key_guid'));
  if (!empty($key)) {
    if ($key['key_guid'] === $key_guid) {
      return $key['client_id'];
    }
  }
  return false;
}

function xml_attribute($object, $attribute)
{
  if(isset($object[$attribute]))
  return (string) $object[$attribute];
}

function confirm_auth() {
  if (!isset($_SESSION['identity'])) {
    //not logged in
    header("Location: /intranet/loginform.php");
//    include_once("../intranet/loginform.php");
    die();
  }
}
?>