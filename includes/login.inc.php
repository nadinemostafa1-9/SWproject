<?php
declare(strict_types = 1);
include 'class-autoload.inc.php';

Session::init();

if(isset($_POST['login'])){
  Customer::CheckLogin($_POST['em'],$_POST['pass']);
}
