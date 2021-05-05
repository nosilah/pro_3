<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;


if ($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';

}
?>

<h1>Welcome to our company</h1>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'firstname'); ?>
    <?php echo $form->field($model, 'lastname'); ?>
    <?php echo $form->field($model, 'middlename'); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'country'); ?>
    <?php echo $form->field($model, 'id_code'); ?>
    <?php echo $form->field($model, 'city'); ?>
    <?php echo $form->field($model, 'data_birth'); ?>

    <?php echo Html::submitButton('send', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>
