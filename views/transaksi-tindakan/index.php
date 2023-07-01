<?php

use app\models\TransaksiTindakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiTindakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_transaksi_tindakan',
            // 'id_tindakan',
            // 'id_pasien',
            // 'id_obat',
            'tindakan.nama_tindakan',
            'pasien.nama_pasien',
            'obat.nama_obat',
            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TransaksiTindakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_transaksi_tindakan' => $model->id_transaksi_tindakan]);
                 }
            ],
        ],
    ]); ?>


</div>
