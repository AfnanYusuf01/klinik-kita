<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property int $id_transaksi_tindakan
 * @property string $tanggal
 * @property string $metode_pembayaran
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi_tindakan', 'tanggal', 'metode_pembayaran'], 'required'],
            [['id_transaksi_tindakan'], 'integer'],
            [['tanggal'], 'safe'],
            [['metode_pembayaran'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_transaksi_tindakan' => 'Id Transaksi Tindakan',
            'tanggal' => 'Tanggal',
            'metode_pembayaran' => 'Metode Pembayaran',
            // 'wilayah.nama_wilayah' => 'Wilayah',
            'transtindak.id_transaksi_tindakan' => 'TransTindak'
        ];

    }

    public function getwilayah()
    {
        // same as above
        return $this->hasOne(Wilayah::class, ['id_wilayah' => 'id_transaksi_tindakan']);
    }

    public function getTranstindak()
    {
        // same as above
        return $this->hasOne(TransaksiTindakan::class, ['id_transaksi_tindakan' => 'id_transaksi_tindakan']);

        // $nana = $this->hasOne(TransaksiTindakan::class, ['id_transaksi_tindakan' => 'id_transaksi_tindakan']); 
        // $nini = $this->hasOne(Tindakan::class, $nana = $nana); 
        // return $nini;
        
    }

}
