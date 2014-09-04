<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Tree\Registry\Tree;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 5/29/14 10:52 PM
 */
class TreeRegistry implements TreeRegistryInterface
{
    /**
     * @var array|TreeConfig[]
     */
    private $configs = array();

    /**
     * Register tree config.
     *
     * @param TreeLoaderInterface $loader
     */
    public function register(TreeLoaderInterface $loader)
    {
        $loader->register($this);
    }

    /**
     * {@inheritdoc}
     */
    public function add(TreeConfig $config)
    {
        $this->configs[$config->getName()] = $config;
    }

    /**
     * Get tree configs.
     *
     * @return array|TreeConfig[]
     */
    public function getConfigs()
    {
        return $this->configs;
    }
}
