<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RecetaPasoImagen]].
 *
 * @see RecetaPasoImagen
 */
class RecetaPasoImagenesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RecetaPasoImagen[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RecetaPasoImagen|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
