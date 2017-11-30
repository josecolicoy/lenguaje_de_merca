
<ol class="breadcrumb">
  <li><a href="?c=matricula">Matriculas</a></li>
  <li class="active"><?php echo $pdr->id_matricula != null ? $pdr->id_matricula : 'Nuevo Registro'; ?></li>
</ol>
<a href="php/pdf/pdf_blanco.php?nombre=<?php echo $pdr->nombre;?>&fecha=<?php echo $pdr->fecha;?>&direc=<?php echo $pdr->dire;?>&ape_p=<?php echo $pdr->ape_p; ?>&ape_m=<?php echo $pdr->ape_m; ?>&rut=<?php echo $pdr->rut; ?>&curso=<?php echo $pdr->curso; ?>&fecha_n=<?php echo $pdr->fecha_n; ?>"><span class="glyphicon glyphicon-pencil"></a>
   <?php echo $pdr->fecha_n;?>
   <!--

   -->
    
    
    
    
    
    

