<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // = $form->field($model, 'id_transaksi_tindakan')->textInput() ?>
    <?php 
    
	$dataPost=ArrayHelper::map(\app\models\TransaksiTindakan::find()->asArray()->all(), 'id_transaksi_tindakan', 'id_transaksi_tindakan');
	echo $form->field($model, 'id_transaksi_tindakan')
        ->dropDownList(
            $dataPost,           
            ['id_transaksi_tindakan'=>'id_transaksi_tindakan']
        );
    
    ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
