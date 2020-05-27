<?php

namespace ByTIC\Navigation\Breadcrumbs;

use ByTIC\Navigation\Utility\NavigationHelper;
use Nip\View\View;

/**
 * Class BreadcrumbsRenderer
 * @package ByTIC\Navigation\Breadcrumbs
 */
class BreadcrumbsRenderer
{
    /**
     * The breadcrumb trail.
     *
     * @var Breadcrumbs
     */
    protected $breadcrumbs;

    /**
     * @var View
     */
    protected $view = null;

    /**
     * BreadcrumbsRenderer constructor.
     * @param Breadcrumbs $breadcrumbs
     */
    public function __construct(Breadcrumbs $breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * @return string
     */
    public function render()
    {
        $path = $this->detectViewPath();
        return $this->renderView($path);
    }

    /**
     * @param $path
     * @return string
     */
    protected function renderView($path)
    {
        $view = $this->getView();
        $view->set('breadcrumbs', $this->breadcrumbs);
        return $view->load($path, ['breadcrumbs' => $this->breadcrumbs], true);
    }

    /**
     * @return View
     */
    public function getView(): View
    {
        if ($this->view === null) {
            $this->initView();
        }
        return $this->view;
    }

    /**
     * @param View $view
     */
    public function setView(View $view): void
    {
        $view->addPath(NavigationHelper::view('/breadcrumbs'), 'breadcrumbs');
        $this->view = $view;
    }

    protected function initView()
    {
        $this->setView(new View());
    }

    /**
     * @return string
     */
    protected function detectViewPath()
    {
        if ($this->getView()->existPath('breadcrumbs')) {
            return 'breadcrumbs';
        }
        return 'breadcrumbs::bootstrap4';
    }

}