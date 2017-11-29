
<ol class="breadcrumb">
  <li><a href="?c=padre">Padres</a></li>
  <li class="active"><?php echo $pdr->id_padre != null ? $pdr->nombres_p : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-padre" action="?c=padre&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_padre" value="<?php echo $pdr->id_padre; ?>" />

        <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres_p" value="<?php echo $pdr->nombres_p; ?>" class="form-control" placeholder="Ingrese nombres padre"  />
    </div>

    <div class="form-group">
        <label>Apellidos Paternos</label>
        <input type="text" name="a_paternop" value="<?php echo $pdr->a_paternop; ?>" class="form-control" placeholder="Ingrese Apellidos Paternos"  />
    </div>

    <div class="form-group">
        <label>Apellidos Maternos</label>
        <input type="text" name="a_maternop" value="<?php echo $pdr->a_maternop; ?>" class="form-control" placeholder="Ingrese Apellidos Materno"  />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="rut_p" value="<?php echo $pdr->rut_p; ?>" class="form-control" placeholder="Ingrese Rut"  />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $pdr->telefono; ?>" class="form-control" placeholder="Ingrese telefono"  />
    </div>

    <div class="form-group">
        <label>genero</label>
        <input type="text" name="genero" value="<?php echo $pdr->genero; ?>" class="form-control" placeholder="Ingrese genero"  />
    </div>

    <div class="form-group">
        <label>escolaridad</label>
        <input type="text" name="escolaridad" value="<?php echo $pdr->escolaridad; ?>" class="form-control" placeholder="Ingrese escolaridad"  />
    </div>

    <div class="form-group">
        <label>actividad</label>
        <input type="text" name="actividad" value="<?php echo $pdr->actividad; ?>" class="form-control" placeholder="Ingrese actividad"  />
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
        $("#frm-alumn").submit(function(){
            return $(this).validate();
        });
    })
</script>
