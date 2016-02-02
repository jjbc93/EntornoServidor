<?php
class Session{
	
	public static function initSession(){
        if(session_id() == ''){
            session_start();
        }
    }
}