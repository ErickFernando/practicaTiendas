<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pfd
 *
 * @author Erick Fer
 */
class Pfd extends FPDF {

    // utilizamos la funcion Header() y la personalizamos para que muestre la cabecera de página
    function Header() {


        // seteamos el tipo de letra Arial Negrita 16
        $this->SetFont('Arial', 'B', 16);

        // ponemos una celda sin contenido para centrar el titulo o la celda del titulo a la derecha
        $this->Cell(50);

        $Fechahoy = getdate();
        $Fechahoy = $Fechahoy['mday'] . "/" . $Fechahoy['mon'] . "/" . $Fechahoy['year'];
        // definimos la celda el titulo
        $this->Cell(100, 10, "Factura correspondiente al usuario: " . $_SESSION['user'] . " con fecha: " . $Fechahoy, 2, 1, 'C');

        // Salto de línea salta 20 lineas
        $this->Ln(20);
    }

    // utilizamos la funcion Footer() y la personalizamos para que muestre el pie de página
    function Footer() {
        // Seteamos la posicion de la proxima celda en forma fija a 1,5 cm del final de la pagina

        $this->SetY(-15);
        // Seteamos el tipo de letra Arial italica 10

        $this->SetFont('Arial', 'I', 10);
        // Número de página

        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}
