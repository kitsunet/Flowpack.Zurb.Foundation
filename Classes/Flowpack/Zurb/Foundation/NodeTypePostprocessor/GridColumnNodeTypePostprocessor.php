<?php
namespace Flowpack\Zurb\Foundation\NodeTypePostprocessor;

class GridColumnNodeTypePostprocessor extends AbstractGridNodeTypePostprocessor {

	/**
	 * Settings section used to generate grid column properties
	 * @see Settings.yaml
	 * @var string
	 */
	protected static $SETTINGS_SECTION = 'gridSettings';
}
