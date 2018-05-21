<?php
/**
* @package beuplugin
*/
class BeupluginActivate
{
	public static function activate(){
		flush_rewrite_rules();
	}
}