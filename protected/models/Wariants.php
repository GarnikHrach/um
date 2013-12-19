<?php

/**
 * This is the model class for table "wariants".
 *
 * The followings are the available columns in table 'wariants':
 * @property integer $ID
 * @property integer $QUESTION_ID
 * @property string $WARIANT
 * @property integer $VOTES
 *
 * The followings are the available model relations:
 * @property Questions $qUESTION
 */
class Wariants extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wariants';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('QUESTION_ID, WARIANT, VOTES', 'required'),
			array('QUESTION_ID, VOTES', 'numerical', 'integerOnly'=>true),
			array('WARIANT', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, QUESTION_ID, WARIANT, VOTES', 'safe', 'on'=>'search'),
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
			'qUESTION' => array(self::BELONGS_TO, 'Questions', 'QUESTION_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'QUESTION_ID' => 'Question',
			'WARIANT' => 'Wariant',
			'VOTES' => 'Votes',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('QUESTION_ID',$this->QUESTION_ID);
		$criteria->compare('WARIANT',$this->WARIANT,true);
		$criteria->compare('VOTES',$this->VOTES);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wariants the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
