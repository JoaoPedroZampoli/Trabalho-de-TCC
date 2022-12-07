<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial (Admin)</title>
    <link rel="icon" href="Images/Logo-Icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS Começo-->
    <link rel="stylesheet" type="text/css" href="CSS/AdminPageStyle.css">
    <!--CSS Final-->
    <!--JQuery Começo-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--JQuery Final-->
    <!--Font Awesome Começo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Font Awesome Final-->
    <!--Box Icons Começo-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--Box Icons Final-->
    <!--Javascripts Começo-->
    <script src="Javascript/AdminPage.js"></script>
    <script src="Javascript/AdminPageContainer.js"></script>
    <!--Javascripts Final-->
</head>

<body>

    <?php
    include_once "menu-lateral.php";
    ?>

    <section class="home">

        <!--<header>
                <h2>
                    <label for="">
                        <span class="las la-bars"></span>
                    </label>

                    Dashboard
                </h2>                                    

                <div class="user-wrapper">
                    <img src="imagesadmin/17004.png" width="40px" height="40px" alt="">
                    <div>
                        <h4>João</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </header>-->

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Usuários</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-users icones"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projetos</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-rectangle-list icones"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Pedidos</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-box icones"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>R$1k</h1>
                        <span>Renda</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-wallet"></i></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Projetos Recentes</h3>

                            <button>Ver tudo <spam class="las la-arrow-right">
                                </spam></button>
                        </div>


                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Titulo do projeto</td>
                                        <td>Departamento</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UI/UX Desing</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            revisão
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            Em progresso
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Time mobile</td>
                                        <td>
                                            <span class="status orange"></span>
                                            Pendente
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Desing</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status"></span>
                                            Em progresso
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Time mobile</td>
                                        <td>
                                            <span class="status"></span>
                                            Pendente
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Desing</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            Em progresso
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Time mobile</td>
                                        <td>
                                            <span class="status orange"></span>
                                            Pendente
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Desing</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status"></span>
                                            Em progresso
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Time mobile</td>
                                        <td>
                                            <span class="status"></span>
                                            Pendente
                                        </td>
                                    </tr>


                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Novos clientes</h3>

                            <button>Ver tudo <spam class="las la-arrow-right">
                                </spam></button>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="Images/17004.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gustavo Passos</h4>
                                        <small>CEO</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-user"></i>
                                    <i class="fa-solid fa-message"></i>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="Images/17004.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gustavo Passos</h4>
                                        <small>CEO</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-user"></i>
                                    <i class="fa-solid fa-message"></i>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="Images/17004.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gustavo Passos</h4>
                                        <small>CEO</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-user"></i>
                                    <i class="fa-solid fa-message"></i>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="Images/17004.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gustavo Passos</h4>
                                        <small>CEO</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-user"></i>
                                    <i class="fa-solid fa-message"></i>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="Images/17004.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gustavo Passos</h4>
                                        <small>CEO</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-user"></i>
                                    <i class="fa-solid fa-message"></i>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="Images/17004.png" width="40px" height="40px" alt="">
                                    <i class="fa-regular fa-circle-user"></i>
                                    <div>
                                        <h4>Gustavo Passos</h4>
                                        <small>CEO</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-user"></i>
                                    <i class="fa-solid fa-message"></i>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </main>

    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Modo Claro";
            } else {
                modeText.innerText = "Modo Escuro";

            }
        });
    </script>
</body>

</html>