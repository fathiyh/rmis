<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ParkirForm extends Model
{
    public $tanggal;
    public $jam;
    public $nopol;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // tanggal, jam, nopol wajib diisi
            [['tanggal', 'jam', 'nopol'], 'required'],

            [['nopol'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal Masuk',
            'jam' => 'Jam Masuk',
            'nopol' => 'No. Kendaraan'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
