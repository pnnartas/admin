<div class="header">

    <h1 class="page-title">Edit User</h1>
</div>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Profil Bilgileri</a></li>
                <li><a href="#profile" data-toggle="tab">Parola Değiştir</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home" action="<?=base_url();?>user/change_user/">
                    <form id="tab" method="post">
                        <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>"/>
                        <label>Username</label>
                        <input type="text" name="username" disabled="disabled" value="<?php echo $query->username; ?>" class="input-xlarge">
                        <label>First Name</label>
                        <input type="text"  name="ad" value="<?php echo $query->ad; ?>" class="input-xlarge">
                        <label>Last Name</label>
                        <input type="text"  name="soyad" value="<?php echo $query->surname; ?>" class="input-xlarge">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $query->email; ?>" class="input-xlarge">
                        <label>Address</label>
                        <textarea  rows="3" name="adres" class="input-xlarge"> <?php echo $query->adres; ?> </textarea>

                        <div class="btn-toolbar">
                            <input type="hidden" name="processtype" value="save_form"/>
                            <input type="submit" value="KAYDET" class="btn btn-primary"/>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile">
                    <form id="tab2">
                        <label>New Password</label>
                        <input type="password" class="input-xlarge">
                        <div>
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Delete Confirmation</h3>
            </div>
            <div class="modal-body">

                <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
        </div>
