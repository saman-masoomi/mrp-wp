   <footer>
        <ul class="footer-sites">
            <li><a href="http://mandegar.com" target="_blank">Mandegar</a></li>
            <li><a href="http://mandegargroup.com" target="_blank">Mandegar Group</a></li>
            <li><a href="http://mandegar247.com" target="_blank">Guarantee</a></li>
            <li><?php echo rwmb_meta('name'); ?></li>
        </ul>
        <ul class="copyright">
            <li>© 2016 Mandegar IT Department <span>- s.masoomi</span></li>
        </ul>
    </footer>
    </div>
    <div class="md-container md-effect-11" id="modal-1">
      <div class="md-content">
        <div>
          <div class="container search-container">
                <div id="users">
                    <input class="search" placeholder="جستجوی نام، شماره یا واحد" />
                    <table>
                        <!-- IMPORTANT, class="list" have to be at tbody -->
                        <thead>
                            <tr>
                                <th>نام</th>
                                <th>واحد</th>
                                <th>داخلی</th>
                                <th>موبایل</th>
                                <th>ایمیل</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        <ul>
                            <li>
                                <tr>
                                    <td class="name"></td>
                                    <td class="unit">مدیریت</td>
                                    <td class="phone"></td>
                                    <td class="mobile">09122006090</td>
                                    <td class="mail">saeid@mandegar.com</td>
                                </tr>
                            </li>   
                        </ul>
                        </tbody>
                    </table>
                </div>
            </div>
          <button type="button" class="md-close btn btn-danger">Close</button>
        </div>
      </div>
    </div>
   
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
    <?php wp_footer(); ?>
</body>

</html>