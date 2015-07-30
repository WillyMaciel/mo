<?php

namespace App\Alerts;

class MessageBox extends Alert
{
	public $btnClose;
	public $audio;
	public $icon;

	public function __construct()
	{
		$this->btnClose = 'Fechar'; 
	}


	public function generic($title, $content)
	{
		$this->setTitle($title);
		$this->setType('');
		$this->setContent($content);
		$this->icon = 'fa fa-globe';

		return $this;
	}

	public function success($title, $content)
	{
		$this->setTitle($title);
		$this->setType('message-box-success');
		$this->setContent($content);
		$this->icon = 'fa fa-check';

		return $this;
	}
	
	public function info($title, $content)
	{
		$this->setTitle($title);
		$this->setType('message-box-info');
		$this->setContent($content);
		$this->icon = 'fa fa-info';

		return $this;
	}

	public function warning($title, $content)
	{
		$this->setTitle($title);
		$this->setType('message-box-warning');
		$this->setContent($content);
		$this->icon = 'fa fa-warning';

		return $this;
	}
	
	public function danger($title, $content)
	{
		$this->setTitle($title);
		$this->setType('message-box-danger');
		$this->setContent($content);
		$this->icon = 'fa fa-times';

		return $this;
	}

	public function audio($audio = false)
	{
		if(!$audio)
		{
			$this->audio = 'alert';
		}
		else
		{
			$this->audio = $audio;
		}

		return $this;
	}

	public function make()
	{
		return view('alerts.messagebox', array('messagebox' => $this))->render();
	}
}