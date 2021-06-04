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
	 * @param array|null $options Note; this param is only optional for internal purpose.
	 * 		Do not instantiate Vector, use SkinFactory to create the object instead.
	 * 		If you absolutely must to, this paramater is required; you have to provide the
	 * 		skinname with the `name` key. That's do it with `new SkinVector( ['name' => 'vector'] )`.
	 * 		Failure to do that, will lead to fatal exception.
	 */
	public function __construct( $options = [] ) {
		$options['scripts'] = [ 'skins.vector.legacy.js' ];
		$options['styles'] = [ 'skins.vector.styles.legacy', 'skins.fedorafrvector.styles' ];

		$options['templateDirectory'] =  __DIR__ . '/../templates';
		$options[Constants::SKIN_NAME] = 'skins.fedorafrvector.js';

		SkinMustache::__construct( $options );
	}
}
