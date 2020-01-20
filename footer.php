    <footer>
        <div class="copy-right">
            <span>&copy; <? date("Y") ?> - Breno Leles, todos direitos reservados</span>
        </div>
    </footer>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!--    <script type="text/javascript" src="assets/js/core.js"></script>-->
    <script type="text/javascript" src="assets/js/kontext.js"></script>
    <script type="text/javascript" src="assets/js/typewriter.js"></script>

    <script type='text/javascript'>
        const typewriter = new Typewriter('#typewriter', {
            loop: true,
            wrapperClassName: 'breno_leles'
        });

        typewriter.typeString('<span class="pre-textual">Eu sou</span> <span class="pos-textual">Desenvolvedor Full-stack</span>')
            .pauseFor(2500)
            .deleteChars(24)
            .typeString('<span class="pos-textual">Desenvolvedor PHP com Laravel</span>')
            .pauseFor(2500)
            .deleteChars(29)
            .start();
    </script>

</body>

</html>