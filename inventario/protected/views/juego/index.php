<?php
/* @var $this AjustesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Juego',
);

?>

	
<?php echo CHtml::scriptFile(Yii::app()->request->baseUrl . "/js/appjs.js");
?>   
 <h1>Juego de TAQUIGRAFIA.</h1>

        
        
<div  aling="center" id="nombredeldiv" style="display:none;">
<FORM NAME='frm'> 
<INPUT TYPE='text' NAME='w' SIZE=64> 
</FORM>
</div>
         <FORM ID="formulario" ACTION="#">

<TEXTAREA ID="area" placeholder= "Escribe aqui todas las palabras que puedas en un minuto." COLS=150 ROWS=3>
</TEXTAREA><BR>
<INPUT TYPE="button" VALUE="Iniciar test" onClick="carga(), iniciar(), Mostrar(nombredeldiv), scroll(), this.disabled=true">
<INPUT TYPE="button" VALUE="Detener" onClick="window.location.reload()">
  
</FORM>
        <span aling="center" id="minutos">0</span>:<span id="segundos">0</span>

    

<iframe src="<?php echo $this->createUrl('https://www.facebook.com');?>"></iframe>