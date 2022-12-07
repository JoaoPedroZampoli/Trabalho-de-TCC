<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $Nome = $_POST['Nome'];
        $Email = $_POST['Email'];
        $CPF = $_POST['CPF'];
        $Telefone = $_POST['Telefone'];
        $Genero = $_POST['Genero'];
        $DataNasc = $_POST['Data-Nascimento'];
        $Senha = $_POST['Senha'];
        $IsAdmin = 0;
        $NewsletterUsuario = 0;

        $result = mysqli_query($conexao, "INSERT INTO tb_usuarios(NomeUsuario, EmailUsuario, CPFUsuario, TelefoneUsuario, GeneroUsuario, DataNascUsuario, SenhaUsuario, StatusUsuario, NewsletterUsuario) VALUES ('$Nome', '$Email', '$CPF', '$Telefone', '$Genero', '$DataNasc', '$Senha', '$IsAdmin', '$NewsletterUsuario')");
        $AffectedRows = mysqli_affected_rows($conexao);
        printf("Affected rows (INSERT): %d\n", mysqli_affected_rows($conexao));
        if($AffectedRows = 1){
                $_SESSION['Email'] = $Email;
                $_SESSION['Password'] = $Senha;
                header("Location: Sistema.php");
        }
        else{
            ?>
            <script type="text/javascript">
                alert("Erro");
            </script>
           <?php
        }
    }
?>

