<h1 class="page-header">Matricula</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=alumno&a=Nuevo">Nuevo Registro</a>
    <a class="btn btn-success" href="?c=padre">Padres</a>
    <a class="btn btn-info" href="?c=familiar">Grupo Familiar</a>
    <a class="btn btn-warning" href="?c=apoderado">Apoderado</a>
    <a class="btn btn-danger" href="?c=matricula">Matricula</a>
</div>
<div class="well well-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:120px;">N° matricula</th>
            <th style="width:150px;">Fecha matricula </th>
            <th style="width:350px;">Nombre</th>
            <th style="width:200px;">Rut</th>
            <th style="width:120px;">Curso</th>
            <th style="width:120px;">PDF</th>
        </tr>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <th class="thicker"><?php echo $r->id_matricula; ?></th>
            <th class="thicker"><?php echo $r->fecha; ?></th>
            <th class="thicker"><?php echo $r->nombres_a,' ', $r->a_paternoa,' ', $r->a_maternoa;?></th>
            <th class="thicker"><?php echo $r->rut_a; ?></th>
            <th class="thicker"><?php echo $r->nombre_curso; ?></th>
            <th class="thicker">
                <a href="?c=matricula&a=pdf&id_matricula=<?php echo $r->id_matricula; ?>"><span class="glyphicon glyphicon-pencil"></a>
            </td>
            <th class="thicker">
                <a href="?c=matricula&a=Crud&id_matricula=<?php echo $r->id_matricula; ?>"><span class="glyphicon glyphicon-pencil"></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=matricula&a=Eliminar&id_matricula=<?php echo $r->id_matricula; ?>"><span class="glyphicon glyphicon-trash"></a>
            </td>
        </tr>
        </thead>
    <?php endforeach; ?>
</table>
</div>
