<?php

include "GnuWiz/user.php";
include "GnuWiz/GnuStudy/user.php";
include "GnuWiz/JspStudy/user.php";

$user2 = new \GnuWiz\User();
echo $user2->getNamespaceName()."<br/>";

$user3 = new \GnuWiz\GnuStudy\User();
echo $user3->getNamespaceName()."<br/>";

$user4 = new \GnuWiz\JspStudy\User();
echo $user4->getNamespaceName()."<br/>";

?>