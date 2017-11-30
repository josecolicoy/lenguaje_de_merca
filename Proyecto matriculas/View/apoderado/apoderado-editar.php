
<ol class="breadcrumb">
  <li><a href="?c=apoderado">apoderado</a></li>
  <li class="active"><?php echo $apo->id_apoderado != null ? $apo->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-apoderado" action="?c=apoderado&a=Editar" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="id_apoderado" value="<?php echo $apo->id_apoderado; ?>" />

        <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres" value="<?php echo $apo->nombres; ?>" class="form-control" placeholder="Nombres apoderado" style="width: 605px;"  />
    </div>

    <div class="form-inline">
        <label>Apellidos </label><br>
        <input type="text" name="a_paterno" value="<?php echo $apo->a_paterno; ?>" class="form-control" placeholder="Apellido Paterno" style="width: 300px;"  />
        <input type="text" name="a_materno" value="<?php echo $apo->a_materno; ?>" class="form-control" placeholder="Apellido Materno" style="width: 300px;"  />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="rut_ap" value="<?php echo $apo->rut_ap; ?>" class="form-control" placeholder="EJ: 19463758-k   (añadir guion)" style="width: 605px;" />
    </div>

    <div class="form-group">
        <label>Tipo</label>
        <input type="text" name="tipo" value="<?php echo $apo->tipo; ?>" class="form-control" placeholder="Tipo" style="width: 605px;" />
    </div>

    <div class="form-group">
        <label>fecha nacimiento</label>
        <input type="text" name="fecha_nacap" value="<?php echo $apo->fecha_nacap; ?>" class="form-control" placeholder="Fecha Nacimiento DD/MM/AA" id="datepicker" style="width: 605px;"  />
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono_ap" value="<?php echo $apo->telefono_ap; ?>" class="form-control" placeholder="569 99939939" style="width: 605px;"  />
    </div> 
    <div class="form-group">
        <label>Parentesco</label>
        <input type="text" name="parentesco" value="<?php echo $apo->parentesco; ?>" class="form-control" placeholder="Parentesco" style="width: 605px;"  />
    </div>

    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="direccion" value="<?php echo $apo->direccion; ?>" class="form-control" placeholder="EJ: Bulnes #1535 Sector Alcantara" style="width: 605px;"  />
    </div>

    <div class="form-group">
        <label>Comuna</label>
        <input type="text" name="comuna" value="<?php echo $apo->comuna; ?>" class="form-control" placeholder="Ingrese Comuna" style="width: 605px;"  />
    </div>
 <div class="form-group">
        <input type="hidden" name="id_grupo" value="<?php echo $apo->id_grupo; ?>" class="form-control"  />
    </div>
    <div class="form-group">
        <input type="hidden" name="id_alumno" value="<?php echo $apo->id_alumno; ?>" class="form-control"  />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
<script>
    $(document).ready(function(){
        $("#frm-alumn").submit(function(){
            return $(this).validate();
        });
    })
</script>
