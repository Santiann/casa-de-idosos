<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.D.F.C.L</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
</head>

<body>
    <header>
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo da minha aplicação">
        <nav>
            <ul>
                <li><a href="/">Quem somos</a></li>
                <li><a href="/about">Objetivos</a></li>
                <li><a href="/services">Como contribuir</a></li>
                <li><a href="/contact">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-background">
        <div class="quem-somos">
            <h2>Quem Somos</h2>
            <p>Somos uma Casa de Idosos dedicada a proporcionar um ambiente acolhedor e seguro para nossos residentes. Nossa jornada começou há mais de 20 anos, quando decidimos criar um lugar que valorizasse a experiência e a sabedoria dos idosos.</p>

            <p>Ao longo dos anos, ajudamos mais de 800 idosos a viver uma vida feliz e saudável. Nossa equipe comprometida e dedicada oferece assistência personalizada, cuidados médicos de qualidade e atividades enriquecedoras para garantir que nossos residentes desfrutem de uma vida plena.</p>

            <p>Nossa missão é proporcionar um lar onde cada idoso se sinta amado e respeitado. Acreditamos que a terceira idade é uma fase preciosa da vida, repleta de histórias e ensinamentos valiosos. Estamos empenhados em criar um ambiente onde cada residente se sinta valorizado e apoiado em sua jornada.</p>

            <p>Se você está interessado em apoiar nossa causa ou deseja saber mais sobre nossos serviços, entre em contato conosco. Estamos aqui para fazer a diferença na vida dos idosos e suas famílias.</p>
            <h2>Objetivos</h2>
            <p>Se você está interessado em apoiar nossa causa ou deseja saber mais sobre nossos serviços, entre em contato conosco. Estamos aqui para fazer a diferença na vida dos idosos e suas famílias.</p>
            <p>Se você está interessado em apoiar nossa causa ou deseja saber mais sobre nossos serviços, entre em contato conosco. Estamos aqui para fazer a diferença na vida dos idosos e suas famílias.</p>
        </div>
    </main>


    <footer>
        <p>Contribua com a nossa casa</p>
        <button>PIX</button>
        <button>Nota Fiscal</button>
        <p>&copy; {{ date('Y') }} House for Grandpas</p>
    </footer>
</body>

</html>
