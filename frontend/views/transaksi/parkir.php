<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ParkirForm */
/* @var $form ActiveForm */
?>
<div class="parkir">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tanggal') ?>
        <?= $form->field($model, 'jam') ?>
        <?= $form->field($model, 'nopol') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- parkir -->
