<?php

namespace ByTIC\Navigation\Tests\Breadcrumbs\Controllers;

use ByTIC\Navigation\Breadcrumbs\Trail;
use ByTIC\Navigation\Tests\AbstractTest;
use ByTIC\Navigation\Tests\Fixtures\Controllers\BaseController;

/**
 * Class HasBreadcrumbsTraitTest
 * @package ByTIC\Navigation\Tests\Breadcrumbs\Controllers
 */
class HasBreadcrumbsTraitTest extends AbstractTest
{
    public function test_breadcrumbs()
    {
        $controller = new BaseController();
        $controller->index();

        $breadcrumbs = $controller->payload()->data->get('_breadcrumbs');
        self::assertInstanceOf(Trail::class, $breadcrumbs);
        self::assertSame(1, $breadcrumbs->count());
    }
}