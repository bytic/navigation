<?php

namespace ByTIC\Navigation\Tests\Breadcrumbs;

use ByTIC\Navigation\Breadcrumbs\Breadcrumbs;
use ByTIC\Navigation\Tests\AbstractTest;

/**
 * Class BreadcrumbsTest
 * @package ByTIC\Navigation\Tests\Breadcrumbs
 */
class BreadcrumbsTest extends AbstractTest
{
    public function test_reset()
    {
        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addItem('b1', '#');
        $breadcrumbs->addItem('b2', '#');

        self::assertCount(2, $breadcrumbs);
        $breadcrumbs->reset();

        self::assertCount(0, $breadcrumbs);
    }
}