<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_tindakan".
 *
 * @property int $id_transaksi_tindakan
 * @property int $id_tindakan
 * @property int $id_pasien
 * @property int $id_obat
 */
class TransaksiTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tindakan', 'id_pasien', 'id_obat'], 'required'],
            [['id_tindakan', 'id_pasien', 'id_obat'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi_tindakan' => 'Id Transaksi Tindakan',
            'id_tindakan' => 'Id Tindakan haha',
            'id_pasien' => 'Id Pasien',
            'id_obat' => 'Id Obat',
            'tindakan.nama_tindakan' => 'Tindakan',
            'pasien.nama_pasien' => 'pasien',
            'obat.nama_obat' => 'Obat',


        ];
    }

    public function getTindakan()
    {
        // same as above
        return $this->hasOne(Tindakan::class, ['id_tindakan' => 'id_tindakan']);
    }

    public function getPasien()
    {
        // same as above
        return $this->hasOne(PendaftaranPasien::class, ['id_pasien' => 'id_pasien']);
    }

    public function getObat()
    {
        // same as above
        return $this->hasOne(Obat::class, ['id_obat' => 'id_obat']);
    }


}
