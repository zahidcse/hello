<?php namespace Testvendor\Testpackage\Facades;
use Illuminate\Support\Facades\Facade;
class Usaddress extends Facade {
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'Testvendor\Testpackage\Usaddress'; }
}