<?php

use app\models\Pembayaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PembayaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pembayarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembayaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pembayaran',
            // 'id_transaksi_tindakan',
            'tanggal',
            'metode_pembayaran',
            // 'wilayah.nama_wilayah',
            'transtindak.id_transaksi_tindakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pembayaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pembayaran' => $model->id_pembayaran]);
                 }
            ],
        ],
    ]); ?>


</div>
