<?php

namespace AppBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class AppExtension
 * @package AppBundle\Twig
 */
class AppExtension extends \Twig_Extension
{

    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    /**
     * AppExtension constructor.
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * getFilters
     * @return array
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('getparameter', array($this, 'getParameterString')),
        );
    }

    /**
     * getParameterString
     *
     * @param string $name
     * @return mixed
     */
    public function getParameterString($name)
    {
        return $this->container->getParameter($name);
    }

    /**
     * getName
     * @return stringName of the extension
     */
    public function getName()
    {
        return 'app_extension';
    }
}
