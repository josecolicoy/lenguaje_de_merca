<h1 class="page-header">Listar</h1>

<div class="well well-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:180px;">N°</th>
            <th style="width:500px;">nombres</th>
            <th style="width:300px;">rut</th>
            <th style="width:270px;">Curso</th>


        </tr>
    <?php foreach($this->model->Lista() as $r): ?>
        <tr>
            <th class="thicker"><?php echo $r->id_alumno; ?></th>
            <th class="thicker"><?php echo $r->nombres_a,' ', $r->a_paternoa,' ', $r->a_maternoa;?></th>
            <th class="thicker"><?php echo $r->rut_a; ?></th>
            <th class="thicker"><?php echo $r->nombre_curso; ?></th>

            <th class="thicker"></th>
        </tr>
        </thead>
    <?php endforeach; ?>
</table>
</div>
