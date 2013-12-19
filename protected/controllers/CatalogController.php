<?php

class CatalogController extends Controller
{
	public function actionIndex()
	{
            $catalog = Yii::app()->db->createCommand()
                ->select('*')
                ->from('catalog')
                ->order('category')
                ->queryAll();

//                  $post=  Catalog::model()->findAllBySql('select * from catalog where model LIKE "%a%"',array('param'=>'pors'));
////                $data = new Catalog ;
////                $info = $data ->selectdata();
//        foreach ($post as $p) {
//            var_dump($p->attributes); 
//        }
                
                
		$this->render('index',array(
                    'catalog' => $catalog,
                    )
                );
	}
        
        public function actionModel($id){
            $model = Catalog::model()->findAllByPk($id) ;
            $this->render('model',array(
                    'model' => $model,
                    )
                );
        }

        public function actionSearch(){
            $search = new Catalog;
            $sss = $search->searcharray;
//            var_dump($sss);
            $post =$_POST['data'];
            $returnsearch = array();
            foreach ($sss as $key => $value) {
                if(is_array($sss)){
                    $returnsearch['ekela'] = $value;
                }
            }
            
            
//            if(isset($_POST['data'])){
//                var_dump($_POST['data']);
//                
//            }
            if(Yii::app()->request->isAjaxRequest){
                echo CJSON::encode($returnsearch);
                exit;  
            }
        }

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