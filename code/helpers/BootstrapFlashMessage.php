<?php

/**
 * BootstrapFlashMessage
 */
class BootstrapFlashMessage {
	
	protected static $message = null;
	
	public static function set($message, $type){
		if(!in_array('type', array(
			'success',
			'info',
			'warning',
			'danger'
		))) user_error("BootstrapFlashMessage Type Error: ".$type." not allowed", E_USER_WARNING);
		
		Session::set('BootstrapFlashMessage', array(
			'Message' => $message,
			'Type' => $type
		));
	}
	
	public static function get(){
		if(self::$message === null){
			self::$message = Session::get('BootstrapFlashMessage');
			Session::clear('BootstrapFlashMessage');
		}
		
		if(is_array(self::$message) && isset(self::$message['Message']) && isset(self::$message['Type'])) return ArrayData::create(self::$message);
		else return false;
	}
}