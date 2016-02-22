<?php
class Session{
	
	public static function initSession(){
		if(session_id()==''){
			session_start();
		}
	}
	
	public static function destroy(){
		self::initSession();
		session_destroy();
	}
}