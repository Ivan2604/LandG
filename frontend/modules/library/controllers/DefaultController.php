<?php

namespace frontend\modules\library\controllers;

use yii\web\Controller;

/**
 * Default controller for the `library` module
 */
class DefaultController extends Controller
{
    public $layout = 'panel';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
//        return $this->render('statistic');
        return $this->render('index');
    }

}
