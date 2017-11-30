<h1 class="page-header">grupos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=grupo&a=Nuevo">Nuevo Registro</a>
    <a class="btn btn-success" href="?c=padre">Padres</a>
    <a class="btn btn-info" href="?c=grupo">Grupo Familiar</a>
    <a class="btn btn-warning" href="?c=apoderado">Apoderado</a>
    <a class="btn btn-danger" href="?c=matricula">Matricula</a>
</div>
<div class="well well-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:120px;">numero de integrantes</th>
            <th style="width:120px;">comparte hogar</th>
            <th style="width:120px;">renta</th>
            <th style="width:120px;">renta Familiar</th>
            <th style="width:120px;">beneficio del estado</th>
            <th style="width:120px;">padre</th>
            <th style="width:120px;">alumno</th>
            
        </tr>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <th class="thicker"><?php echo $r->num_grupo; ?></th>
            <th class="thicker"><?php echo $r->comparte_hogar; ?></th>
            <th class="thicker"><?php echo $r->renta; ?></th>
            <th class="thicker"><?php echo $r->renta_familiar; ?></th>
            <th class="thicker"><?php echo $r->beneficio_estado; ?></th>
            <th class="thicker"><?php echo $r->nombres_p; ?></th>
            <th class="thicker"><?php echo $r->nombres_a; ?></th>
            <th class="thicker">
                <a href="?c=grupo&a=Crud&id_grupo=<?php echo $r->id_grupo; ?>"><span class="glyphicon glyphicon-pencil"></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=grupo&a=Eliminar&id_grupo=<?php echo $r->id_grupo; ?>"><span class="glyphicon glyphicon-trsash"></a>
            </td>
        </tr>
        </thead>
    <?php endforeach; ?>
</table>
</div>
