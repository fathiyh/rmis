<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Kendaraan[] $kendaraans
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Jenis Kendaraan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraans()
    {
        return $this->hasMany(Kendaraan::className(), ['jenis_id' => 'id']);
    }
}
