<?php 
namespace Concrete\Package\Archamental;

use Package;
use PageTheme;

class Controller extends Package
{

	protected $pkgHandle = 'archamental';
	protected $appVersionRequired = '5.7.5.2';
	protected $pkgVersion = '0.9.3';

	public function getPackageDescription()
	{
        return t('An editable packaged copy of the copied Clonemental template copied from the default Elemental theme.');
	}

	public function getPackageName()
	{
        return t('Archamental');
	}

	public function install()
	{
		$pkg = parent::install();
		PageTheme::add('archamental', $pkg);
	}

}
