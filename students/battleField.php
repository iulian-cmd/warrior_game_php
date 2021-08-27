<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";

  class BattleField extends BaseBattleField
  {
        static function createMyWarrior(){
        $weapon_one = new Weapon(1,150);
        $weapon_one->setImageUrl('https://www.alltru2u.com/wp-content/uploads/2020/04/31-klingon-batleth-23-mekleth-and-12-daktang-cerimonial-dagger-from-star-trek-set-cosplay-replica-costume-prop-5e97843d-500x500.jpg');

        $warrior_one = new StartrekWarrior($GLOBALS['warriorID']);
        $warrior_one->setImageUrl('https://www.nicepng.com/png/full/266-2661521_data-tng-1-data-star-trek-png.png');
        $warrior_one->setWeapon($weapon_one);
        $warrior_one->saveNew();
      }

      static function createOtherWarrior(){
        $weapon_two = new Weapon(2,180);
        $weapon_two->setImageUrl('https://i.ebayimg.com/images/g/eLYAAOSwwRFe4d5e/s-l300.jpg');

        $warrior_two = new MarvelWarrior("SpiderThor");
        $warrior_two->setImageUrl('https://fr.web.img4.acsta.net/r_654_368/newsv7/21/01/11/16/11/2598562.jpg');
        $warrior_two->setWeapon($weapon_two);
        $warrior_two->saveNew();
      }

  }
