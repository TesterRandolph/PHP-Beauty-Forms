<?php
namespace PBF\Element;

class Textbox extends \PBF\Element {
	protected $_attributes = array("type" => "text", "class" => "form-control",);
	protected $prepend;
	protected $append;

	public function render() {
		$addons = array();
		if(!empty($this->prepend))
			$addons[] = "input-group";
		if(!empty($this->append))
			$addons[] = "input-group";
		if(!empty($addons))
			echo '<div class="', implode(" ", $addons), '">';

		$this->renderAddOn("prepend");
		parent::render();
		$this->renderAddOn("append");

		if(!empty($addons))
			echo '</div>';
	}

	protected function renderAddOn($type = "prepend") {
		if(!empty($this->$type)) {
			$span = true;
			if(strpos($this->$type, "<button") !== false)
				$span = false;

			if($span)
				echo '<span class="add-on">';

			echo $this->$type;

			if($span)
				echo '</span>';
		}
	}
}
