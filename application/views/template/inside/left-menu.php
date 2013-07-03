<script type="text/javascript" src="<?=base_url();?>/global/js/left-menu/left-menu.js"></script>
<div class="sidebar-nav">
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>

        <a href="#kontrol" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Ana Sayfa</a>
        <ul id="kontrol" class="nav nav-list collapse">
            <li><a href="<?=site_url();?>kontrol/index/">Home</a></li>
            <li ><a href="users.html">Sample List</a></li>
            <li ><a href="user.html">Sample Item</a></li>
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>

        </ul>

        <a href="#user" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Kullanıcı Hesapları</a>
        <ul id="user" class="nav nav-list collapse">
            <li ><a href="<?=site_url();?>user/change_user/">Kullanıcı Şifre Değiştir</a></li>
            <li ><a href="<?=base_url();?>user/create_user/">Kullanıcı oluştur</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Error Pages <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li><a href="403.html">403 page</a></li>
            <li><a href="404.html">404 page</a></li>
            <li><a href="500.html">500 page</a></li>
            <li><a href="503.html">503 page</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Legal</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="#">Privacy Policy</a></li>
            <li ><a href="#">Terms and Conditions</a></li>
        </ul>

        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
        <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
    </div>
