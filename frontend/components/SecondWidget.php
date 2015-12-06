<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 06.12.15
 * Time: 11:29
 */
namespace frontend\components;

use yii\base\Widget;

class SecondWidget extends Widget
{

    public function init()
    {

        parent::init();
        ob_start();

    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render(
            'second',
            [
                'content' => $content
            ]
        );

    }
}

