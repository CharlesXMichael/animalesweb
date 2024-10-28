<?php include("header.php") ?>
<div class="container">
    <h1>Planetas del sistema solar</h1>

    <table  class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("php/entities/planetas.php");
                $registros = getAll();
                if(count($registros) > 0) {
                    foreach($registros as $row){
                        echo "<tr>".
                                "<td> " . $row->id . "</td>".
                                "<td> " . $row->nombre . "</td>" .
                            "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>
<?php include("footer.php") ?>