<?php
Yii::import('application.vendors.fpdf.*');

class ReporteExistencias extends FPDF
{
    private $data;
    
    function __construct($data) {
        parent::__construct('L', 'mm', 'Letter');
        $this->data = $data;
        $this->addPage();
      if ($data === null)
      {
          $this->Cell(0, 6, 'El reporte no existe', 0, 1, 'C');
      }
      else
          {
      $this->Body();
      }
    }
    public function header()
            {
          $this->SetFont('times','B', 16);
        $this->Cell(0, 6, 'REPORTE DE EXISTENCIAS', 0, 1, 'C');
        $this->Ln();
    }
    public function Body()
    {
     $this->SetFont('times','B', 12);
     $this->Cell(20, 6, 'Almacen:', 1, 0, 'L');
     $this->Cell(90, 6, $this->data->descripcion, 1, 0, 'L');
     $this->Cell(25, 6, 'Capacidad', 1, 0, 'L');     
     $this->Cell(25, 6, $this->data->capacidad, 1, 0, 'R');
     $this->Cell(15, 6, 'Stock', 1, 0, 'L');
     $this->Cell(0, 6, $this->data->GetStock(), 1, 0, 'R');
     
     $this->Ln();
      $this->SetFont('times','B', 12);
      $this->Cell(0, 6, 'Productos en exsistencia:', 1, 1, 'C');
      $this->SetFont('times','B', 12);
      
      
      if ($this->data->productosAlmacenes === null)
          {
          $this->Cell(0, 6, 'No hasy productos en el almacen', 0, 1,'C');
      }
      else 
      {
           $this->Cell(30, 6, 'Cod.:', 1, 0, 'L');
       $this->Cell(200, 6, 'Producto:', 1, 0, 'C');
       $this->Cell(30, 6, 'Existencia:', 1, 1, 'C');
      
       foreach ($this->data->productosAlmacenes as $p)
           {
             $this->Cell(30, 6, $p->producto->codigo, 1, 0, 'L');
       $this->Cell(200, 6, $p->producto->descripcion, 1, 0, 'L');
       $this->Cell(30, 6, $p->existencia, 1, 1, 'R');
       }
      }
    }
}