<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=alumno">Alumnos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-alumno" action="?c=padre&a=Guardar" method="post" enctype="multipart/form-data">



    <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres_p" class="form-control" placeholder="Ingrese nombres padre"  />
    </div>

    <div class="form-group">
        <label>Apellidos Paternos</label>
        <input type="text" name="a_paternop" class="form-control" placeholder="Ingrese Apellidos Paternos"  />
    </div>

    <div class="form-group">
        <label>Apellidos Maternos</label>
        <input type="text" name="a_maternop" class="form-control" placeholder="Ingrese Apellidos Materno"  />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="rut_p" class="form-control" placeholder="Ingrese Rut"  />
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="telefono" class="form-control" placeholder="Ingrese sexo"  />
    </div>

    <div class="form-group">
        <label>fech_nacimiento</label>
        <input type="text" name="genero" class="form-control" placeholder="Ingrese fech_nacimiento"  />
    </div>

    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="escolaridad" class="form-control" placeholder="Ingrese direccion especificando sector"  />
    </div>

    <div class="form-group">
        <label>Comuna</label>
        <input type="text" name="actividad" class="form-control" placeholder="Ingrese comuna"  />
    </div>

    <div class="form-group">
        <select name="id_alumno">
        <?php foreach($this->alum->Listar() as $r): ?>
        <option value="<?php echo $r->id_alumno ?>" ><?php echo $r->nombres_a ?></option>
        <?php endforeach; ?>
        </select>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Siguiente</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
