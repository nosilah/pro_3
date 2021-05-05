<?php

namespace frontend\controllers;

use Faker\Factory;
use frontend\models\NewTest;
use Yii;
use yii\web\Controller;


class TestController extends Controller
{

    public function actionGenerate()
    {

        // for ($i = 0; $i < 1500; $i++) {

            // $faker = Factory::create();

            // for ($j = 0; $j < 100; $j++) { 
            //     $news = [];

            //     for ($i=0; $i < 200; $i++) { 
                    
            //         $news[] = [$faker->text(rand(10, 25)), $faker->text(rand(100, 200))];

            //         Yii::$app->db->createCommand()->batchInsert('new_test', ['title_news', 'content_nes'], $news)->execute();
            //         unset($news);

            //     }
            // }

            // $newsItem = new NewTest();
            // // generate data by accessing properties
            // $newsItem->title_news = $faker->text(25);
            // echo '<hr>';

            // $newsItem->content_nes = $faker->text(rand(100, 200));
            // 'Lucy Cechtelar';


            // "426 Jordy Lodge
            // Cartwrightshire, SC 88120-6700"

            // $newsItem->save();
        // }


        // use the factory to create a Faker\Generator instance

        die;
    }
}
