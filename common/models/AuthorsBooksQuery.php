<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[AuthorsBooks]].
 *
 * @see AuthorsBooks
 */
class AuthorsBooksQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AuthorsBooks[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AuthorsBooks|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
