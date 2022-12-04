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
        <link rel="stylesheet" href="CSS/ProductPageStyle.css" type="text/css">
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
        $query_products = "SELECT IdProduto, NomeProduto, DescricaoProduto, PrecoProduto, ImagemProduto, TextoAlternativoProduto, PromoInfoProduto, PromoBackgroundProduto FROM tb_produtos WHERE IdProduto =:id";
        $result_products = $conexaoPDO->prepare($query_products);
        $result_products->bindParam(':id', $id, PDO::PARAM_INT);
        $result_products->execute();
        $row_product = $result_products->fetch(PDO::FETCH_ASSOC);
        extract($row_product);
    ?>
    <div class="Home">
        <header class="NavHeader" id="NavHeader">
        <nav id="navbar" class="MenuNav">
        <a href="HomePage.html">
            <picture>
            <source srcset="Images/PynPin_Simples_Roxo.png" media="(max-width: 1023px)">
            <source srcset="Images/PynPin - Logo.png" media="(min-width:1024px)">
            <img src="Images/PynPin - Logo.png" alt="PynPin" style="height: 55px;">
            </picture>
        </a>
        <form>
            <input class="Search_Bar" type="search" placeholder="Pesquise Aqui ->">
            <button class="Search_Button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form class="Search_Form">
        <ul class="nav_buttons">
            <a class="Right_Buttons"><i class="fa-regular fa-heart"></i></a>
            <a class="Right_Buttons" href="Carrinho.html"><i class="fa-solid fa-cart-shopping"></i><span class='badge badge-cart' id='lblCartCount'> 2 </span></a>
            <a class="Right_Buttons" href="Login.php"><i class="fa-regular fa-user"></i></a>
        </ul>
        </nav>
    </header>
    <div class="container">
        <h1 class="display-4 mt-5 mb-5"><?php echo $NomeProduto; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <img src='<?php echo "./ImagesBD/ProductsImages/$IdProduto/$ImagemProduto"?>' class="card-img-top">
            </div>
            <div class="col-md-6 RightContainer">
                <p class="Price">R$ <?php echo number_format($PrecoProduto, 2, ",","."); ?></p>
                <p><a href="CheckoutForm.php?id=<?php echo $IdProduto;?>" class="btn btn-primary">Comprar</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5">
                <?php echo $DescricaoProduto; ?>
            </div>
        </div>
    </div>
    </div>
</body>
</html>