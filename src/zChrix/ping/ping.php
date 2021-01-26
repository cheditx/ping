<?php 

namespace zChrix\ping;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class ping extends PluginBase{

   public function onEnable(){
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if($label === 'ping'){
            if($sender instanceof Player){
                $ping = $sender->getPing();
                        $sender->sendMessage("§aYour ping: ".$ping."§ams");
            }else{
                $this->getLogger()->info('You can use this command in-game');
            }
        }
        return true;
    }
}
