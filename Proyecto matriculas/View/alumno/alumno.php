<h1 class="page-header">Alumnos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=alumno&a=Nuevo">Nuevo Registro</a>
    <a class="btn btn-primary" href="?c=padre">Padres</a>
    <a class="btn btn-primary" href="?c=grupo">Grupo Familiar</a>
    <a class="btn btn-primary" href="?c=apoderado">Apoderado</a>
    <a class="btn btn-primary" href="?c=matricula">Matricula</a>
</div>
<div class="well well-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:120px;">nombres</th>
            <th style="width:120px;">apellido paterno</th>
            <th style="width:120px;">apellido materno</th>
            <th style="width:120px;">rut</th>
            <th style="width:120px;">sexo</th>
            <th style="width:120px;">fecha de nacimiento</th>
            <th style="width:120px;">Direccion</th>
            <th style="width:120px;">Comuna</th>
        </tr>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <th class="thicker"><?php echo $r->nombres_a; ?></th>
            <th class="thicker"><?php echo $r->a_paternoa; ?></th>
            <th class="thicker"><?php echo $r->a_maternoa; ?></th>
            <th class="thicker"><?php echo $r->rut_a; ?></th>
            <th class="thicker"><?php echo $r->sexo; ?></th>
            <th class="thicker"><?php echo $r->fech_nacimiento; ?></th>
            <th class="thicker"><?php echo $r->direccion_a; ?></th>
            <th class="thicker"><?php echo $r->comuna_a; ?></th>
            <th class="thicker">
                <a href="?c=alumno&a=Crud&id_alumno=<?php echo $r->id_alumno; ?>"><span class="glyphicon glyphicon-pencil"></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=alumno&a=Eliminar&id_alumno=<?php echo $r->id_alumno; ?>"><span class="glyphicon glyphicon-trash"></a>
            </td>
        </tr>
        </thead>
    <?php endforeach; ?>
</table>
</div>
