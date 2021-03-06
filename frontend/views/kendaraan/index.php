<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KendaraanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kendaraan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kendaraan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nopol',
            'pemilik',
            'merk',
            'jenis.nama',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
