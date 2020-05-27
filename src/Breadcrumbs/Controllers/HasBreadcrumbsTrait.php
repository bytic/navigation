<?php

namespace ByTIC\Navigation\Breadcrumbs\Controllers;

use ByTIC\Navigation\Breadcrumbs\BreadcrumbsManager;
use ByTIC\Navigation\Breadcrumbs\Trail;

/**
 * Trait HasBreadcrumbsTrait
 * @package ByTIC\Navigation\Breadcrumbs\Controllers
 */
trait HasBreadcrumbsTrait
{
    /**
     * @inheritdoc
     */
    protected function setBreadcrumbs()
    {
    }

    protected function setClassBreadcrumbs()
    {
    }

    /**
     * @param bool $item
     */
    protected function setItemBreadcrumbs($item = false)
    {
    }

    /**
     * @return Trail
     */
    protected function breadcrumbs()
    {
        return $this->getBreadcrumbsPayload();
    }

    /**
     * @return Trail
     */
    protected function getBreadcrumbsPayload()
    {
        if (!$this->payload()->data->has('_breadcrumbs')) {
            $breadcrumbs = BreadcrumbsManager::instance()->trail();
            $this->payload()->data->set('_breadcrumbs', $breadcrumbs);
        }
        return $this->payload()->data->get('_breadcrumbs');
    }

    abstract public function payload();
}
