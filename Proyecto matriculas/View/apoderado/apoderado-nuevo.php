<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=apoderado">apoderados</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-apoderado" action="?c=apoderado&a=Guardar" method="post" enctype="multipart/form-data">



    <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres_a" class="form-control" placeholder="Nombres apoderado" style="width: 605px;" />
    </div>

    <div class="form-inline">
        <label>Apellidos Paternos</label><br>
        <input type="text" name="a_paternoa" class="form-control" placeholder="Apellido Paterno" style="width: 300px;" />
        <input type="text" name="a_maternoa" class="form-control" placeholder="Apellido Materno" style="width: 300px;" />
    </div>

    <div class="form-group">
        <label>Rut</label>
        <input type="text" name="rut_a" class="form-control" placeholder="EJ: 19463758-k   (añadir guion)" style="width: 605px;"  />
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="sexo" class="form-control" placeholder="M/F    Masculino/Femenino" style="width: 605px;" />
    </div>

    <div class="form-group">
        <label>fech_nacimiento</label>
        <input type="text" name="fech_nacimiento" class="form-control" placeholder="Fecha Nacimiento DD/MM/AA" id="datepicker" style="width: 605px;"/>
    </div>

    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="direccion_a" class="form-control" placeholder="EJ: Bulnes #1535 Sector Alcantara" style="width: 605px;" />
    </div>

    <div class="form-group">
        <label>Comuna</label>
        <input type="text" name="comuna_a" class="form-control" placeholder="Ingrese Comuna" style="width: 605px;" />
    </div>


    <hr />

    <div class="text-middle">
        <button class="btn btn-success">Siguiente</button>
    </div>
</form>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
