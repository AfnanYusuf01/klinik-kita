<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran_pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $alamat_pasien
 * @property string $no_hp_pasien
 */
class PendaftaranPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'alamat_pasien', 'no_hp_pasien'], 'required'],
            [['nama_pasien', 'alamat_pasien', 'no_hp_pasien'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'alamat_pasien' => 'Alamat Pasien',
            'no_hp_pasien' => 'No Hp Pasien',
        ];
    }
}
