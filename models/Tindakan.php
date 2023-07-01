<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $jenis_tindakan
 * @property string $nama_tindakan
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_tindakan', 'nama_tindakan'], 'required'],
            [['jenis_tindakan', 'nama_tindakan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'jenis_tindakan' => 'Jenis Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
        ];
    }

    
}
