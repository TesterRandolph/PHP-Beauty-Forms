<?php
namespace PBF\View;

class SideBySide extends \PBF\View {
	protected $class = "form-horizontal";

	public function render() {
		$this->_form->appendAttribute("class", $this->class);

		echo '<form role="form"', $this->_form->getAttributes(), '><fieldset>';
		$this->_form->getErrorView()->render();

		$elements = $this->_form->getElements();
		$elementSize = sizeof($elements);
		$elementCount = 0;
		for($e = 0; $e < $elementSize; ++$e) {
			$element = $elements[$e];
            if (isset($elements[$e-1]))
                $prevElement = $elements[$e-1];
            else
                $prevElement = new \PBF\Element\HTML("");

			if($element instanceof \PBF\Element\Hidden || $element instanceof \PBF\Element\HTML)
				$element->render();
            elseif($element instanceof \PBF\Element\Button) {
                if($e == 0 || !$elements[($e - 1)] instanceof \PBF\Element\Button)
					echo '<div class="form-actions">';
				else
					echo ' ';
				
				$element->render();

                if(($e + 1) == $elementSize || !$elements[($e + 1)] instanceof \PBF\Element\Button)
                    echo '</div>';
            }
            else {
                if (!$prevElement->getAttribute("shared"))
                    echo '<div class="form-group">', $this->renderLabel($element), '<div class="col-md-6">';
                echo $element->render(), $this->renderDescriptions($element);
                if (!$element->getAttribute("shared"))
                    echo '</div></div>';
                else
                    echo '&nbsp;&nbsp;&nbsp;';
                ++$elementCount;
			}
		}

		echo '</fieldset></form>';
    }

	protected function renderLabel(\PBF\Element $element) {
        $label = $element->getLabel();
        if(!empty($label)) {
            echo '<label class="col-md-4 control-label" for="', $element->getAttribute("id"), '">';
			if($element->isRequired())
				echo '<span class="required">* </span>';
			echo $label, '</label>'; 
        }
    }
}
