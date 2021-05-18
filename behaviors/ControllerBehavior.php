<?php namespace OnlineStore\Schema\Behaviors;

use Event;
use October\Rain\Extension\ExtensionBase;

class ControllerBehavior extends ExtensionBase
{

    protected $controller;

    /**
     * __construct
     */
    public function __construct($controller)
    {
        $this->controller = $controller;

        Event::listen('backend.form.extendFields', function ($controller) {
            $controller->addTabFields([
                'schemas' => [
                    'label' => 'Микроразметки',
                    'type' => 'relation',
                    'mode' => 'relation',
                    'tab' => 'Schemas'
                ]
            ]);
        });
    }
}
