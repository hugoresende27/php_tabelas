<?php

 $dados = array(
     array(
        'name' => 'Antonio',
        'phone' => '111111111'
    ),
        array(
        'name' => 'Maria',
        'phone' => '222222222',
    ),
    array(
        'name' => 'Carlos',
        'phone' => '333333333'
    ),
        array(
        'name' => 'Zecas',
        'phone' => '444444444',
    ),
    array(
    'name' => 'Ruizito',
    'phone' => '555555555',
    )
);

// foreach($dados as $cli){
//     echo '<p>'.($cli['name']).'</p>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Tabelas PHP</title>
</head>
<body>
  
    <h1 class="alert alert-primary text-center">Clientes</h1>

    <hr>

    <table class="table table-striped m-3 p-3 table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nome do cliente</th>
                <th>Contacto</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $cli): ?>
                <tr>
                    <td><?php echo ($cli['name']) ?></td>
                    <td><?php echo ($cli['phone']) ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>