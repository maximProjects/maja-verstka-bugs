<?php

class LeftfilterWidget extends CWidget
{
    public function run()
    {
    	$id = $_GET['id'];
    	$city = Cities::model()->findByPk($id);
    	$servs = ServTypes::model()->findAll();
        $this->render('LeftfilterWidget', array('city'=>$city, 'servs'=>$servs));
    }
}