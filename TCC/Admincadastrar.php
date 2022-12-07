

<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastre-se</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
        <link rel="icon" href="Images/Logo-Icon.png">
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
        <!--CKEditor Começo-->
        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
        <!--CKEditor Final-->
        <!--Sweet Alert Começo-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
        <!--Sweet Alert Final-->
        <link rel="stylesheet" href="CSS/Admincadastrar.css" type="text/css">
	</head>
<body>
    <script>
        function erro(){
        Swal.fire({
            title: "Erro!",
            text: "Ocorreu algum erro ao realizar o seu cadastro",
            icon: "error",
            confirmButtonText: "Fechar"
        })
        }
        function sucesso(){
            Swal.fire({
                title: "Sucesso!",
                text: "Seu Cadastro foi realizado",
                icon: "success",
                confirmButtonText: "Continuar"
            })
        }
    </script>
    <?php
    include_once "menu-lateral.php";
    ?>
    <!--Form Abaixo-->
    <div class="container col-md-8 col-lg-5 col-sm-8 d-md-block" style="border-radius: 10px;margin-top: 7%;">
        <form id="Form_Cadastro" method="POST" action="">
        <div class="form first">
        <div class="Top_Class">
          <a href="javascript:history.back()" class="Voltar_Class"> <- Voltar</a>
        </div>
            <h2 class="text-center cadastro_title">Cadastro de produtos</h2>
            <div class="input-group mb-3">
                <div class="input-group-prepend">

                        <div class="input_group_design">
                            <input required="" type="text" id="NomeProduto" name="NomeProduto" class="input_form">
                            <label class="Input_label">Nome do produto:</label>
                        </div>

                        <div class="input_group_design">
                            <textarea required="" type="text" id="DescProduto" name="DescProduto" class="input_form"></textarea>
                            <label class="Input_label">Descrição produto:</label>
                        </div>
                        <div class="input_group_design">
                            <input required="" type="number" id="PrecoProduto" name="PrecoProduto" class="input_form">
                            <label class="Input_label">Preço produto:</label>
                        </div>

                        <div class="input_group_design">
                            <input required="" type="text" id="TxtAlternativo" name="TxtAlternativo" class="input_form">
                            <label class="Input_label">Texto alternativo produto:</label>
                        </div>

                        <div class="input_group_design">
                            <input required="" type="text" id="InfoPromo" name="InfoPromo" class="input_form">
                            <label class="Input_label">Informações de promoção:</label>
                        </div>

                        <div class="input_group_design">
                            <input required="" type="color" id="BackProduto" name="BackProduto" class="input_form" style="height: 32px;">
                            <label class="Input_label">Background produto:</label>
                        </div>

                        <div class="input_group_design input_form" style="width: 96%;">
                        Imagem Produto:<input style="margin-left: 10px;" required="" type="file" id="ImgProduto" name="ImgProduto" class="">
                            <label class="Input_label"> </label>
                        </div>

                        <div class="form_space">
                
                        </div>
                        <div class="Continuar_Class">
                        <button type="submit" class="Button_Cadastro" name="btnCadastro" id="submit">Cadastrar produto <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                </div>
            </div>
        </div>
        </form>
        <?php
        
        if(isset($_POST["btnCadastro"])){
            include_once "config.php";

            extract($_POST);

            $query = "INSERT INTO `tb_produtos` (`NomeProduto`, `DescricaoProduto`, `PrecoProduto`, `Imagem1Produto`, `TextoAlternativoProduto`, `PromoInfoProduto`, `PromoBackgroundProduto`, `DataCriacaoProduto`) VALUES ('$NomeProduto', '$DescProduto', '$PrecoProduto', 'img', '$TxtAlternativo', '$InfoPromo', '$BackProduto', NOW())";

            $retorno = mysqli_query($conexao, $query);
            if($retorno == true){
                echo "<script>Swal.fire({icon: 'success',title: 'Cadastrado com sucesso.'}).then(()=>{window.location.href = 'alteraradmin.php'})</script>";
            }
            else{
                echo "<script>Swal.fire({icon: 'error',title: 'Erro ao Cadastrar.'}).then(()=>{window.location.href = 'alteraradmin.php'})</script>";
            }
        }

        ?>
    </div>
</body>
</html>