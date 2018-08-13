<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class PhotonPeoplePlugin
 * @package Grav\Plugin
 */
class PhotonPeoplePlugin extends Plugin
{
  /**
   * Subscribe to required events
   *
   * @return array
   */
  public static function getSubscribedEvents()
  {
      return [
          'onPluginsInitialized' => ['onPluginsInitialized', 0],
          'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0]
      ];
  }

  public function onPluginsInitialized()
  {
      // If in an Admin page.
          $this->enable([
              'onGetPageTemplates' => ['onGetPageTemplates', 0],
          ]);
          return;
  }

  /**
   * Add blueprint directory to page templates.
   */
  public function onGetPageTemplates(Event $event)
  {
      $types = $event->types;
      $locator = Grav::instance()['locator'];
      $types->scanBlueprints($locator->findResource('plugin://' . $this->name . '/blueprints'));
      $types->scanTemplates($locator->findResource('plugin://' . $this->name . '/templates'));
  }

}
