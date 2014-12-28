<?php

/**
 * This is the model class for table "tmp_function".
 *
 * The followings are the available columns in table 'tmp_function':
 * @property integer $tmp_id
 * @property string $usercode
 * @property string $function_name
 * @property string $dic1
 * @property string $dic2
 * @property string $dic3
 * @property string $dic4
 * @property string $dic5
 */
class TmpFunction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tmp_function';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usercode', 'length', 'max'=>100),
			array('function_name', 'length', 'max'=>255),
			array('dic1, dic2, dic3, dic4, dic5', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tmp_id, usercode, function_name, dic1, dic2, dic3, dic4, dic5', 'safe', 'on'=>'search'),
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
			'tmp_id' => 'Tmp',
			'usercode' => 'Usercode',
			'function_name' => 'Function Name',
			'dic1' => 'Dic1',
			'dic2' => 'Dic2',
			'dic3' => 'Dic3',
			'dic4' => 'Dic4',
			'dic5' => 'Dic5',
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

		$criteria->compare('tmp_id',$this->tmp_id);
		$criteria->compare('usercode',$this->usercode,true);
		$criteria->compare('function_name',$this->function_name,true);
		$criteria->compare('dic1',$this->dic1,true);
		$criteria->compare('dic2',$this->dic2,true);
		$criteria->compare('dic3',$this->dic3,true);
		$criteria->compare('dic4',$this->dic4,true);
		$criteria->compare('dic5',$this->dic5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TmpFunction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
