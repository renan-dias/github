<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-white p-4">
        <div class="container">
            <h1 class="text-center">Thalita Ótavio Pereira de Andrade</h1>
            <p class="text-center">Conheça mais sobre mim e meu trabalho!</p>
        </div>
    </header>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Portfólio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre Mim</a></li>
                    <li class="nav-item"><a class="nav-link" href="#curriculo">Currículo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Sobre Mim -->
    <section id="sobre" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Sobre Mim</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="imagens/img/7e0db0e6-16fe-4896-af09-829f7511159a.jpg" alt="Minha foto" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-6">
                    <p>Olá! Meu nome é Thalita Ótavio Pereira de Andrade. Sou uma desenvolvedora apaixonada por tecnologia, com experiência em desenvonver sites, criar sites funcionais. Amo resolver problemas e criar soluções dinâmicas e inovadoras.</p>
                    <p>Habilidades: HTML, CSS, Bootstrap, PHP, JavaScript, etc.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Currículo -->
    <section id="curriculo" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Meu Currículo</h2>
            <p class="text-center">Veja ou faça o download do meu currículo!</p>
            <div class="text-center">
                <a href="curriculo.pdf" download class="btn btn-primary">Download Currículo</a>
            </div>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contato" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Entre em Contato</h2>
            <form action="config/processa_formulario.php" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Enviar Mensagem</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p> Thalita Ótavio 2024 &copy; . Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>