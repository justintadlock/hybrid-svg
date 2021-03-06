<?php
/**
 * Attributes service provider.
 *
 * This is the service provider for the attributes system. The primary purpose
 * of this is to use the container as a factory for creating attributes. By
 * adding this to the container, it also allows the implementation to be
 * overwritten. That way, any custom functions will utilize the new class.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2018, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Svg;

use Hybrid\Tools\ServiceProvider;
use Hybrid\Tools\Collection;

/**
 * Attr provider class.
 *
 * @since  5.0.0
 * @access public
 */
class SvgServiceProvider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  5.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		$this->app->bind( SvgMaker::class );

		$this->app->singleton( 'hybrid/svg/collection', function() {

			return new Collection();
		} );
	}
}
