<?php

class MyLogger
{
	public $origin;
	
	public function __construct($origin = "")
	{
		if ($origin == "" || $origin == null) {
			die("[ERROR] Logger constructor needs origin!");
		}
		$this -> origin = $origin;
	}
	
	private function logWithTime()
	{
		echo "[" . date('Y-m-d H:i:s') . "] ";
	}
	
	private function log($message, $level)
	{
		echo $this -> origin . " - " . strtoupper($level) . ": " . $message . PHP_EOL;
	}
	
	public function warning($message)
	{
		$this -> logWithTime();
		$this -> log($message, "warning");
	}
	
	public function error($message)
	{
		$this -> logWithTime();
		$this -> log($message, "error");
	}
	
	public function info($message)
	{
		$this -> logWithTime();
		$this -> log($message, "info");
	}
	
	public function debug($message)
	{
		$this -> logWithTime();
		$this -> log($message, "debug");
	}
	
	public function setOrigin($origin)
	{
		$this -> logWithTime();
		$this -> origin = $origin;
	}
}

$users = new MyLogger("User");
$visits = new MyLogger("Visits");

$users -> error("Incorrect password!");
$visits -> debug("HTTP 1/1 GET /login.php 200");

?>
