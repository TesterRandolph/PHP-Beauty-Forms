PHP-Beauty-Forms
================

This project is based on PFBC (PHP Form Builder Class). The goal of this project is:

* Maintain an upgraded functional repository to create forms with PHP;
* Must be modular - in the sense that it can be used in any PHP project;
* Must be paired with the last version of Twitter Bootstrap, jQuery and PHP;
* The only dependencies should be JQuery and Bootstrap. The project must avoid being dependent of any other class or library.

Installation
============

To install, just do a git clone in this repository.

You will need to include the following folders in your include path:

- PBF/
- PBF/Element
- PBF/ErrorView
- PBF/Validation
- PBF/View

If you use an CMS or framework that require to register namespaces, you should register the following namespaces:

- PBF
- PBF\Element
- PBF\ErrorView
- PBF\Validation
- PBF\View

Motivations
===========

I started this project because I think PFBC is an awesome library but, unfortunately, is not being maintained anymore.

Example of use
==============

    use PBF\Form;
    use PBF\Element;

    $options = array("Option #1", "Option #2", "Option #3");

    $form = new Form("form-elements");
    $form->configure(array(
        "prevent" => array("bootstrap", "jQuery")
    ));
    $form->addElement(new Element\Hidden("form", "form-elements"));
    $form->addElement(new Element\HTML('<legend>Standard</legend>'));
    $form->addElement(new Element\Textbox("Textbox:", "Textbox"));
    $form->addElement(new Element\Password("Password:", "Password"));
    $form->addElement(new Element\File("File:", "File"));
    $form->addElement(new Element\Textarea("Textarea:", "Textarea"));
    $form->addElement(new Element\Select("Select:", "Select", $options));
    $form->addElement(new Element\Radio("Radio Buttons:", "RadioButtons", $options));
    $form->addElement(new Element\Checkbox("Checkboxes:", "Checkboxes", $options));
    $form->addElement(new Element\HTML('<legend>HTML5</legend>'));
    $form->addElement(new Element\Phone("Phone:", "Phone"));
    $form->addElement(new Element\Search("Search:", "Search"));
    $form->addElement(new Element\Url("Url:", "Url"));
    $form->addElement(new Element\Email("Email:", "Email"));
    $form->addElement(new Element\Date("Date:", "Date"));
    $form->addElement(new Element\DateTime("DateTime:", "DateTime"));
    $form->addElement(new Element\DateTimeLocal("DateTime-Local:", "DateTimeLocal"));
    $form->addElement(new Element\Month("Month:", "Month"));
    $form->addElement(new Element\Week("Week:", "Week"));
    $form->addElement(new Element\Time("Time:", "Time"));
    $form->addElement(new Element\Number("Number:", "Number"));
    $form->addElement(new Element\Range("Range:", "Range"));
    $form->addElement(new Element\Color("Color:", "Color"));
    $form->addElement(new Element\HTML('<legend>jQuery UI</legend>'));
    $form->addElement(new Element\jQueryUIDate("Date:", "jQueryUIDate"));
    $form->addElement(new Element\Checksort("Checksort:", "Checksort", $options));
    $form->addElement(new Element\Sort("Sort:", "Sort", $options));
    $form->addElement(new Element\HTML('<legend>WYSIWYG Editor</legend>'));
    $form->addElement(new Element\TinyMCE("TinyMCE:", "TinyMCE"));
    $form->addElement(new Element\CKEditor("CKEditor:", "CKEditor"));
    $form->addElement(new Element\HTML('<legend>Custom/Other</legend>'));
    $form->addElement(new Element\State("State:", "State"));
    $form->addElement(new Element\Country("Country:", "Country"));
    $form->addElement(new Element\YesNo("Yes/No:", "YesNo"));
    $form->addElement(new Element\Captcha("Captcha:"));
    $form->addElement(new Element\Button);
    $form->addElement(new Element\Button("Cancel", "button", array(
        "onclick" => "history.go(-1);"
    )));
    $form->render();
