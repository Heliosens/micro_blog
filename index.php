<?php

require 'entity/User.php';
require 'entity/Role.php';
require 'entity/Article.php';
require 'entity/Comment.php';

require 'manager/UserManager.php';
require 'manager/Com_Manager.php';
require 'manager/Article_Manager.php';
require 'manager/Role_manager.php';
require 'manager/UserRoleManager.php';

require 'DB.php';

$pdo = new DB();
$db = $pdo->conn();

