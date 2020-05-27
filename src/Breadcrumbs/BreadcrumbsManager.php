<?php

namespace ByTIC\Navigation\Breadcrumbs;

/**
 * Class BreadcrumbsManager
 * @package ByTIC\Navigation\Breadcrumbs
 */
class BreadcrumbsManager
{
    const DEFAULT_NAMESPACE = "default";

    /**
     * @var Trail[]
     */
    protected $trails = [];

    /**
     * BreadcrumbsManager constructor.
     */
    public function __construct()
    {
        $this->checkNewTrail(self::DEFAULT_NAMESPACE);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function trail($name = self::DEFAULT_NAMESPACE)
    {
        $this->checkNewTrail($name);
        return $this->trails[$name];
    }

    /**
     * @param string $name
     */
    protected function checkNewTrail($name)
    {
        if (isset($this->trails[$name])) {
            $this->initNewTrail($name);
        }
    }

    /**
     * @param string $name
     */
    protected function initNewTrail($name)
    {
        $this->trails[$name] = $this->generateNewTrail();
    }

    /**
     * @return Trail
     */
    protected function generateNewTrail()
    {
        return new Trail();
    }
}