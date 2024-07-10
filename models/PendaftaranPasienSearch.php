<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PendaftaranPasien;

/**
 * PendaftaranPasienSearch represents the model behind the search form of `app\models\PendaftaranPasien`.
 */
class PendaftaranPasienSearch extends PendaftaranPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien'], 'integer'],
            [['nama_pasien', 'alamat_pasien', 'no_hp_pasien'], 'safe'],
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
        $query = PendaftaranPasien::find();

        // Condition to filter only by name when logged in
        if (!\Yii::$app->user->isGuest) {
            $query->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien]);
        }

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
            'id_pasien' => $this->id_pasien,
        ]);

            $query->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
                ->andFilterWhere(['like', 'alamat_pasien', $this->alamat_pasien])
                ->andFilterWhere(['like', 'no_hp_pasien', $this->no_hp_pasien]);
        

        return $dataProvider;
    }
}
