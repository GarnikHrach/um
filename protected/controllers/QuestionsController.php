<?php

class QuestionsController extends Controller
{
	public function actionIndex()
	{
                $this->render('index', array(
                    'var1'=>'esel',
                    'var2'=>'senc',
                ));
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
        */
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
//                    'edit'=>'application.controllers.post.UpdateAction',
//			'action1'=>'path.to.ActionClass',
			'edit'=>array(
				'class'=>'application.controllers.questions.UpdateAction',
				'a'=>'5+',
			),
		);
	}
	
}