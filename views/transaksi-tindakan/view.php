<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiTindakan $model */

$this->title = $model->id_transaksi_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-tindakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_transaksi_tindakan' => $model->id_transaksi_tindakan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_transaksi_tindakan' => $model->id_transaksi_tindakan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_transaksi_tindakan',
            // 'id_tindakan',
            // 'id_pasien',
            // 'id_obat',
            'tindakan.nama_tindakan',
            'pasien.nama_pasien',
            'obat.nama_obat',
        ],
    ]) ?>

</div>
