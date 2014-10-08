<?php
namespace Grout\Cyantree\ConsoleModule;

use Cyantree\Grout\App\App;
use Cyantree\Grout\App\GroutFactory;
use Grout\AppModule\AppFactory;
use Grout\Cyantree\ConsoleModule\Types\ConsoleConfig;

class ConsoleFactory extends AppFactory
{
    /** @var ConsoleModule */
    public $module;

    /** @return ConsoleFactory */
    public static function get(App $app = null, $moduleId = null)
    {
        /** @var ConsoleFactory $factory */
        $factory = GroutFactory::getFactory($app, __CLASS__, $moduleId, 'Cyantree\ConsoleModule');

        return $factory;
    }

    public function config()
    {
        if (!($tool = $this->getTool(__FUNCTION__, false))) {
            /** @var ConsoleConfig $tool */
            $tool = $this->app->configs->getConfig($this->module->id);

            $this->setTool(__FUNCTION__, $tool);
        }

        return $tool;
    }
}