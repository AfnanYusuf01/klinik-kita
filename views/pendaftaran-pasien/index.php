<?php

use app\models\PendaftaranPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PendaftaranPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pendaftaran Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?= Html::a('Create Pendaftaran Pasien', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => array_filter([
        ['class' => 'yii\grid\SerialColumn'],
        
        'id_pasien',
        'nama_pasien',
        'alamat_pasien',
        'no_hp_pasien',
        'pembayaran_id',
        
        !Yii::$app->user->isGuest ? [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, PendaftaranPasien $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
            }
        ] : false,
    ]),
]); ?>



</div>
