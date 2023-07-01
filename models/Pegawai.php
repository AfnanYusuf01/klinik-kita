<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama
 * @property string $alamat
 * @property int $nomer_nip
 * @property string $jabatan
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'nomer_nip', 'jabatan'], 'required'],
            [['nomer_nip'], 'integer'],
            [['nama', 'alamat', 'jabatan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'nomer_nip' => 'Nomer Nip',
            'jabatan' => 'Jabatan',
        ];
    }
}
