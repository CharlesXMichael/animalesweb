<?php include("header2.php") ?>
<div class="container">
    <h1>Registro de cereales</h1>
    <h2>Consulte e ingrese los registros de cereales</h2>

    <table  class="table">
        <thead>
            <tr>
                <th>marca</th>
                <th>nombre</th>
                <th>sabor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("php/entities/Animal.php");
                $registros = getAll();
                if(count($registros) > 0) {
                    foreach($registros as $row){
                        echo "<tr>".
                                "<td> " . $row->marca . "</td>".
                                "<td> " . $row->nombre . "</td>" .
                                "<td> " . $row->sabor . "</td>" .
                            "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>
<?php include("footer.php") ?>