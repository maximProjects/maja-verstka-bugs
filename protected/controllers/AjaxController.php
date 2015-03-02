<?php

class AjaxController extends Controller
{
	public function actionInfo()
	{
        if(Yii::app()->request->isAjaxRequest)
        {
            $this->renderPartial('_info');
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

	public function actionCart()
	{
        if(Yii::app()->request->isAjaxRequest)
        {
            $this->renderPartial('_cart');
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
			$result[] = $item->name;
		}
		echo json_encode($result);

	}

	public function actionBook()
	{
        if(Yii::app()->request->isAjaxRequest)
        {
            $this->renderPartial('_book');
            Yii::app()->end();
        }
        else
        {
            throw new CHttpException(404);
        }

	}

	public function actionCheckSearch(){
		$name = $_POST['val'];
		$match = addcslashes($name, '%_');
		$q = new CDbCriteria( array(
		    'condition' => "name LIKE :name",  
		    'params'    => array(':name' => "%$name%") 
		) );
		 
		$cities = Cities::model()->find( $q );
		$city_id = $cities -> id;

		$salons = Salons::model()->count('city_id = :city_id', array(':city_id'=>$city_id));		

		$result = array('count'=>$salons);
		echo json_encode($result);
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