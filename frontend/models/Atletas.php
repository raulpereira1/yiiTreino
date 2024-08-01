<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atletas".
 *
 * @property int $id
 * @property string $nome
 * @property string $federacao
 * @property int $idade
 * @property string $esporte
 * @property string $categoria
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
            [['idade'], 'integer'],
            [['nome', 'federacao', 'esporte', 'categoria'], 'string', 'max' => 255],
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
            'idade' => 'Idade',
            'esporte' => 'Esporte',
            'categoria' => 'Categoria',
        ];
    }
}
