<?php

namespace PureMachine\Bundle\WebServiceBundle\Tests\Service\Mocks\Store;

use PureMachine\Bundle\SDKBundle\Store\Base\BaseStore;
use PureMachine\Bundle\SDKBundle\Store\Annotation as Store;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Object used with testing purposes to check if container (for Symfony applications)
 * is reachable from the service on store call
 */
class SampleStoreWithContainerAwareInterface extends BaseStore implements ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    protected $container = null;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Boolean flag indicator thats check visibility of Symfony container object
     * on the store instance
     *
     * @return boolean
     */
    public function isContainerReachable()
    {
        return ($this->container instanceof ContainerInterface);
    }

}
