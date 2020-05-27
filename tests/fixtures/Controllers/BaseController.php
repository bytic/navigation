<?php

namespace ByTIC\Navigation\Tests\Fixtures\Controllers;

use ByTIC\Navigation\Breadcrumbs\Controllers\HasBreadcrumbsTrait;
use Nip\Controllers\Controller;

/**
 * Class BaseController
 * @package ByTIC\Navigation\Tests\Fixtures\Controllers
 */
class BaseController extends Controller
{
    use HasBreadcrumbsTrait;

    public function index()
    {
        $this->setBreadcrumbs();
    }

    /**
     * @inheritdoc
     */
    protected function setBreadcrumbs()
    {
        $this->breadcrumbs()->addItem('test1', '#');
    }
}
