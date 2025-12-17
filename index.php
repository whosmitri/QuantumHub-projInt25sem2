<?php include 'db/conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include './src/config/base_url.php'; ?>
    
    <link rel="stylesheet" href="/QuantumHub/src/style/home.css">

    <title>Home - QuantumHub</title>
</head>

<body>
    <?php include './src/pages/components/header.php'; ?>

    <div id="main">
    <main>
        <!-- Hero -->
        <section id="hero">
            <div id="heroText">
                <h1>Domine o próximo salto tecnológico</h1>
                <p>A <span>QuantumHub</span> conecta você ao futuro da tecnologia com cursos, mentoria, prática real e uma comunidade preparada para evoluir. Aprenda com profundidade, avance com segurança e conquiste o protagonismo digital.</p>
                <a href="./src/pages/cursos.php" class="btn main-btn">Começar Agora</a>
            </div>
            <div id="heroImg">
                <img src="./src/assets/images/team-goals-img.svg">
            </div>
        </section>
        <!-- End Hero -->

        <!-- About Us -->
        <section id="aboutUs">
            <div id="aboutUsImg">
                <picture>
                    <source media="(min-width: 650px)" srcset="./src/assets/images/visionary-img.svg">
                    <img src="./src/assets/images/visionary-img-mobile.svg">
                </picture>
            </div>
            <div id="aboutUsText">
                <h2>O que é a <span>QuantumHub</span>?</h2>
                <p>Somos o hub de inteligência coletiva criado para acelerar a competência de pessoas e organizações. Mais do que conteúdo, oferecemos um fluxo contínuo de inovação que transforma teoria em impacto mensurável e potencial em performance.</p>

                <p>Nosso modelo combina rigor técnico, linguagem acessível e mentoria orientada a resultados, oferecendo uma experiência moderna e inteligente para quem quer crescer na área de tecnologia.</p>
            </div>
        </section>
        <!-- End About Us -->

        <!-- Why Us -->
        <section id="whyUs">
            <h2>Por que escolher a QuantumHub?</h2>

            <p>Na QuantumHub, a aprendizagem é um vetor de transformação. Nós eliminamos a lacuna entre o conhecimento e a aplicação. Nossa proposta de valor é clara: <span>Conteúdo técnico de ponta + Mentoria estratégica + Projetos que validam sua experiência</span>. Criamos a ponte que faltava entre o seu talento e o futuro.</p>
        </section>
        <!-- End Why Us -->

        <!-- How HQ Works -->
        <section id="howQhWorks">
            <h2>Como a QuantumHub Funciona</h2>
            <div class="qh-metodos-container">
                <div class="qh-metodos-l">
                    <h3>Aprendizado Estruturado e Profundo</h3>
                    <p>Conteúdos criados com precisão técnica, atualizados conforme as demandas reais do mercado, desde fundamentos até tecnologias avançadas.</p>
                </div>
                <div class="qh-metodos-d">
                    <h3>Prática Orientada por Projetos</h3>
                    <p>Você aprende fazendo. Cada módulo inclui desafios, simulações e projetos aplicáveis, desenvolvidos para fortalecer habilidades práticas e portfólios profissionais.</p>
                </div>
                <div class="qh-metodos-l">
                    <h3>Mentoria Especializada e Responsiva</h3>
                    <p>Nossos mentores acompanham seu progresso, ajudam na solução de dúvidas, oferecem feedback e orientam seu caminho de evolução com segurança e clareza.</p>
                </div>
                <div class="qh-metodos-d">
                    <h3>Trilhas Flexíveis e Inteligentes</h3>
                    <p>Escolha trilhas específicas para desenvolvimento profissional, transição de carreira ou capacitação corporativa, sempre com foco em impacto e resultados.</p>
                </div>
                <div class="qh-metodos-l">
                    <h3>Comunidade Ativa de Networking</h3>
                    <p>Conecte-se com estudantes, especialistas e empresas. Compartilhe conhecimento, participe de discussões e avance junto com quem também está construindo o futuro digital.</p>
                </div>
            </div>
        </section>
        <!-- End How HQ Works -->

        <!-- Target Audience -->
        <section id="targetAudience">
            <img id="targetAudienceImg" src="./src/assets/images/idea-img.svg">
            <div id="targetAudienceText">
                <h2>Para quem é a QuantumHub?</h2>

                <p>Nossa arquitetura de aprendizado foi criada para impulsionar talentos em qualquer fase e atender diferentes perfis:</p>

                <ul>
                    <li><strong>Jovens e Iniciantes em TI:</strong> orientação prática e oportunidades reais.</li>
                    <li><strong>Profissionais em transição ou aperfeiçoamento:</strong> desenvolvimento avançado e estratégico.</li>
                    <li><strong>Empresas e equipes corporativas:</strong> capacitação estruturada, rigor técnico e acompanhamento de performance.</li>
                </ul>
            </div>
        </section>
        <!-- End Target Audience -->

        <!-- Call to Action -->
        <section id="callAction">
            <div class="call-action-container">
                <h3>QuantumHub — Conectando você ao futuro da tecnologia.</h3>
                <p>Evolua hoje. Torne-se protagonista do seu futuro digital com a <span>QuantumHub.</span></p>
                <a href="./src/pages/login.php" class="btn call-action-btn">Começar Agora</a>
            </div>
        </section>
        <!-- End Call to Action -->
    </main>
    </div>


    <?php include './src/pages/components/footer.php'; ?>
</body>

</html>