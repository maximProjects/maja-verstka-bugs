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

	public function actionMap()
	{
        if(Yii::app()->request->isAjaxRequest)
        {
            
            $html = $this->renderPartial('_map',array(),true);
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