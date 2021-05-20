<?php
/**
 * FedoraFrVector - extends Vector.
 *
 * @file
 * @ingroup Skins
 */

use FedoraFrVector\Constants;

/**
 * QuickTemplate class for Vector skin
 * @ingroup Skins
 */
class SkinFedoraFrVector extends SkinVector {
	public $skinname = Constants::SKIN_NAME;
	public $stylename = 'FedoraFrVector';
	public $template = 'FedoraFrVectorTemplate';

  /**
   * @inheritDoc
   * @return array
   */
	public function getDefaultModules() {
		$modules = parent::getDefaultModules();

		$modules[Constants::SKIN_NAME] = 'skins.fedorafrvector.js';
		$modules['styles'] = array_merge(
			$modules['styles'],
			[ 'skins.fedorafrvector.styles' ]
		);

		return $modules;
	}

  /**
   * @inheritDoc
   *
   * @param string $classname
   * @return VectorTemplate
   */
	protected function setupTemplate( $classname ) {
		$tp = new TemplateParser( __DIR__ . '/../templates' );
		return new \VectorTemplate( $this->getConfig(), $tp, $this->isLegacy() );
	}

  /**
   * Force no legacy.
   *
   * @return bool
   */
	private function isLegacy() : bool {
		return false;
	}
}
