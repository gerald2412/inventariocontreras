<?php

class ConsultaController extends Controller
{
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        public function actionIndex() {
            $model = new ConsultaForm;
            if(isset($_POST['ConsultaForm']))
                {
                $model->attributes =  $_POST['ConsultaForm'];
                if ($model->validate()){
                  $reporte = new ReporteExistencias($model->GetExistencias());
                  $reporte->Output();
                }
            }
            $this->render('index', array(
                
                    'model'=>$model, 
                    
                    ));
            
            
        }
        
}