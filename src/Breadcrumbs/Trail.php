<?php

namespace ByTIC\Navigation\Breadcrumbs;

/**
 * Class Trail
 * @package ByTIC\Navigation\Breadcrumbs
 */
class Trail
{

    /**
     * The breadcrumb trail.
     *
     * @var Breadcrumbs
     */
    protected $breadcrumbs;

    protected $renderer = null;

    /**
     * Trail constructor.
     */
    public function __construct()
    {
        $this->breadcrumbs = new Breadcrumbs();
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->breadcrumbs, $name], $arguments);
    }

    /**
     * @return string
     */
    public function render()
    {
        if (count($this->breadcrumbs) < 1) {
            return null;
        }
        return $this->renderer()->render();
    }

    /**
     * @return BreadcrumbsRenderer
     */
    public function renderer()
    {
        if ($this->renderer === null) {
             $this->renderer = new BreadcrumbsRenderer($this->breadcrumbs);
        }
        return $this->renderer;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }
}
