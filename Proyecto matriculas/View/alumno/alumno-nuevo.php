<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=alumno">Alumnos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-alumno" action="?c=alumno&a=Guardar" method="post" enctype="multipart/form-data">



    <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres_a" class="form-control" placeholder="Ingrese nombres alumno"  />
    </div>

    <div class="form-group">
        <label>Apellidos Paternos</label>
        <input type="text" name="a_paternoa" class="form-control" placeholder="Ingrese Apellidos Paternos"  />
    </div>

    <div class="form-group">
        <label>Apellidos Maternos</label>
        <input type="text" name="a_maternoa" class="form-control" placeholder="Ingrese Apellidos Materno"  />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="rut_a" class="form-control" placeholder="Ingrese Rut"  />
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="sexo" class="form-control" placeholder="Ingrese sexo"  />
    </div>

    <div class="form-group">
        <label>fech_nacimiento</label>
        <input type="text" name="fech_nacimiento" class="form-control" placeholder="Ingrese fech_nacimiento"  />
    </div>

    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="direccion_a" class="form-control" placeholder="Ingrese direccion especificando sector"  />
    </div>

    <div class="form-group">
        <label>Comuna</label>
        <input type="text" name="comuna_a" class="form-control" placeholder="Ingrese comuna"  />
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
