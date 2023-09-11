<?php
  
  require('pdf/fpdf.php');
  
  class PDF extends FPDF{
    //Crear Cabecera
    function header(){
        //posisionar logo
        $this->Cell(-200);
        $this->Image('img/tecnologia1.jpeg',0,-10,220);

        //Tipo de Letra
        $this->ln(10);
        $this->SetFont('Arial','B',10);

        $this->Cell(-200);
       
    } 
    function Footer(){ //Pie de Pagina
    
        $this->SetFillColor(20,05,19);
        $this->Rect(0,270,220,30,'F');
        $this->SetY(-20); //subir las letras
        $this->SetFont('Arial','',10);
        $this->SetTextColor(255,255,255); //color del Texto

        $this->SetX(90);
        $this->write(5,' Ennio Mendoza M. - Ingeniero Informático');
        $this->Ln();
        
    }
    }
    $pdf= new PDF(); 
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);

    $pdf->SetY(70);
    $pdf->SetX(45);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFillColor(79,59,120);
    $pdf->Cell(59,9,'Nombre',0,0,'C',1);
    $pdf->Cell(59,9,'Usuario',0,0,'C',1);
    $pdf->Cell(59,9,'Contraseña',0,1,'C',1);

    include('db.php');
    require('db.php');
    
    $consulta="SELECT *FROM usuarios";
    $resultado=mysqli_query($conn,$consulta);

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(240,245,255);

    while($row = $resultado->fetch_assoc()){
      $pdf->SetX(45);
      $pdf->Cell(59,9,$row['Nombre'],0,0,'C',1);
      $pdf->Cell(17,9,$row['Usuario'],0,0,'C',1);
      $pdf->Cell(50,9,$row['Contraseña'],0,1,'C',1);

    } 

    $pdf->output();


 ?>