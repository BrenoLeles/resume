
<?php include ('header.php') ?>
<div class="corpo-site">

    <aside class="menu-principal">
        <div class="logo-menu-lateral">
            <img src="images/img-destaque.jpg" alt="Breno Leles Logo" class="img-fluid">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:k.show(0);">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(1);">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(2);">Habilidades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(3);">Portfólio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(4);">Contato</a>
            </li>
        </ul>
    </aside>
    <article class="conteudo kontext">
        <div class="layer show">
            <?php include('pages/inicio.php') ?>
        </div>
        <div class="layer bg-primario">
            <?php include('pages/sobre.php') ?>
        </div>
        <div class="layer bg-secundario">
            <?php include('pages/habilidades.php') ?>
        </div>
        <div class="layer bg-primario">
            <?php include('pages/portfolio.php') ?>
        </div>
        <div class="layer bg-secundario">
            <?php include('pages/contato.php') ?>
        </div>

    </article>
</div>

<ul class="bullets"></ul>

<?php include ('footer.php') ?>