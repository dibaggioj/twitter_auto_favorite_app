<?php

/**
 * This is the model class for table "twitter_users".
 *
 * The followings are the available columns in table 'twitter_users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $searchtag1
 * @property string $searchtag2
 * @property string $searchtag3
 * @property string $searchtag4
 * @property string $searchtag5
 * @property string $searchtag6
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'twitter_users';
	}
	//THIS WAS ADDED TO ADDRESS THE LACK OF A PRIMARY KEY FOR THE DATABASE
	public function primaryKey()
	{
		return 'id';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, searchtag1', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('username, password, email, searchtag1, searchtag2, searchtag3, searchtag4, searchtag5, searchtag6', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, searchtag1, searchtag2, searchtag3, searchtag4, searchtag5, searchtag6', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'searchtag1' => 'Searchtag1',
			'searchtag2' => 'Searchtag2',
			'searchtag3' => 'Searchtag3',
			'searchtag4' => 'Searchtag4',
			'searchtag5' => 'Searchtag5',
			'searchtag6' => 'Searchtag6',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('searchtag1',$this->searchtag1,true);
		$criteria->compare('searchtag2',$this->searchtag2,true);
		$criteria->compare('searchtag3',$this->searchtag3,true);
		$criteria->compare('searchtag4',$this->searchtag4,true);
		$criteria->compare('searchtag5',$this->searchtag5,true);
		$criteria->compare('searchtag6',$this->searchtag6,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}