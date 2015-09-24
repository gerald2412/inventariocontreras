<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ConsultaForm extends CFormModel
{
    public $alamacen;
    
    public function rules() {
       
        return array(
            
          array('alamacen', 'required'),
             array('alamacen', 'numerical', 'integerOnly'=>true),
        );
}

public function attributesLabels()
       {
     return array (
       'alamcen'=>'Alamacen',  
     );
}

public function GetExistencias() {
    $model = Alamacen::model()->with('productosAlmacenes')->together()->findByPk($this->alamacen);
    return $model;
}
}