<?php

namespace frontend\controllers;

use frontend\models\News;
use yii\web\Controller;




class NewsController extends Controller
{
    public function actionIndex()
    {

        $listNews = new News;

        $news = $listNews->getAllNews();

        return $this->render('index', [
            'news' => $news,
        ]);
    }
}

