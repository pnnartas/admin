
<div class="header">
    <h1 class="page-title">Kullanıcı Düzenle</h1>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Profil Bilgileri</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home" action="<?=base_url();?>user/change_user/">
                    <form id="tab" method="post" novalidate>
                        <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>"/>
                        <label>Username</label>
                        <input type="text" name="username" disabled="disabled" value="<?php echo $query->username; ?>" class="input-xlarge">
                        <label>First Name</label>
                        <input type="text"  name="ad" value="<?php echo $query->ad; ?>" required class="input-xlarge">
                        <label>Last Name</label>
                        <input type="text"  name="soyad" value="<?php echo $query->surname; ?>" required class="input-xlarge">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $query->email; ?>" required class="input-xlarge">
                        <label>Address</label>
                        <textarea  rows="3" name="adres" class="input-xlarge"> <?= trim($query->adres); ?> </textarea>
                        <label>Yeni Parola</label>
                        <input type="text" name="password" minlength="6" value="<?=base64_decode($query->password);?>" class="input-xlarge">
                        <p class="help-block"></p>
                        <div class="btn-toolbar">
                            <input type="hidden" name="processtype" value="save_form"/>
                            <input type="submit" value="KAYDET" class="btn btn-primary"/>
                        </div>
                    </form>
                </div>

            </div>

        </div>

