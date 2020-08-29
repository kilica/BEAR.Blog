<?php
namespace Kilica\Blog\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Package\Provide\Router\AuraRouterModule;
use Madapaja\TwigModule\TwigErrorPageModule;
use Madapaja\TwigModule\TwigModule;
use Ray\AuraSqlModule\AuraSqlModule;
use Ray\WebFormModule\AuraInputModule;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = $this->appMeta->appDir;
        require_once $appDir . '/env.php';
        $this->install(new AuraRouterModule($appDir . '/var/conf/aura.route.php'));
        $this->install(
            new AuraSqlModule(
                'mysql:host=mysql;dbname=bearblog',
                'root',
                'pass'
            )
        );
        $this->install(new AuraInputModule());
        $this->install(new PackageModule);
    }
}
