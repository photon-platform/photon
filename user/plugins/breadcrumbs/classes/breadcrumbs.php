<?php
namespace Grav\Plugin;

use Grav\Common\Grav;

class Breadcrumbs
{

    /**
     * @var array
     */
    protected $breadcrumbs;
    protected $config;

    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Get all items in breadcrumbs.
     *
     * @return array
     */
    public function get()
    {
        if (!$this->breadcrumbs) {
            $this->build();
        }
        return $this->breadcrumbs;
    }

    /**
     * Get from page
     *
     * @return array
     */
    public function getFromPage($page)
    {
        if (!$this->breadcrumbs) {
            $this->buildFromPage($page);
        }
        return $this->breadcrumbs;
    }

    /**
     * Build breadcrumbs.
     *
     * @internal
     */
    protected function build()
    {
        $hierarchy = array();
        $grav = Grav::instance();
        $current = $grav['page'];

        // Page cannot be routed.
        if (!$current) {
            $this->breadcrumbs = array();
            return;
        }

        if (!$current->root()) {

            if ($this->config['include_current']) {
                $hierarchy[$current->url()] = $current;
            }

            $current = $current->parent();

            while ($current && !$current->root()) {
                $hierarchy[$current->url()] = $current;
                $current = $current->parent();
            }
        }

        if ($this->config['include_home']) {
            $home = $grav['pages']->dispatch('/');
            if ($home && !array_key_exists($home->url(), $hierarchy)) {
                $hierarchy[] = $home;
            }
        }

        $this->breadcrumbs = array_reverse($hierarchy);
    }


    protected function buildFromPage($page)
    {
        $hierarchy = array();
        $grav = Grav::instance();
        // $page = $grav['page'];

        // Page cannot be routed.
        if (!$page) {
            $this->breadcrumbs = array();
            return;
        }

        if (!$page->root()) {

            if ($this->config['include_current']) {
                $hierarchy[$page->url()] = $page;
            }

            $page = $page->parent();

            while ($page && !$page->root()) {
                $hierarchy[$page->url()] = $page;
                $page = $page->parent();
            }
        }

        if ($this->config['include_home']) {
            $home = $grav['pages']->dispatch('/');
            if ($home && !array_key_exists($home->url(), $hierarchy)) {
                $hierarchy[] = $home;
            }
        }

        $this->breadcrumbs = array_reverse($hierarchy);
        
    }
}
