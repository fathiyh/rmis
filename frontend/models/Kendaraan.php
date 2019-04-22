<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property int $id
 * @property string $nopol
 * @property string $pemilik
 * @property string $merk
 * @property int $jenis_id
 * @property int $user_id
 *
 * @property Jenis $jenis
 * @property TransaksiParkir[] $transaksiParkirs
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopol', 'pemilik', 'jenis_id'], 'required'],
            [['jenis_id', 'user_id'], 'integer'],
            [['nopol'], 'string', 'max' => 15],
            [['pemilik', 'merk'], 'string', 'max' => 45],
            [['nopol'], 'unique'],
            [['jenis_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['jenis_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nopol' => 'Nomor Kendaraan',
            'pemilik' => 'Pemilik',
            'merk' => 'Merk',
            'jenis_id' => 'Jenis ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'jenis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiParkirs()
    {
        return $this->hasMany(TransaksiParkir::className(), ['kendaraan_id' => 'id']);
    }
}
