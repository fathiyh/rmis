<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Jenis;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nopol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merk')->textInput(['maxlength' => true]) ?>

<?php    
    /*<?= $form->field($model, 'jenis_id')->textInput() ?>
    <?= $form->field($model, 'user_id')->textInput() ?>
*/?>
<?php
    $jenises=Jenis::find()->all();
    $listData=ArrayHelper::map($jenises,'id','nama');
    echo $form->field($model, 'jenis_id')->dropDownList(
        $listData,
        ['prompt'=>'Pilih...']
        );
?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
