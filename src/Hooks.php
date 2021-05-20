<?php
/**
 * FedoraFrVector - extends Vector.
 *
 * @file
 * @ingroup Skins
 */

namespace FedoraFrVector;

class Hooks {

  /**
   * Add external CSS
   * @param OutputPage $out
   * @param Ski $skin
   */
  public static function onBeforePageDisplay( \OutputPage $out, \Skin $skin ) {
		$out->addStyle( 'https://common.fedora-fr.org/fedorafr_v5/stylesheets/forums.css', 'screen', '', '' );
  }
}
