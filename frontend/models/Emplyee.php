<?php

namespace frontend\models;

use yii\base\Model;

class Emplyee extends Model
{


    const   SCENARIO_EMPLOYEE_REGISTER = 'emplyee_register';
    const   SCENARIO_EMPLOYEE_UPDATE = 'emplyee_register';


    public $firstname;
    public $lastname;
    public $middlename;
    public $email;
    public $id_code;
    public $data_birth;
    public $country;
    public $city;
    


    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstname', 'lastname', 'email', 'middlename', 'country', 'city', 'id_code', 'data_birth'],
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstname', 'lastname'],
        ];
    }

    public function rules()
    {
        return [
            [['firstname', 'lastname', 'middlename', 'email'], 'required'],
            [['firstname'], 'string', 'min' => 3],
            [['lastname'], 'string', 'min' => 4],
            [['email'], 'email'],
        ];
    }
}
