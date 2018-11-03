<?php

$_POST['username'] = 'ampas_90';
$username=$_POST['username'];

if (!preg_match('/^[a-zA-Z]{5}[\w_.]{1}[0-9]{2}$/',
                $username))
{
 return false;
}
else
{
 echo "username ok";
}

?>