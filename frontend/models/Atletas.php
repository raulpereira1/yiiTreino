<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atletas".
 *
 * @property int $id
 * @property string $nome
 * @property string $federacao
 * @property int $id_pais
 * @property int $idade
 * @property string $esporte
 * @property string $categoria
 *
 * @property Pais $pais
 */
class Atletas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atletas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'federacao', 'idade', 'esporte', 'categoria'], 'required'],
            [['id_pais', 'idade'], 'integer'],
            [['nome', 'federacao', 'esporte', 'categoria'], 'string', 'max' => 255],
            [['id_pais'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::class, 'targetAttribute' => ['id_pais' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'federacao' => 'Federacao',
            'id_pais' => 'Id Pais',
            'idade' => 'Idade',
            'esporte' => 'Esporte',
            'categoria' => 'Categoria',
        ];
    }

    /**
     * Gets query for [[Pais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPais()
    {
        return $this->hasOne(Pais::class, ['id' => 'id_pais']);
    }
}
