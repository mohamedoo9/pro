<?php

namespace pro;

 use pocketmine\plugin\PluginBase;
 
  class Main extends PluginBase{
    
    public function onEnable(){
     $this->getServer()->getLogger()->info("pro has been enabled");
   }
 }
