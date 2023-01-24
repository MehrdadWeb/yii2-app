<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use backend\models\Post;

/**
 * Post controller
 */
class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNew()
    {
        $model = new Post;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->render('_show', ['model' => $model]);

        } else {
            return $this->render('_form', ['model' => $model]);
        }
    }


}

?>