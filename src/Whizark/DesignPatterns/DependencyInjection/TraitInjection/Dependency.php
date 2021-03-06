<?php
namespace Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\DependencyInterface;

/**
 * Class Dependency
 * @package Whizark\DesignPatterns\DependencyInjection\TraitInjection
 */
class Dependency implements DependencyInterface
{
    /**
     * {@inheritDoc}
     */
    public function doSomething()
    {
        // Do something.
    }
}
