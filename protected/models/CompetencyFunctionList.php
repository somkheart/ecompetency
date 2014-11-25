<?php

/**
 * This is the model class for table "competency_function_list".
 *
 * The followings are the available columns in table 'competency_function_list':
 * @property integer $flist_id
 * @property integer $function_id
 * @property string $flist_name
 * @property integer $flist_status
 * @property string $dic1
 * @property string $dic2
 * @property string $dic3
 * @property string $dic4
 * @property string $dic5
 * @property string $dic6
 */
class CompetencyFunctionList extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'competency_function_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_id, flist_status', 'numerical', 'integerOnly'=>true),
			array('flist_name, dic1, dic2, dic3, dic4, dic5, dic6', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('flist_id, function_id, flist_name, flist_status, dic1, dic2, dic3, dic4, dic5, dic6', 'safe', 'on'=>'search'),
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
			'flist_id' => 'Flist',
			'function_id' => 'Function',
			'flist_name' => 'Flist Name',
			'flist_status' => 'Flist Status',
			'dic1' => 'Dic1',
			'dic2' => 'Dic2',
			'dic3' => 'Dic3',
			'dic4' => 'Dic4',
			'dic5' => 'Dic5',
			'dic6' => 'Dic6',
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

		$criteria->compare('flist_id',$this->flist_id);
		$criteria->compare('function_id',$this->function_id);
		$criteria->compare('flist_name',$this->flist_name,true);
		$criteria->compare('flist_status',$this->flist_status);
		$criteria->compare('dic1',$this->dic1,true);
		$criteria->compare('dic2',$this->dic2,true);
		$criteria->compare('dic3',$this->dic3,true);
		$criteria->compare('dic4',$this->dic4,true);
		$criteria->compare('dic5',$this->dic5,true);
		$criteria->compare('dic6',$this->dic6,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompetencyFunctionList the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
