<?php

namespace JoinQuit\NxtGamerHD;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class main extends PluginBase implements Listener {

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("plugin enabled!");
  }
  
  public function onDisable(){
    $this->getLogger()->info("plugin disabled!");
  }
  
  public function onJoin(PlayerJoinEvent $ev){
    $player = $ev->getPlayer();
    $name = $player->getName();
    $ev->setJoinMessage("[+] " . $name);
  }
  
  public function onQuit(PlayerQuitEvent $ev){
    $player = $ev->getPlayer();
    $name = $player->getName();
    $ev->setQuitMessage("[-] " . $name);
  }
  
}
