<?php

class DB {

	private static $writeDBConnection;
	private static $readDBConnection;

	public static function connectWriteDB() {
		if(self::$writeDBConnection === null) {
			self::$writeDBConnection = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
			self::$writeDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //set the error mode to use exception (catch, ruleback, etc)
			self::$writeDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //
		}

		return self::$writeDBConnection;
	}

	public static function connectReadDB() {
		if(self::$readDBConnection === null) {
			self::$readDBConnection = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
			self::$readDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //set the error mode to use exception (catch, ruleback, etc)
			self::$readDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //
		}

		return self::$readDBConnection;
	}

}