<?php

namespace blackwave\accessibility;

/**
 * @author  Dmitry Belov <dmitry15web@gmail.com>
 */
trait AccessibilityWidgetTrait
{
    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @var array
     */
    public $clientEvents = [];

    /**
     * Initializes the widget.
     * This method will register the bootstrap asset bundle. If you override this method,
     * make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    /**
     * @return \yii\web\View the view object that can be used to render views or view files.
     * @see yii\base\Widget::getView()
     */
    abstract function getView();
}