<?php

use App\Db;
require_once('autoloader.php');

$test = new Db;
$test::getDb();

?>

<h1>Mon bon coin</h1>
<p>C'est ici que nous allons tester tous nos CRUD</p>
<!-- Pour utiliser les méthodes des CRUD, il faut faire un require des class dont nous aurons besoin 
Comme nous ne voulons pas faire de require toutes les deux minutes, nous allons utiliser un autoloader -->

