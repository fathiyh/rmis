<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
class WelcomeController extends Controller
{

	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionTim()
	{
		return $this->render('tim');
	}

}

?>