
<?php include ('header.php') ?>
<div class="corpo-site">

</div>
<div class="corpo-site">

    <aside class="menu-principal">
        <div class="logo-menu-lateral">
            <img src="images/logos/temporario.png" alt="Breno Leles Logo" class="img-fluid">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:k.show(0);">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(1);">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(2);">Portfólio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(3);">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:k.show(4);">Contato</a>
            </li>
        </ul>
    </aside>
    <article class="conteudo kontext">
        <div class="layer one show">
            <?php include('pages/inicio.php') ?>
        </div>
        <div class="layer two">
            <h2>Layer Two</h2>
        </div>
        <div class="layer three">
            <h2>Layer Three</h2>
        </div>
        <div class="layer two">
            <h2>Layer Three</h2>
        </div>
        <div class="layer three">
            <h2>Layer Three</h2>
        </div>

    </article>
</div>

<ul class="bullets"></ul>

<?php include ('footer.php') ?>