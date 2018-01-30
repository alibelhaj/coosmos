<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 29/01/18
 * Time: 19:07
 */

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
return $loader;