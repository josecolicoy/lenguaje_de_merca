
<ol class="breadcrumb">
  <li><a href="?c=matricula">Matriculas</a></li>
  <li class="active"><?php echo $pdr->id_matricula != null ? $pdr->id_matricula : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-matricula" action="?c=matricula&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_matricula" value="<?php echo $pdr->id_matricula; ?>" />

        <div class="form-group">
      <label>fecha</label>
      <input type="text" name="fecha" value="<?php echo $pdr->fecha; ?>" class="form-control" placeholder="Ingrese fecha de matricula"  id="datepicker" />
    </div>

    <div class="form-group">
        <input type="hidden" name="id_curso" value="<?php echo $pdr->id_curso; ?>" class="form-control"  />
    </div>
    <div class="form-group">
        <input type="hidden" name="id_alumno" value="<?php echo $pdr->id_alumno; ?>" class="form-control"  />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-mat").submit(function(){
            return $(this).validate();
        });
    })
</script>
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
