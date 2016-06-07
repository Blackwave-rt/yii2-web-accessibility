<?php

namespace blackwave\accessibility;

/**
 * \yii\bootstrap\Widget is the base class for all bootstrap widgets.
 *
 * @author  Dmitry Belov <dmitry15web@gmail.com>
 */
class Widget extends \yii\base\Widget
{
    use AccessibilityWidgetTrait;

    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];
}