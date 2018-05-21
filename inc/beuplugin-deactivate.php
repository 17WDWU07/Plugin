<?php
/**
* @package beuplugin
*/
class BeuplugindeActivate
{
	public static function deactivate(){
		flush_rewrite_rules();
	}
}