<?php
require_once '../utils/utils.php';

$db->where('employee_role',1); //ceo
$db->orWhere('employee_role',2); //cfo
$db->orWhere('employee_role',3); //cto

$employees = $db->get('employees',null,array('employee_role','employee_id'));
print_r($employees);


?>