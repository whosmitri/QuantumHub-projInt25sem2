<?php include 'db/conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/home.css">

    <title>Home - QuantumHub</title>
</head>

<body>
    <?php include './components/header.php'; ?>

    <div id="main">
    <main>
        <section id="callForms">
            <div class="call-forms-container">
                <h1>Descubra o curso ideal para você!</h1>
                <p>A tecnologia oferece muitos caminhos — escolher o certo faz toda a diferença.</p>
                <a class="btn call-action-btn">Descobrir meu curso ideal</a>
            </div>
        </section>

        <!-- Container com Todos os Cursos -->
        <section id="cursosTudo">
            <div class="cursos-tudo-container">
                <div class="curso-card">
                    <h3><a href="./cursos/">Desenvolvimento Web Full Stack</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            12 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            80h
                        </span>
                    </p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Ciência de Dados com Python</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            10 Módulo
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            60h
                        </span>
                    </p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Cibersegurança para Iniciantes</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                                <i class="lni lni-layers-1"></i>
                                8 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            40h
                        </span>
                    </p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Automação com Python</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            7 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            35h
                        </span>
                    </p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Curso de Cloud Computing</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            9 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            45h
                        </span>
                    </p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Banco de Dados SQL e NoSQL</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            8 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            40h
                        </span>
                    </p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Desenvolvimento Mobile</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            10 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            60h
                        </span></p>
                </div>

                <div class="curso-card">
                    <h3><a href="./cursos/">Marketing Digital e SEO</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            7 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            30h
                        </span></p>
                </div>
                
                <div class="curso-card">
                    <h3><a href="./cursos/">E-commerce e Vendas Online</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            6 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            25h
                        </span></p>
                </div>
                
                <div class="curso-card">
                    <h3><a href="./cursos/">Inteligência Artificial Generativa</a></h3>
                    <p>
                        <span class="curso-total-modulos">
                            <i class="lni lni-layers-1"></i>
                            6 Módulos
                        </span>
                        <span class="curso-total-modulos">
                            <i class="lni lni-alarm-1"></i>
                            24h
                        </span></p>
                </div>
            </div>
        </section>
        <!-- Fim do Container com Todos os Cursos -->
    </main>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>