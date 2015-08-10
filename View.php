<?php

/**
* View presents content to the user.
*/
class View
{
	public function render($templateName, array $parameters)
	{
		# todo: implement this.https://github.com/motammem/upstream.git
	}

	public function setTemplateEngine(Engine $engine)
	{
		$this->engine = $engine;
	}
}