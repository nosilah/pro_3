<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "new_test".
 *
 * @property int $id
 * @property string|null $title_news
 * @property string|null $content_nes
 */
class NewTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'new_test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_nes'], 'string'],
            [['title_news'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_news' => 'Title News',
            'content_nes' => 'Content Nes',
        ];
    }
}
