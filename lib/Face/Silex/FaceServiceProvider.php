<?php

namespace Face\Silex;

/**
 * @package Bernard
 */
class FaceServiceProvider implements \Silex\ServiceProviderInterface
{
    
    
    
    /**
     * {@inheritDoc}
     */
    public function register(Application $app)
    {
        $app['face.orm'] = $app->share(function ($app) {
            $pdo=new PDO($app['pdo.dsn'], $app['pdo.username'], $app['pdo.password'], $app['pdo.options']);
            return new \Face\DiORM($pdo);
        });
    }

    /**
     * {@inheritDoc}
     */
    public function boot(Application $app)
    {
    }

 
}