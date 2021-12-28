<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $email Correo Electronico y "login" del usuario.
 * @property string $password
 * @property string $nombre
 * @property string $rol Tipo de Perfil: C=Colaborador, A=Administrador, T=Tienda.
 * @property int $aceptado Indicador de usuario aceptado su registro o no.
 * @property string $creado Fecha y Hora de creacion del usuario
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'password', 'nombre', 'rol', 'aceptado', 'creado'], 'required'],
            [['aceptado'], 'integer'],
            [['creado'], 'safe'],
            [['email'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 60],
            [['nombre'], 'string', 'max' => 45],
            [['rol'], 'string', 'max' => 1],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'nombre' => Yii::t('app', 'Nombre'),
            'rol' => Yii::t('app', 'Rol'),
            'aceptado' => Yii::t('app', 'Aceptado'),
            'creado' => Yii::t('app', 'Creado'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
