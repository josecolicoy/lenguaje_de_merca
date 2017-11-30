
<ol class="breadcrumb">
  <li><a href="?c=apoderado">apoderado</a></li>
  <li class="active"><?php echo $alu->id_apoderado != null ? $alu->nombres_a : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-apoderado" action="?c=apoderado&a=Editar" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="id_apoderado" value="<?php echo $alu->id_apoderado; ?>" />

        <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres_a" value="<?php echo $alu->nombres_a; ?>" class="form-control" placeholder="Nombres apoderado" style="width: 605px;"  />
    </div>

    <div class="form-inline">
        <label>Apellidos Paternos</label><br>
        <input type="text" name="a_paternoa" value="<?php echo $alu->a_paternoa; ?>" class="form-control" placeholder="Apellido Paterno" style="width: 300px;"  />
        <input type="text" name="a_maternoa" value="<?php echo $alu->a_maternoa; ?>" class="form-control" placeholder="Apellido Materno" style="width: 300px;"  />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="rut_a" value="<?php echo $alu->rut_a; ?>" class="form-control" placeholder="EJ: 19463758-k   (añadir guion)" style="width: 605px;" />
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="sexo" value="<?php echo $alu->sexo; ?>" class="form-control" placeholder="M/F    Masculino/Femenino" style="width: 605px;" />
    </div>

    <div class="form-group">
        <label>fech_nacimiento</label>
        <input type="text" name="fech_nacimiento" value="<?php echo $alu->fech_nacimiento; ?>" class="form-control" placeholder="Fecha Nacimiento DD/MM/AA" id="datepicker" style="width: 605px;"  />
    </div>

    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="direccion_a" value="<?php echo $alu->direccion_a; ?>" class="form-control" placeholder="EJ: Bulnes #1535 Sector Alcantara" style="width: 605px;"  />
    </div>

    <div class="form-group">
        <label>Comuna</label>
        <input type="text" name="comuna_a" value="<?php echo $alu->comuna_a; ?>" class="form-control" placeholder="Ingrese Comuna" style="width: 605px;"  />
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
