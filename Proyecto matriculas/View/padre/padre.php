<h1 class="page-header">Padres</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=alumno&a=Nuevo">Nuevo Registro</a>
    <a class="btn btn-primary" href="?c=padre">Padres</a>
    <a class="btn btn-primary" href="?c=familiar">Grupo Familiar</a>
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
            <th style="width:120px;">telefono</th>
            <th style="width:120px;">genero</th>
            <th style="width:120px;">escolaridad</th>
            <th style="width:120px;">actividad</th>
            <th style="width:120px;">Rut del alumno</th>
        </tr>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <th class="thicker"><?php echo $r->nombres_p; ?></th>
            <th class="thicker"><?php echo $r->a_paternop; ?></th>
            <th class="thicker"><?php echo $r->a_maternop; ?></th>
            <th class="thicker"><?php echo $r->rut_p; ?></th>
            <th class="thicker"><?php echo $r->telefono; ?></th>
            <th class="thicker"><?php echo $r->genero; ?></th>
            <th class="thicker"><?php echo $r->escolaridad; ?></th>
            <th class="thicker"><?php echo $r->actividad; ?></th>
            <th class="thicker"><?php echo $r->rut_a; ?></th>
            <th class="thicker">
                <a href="?c=padre&a=Crud&id_padre=<?php echo $r->id_padre; ?>"><span class="glyphicon glyphicon-pencil"></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=padre&a=Eliminar&id_padre=<?php echo $r->id_padre; ?>"><span class="glyphicon glyphicon-trash"></a>
            </td>
        </tr>
        </thead>
    <?php endforeach; ?>
</table>
</div>
