<?php

/**
 * This is the model class for table "photo_specialists".
 *
 * The followings are the available columns in table 'photo_specialists':
 * @property integer $id
 * @property integer $spec_id
 * @property string $path_thumb
 * @property string $path
 * @property integer $order
 * @property integer $visible
 */
class PhotoSpecialists extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'photo_specialists';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('spec_id, order, visible', 'numerical', 'integerOnly'=>true),
			array('path_thumb, path', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, spec_id, path_thumb, path, order, visible', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'specialists' => array(self::BELONGS_TO, 'Specialists', 'spec_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'spec_id' => 'Spec',
			'path_thumb' => 'Path Thumb',
			'path' => 'Path',
			'order' => 'Order',
			'visible' => 'Visible',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('spec_id',$this->spec_id);
		$criteria->compare('path_thumb',$this->path_thumb,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('visible',$this->visible);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->salons_db;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhotoSpecialists the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
