<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[GenresBooks]].
 *
 * @see GenresBooks
 */
class GenresBooksQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GenresBooks[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GenresBooks|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
