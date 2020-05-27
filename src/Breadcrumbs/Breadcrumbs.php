<?php

namespace ByTIC\Navigation\Breadcrumbs;

use Nip\Collections\AbstractCollection;

/**
 * Class Breadcrumbs
 * @package ByTIC\Navigation\Breadcrumbs
 */
class Breadcrumbs extends AbstractCollection
{
    /**
     * @param $title
     * @param bool $url
     */
    public function addItem($title, $url = false)
    {
        $item = new Crumb($title, $url);
        $this->add($item);
    }

    /**
     * @deprecated use clear instead
     */
    public function reset()
    {
        $this->clear();
    }
}
