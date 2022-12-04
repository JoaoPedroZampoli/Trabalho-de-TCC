<?php
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    include_once "config.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
		<title>PynPin Modas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
        <link rel="icon" href="Images/Logo-Icon.png">
        <link rel="stylesheet" href="CSS/CheckoutForm.css" type="text/css">
		<!--JQuery Começo-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--JQuery Final-->
        <!--JQuery Mask Começo-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--JQuery Mask Final-->
        <!--Font Awesome Começo-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Font Awesome Final-->
        <!--Bootstrap Começo-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!--Bootstrap Final-->
        <!--Owl Carousel Começo-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--Owl Carousel Final-->
        <!--Toastr Começo-->
        <link href="Libraries/CodeSeven-toastr-50092cc/build/toastr.css" rel="stylesheet">
        <script src="Libraries/CodeSeven-toastr-50092cc/toastr.js"></script>
        <!--Toastr Final-->
        <!--JavaScript Começo-->
        <!--<script src="JavaScript/CadastroForm.js"></script>-->
    </head>
<body>
    <?php
        $query_products = "SELECT IdProduto, NomeProduto, DescricaoProduto, PrecoProduto, TextoAlternativoProduto, PromoInfoProduto, PromoBackgroundProduto FROM tb_produtos WHERE IdProduto =:id";
        $result_products = $conexaoPDO->prepare($query_products);
        $result_products->bindParam(':id', $id, PDO::PARAM_INT);
        $result_products->execute();
        $row_product = $result_products->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_product);
        extract($row_product);
        
    ?>

    <script>
        $(document).ready(function(){
            $('#CPF').mask('000.000.000-00', {reverse: true});
            var maskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            options = {onKeyPress: function(val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);
                }
            };
            $('#Telefone').mask(maskBehavior, options);
        });
    </script>
    <header>
        <div class="MenuNav">
            <a href="HomePage.html"><img src="Images/PynPin - Logo.png" width="130" style="position: relative; margin:4px 2%"></a>
        </div>
    </header>  
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="Images/PynPin - Logo.png" alt="" width="120" height="">
            <h2>Checkout</h2>
            <p class="lead">Insira abaixo seus dados para realizar a compra do produto</p>
        </div>
        <div class="row mb-5">
            <div class="col-md-8">
                <h3><?php echo $NomeProduto; ?></h3>
            </div>
            <div class="col-md-4">
                <div class="mb-1 text-muted"><?php echo number_format($PrecoProduto, 2, ",",".")?></div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-3">Informações Pessoais</h4>
                <form action="CheckoutForm.php" method="POST">
                    <div class="row g-3 mb-5">
                        <div class="form-group col-sm-6">
                            <label for="firstName" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nome" value="" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="lastName" class="form-label">Sobrenome:</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Sobrenome" value="" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="CPF" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="CPF" placeholder="CPF" value="" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="Telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="Telefone" placeholder="Telefone" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="Email" placeholder="Email" value="" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>