


<div id="body" data-role="content">
    <h1>Listado de Articulos</h1>
    <table data-role="table" id="my-table" data-mode="reflow">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Pública</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($results as $articulo):
                ?>
                <tr>
                    <td><a href="<?php echo base_url() ?>admin/articulos_admin/articulo/<?php echo $articulo->id; ?>"><?php echo $articulo->titulo; ?></a></td>
                    <td>
                        <?php  if ($articulo->publica): ?>
                        Visible
                        <?php else: ?>
                        Censurada
                        <?php endif ?>
                    
                    </td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>



