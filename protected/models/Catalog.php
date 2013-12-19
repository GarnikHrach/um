<?php

/**
 * This is the model class for table "catalog".
 *
 * The followings are the available columns in table 'catalog':
 * @property integer $id
 * @property string $model
 * @property string $category
 * @property string $features
 * @property string $image
 * @property integer $price
 */
class Catalog extends CActiveRecord
{
        public $searcharray = array('aaaaaaa', 'ssssss', 'dddddddd');
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('model, category, features, image, price', 'required'),
			array('price', 'numerical', 'integerOnly'=>true),
			array('model, category', 'length', 'max'=>128),
			array('features, image', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, model, category, features, image, price', 'safe', 'on'=>'search'),
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
			'model' => 'Model',
			'category' => 'Category',
			'features' => 'Features',
			'image' => 'Image',
			'price' => 'Price',
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
		$criteria->compare('model',$this->model,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('features',$this->features,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Catalog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function selectdata(){
            $data = Yii::app()->db->createCommand()
                ->select('id, model, category')
                ->from('catalog')
                ->queryAll();
            return $data;
        }
}
