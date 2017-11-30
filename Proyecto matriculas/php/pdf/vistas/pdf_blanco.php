
<!-- IMPORTANTE: El contenido de la etiqueta style debe estar entre comentarios de HTML -->
<style>
#encabezado {padding:10px 0; border-top: 1px solid; border-bottom: 1px solid; width:100%;}
#encabezado .fila #col_1 {width: 15%}
#encabezado .fila #col_2 {text-align:center; width: 55%}
#encabezado .fila #col_3 {width: 15%}

#encabezado .fila td img {width:50%}
#encabezado .fila #col_2 #span1{font-size: 15px;}
#encabezado .fila #col_2 #span2{font-size: 12px; color: #4d9;}

#footer {padding-top:5px 0; border-top: 2px solid #46d; width:100%;}
#footer .fila td {text-align:center; width:100%;}
#footer .fila td span {font-size: 10px; color: #000;}

#central {margin-top:50px; width:100%;}
#central tr td {padding: 10px; text-align: justify; width:100%;}

</style>

<!-- page define la hoja con los márgenes señalados -->
<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="20mm">
    <page_header> <!-- Define el header de la hoja -->
		<table id="encabezado">
            <tr class="fila">
                <td id="col_1" >
					<img src='../../assets/imagenes/liceo.png' width="50">
				</td>
                <td id="col_2">
					<span id="span1">Liceo Industrial de Nueva Imperial</span>
					<br>
				</td>
				<td id="col_3">
					<img src='../../assets/imagenes/chile.png' width="50">
				</td>
				<td id="col_4">
					<img src='../../assets/imagenes/chile2.jpg' width="50">
				</td>
            </tr>
        </table>
    </page_header>
     
    <page_footer> <!-- Define el footer de la hoja -->
		<table id="footer">
            <tr class="fila">
				<td>
					<span>Direccion</span>
				</td>
			</tr>
        </table>
    </page_footer>
    
    <div id="central">
    	<h3>Datos del Alumno</h3>
    		<h4>Nombre del Alumno: <?php echo $id = $_REQUEST['nombre'];?>  </h4>
    		<h4>Apellido Paterno: <?php echo $ape_p = $_REQUEST['ape_p'];?>  </h4>
    		<h4>Apellido Materno: <?php echo $ape_m = $_REQUEST['ape_m'];?>  </h4>
    		<h4>Rut: <?php echo $ape_m = $_REQUEST['rut'];?>  </h4>
    		<h4>Domicilio        : <?php echo $dire = $_REQUEST['direc'];?>   </h4>
    		<h4>Fecha de Matricula:<?php echo $fecha = $_REQUEST['fecha'];?>  </h4>
    		<h4>Curso:<?php echo $fecha = $_REQUEST['curso'];?>  </h4>
    		<h4>Fecha Nacimiento:<?php echo $fecha = $_REQUEST['fecha_n'];?>  </h4>
    		
    </div>

</page>
