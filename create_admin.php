#!/usr/bin/php
<?php
	$path = ".admin_account";
	if (!file_exists($path))
		file_put_contents($path, "");
	$mdp = hash('whirlpool', $argv[1]);
	$tmp[] = ['login' => "admin", 'password' => $mdp, 'priv' => "superadmin", 'mail' => "admin@shop.fr"];
	file_put_contents($path, serialize($tmp));
?>
