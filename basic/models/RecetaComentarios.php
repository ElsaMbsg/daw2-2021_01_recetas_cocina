<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receta_comentarios".
 *
 * @property int $id
 * @property int $receta_id
 * @property int $usuario_id Usuario que ha creado el comentario. No deberia ser CERO (como si fuera NULL).
 * @property string $fechahora
 * @property string $texto
 */
class RecetaComentarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receta_comentarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receta_id', 'usuario_id', 'fechahora', 'texto'], 'required'],
            [['receta_id', 'usuario_id'], 'integer'],
            [['fechahora'], 'safe'],
            [['texto'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receta_id' => 'Receta ID',
            'usuario_id' => 'Usuario ID',
            'fechahora' => 'Fechahora',
            'texto' => 'Texto',
        ];
    }
}
