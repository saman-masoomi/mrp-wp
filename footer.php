   <footer>
        <ul class="footer-sites">
            <li><a href="http://mandegar.com" target="_blank">Mandegar</a></li>
            <li><a href="http://mandegargroup.com" target="_blank">Mandegar Group</a></li>
            <li><a href="http://mandegar247.com" target="_blank">Guarantee</a></li>
        </ul>
        <ul class="copyright">
            <li>© 2016 Mandegar IT Department <span>- s.masoomi</span></li>
        </ul>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://listjs.com/assets/javascripts/list.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.niftymodals.js"></script>
    <script>
        var options = {
            valueNames: ['name', 'phone', 'unit']
        };
        var userList = new List('users', options);
        $(document).ready(function () {
            $(".search-container").hide();
        });
        $(document).ready(function () {
            $("#phonebook").click(function () {
                $(".search-container").slideToggle();
            });
        });
        $(document).ready(function () {
            $(".menu-grid").click(function () {
                $(".icons-fade").fadeToggle("medium", "swing");
            });
        });
        
function phonebook() {
 $("#modal-1").niftyModal();       
    }
 
    </script>
</body>

</html>