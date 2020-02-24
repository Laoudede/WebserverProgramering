<?php

session_start();
header('Content-type: text/html; charset=utf-8');
$URI_parsed = parse_url($_SERVER['REQUEST_URI']);
$URI_parts  = explode('/', $URI_parsed['path']);
error_reporting(E_ALL);
print_r ($URI_parts);
require "topview.php";
require "menuview.php";
require "bottomview.php";
require "article_startview.php";
require "article_omview.php";
require "article_kontaktaview.php";
require_once "dbconnect.php";
require 'commentmodel.php';
require 'postmodel.php';
require 'postview.php';


if($URI_parts[3]==null || $URI_parts[3]==""){

  header('Location: /WebserverProgramering/mvctemplate/start');
  exit;

}

if ($URI_parts[3] == 'start'){

  top();
  menu();
  //article_start(null);
  postview();
  bottom();

}else if ($URI_parts[3] == 'om'){

  top();
  menu();
  article_om();
  bottom();


}else if ($URI_parts[3] == 'kontakta'){
  top();
  menu();
  article_kontakta();
  /*$users=getusersmodel();
  usersview($users); */
  bottom();

}
else{
  header("HTTP/1.0 404 Not Found");
  echo"sökta sidan finns inte";

}
