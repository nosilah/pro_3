<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

use frontend\models\example\Animal;
use forntend\models\example\Human;
use frontend\models\Emplyee;

class EmployeeController extends Controller 
{
    public function actionIndex()
    {
         
     }

    public function actiontest()
    {
         
     }

    public function actionRegister()
    {
        $model = new Emplyee();
        $model->scenario = Emplyee::SCENARIO_EMPLOYEE_REGISTER;

        if($model->load(Yii::$app->request->isPost)){
            
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Registered');
            }

            
        }

        print_r($model);


        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }
}

