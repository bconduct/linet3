<?php

class SettingsController extends RightsController
{


	public function actionAdmin()	{/* used in the refnum selection*/
		
		
		
		//$docdetails =$model->docDetailes;
		//$doctype =$model->docType;
		if(isset($_POST['Settings'])){
                    foreach ($_POST['Settings'] as $key => $value) {
                        $model = Settings::model()->findByPk($key);
                        //print_r($value);
                        //exit;
                        $model->value=$value['value'];
                        $model->save();
                    }
                    
                }
		$models = Settings::model()->findAll();
		$this->render('view',array(
			'models'=>$models,
		));
	}

        
       
}