<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastre-se</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
        <link rel="icon" href="Images/Logo-Icon.png">
        <link rel="stylesheet" href="CSS/CadastroFormStyle.css" type="text/css">
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
        <script src="JavaScript/CadastroForm.js"></script>
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
    <header>
        <div class="MenuNav">
            <a href="HomePage.html"><img src="Images/PynPin - Logo Branco.png" width="130" style="position: relative; margin:4px 2%"></a>
        </div>
    </header>  
    <h1 style="margin: 30px 0 15px 5%;">Seja Bem-Vindo!</h1>
    <!--Form Abaixo-->
    <div class="container col-md-8 col-lg-5 col-sm-8 d-md-block" style="border-radius: 10px;">
        <form id="Form_Cadastro" method="POST" action="CadastroForm.php">
        <div class="form first">
        <div class="progress" style="height: 8px;">
            <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #9D3FDC; border-radius: 10px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        <div class="Top_Class">
          <a href="javascript:history.back()" class="Voltar_Class"> <- Voltar</a>
          <!--<p class="text-center Etapa_Class">Etapa 1/3</p>-->
        </div>
            <h2 class="text-center cadastro_title">Cadastro</h2>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                        <div class="input_group_design">
                            <input required="" type="text" id="Nome" name="Nome" class="input_form">
                            <label class="Input_label">Digite aqui o seu Nome Completo:</label>
                        </div>
                        <div class="input_group_design">
                            <input required="" type="text" id="Email" name="Email" class="input_form">
                            <label class="Input_label">Digite aqui o seu Email:</label>
                        </div>
                        <div class="input_group_design">
                            <input required="" type="text" id="CPF" name="CPF" class="input_form cpf">
                            <label class="Input_label">Digite aqui o seu CPF:</label>
                        </div>
                        <div class="input_group_design">
                            <input required="" type="tel" id="Telefone" name="Telefone" class="input_form phone">
                            <label class="Input_label">Digite aqui o seu Telefone:</label>
                        </div>
                        <div class="input_group_design">
                            <select required="" id="Genero" name="Genero" class="input_form">
                                <option disabled selected value hidden></option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outro</option>
                                <option>Não desejo Informar</option>
                            </select>
                            <label class="Input_label">Selecione o seu Gênero:</label>
                        </div>
                        <div class="input_group_design">
                            <input required="" placeholder="Date" onfocus="(this.type='date')" type="date" id="Data-Nascimento" name="Data-Nascimento" class="input_form input_date">
                            <label class="Input_label">Digite aqui a sua Data de Nascimento:</label>
                        </div>
                        <div class="input_group_design">
                            <input required="" type="password" name="Senha" class="input_form" id="Senha" onfocus="SenhaStrength()" onblur="SenhaStrengthDisappear()" onkeyup="SenhaChange()">
                            <label class="Input_label">Digite aqui a sua Senha:</label>
                            <div style="display: none;" id="SenhaChecker">
                                <div style="display: flex;">
                                <p class="password_quality_p" id="SenhaText">Qualidade da senha:&nbsp;</p><p class="password_quality_p" id="PasswordQuality">Fraca</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" id="SenhaBar" role="progressbar" aria-label="Danger example" style="width: 0%; background-color:#9D3FDC !important;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="input_group_design">
                            <input required="" type="password" id="ConfirmarSenha" name="ConfirmarSenha" class="input_form">
                            <label class="Input_label">Confirme aqui a sua Senha:</label>
                        </div>
                        <div class="input_group_design">
                        <div class="checkbox-container">
                            <input type="checkbox" required="checked" id="Aceite" name="Aceite" style="display: none;">
                            <label for="Aceite" class="check">
                                <svg width="18px" height="18px" viewBox="0 0 18 18">
                                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                    <polyline points="1 9 7 14 15 4"></polyline>
                                </svg>
                            </label><p class="Aceite_text">Declaro que aceito os <a href="#" class="Link_Termos">Termos e Condições</a> e a <a href="#" class="Link_Termos">Política de Privacidade</a></p>
                        </div>
                        </div>
                        <div class="input_group_design">
                            <div class="checkbox-container">
                                <input type="checkbox" id="Newsletter" name="Newsletter" style="display: none;">
                                <label for="Newsletter" class="check">
                                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                        <polyline points="1 9 7 14 15 4"></polyline>
                                    </svg>
                                </label><p class="Newsletter_text">Desejo me cadastrar na Newsletter e receber Informações e Cupons Exclusivos</p>
                            </div>
                            </div>
                        <div class="form_space">
                
                        </div>
                        <div class="Continuar_Class">
                        <button type="submit" class="Button_Cadastro" name="submit" id="submit">Continuar <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                </div>
            </div>
        </div>
            <!--<div class="form second">
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #9D3FDC; border-radius: 10px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <div class="Top_Class">
                  <a href="CadastroForm.html" class="Voltar_Class backBtn"> <- Voltar</a>
                  <p class="text-center Etapa_Class">Etapa 2/3</p>
                </div>
                    <h2 class="text-center cadastro_title">Cadastre seu Endereço:</h2>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                                <div class="input_group_design">
                                    <input required="" type="text" id="CEP" name="CEP" class="input_form cep">
                                    <label for="CEP" class="Input_label">Digite aqui o CEP:</label>
                                </div>
                                <div class="input_group_design">
                                    <input required="" type="text" id="Logradouro" name="Logradouro" class="input_form">
                                    <label for="Logradouro" class="Input_label">Digite aqui o Logradouro:</label>
                                </div>
                                <div class="input_group_design">
                                    <input required="" type="text" id="Bairro" name="Bairro" class="input_form">
                                    <label for="Bairro" class="Input_label">Digite aqui o Bairro:</label>
                                </div>
                                <div class="input_group_design">
                                    <input required="" type="text" id="Numero" name="Numero" class="input_form">
                                    <label for="Numero" class="Input_label">Digite aqui o Número:</label>
                                </div>
                                <div class="input_group_design">
                                    <input type="text" id="Complemento" name="Complemento" class="input_complemento" placeholder="Teste">
                                    <label for="Complemento" class="Input_label">Digite aqui o Complemento:</label>
                                </div>
                                
                                <div class="input_group_design">
                                    <select required="" name="Estados" class="input_form" id="Estados" name="Estados">
                                        <option disabled selected value="" hidden></option>
                                        <select id="SelectEstados" name="Estado"></select>
                                    </select>
                                    <label for="Estados" class="Input_label">Selecione o Estado:</label>
                                </div>
                                <div class="input_group_design">
                                    <select required="" name="Cidades" class="input_form" id="Cidades">
                                        <option disabled selected value="" hidden></option>
                                    </select>
                                    <label for="Cidades" class="Input_label">Selecione a Cidade:</label>
                                </div>
                                <div class="form_space">
                        
                                </div>
                                <div class="Conjunto_Class">
                                    <a href="#" class="SemEndereco_Class">Continuar sem Cadastrar Endereço</a>
                                <div>
                                <button type="submit" class="Button_Cadastro nextBtn" name="Enviar_Cadastro" id="Enviar_Cadastro">Enviar Cadastro <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="form third">
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #9D3FDC; border-radius: 10px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <div class="Top_Class">
                  <p class="text-center Etapa_Class">Etapa 3/3</p>
                </div>
                    <h2 class="text-center cadastro_title">Confirme seu Email:</h2>
                    <p class="text-center">Um Email de confirmação com um link para validação de conta foi enviado para o seu Endereço de Email</p>
                    <p class="text-center" style="margin-bottom: 3rem;">Somente ao Confirmar o Email será possível realizar uma compra no Website</p>
                    <h4 class="text-center">Cadastre-se em nossa Newsletter:</h4>
            </div>-->
        </form>
    </div>
</body>
</html>