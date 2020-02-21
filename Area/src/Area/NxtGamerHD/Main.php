<?php

namespace Area\NxtGamerHD;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\events\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Plugin was enabled!");
  }
}
