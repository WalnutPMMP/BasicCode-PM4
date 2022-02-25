<?php

namespace Walnut\PluginCode;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

	public function onEnable(): void {
		$this->getLogger()->info("This Plugin On!");
	}

	public function onDisable(): void {
		$this->getLogger()->info("This Plugin Off!")
	}

	public function onCommand(CommandSender $sender, Command $cmd, String $Label, Array $args) : bool {

		if($cmd->getName() == "test"){
			$sender->sendMessage("Change this text to use this code")
		}
    return true;
	}

}
