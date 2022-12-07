        <!--CSS Começo-->
        <link rel="stylesheet" type="text/css" href="CSS/menu-lateral.css">
        <!--CSS Final-->
        <!--JQuery Começo-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--JQuery Final-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
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
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="Images/PynPin_Simples_Roxo.png" alt="">
                    </span>

                    <div class="text logo-text">
                        <span class="name">PynPin Roupas</span>
                        <span class="profession">Administrador</span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="menu">

                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Pesquise Aqui...">
                    </li>

                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="AdminPage.php">
                                <i class='bx bx-grid-alt icon'></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>

                        <!--<li class="nav-link">
                            <a href="#">
                                <i class='bx bx-bar-chart-alt-2 icon'></i>
                                <span class="text nav-text">Estatísticas</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">Usuários</span>
                            </a>
                        </li>-->

                        <li class="nav-link">
                            <a href="Admincadastrar.php">
                                <i class='bx bx-add-to-queue icon'></i>
                                <span class="text nav-text">Cadastrar Produto</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="alteraradmin.php">
                                <i class='bx bx-package icon'></i>
                                <span class="text nav-text">Produtos</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="pedidos.php">
                                <i class='bx bx-cart icon'></i>
                                <span class="text nav-text">Pedidos</span>
                            </a>
                        </li>

                        <!--<li class="nav-link">
                            <a href="#">
                                <i class='bx bx-wallet icon'></i>
                                <span class="text nav-text">Wallets</span>
                            </a>
                        </li>-->

                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="#">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Modo Escuro</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>

                </div>
            </div>

        </nav>

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