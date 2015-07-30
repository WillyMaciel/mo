<?php

namespace App\Alerts;

abstract class Alert
{
	public $type;
	public $title;
	public $content;

	protected function setType($type)
	{
		$this->type = $type;
		return $this;
	}

	protected function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	protected function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	abstract public function success($title, $content);
	abstract public function info($title, $content);
	abstract public function warning($title, $content);
	abstract public function danger($title, $content);
}