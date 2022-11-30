<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Entre na sua Conta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
        <link rel="icon" href="Images/Logo-Icon.png">
        <link rel="stylesheet" href="CSS/LoginStyle.css" type="text/css">
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
	</head>
<body>
    <div class="Home Background">
    <!--Form Abaixo-->
    <section class="LoginSection">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center h-100">
            <div class="col col-xl-10" style="margin: auto;">
              <div class="Login_Background">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block" style="margin: auto 0;">
                    <div class="svg_login">
                      <img src="Images/Ecommerce_Login.svg">
                  </div>
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="authLogin.php"method="POST">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <a href="HomePage.html"><img src="Images/PynPin - Logo.png" height="70px"></a>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; font-size: 700;">Entre na sua Conta:</h5>
      
                        <div class="input-group-prepend">
                            <div class="input_group_design">
                                <input required="" type="text" name="Email" class="input_form">
                                <label class="Input_label">Digite aqui o seu Email:</label>
                            </div>
                            <div class="input_group_design">
                                <input required="" type="password" name="Password" class="input_form">
                                <label class="Input_label">Digite aqui a sua Senha:</label>
                            </div>
                            <div class="Login_Button pt-1 mb-4">
                              <div class="checkbox-container">
                                <input type="checkbox" id="Lembrar" name="Lembrar" style="display: none;">
                                <label for="Lembrar" class="check">
                                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                        <polyline points="1 9 7 14 15 4"></polyline>
                                    </svg>
                                </label><p class="Lembrar_Text">Continuar Conectado</p>
                              </div>
                        <div class="">
                          <button class="btn btn-lg btn-block Button_Login" type="submit" name="submit" value="Enviar">Login <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        </div>
                        </div>
                        <hr style="border: 1px solid black; border-radius: 10px;">
                        <!--<div class="connect_icons">
                          <a href="#"><i class="fa-brands fa-google"></i></a>
                          <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>-->
                        <a href="#!" style="color: #ae60e2; font-size: 15px;">Esqueceu a Senha?</a>
                        <p class="mb-5 pb-lg-2" style="color: #26262b;">Não possui uma conta? <a href="CadastroForm.php"
                            style="color: #ae60e2;">Registre-se Aqui</a></p>
                        <a href="#!" class="small text-muted">Termos de Uso</a>
                        <a href="#!" class="small text-muted">Política de Privacidade</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>