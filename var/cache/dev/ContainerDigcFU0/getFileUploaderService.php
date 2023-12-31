<?php

namespace ContainerDigcFU0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\File\FileUploader' shared autowired service.
     *
     * @return \App\File\FileUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'FileUploader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'SluggerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'AsciiSlugger.php';

        return $container->privates['App\\File\\FileUploader'] = new \App\File\FileUploader(($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')), (\dirname(__DIR__, 4).'/data/uploads'));
    }
}
