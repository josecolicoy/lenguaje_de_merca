<h1 class="page-header">Apoderados</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=apoderado&a=Nuevo">Nuevo Registro</a>
    <a class="btn btn-info" href="?c=padre">Padres</a>
    <a class="btn btn-success" href="?c=grupo">Grupo Familiar</a>
    <a class="btn btn-warning" href="?c=apoderado">Apoderado</a>
    <a class="btn btn-danger" href="?c=matricula">Matricula</a>
</div>
<div class="well well-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:120px;">nombres</th>
            <th style="width:120px;">apellido paterno</th>
            <th style="width:120px;">apellido materno</th>
            <th style="width:120px;">rut</th>
            <th style="width:120px;">Parentesco</th>
            <th style="width:120px;">fech de nacimiento</th>
            <th style="width:120px;">telefono</th>
            <th style="width:120px;">tipo</th>
            <th style="width:120px;">direccion</th>
            <th style="width:120px;">comuna</th>
            <th style="width:120px;">alumno</th>
        </tr>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <th class="thicker"><?php echo $r->nombres; ?></th>
            <th class="thicker"><?php echo $r->a_paterno; ?></th>
            <th class="thicker"><?php echo $r->a_materno; ?></th>
            <th class="thicker"><?php echo $r->rut_ap; ?></th>
            <th class="thicker"><?php echo $r->parentesco; ?></th>
            <th class="thicker"><?php echo $r->fecha_nacap; ?></th>
            <th class="thicker"><?php echo $r-> telefono_ap; ?></th>
            <th class="thicker"><?php echo $r->tipo; ?></th>
            <th class="thicker"><?php echo $r->direccion; ?></th>
            <th class="thicker"><?php echo $r->comuna; ?></th>
            <th class="thicker"><?php echo $r->nombres_a; ?></th>
            <th class="thicker">
                <a href="?c=apoderado&a=Crud&id_apoderado=<?php echo $r->id_apoderado; ?>"><span class="glyphicon glyphicon-pencil"></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=apoderado&a=Eliminar&id_apoderado=<?php echo $r->id_apoderado; ?>"><span class="glyphicon glyphicon-trash"></a>
            </td>
        </tr>
        </thead>
    <?php endforeach; ?>
</table>
</div>
