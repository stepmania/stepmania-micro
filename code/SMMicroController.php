<?php
class SMMicro_Controller extends Page_Controller {
	static $allowed_actions = array();
	function init() {
		parent::init();
		Requirements::javascript("stepmania-micro/javascript/game.js");
		Requirements::css("stepmania-micro/css/game.css");
	}
}
