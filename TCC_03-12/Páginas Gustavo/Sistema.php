<?php

    include_once("config.php");
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Password']) == true )){
        unset($_SESSION['Email']);
        unset($_SESSION['Password']);
        header('Location: Login.php');
    }
    
    $row = $_SESSION['row'];
    $IdUsuario = $row[0];
    //print_r($row);
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
        <link rel="stylesheet" href="CSS/SistemaStyle.css" type="text/css">
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
        <!--Sweet Alert Começo-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
        <!--Sweet Alert Final-->
        <!--JavaScript Começo-->
        <script src="JavaScript/Sistema.js"></script>
    </head>
<body>
    <script>
        $(document).ready(function(){
            $("select#Genero").val('<?php echo $row[5]; ?>');
        })
        function Sucesso(){
            Swal.fire({
                title: "Sucesso!",
                text: "Seu Cadastro foi atualizado",
                icon: "success",
                confirmButtonText: "Continuar"
            })
        }
        function Aviso(){
            Swal.fire({
                title: 'Você deseja deletar a sua conta?',
                text: "Você não poderá reverter isso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#833EC5',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, Delete a conta'
            }).then((result) => {
                if (result.isConfirmed) {
                Swal.fire(
                    'Deletado!',
                    'Sua Conta foi Deletada',
                    'success'
                ).then(function(){
                    $.ajax({
                    url:'DeletarUsuario.php',
                    complete: function () {
                        location.reload();
                        console.log("Foi Excluído");
                    },
                    error: function () {
                        console.log('Erro');
                    }
                    });
                    
                })
                }
            })
        }
        
    </script>
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
            <button class="Search_Button"><i class="fa-solid fa-magnifying-glass" style="margin: auto;"></i></button>
        </form class="Search_Form">
        <ul class="nav_buttons">
            <a class="Right_Buttons"><i class="fa-regular fa-heart"></i></a>
            <a class="Right_Buttons" href="Carrinho.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="Right_Buttons" href="Login.php"><i class="fa-regular fa-user"></i></a>
        </ul>
        </nav>
    </header>
        <h1 class="TextHeader">Minha Conta</h1>
        <div class="ProfileContainer">
            <div class="ProfileMenu col-sm-4 col-md-3 col-lg-2">
                <img class="ProfileImage" src="Images/ProfileImage.png">
                <span class="ProfileName"><?php echo $row[1]; ?></span>
                <span class="ProfileEmail"><?php echo $row[2]; ?></span>
            </div>
            <div class="ProfileInformations col-sm-8 col-md-9 col-lg-10">
                <h2 class="ProfileInfoTitle">Informações Pessoais</h2>
                <form action="EditarUsuario.php" method="POST" class="FormUsuario">
                    <div class="Input_Form_Row">
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">Nome Completo:</label>
                            <input required="" type="text" name="NomeCompleto" id="NomeCompleto" class="input_form" value="<?php echo $row[1]; ?>">
                        </div>
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">Email:</label>
                            <input required="" type="email" name="Email" id="Email" class="input_form" value="<?php echo $row[2]; ?>">
                        </div>
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">CPF:</label>
                            <input required="" type="text" name="CPF" id="CPF" class="input_form" value="<?php echo $row[3]; ?>">
                        </div>
                    </div>
                    <div class="Input_Form_Row">
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">Telefone:</label>
                            <input required="" type="text" name="Telefone" id="Telefone" class="input_form" value="<?php echo $row[4]; ?>">
                        </div>
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">Gênero:</label>
                            <select required="" id="Genero" name="Genero" class="input_form" >
                                <option disabled value hidden></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outro">Outro</option>
                                <option value="Não desejo Informar">Não desejo Informar</option>
                            </select>
                        </div>
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">Data de Nascimento:</label>
                            <input required="" type="date" name="DataNasc" class="input_form" value="<?php echo $row[6]; ?>">
                        </div>
                    </div>
                    <div class="Input_Form_Row">
                        <div class="Input_Form_Group">
                            <label class="Input_Form_Label">Senha:</label>
                            <input required="" type="password" name="Senha" class="input_form" value="<?php echo $row[7]; ?>">
                        </div>
                    </div>
                    <input type="hidden" name="IdUsuario" value="<?php echo $row[0]; ?>">
                    <div class="ActionButtons">
                        <button type="button" class="Button_Editar" id="InputEditar" name="InputEditar" value="Editar" onclick="Appear()">Editar <i class="fa-solid fa-pen"></i></button>
                        <button type="button" class="Button_Cancelar" id="InputCancelar" name="InputCancelar" value="Cancelar" onclick="Disappear()">Cancelar <i class="fa-solid fa-xmark"></i></button>
                        <button type="submit" class="Button_Confirmar" id="InputEnviar" name="InputEnviar" value="Salvar">Salvar <i class="fa-solid fa-arrow-right"></i></button>
                        <button type="button" class="Button_Excluir" id="InputExcluir" name="InputExcluir" value="Excluir Conta" onclick="Aviso()">Excluir Conta <i class="fa-solid fa-eraser"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>