<?php
		if (!file_exists("dbs"))
        {
    //        $_SESSION['panier'] == "";
    //        session_unset();
			   mkdir("dbs", 0700);
        }
		if (!file_exists("dbs/users"))
		{
      $path = ".admin_account";
			$new_admin = unserialize(file_get_contents($path));
//			$new_users_tab[] = $new_admin;
			file_put_contents("dbs/users", serialize($new_admin));
		}
    if (!file_exists("dbs/items"))
    {
      $new_item['name'] = 'Cockail Molotov';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Explo/CocktailMolotov.jp2';
      $new_item['promo'] = '1';
      $new_item['img'] = 'img/Explo/cm.jpg';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'C4';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '25';
      $new_item['img'] = 'img/Explo/C-4.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Cryo Grenade';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '30';
      $new_item['img'] = 'img/Explo/CryoGrenade.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Cryo Mine';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '30';
      $new_item['img'] = 'img/Explo/CryoMine.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Dynamite';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Explo/Dynamite.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade Flash';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '20';
      $new_item['img'] = 'img/Explo/Flash_bang.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade classique';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '15';
      $new_item['img'] = 'img/Explo/FRAG_GRE.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Mine Classique';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '15';
      $new_item['img'] = 'img/Explo/FragMine.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade Gas';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '15';
      $new_item['img'] = 'img/Explo/Gas_bomb.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '15';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade Incendiaire';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '20';
      $new_item['img'] = 'img/Explo/Incend.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Mine Plasma';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '30';
      $new_item['img'] = 'img/Explo/Plasma_mine.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade Plasma';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Explo/PlasmaGrenade.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade Pulse';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '20';
      $new_item['img'] = 'img/Explo/PulseGrenade.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Mine Pulse';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '25';
      $new_item['img'] = 'img/Explo/PulseMine.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Grenade Stun';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '20';
      $new_item['img'] = 'img/Explo/Stun_grenade.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Time Bombe';
      $new_item['cat'] = 'Explosif';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '15';
      $new_item['img'] = 'img/Explo/TimeBombFNV.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre .5';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/5.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

 	  $new_item['name'] = 'Munitions calibre 9mm';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/9.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

 	  $new_item['name'] = 'Munitions calibre 10mm';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/10mm.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre 12.7';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/12.7.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

 	  $new_item['name'] = 'Cartouche Classique';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '15';
      $new_item['img'] = 'img/Munitions/shot.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Cartouche Chevrotine';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/20shot.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre .32';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/32.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre .40';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/40.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre .44';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/44mg.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre 45-70';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/45-70.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre .357';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/357mag.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Munitions calibre .45';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/F.45.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Clous';
      $new_item['cat'] = 'Munitions';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '10';
      $new_item['img'] = 'img/Munitions/Nails.jp2';
      $new_item['promo'] = '2';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'SMG 9mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Auto';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Auto/9mm_SMG.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'UZI 9mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Auto';
      $new_item['price'] = '450';
      $new_item['img'] = 'img/Armes/Auto/9mm_UZI.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'SMG 10mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Auto';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Auto/10mm_SMG_auto.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Pistolet a Clous';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Auto';
      $new_item['price'] = '100';
      $new_item['img'] = 'img/Armes/Auto/nail_gun.jp2';
      $new_item['promo'] = '2';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Sleepytime 9mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Auto';
      $new_item['price'] = '450';
      $new_item['img'] = 'img/Armes/Auto/Sleepytyme_5.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'USM1 .45';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '600';
      $new_item['img'] = 'img/Armes/Fusils/45_usm1_auto.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Bar';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '600';
      $new_item['img'] = 'img/Armes/Fusils/Bar.jp2';
      $new_item['promo'] = '2';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Fusil de Combat';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Fusils/Battle_rifle.jp2';
      $new_item['promo'] = '2';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Dinner Bell';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Fusils/DinnerBell.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Fusil a Pompe';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '350';
      $new_item['img'] = 'img/Armes/Fusils/Lever.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Fusil a Pompe Lever';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Fusils/lever_b.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'M16';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '600';
      $new_item['img'] = 'img/Armes/Fusils/M16.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'M16 Camouflage';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '600';
      $new_item['img'] = 'img/Armes/Fusils/M16_camo.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Sniper';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '650';
      $new_item['img'] = 'img/Armes/Fusils/Snip.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Sniper semi-auto';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Fusils';
      $new_item['price'] = '700';
      $new_item['img'] = 'img/Armes/Fusils/Spar.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Springfield 9mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '250';
      $new_item['img'] = 'img/Armes/Pistol/9mm_Pistol.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Devil 10mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '350';
      $new_item['img'] = 'img/Armes/Pistol/10dev.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Shark 10mm';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '350';
      $new_item['img'] = 'img/Armes/Pistol/10mm_pistol.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'The One';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Pistol/10ThatGun.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Bullet 12.7';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '350';
      $new_item['img'] = 'img/Armes/Pistol/12,7mm_Pistol.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Glock .45';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '250';
      $new_item['img'] = 'img/Armes/Pistol/45_Auto_pistol.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Glock .45 Croco';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '300';
      $new_item['img'] = 'img/Armes/Pistol/45_Auto_pistol2.jp2';
      $new_item['promo'] = '2';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = '357 Magnum';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Pistol/357_magnum_revolver.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = '357 Magnum Precision';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '420';
      $new_item['img'] = 'img/Armes/Pistol/357rev.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Lucky One';
      $new_item['cat'] = 'Armes';
      $new_item['cat2'] = 'Pistolet';
      $new_item['price'] = '400';
      $new_item['img'] = 'img/Armes/Pistol/Lucky357Magnum.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure Combat';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '250';
      $new_item['img'] = 'img/Equipement/Combat.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure Ranger';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '200';
      $new_item['img'] = 'img/Equipement/Ranger.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure Rivet';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '250';
      $new_item['img'] = 'img/Equipement/Rivet.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure T51';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '450';
      $new_item['img'] = 'img/Equipement/T51.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure Talon';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '250';
      $new_item['img'] = 'img/Equipement/Talon.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure Tenp';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '250';
      $new_item['img'] = 'img/Equipement/Tenp.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Armure Tesla';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '450';
      $new_item['img'] = 'img/Equipement/Tesla.jp2';
      $new_item['promo'] = '2';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Casque FO3';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '120';
      $new_item['img'] = 'img/Equipement/FO3.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Casque Hellfire';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '120';
      $new_item['img'] = 'img/Equipement/Hellfire.jp2';
      $new_item['promo'] = '1';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Casque T45';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '110';
      $new_item['img'] = 'img/Equipement/T45d.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

	  $new_item['name'] = 'Casque T51';
      $new_item['cat'] = 'Equipement';
      $new_item['cat2'] = 'cat2';
      $new_item['price'] = '150';
      $new_item['img'] = 'img/Equipement/T51h.jp2';
      $new_item['promo'] = '0';
      $new_item['stock'] = '10';
      $new_item['des'] = "testest";
      $items[] = $new_item;

file_put_contents("dbs/items", serialize($items));
    }
		if (!file_exists("dbs/comodities"))
		{
			$new_cat['name'] = 'Explosives';
			$cat[] = $new_cat;

			$new_cat['name'] = 'Ammunitions';
			$cat[] = $new_cat;

			$new_cat['name'] = 'Weapons';
			$cat[] = $new_cat;

			$new_cat['name'] = 'Equipment';
			$cat[] = $new_cat;

			file_put_contents("dbs/comodities", serialize($cat));
		}
?>
