<?php

/**
 * This is the model class for table "specialists".
 *
 * The followings are the available columns in table 'specialists':
 * @property integer $id
 * @property integer $salon_id
 * @property integer $type_id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $visible
 */
class Specialists extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'specialists';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('salon_id, type_id', 'numerical', 'integerOnly'=>true),
			array('name, avatar, lastname, email, phone', 'length', 'max'=>200),
			array('visible', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, salon_id, type_id, name, lastname, email, phone, visible', 'safe', 'on'=>'search'),
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
			'spectypes' => array(self::BELONGS_TO, 'SpecTypes', 'type_id'),
			'salons' => array(self::BELONGS_TO, 'Salons', 'salon_id'),
			'photos' => array(self::HAS_MANY, 'PhotoSpecialists', 'spec_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'salon_id' => 'Salon',
			'type_id' => 'Type',
			'name' => 'Name',
			'avatar' => 'Avatar',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'phone' => 'Phone',
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
		$criteria->compare('salon_id',$this->salon_id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('visible',$this->visible,true);

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
	 * @return Specialists the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
