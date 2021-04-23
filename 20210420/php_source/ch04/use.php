<?php

include "GnuWiz/user.php";
include "GnuWiz/GnuStudy/user.php";
include "GnuWiz/JspStudy/user.php";

use GnuWiz\User as User;
use GnuWiz\GnuStudy\User as GnuUser;
use GnuWiz\JspStudy\User as JspUser;

$user1 = new User();
echo $user1->getNamespaceName()."<br/>";

$user2 = new GnuUser();
echo $user2->getNamespaceName()."<br/>";

$user3 = new JspUser();
echo $user3->getNamespaceName()."<br/>";

?>