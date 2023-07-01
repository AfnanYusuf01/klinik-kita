<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\TransaksiTindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // = $form->field($model, 'id_tindakan')->textInput() ?>

    <?php 
    
	$dataPost=ArrayHelper::map(\app\models\Tindakan::find()->asArray()->all(), 'id_tindakan', 'nama_tindakan');
	echo $form->field($model, 'id_tindakan')
        ->dropDownList(
            $dataPost,           
            ['id_tindakan'=>'nama_tindakan']
        );
    
    ?>

    <?php //= $form->field($model, 'id_pasien')->textInput() ?>

    <?php 
    
	$dataPost=ArrayHelper::map(\app\models\PendaftaranPasien::find()->asArray()->all(), 'id_pasien', 'nama_pasien');
	echo $form->field($model, 'id_pasien')
        ->dropDownList(
            $dataPost,           
            ['id_pasien'=>'nama_pasien']
        );
    
    ?>

    <?php //  = $form->field($model, 'id_obat')->textInput() ?>

    <?php 
    
	$dataPost=ArrayHelper::map(\app\models\Obat::find()->asArray()->all(), 'id_obat', 'nama_obat');
	echo $form->field($model, 'id_obat')
        ->dropDownList(
            $dataPost,           
            ['id_obat'=>'nama_obat']
        );
    
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
