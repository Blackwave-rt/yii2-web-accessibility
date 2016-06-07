<?php

namespace blackwave\accessibility;

use yii\helpers\Html;

/**
 * Button renders a web accessibility button.
 *
 * @see     http://getbootstrap.com/javascript/#buttons
 *
 * @author  Dmitry Belov <dmitry15web@gmail.com>
 */
class Button extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'button';

    /**
     * @var string the button label
     */
    public $label = 'Button';

    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        Html::addCssClass($this->options, ['widget' => 'btn']);
    }
}
