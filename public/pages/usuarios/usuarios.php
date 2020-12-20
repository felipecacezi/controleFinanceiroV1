<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/usuarios.css">
</head>
<body>
    <?php require_once('../dashboard/dashboardTop.php'); ?>

    <div class="principalBox container">

        <div class="col-12"><br></div>

        <div class="col-12">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCadastroUsuarios"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;NOVO</button>
        </div>

        <div class="col-12"><br></div>

        <div class="col-12">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Usuário</th>                    
                        <th></th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0;$i<=100;$i++){ ?>
                    <tr>
                        <td style="width:1%;">1</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td style="width:1%;"><button class="btn btn-secondary"><i class="fas fa-trash"></i></button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        

    </div>

    <?php require_once('../dashboard/dashboardBotton.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <?php include('./modals/modalCadastro.php'); ?>

    <script src="../../javascript/usuarios/formData.js"></script>
    <script src="../../javascript/usuarios/gravarUsuarios.js"></script>
</body>
</html>