<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/alteraradmin.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="CSS/AdminPageStyle.css">
    <!--Bootstrap Começo-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!--Bootstrap Final-->
</head>

<body>

    <?php
    include_once "menu-lateral.php";
    ?>

    <section class="home">
        <main>
            <div class="card">
                <div class="card-header" style="border-bottom: none;">
                    <h3>Produtos</h3>
                </div>


                <div class="table-responsive">
                    <table width="100%" id="tableProdutos" class="row-border">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>Descrição</td>
                                <td>Preço</td>
                                <td>Ação</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            include_once "config.php";

                            $query = "SELECT IdProduto,NomeProduto,DescricaoProduto,PrecoProduto FROM `tb_produtos`";

                            $retorno = mysqli_query($conexao, $query);

                            while ($line = mysqli_fetch_assoc($retorno)) {
                                echo "<tr>";
                                echo "<td>" . $line['IdProduto'] . "</td>";
                                echo "<td>" . $line['NomeProduto'] . "</td>";
                                echo "<td>" . $line['DescricaoProduto'] . "</td>";
                                echo "<td>R$" . number_format($line['PrecoProduto'], 2, ',', '.') . "</td>";
                                echo "<td><i class='fa-solid fa-pen-to-square'></i><i class='fa-solid fa-trash-can'></i></td>";
                                echo "</tr>";
                            }

                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </main>
    </section>
    <script>
        $(document).ready(() => {
            $("#tableProdutos").DataTable({
                "lengthMenu": [10],
                "language": {
                    "lengthMenu": "",
                    "search": "Pesquisar:   ",
                    "info": "_MAX_ Produtos(s) cadastrado(s).",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Próximo"
                    }
                }
            });
        })
    </script>
</body>

</html>