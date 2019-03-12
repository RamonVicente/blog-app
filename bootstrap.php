<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/BlogApp/Model"), $isDevMode);

// database configuration parameters
$connection = array(
      'dbname' => 'blog_app',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'pdo_mysql'
        );

// obtaining the entity manager
$entityManager = EntityManager::create($connection, $config);