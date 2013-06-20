<div id="body" data-role="content">
    <h1>Articulo</h1>
    <table data-role="table" id="my-table" data-mode="reflow">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Sección</th>
                <th>Contenido</th>
                <th>Visibilidad<th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($results as $articulo):
                ?>
                <tr>
                    <td><a href="<?php echo base_url() ?>admin/articulos_admin/articulo/<?php echo $articulo->id; ?>"><?php echo $articulo->titulo; ?></a></td>
                    <td><?php echo $articulo->seccion; ?></td>
                    <td><?php echo $articulo->cuerpo; ?></td>
                    <td><a href="<?php echo base_url() ?>admin/articulos_admin/<?php echo $accion;?>/<?php echo $articulo->id; ?>"><?php echo $accion;?></a></td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>
