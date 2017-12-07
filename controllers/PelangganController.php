<?php
	namespace app\controllers;
	use Yii;
	use yii\web\Controller;
	use app\models\Pelanggan;

	class PelangganController extends Controller{
		
		public function beforeAction($action){
			$this->enableCsrfValidation = false;
			return parent::beforeAction($action);
		}

		public function actionIndex(){
			echo $this->render('index');
		}

		public function actionTambah(){
			$postData = file_get_contents("php://input");
			$dataObject = json_decode($postData);

			$pelanggan = new Pelanggan();
			$pelanggan->nama = $dataObject->data->nama;
			$pelanggan->alamat = $dataObject->data->alamat;
			$pelanggan->telp = $dataObject->data->telp;
			$pelanggan->email = $dataObject->data->email;
			$pelanggan->save();

		}

		public function actionDapatkanSemuaPelanggan(){
			$pelanggan = Pelanggan::find()->asArray()->all();
			echo json_encode($pelanggan);
		}

		public function actionUbah(){
			$postData = file_get_contents("php://input");
			$dataObject = json_decode($postData);

			$pelanggan = Pelanggan::findOne($dataObject->data->id);
			$pelanggan->nama = $dataObject->data->nama;
			$pelanggan->alamat = $dataObject->data->alamat;
			$pelanggan->telp = $dataObject->data->telp;
			$pelanggan->email = $dataObject->data->email;
			$pelanggan->save();
		}

		public function actionHapus(){
			$postData = file_get_contents("php://input");
			$dataObject = json_decode($postData);

			$pelanggan = Pelanggan::findOne($dataObject->id);
			$pelanggan->delete();
		}

	}

?>