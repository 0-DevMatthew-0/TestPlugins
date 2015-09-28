<?php

namespace Bolts\main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use Bolts\teleport;

class Main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info(Color::RED."[BoltsApplication] Plugin enabled!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(Color::RED."[BoltsApplication] Plugin disabled!");
    }
  }  
