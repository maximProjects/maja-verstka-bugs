<?php

class AjaxController extends Controller
{
	public function actionInfo($id)
	{
        if(Yii::app()->request->isAjaxRequest)
        {
        	$model = Salons::model()->findByPk($id);
            $this->renderPartial('_info', array('model' => $model));
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}

	public function actionMap($id)
	{
        if(Yii::app()->request->isAjaxRequest)
        {
        	$model = Salons::model()->findByPk($id);   
            $html = $this->renderPartial('_map',array('id'=>$id),true);
            $json = array();
            $json['html'] = $html;
            $json['address'] = $model -> address;
            echo json_encode($json);
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}

	public function actionCart($id)
	{
        if(Yii::app()->request->isAjaxRequest)
        {
        	$model = Salons::model()->findByPk($id);
            $this->renderPartial('_cart', array('model' => $model));
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}

	public function actionSearch()
	{
		$name = $_POST['name_startsWith'];
		$match = addcslashes($name, '%_');
		$q = new CDbCriteria( array(
		    'condition' => "name LIKE :name",  
		    'params'    => array(':name' => "%$name%") 
		) );
		 
		$citiesArr = Cities::model()->findAll( $q );
		$result = array();
		foreach($citiesArr as $item)
		{
			$result[] = array('name'=>$item->name,'id'=>$item->id);
		}
		echo json_encode($result);

	}

	public function actionCheckSearch($id){
		
		$city_id = $id;
		
		$salons = Salons::model()->count('city_id = :city_id', array(':city_id'=>$city_id));		

		$result = array('count'=>$salons);
		echo json_encode($result);
	}

	public function actionBook($id)
	{
        if(Yii::app()->request->isAjaxRequest)
        {
        	$model = Salons::model()->findByPk($id);
            $this->renderPartial('_book', array('model' => $model));
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}



	public function actionSecialist($id)
	{
        if(Yii::app()->request->isAjaxRequest)
        {
        	$model = Specialists::model()->findByPk($id);
            
            $html = $this->renderPartial('_spec-content',array('model'=>$model),true);
            $json = array();
            $json['html'] = $html;
            echo json_encode($json);
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}

	public function actionServices($id)
	{
        if(Yii::app()->request->isAjaxRequest)
        {
        	$type_id = $_POST['type_id'];
        	$sql = "SELECT * from services JOIN services_link WHERE services.id=services_link.service_id AND services.type_id=".$type_id." AND services_link.salon_id=".$id;     
			$connection=Yii::app()->salons_db;
			$command=$connection->createCommand($sql);
			$result=$command->queryAll(); 
            $html = $this->renderPartial('_serv-content',array('model'=>$result),true);
            $json = array();
            $json['html'] = $html;
            echo json_encode($json);
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}

	/*
	public function actionIndex()
	{
		$this->render('index');
	}
	*/
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}