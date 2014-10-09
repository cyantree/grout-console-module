<?php
namespace Grout\Cyantree\ConsoleModule;

use Cyantree\Grout\App\Module;
use Grout\Cyantree\ConsoleModule\Types\ConsoleConfig;

class ConsoleModule extends Module
{
    public function init()
    {
        $this->app->configs->setDefaultConfig($this->id, new ConsoleConfig());

        $this->addRoute('', 'Pages\ConsoleCommandPage');
        $this->addRoute('%%command,.*%%/', 'Pages\ConsoleCommandPage');
    }
}
