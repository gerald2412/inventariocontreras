<?php

class AjustesForm extends CFormModel 
{
    public $alamacen;
    public $producto;
    public $cantidad;
    public $signo;
    
    public function rules() 
    {
        return array(
            
            array('alamacen, producto, cantidad, signo','required'),
            array('alamacen, producto, cantidad, signo','numerical', 'integerOnly'=>true),
        );
    }

    public function attributeLabels() {
        
        return array(
            'alamacen'=>'Alamacen',
            'producto'=>'Producto',
            'cantidad'=>'Cantidad',
            'signo'=>'Signo',
            
        ) ;
    }
    public function ajustar() {
        
        return true;
        
    }
    
    public function signosList() {
        $model =array(
            array('id'=>'1', 'value'=>'Cargar'),
            array('id'=>'-1', 'value'=>'Descargar'),
        );
        return CHtml::listData($model, 'id', 'value');
    }
}