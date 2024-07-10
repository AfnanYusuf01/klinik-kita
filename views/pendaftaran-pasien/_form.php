<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pembayaran;

/** @var yii\web\View $this */
/** @var app\models\PendaftaranPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pendaftaran-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembayaran_id')->dropDownList(
    ArrayHelper::map(Pembayaran::find()->all(), 'id_pembayaran', 'id_pembayaran'),
    ['prompt' => 'Pilih Pembayaran']
) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
