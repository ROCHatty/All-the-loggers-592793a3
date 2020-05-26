<?php

class MyLogger
{
	private $origin;
	
	public function __contruct($origin = "")
	{
		if ($origin == "" || $origin == null) 
		{
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
		$this -> log($message, "info");
	}
	
	public function debug($message)
	{
		$this -> log($message, "debug");
	}
	
	public function setOrigin($origin)
	{
		$this -> origin = $origin;
	}
}

$logs = new MyLogger();
$logs -> setOrigin('TestClass');
$logs -> warning("Dit is een waarschuwing");
$logs -> error("Dit is een fout");
$logs -> info("Dit is wat informatie");
$logs -> debug("Dit is een debug bericht");

?>
