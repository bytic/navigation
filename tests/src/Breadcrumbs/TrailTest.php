<?php

namespace ByTIC\Navigation\Tests\Breadcrumbs;

use ByTIC\Navigation\Breadcrumbs\Trail;
use ByTIC\Navigation\Tests\AbstractTest;

/**
 * Class TrailTest
 * @package ByTIC\Navigation\Tests\Breadcrumbs
 */
class TrailTest extends AbstractTest
{
    public function test_render_emptyBreadcrumbs()
    {
        $trail = new Trail();

        $content = $trail->render();
        self::assertEmpty($content);
    }

    public function test_render()
    {
        $trail = new Trail();
        $trail->addItem('t1', '#');
        $trail->addItem('t2', '#');

        $content = $trail->render();
        $testContent = file_get_contents(TEST_FIXTURE_PATH . '/views-rendered/breadcrumbs/basic.html');
        self::assertSame($testContent, $content);
    }
}
