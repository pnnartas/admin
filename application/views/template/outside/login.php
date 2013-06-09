<div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">Giriş</p>
            <div class="block-body">

<script type="text/javascript">
    jQuery(document).ready( function() {
        jQuery("#LoginForm").validationEngine();
    });

    $(document).ready(function() {
        $('#girisButton').click(function() {
            var mail= $("#email").val();
            var pass=$("#password").val();
           if(mail!=''&& pass!=''){
            var dataString = 'mail='+ mail + '&pass=' + pass ;
               $.ajax({
                type: "POST",
                url: "<?=site_url();?>/begin/login",
                data: dataString,
                success: function(done) {
                    //alert(done);
                    if(done >0){
                        winWidth = 400; // sets a default width for browsers who do not understand screen.width below
                        winheight = 400; // ditto for height

                        if (screen){ // weeds out older browsers who do not understand screen.width/screen.height
                            winWidth = screen.width;
                            winHeight = screen.height;
                        }
                        window.open('<?=site_url();?>/kontrol/index','Admin Panel','toolbar=no,location=no,scrollbars=yes,resizable=yes,width='+winWidth+',height='+winHeight+',left=0,top=0');
                        $("#LoginForm").submit();
                        $('#alert').css("display","none");
                    }else{
                        $('#alert').css("display","block");
                    }
                }
            });
            return false;
        }
        });
    }); 

</script>
<style>
    #alert{
        display: none;
    }
</style>
                <div class="alert alert-info" id="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Kullanıcı adı veya şifre hatalı</strong>
                </div>

                <form method="post" action="#" id="LoginForm">
                    <label>Kullanıcı Adı</label>
                    <input type="text" class="span12 validate[required]" name="email" id="email">
                    <label>Parola</label>
                    <input type="password" class="span12 validate[required,minSize[6]]" name="password" id="password">
                    <input type="submit" value="Giriş" class="btn btn-primary pull-right" id="girisButton"/>
                    <label class="remember-me">
                        <input type="checkbox"> Beni Hatırla
                    </label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p><a href="<?=site_url();?>/begin/forgotPassword">Şifremi Unuttum?</a></p>
    </div>
</div>
