<?php
/*
 _              _  _____                    
| |    ___  ___| ||_   _|__  __ _ _ __ ___  
| |   / _ \/ __| __|| |/ _ \/ _` | '_ ` _ \ 
| |__| (_) \__ \ |_ | |  __/ (_| | | | | | |
|_____\___/|___/\__||_|\___|\__,_|_| |_| |_|
 */
namespace Manager;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;
class PluginManager extends PluginBase {
	public function onEnable() {
	 $this->getLogger->notice(TF::GREEN."Enabled");
		//$this->api->console->register("load", "<plugin name>", array($this, "commandHandler"),15);
	}
	public function onCommand(CommandSender $sender, Command $Command, $lists, array $args) {
	 if(strtolower($command) === "load") {
	  if(count($args) == 0) {
	   return false;
	  }
	  $plugin = implode(" ",$params);
				if($this->getServer()->getPluginManager->getPlugin("")){
					//$this->api->plugin->load(DATA_PATH."plugins/".$plugin.".php");
					//$info = $this->getPHPPluginInfo(DATA_PATH."plugins/$plugin.php");
					//$id = $this->api->plugin->getIdentifier($info["name"], $info["author"]);
					$sender->sendMessage(TF::GREEN."Plugin Enabled!")
				}else{
					$sender->sendMessage(TF::RED."Plugin Doesn't exist!");
				}
				//$p = $this->api->plugin->get($id);
				//$p[0]->init();
				//$output .= "Successfully loaded plugin.";
			}
	 }
	}
	public function onDisable() {
	 $this->getLogger()->notice(TF::GREEN."Disabled!");
	}
}
