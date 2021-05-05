<?php
 
namespace frontend\models;
 
use Yii;
 
class News
{
  public  function getAllNews(){
      $sql = " SELECT * FROM news";

      return Yii::$app->db->createCommand($sql)->queryAll();
  }
  
    
}
 
 
?>