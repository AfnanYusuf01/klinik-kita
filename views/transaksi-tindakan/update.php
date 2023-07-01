<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiTindakan $model */

$this->title = 'Update Transaksi Tindakan: ' . $model->id_transaksi_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi_tindakan, 'url' => ['view', 'id_transaksi_tindakan' => $model->id_transaksi_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
