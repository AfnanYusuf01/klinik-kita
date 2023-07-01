<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TransaksiTindakan;

/**
 * TransaksiTindakanSearch represents the model behind the search form of `app\models\TransaksiTindakan`.
 */
class TransaksiTindakanSearch extends TransaksiTindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi_tindakan', 'id_tindakan', 'id_pasien', 'id_obat'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TransaksiTindakan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_transaksi_tindakan' => $this->id_transaksi_tindakan,
            'id_tindakan' => $this->id_tindakan,
            'id_pasien' => $this->id_pasien,
            'id_obat' => $this->id_obat,
        ]);

        return $dataProvider;
    }
}
