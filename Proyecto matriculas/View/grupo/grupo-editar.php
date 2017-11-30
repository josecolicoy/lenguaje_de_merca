
<ol class="breadcrumb">
  <li><a href="?c=grupo">Grupo Familiar</a></li>
  <li class="active"><?php echo $grup->id_grupo != null ? $grup->id_grupo : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-grupo" action="?c=grupo&a=Editar" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="id_grupo" value="<?php echo $grup->id_grupo; ?>" />

        <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="num_grupo" value="<?php echo $grup->num_grupo; ?>" class="form-control" placeholder="Ingrese nombres grupo"  />
    </div>

    <div class="form-group">
        <label>Apellidos Paternos</label>
        <input type="text" name="comparte_hogar" value="<?php echo $grup->comparte_hogar; ?>" class="form-control" placeholder="Ingrese Apellidos Paternos"  />
    </div>

    <div class="form-group">
        <label>Apellidos Maternos</label>
        <input type="text" name="renta" value="<?php echo $grup->renta; ?>" class="form-control" placeholder="Ingrese Apellidos Materno"  />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="renta_familiar" value="<?php echo $grup->renta_familiar; ?>" class="form-control" placeholder="Ingrese Rut"  />
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="beneficio_estado" value="<?php echo $grup->beneficio_estado; ?>" class="form-control" placeholder="Ingrese sexo"  />
    </div>

    <div class="form-group">
        <input type="hidden" name="id_padre" value="<?php echo $grup->id_padre; ?>" class="form-control" placeholder="Ingrese fech_nacimiento"  />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-grupo").submit(function(){
            return $(this).validate();
        });
    })
</script>
