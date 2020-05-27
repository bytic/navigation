<?php

namespace ByTIC\Navigation\Breadcrumbs;

/**
 * Class Crumb
 * @package ByTIC\Navigation\Breadcrumbs
 */
class Crumb
{
    /**
     * The crumb title.
     *
     * @var string|callable
     */
    protected $title;

    /**
     * The crumb URL.
     *
     * @var string|callable
     */
    protected $url;

    /**
     * Construct the crumb instance.
     *
     * @param string $title
     * @param string $url
     *
     * @return void
     */
    public function __construct($title, $url = null)
    {
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * Get the crumb title.
     *
     * @return string
     */
    public function title(): string
    {
        if (is_callable($this->title)) {
            $this->title = call_user_func($this->title);
        }
        return $this->title;
    }

    /**
     * Get the crumb URL.
     *
     * @return string
     */
    public function url()
    {
        if (is_callable($this->url)) {
            $this->url = call_user_func($this->url);
        }
        return $this->url;
    }
}
