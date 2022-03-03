<?php

require 'Model/DB.php';

require 'Model/entity/User.php';
require 'Model/entity/Role.php';
require 'Model/entity/Article.php';
require 'Model/entity/Comment.php';

require 'Model/manager/UserManager.php';
require 'Model/manager/Com_Manager.php';
require 'Model/manager/Article_Manager.php';
require 'Model/manager/Role_manager.php';
require 'Model/manager/UserRoleManager.php';

$us = new \App\Model\manager\UserManager();
$com = new \App\Model\manager\Com_Manager();
$art = new \App\Model\manager\Article_Manager();
$rol = new \App\Model\manager\role_manager();
$usRol = new \App\Model\manager\UserRoleManager();

echo 'Utilisateurs';
echo '<pre>';
print_r($us->findAll());
echo '</pre>';

echo '<br><br>';

echo 'Commentaire de l\'art 1';
echo '<pre>';
print_r($com->comByArtId(1));
echo '</pre>';

echo '<br><br>';

echo 'Articles';
echo '<pre>';
print_r($art->findAll());
echo '</pre>';

echo '<br><br>';

echo 'Roles';
echo '<pre>';
print_r($rol->findAllRole());
echo '</pre>';

echo '<br><br>';

echo 'Utilisateur id = 1';
echo '<pre>';
print_r($us->getUserById(1));
echo '</pre>';

echo '<br><br>';

echo 'Utilisateur role = 3';
echo '<pre>';
print_r($usRol->getUserByRoleId(3));
echo '</pre>';
