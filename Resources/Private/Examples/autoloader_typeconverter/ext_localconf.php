<?php
/**
 * General ext_localconf file and also an example for your own extension
 *
 * @category Extension
 * @package  AutoloaderTypeconverter
 * @author   Tim Lochmüller
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\HDNET\Autoloader\Loader::extLocalconf('HDNET', 'autoloader_typeconverter', array(
	'TypeConverter',
));