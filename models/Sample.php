<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sample".
 *
 * @property integer $id
 * @property string $thought
 * @property integer $goodness
 * @property integer $rank
 * @property string $censorship
 * @property string $occurred
 */
class Sample extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sample';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goodness', 'rank'], 'integer'],
            [['rank', 'censorship'], 'required'],
            // Gii generate this
            //[['occurred'], 'safe'],
            ['occurred', 'default', 'value' => date('Y-m-d')],
            [['thought', 'censorship'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'thought' => 'Thought',
            'goodness' => 'Goodness',
            'rank' => 'Rank',
            'censorship' => 'Censorship',
            'occurred' => 'Occurred',
        ];
    }
}
