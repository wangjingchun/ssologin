<?php

namespace wangjingchun\sso;

use wangjingchun\sso\Broker;

class MySso
{
	public $url;
	public $broker;
	public $secret;

	public function __construct($url, $broker, $secret)
	{
		$this->url = $url;
        $this->broker = $broker;
        $this->secret = $secret;
	}

	public function login($username, $password)
	{
		$broker = new Broker($this->url, $this->broker, $this->secret);
		$broker->attach(true);

		$broker->login($username, $password);

	}

	public function logout()
	{
		$broker = new Broker($this->url, $this->broker, $this->secret);
		$broker->attach(true);

		$broker->logout();
	}

	public function getuserInfo()
	{
		$broker = new Broker($this->url, $this->broker, $this->secret);
		$broker->attach(true);

		$user = $broker->getUserInfo();
	}
}




?>