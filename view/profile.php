<?php echo $message;?>
<div class="row">

    <div class="col-md-6">
<div class="panel panel-info">
    <div class="panel-heading">Profil Bilgileri
        <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
            <em class="fa fa-times"></em>
        </a>
        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
            <em class="fa fa-plus"></em>
        </a></div>

        <div class="panel-body">
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" name="gonderenno" placeholder="" class="form-control" value="<?php echo $users[0]?>">
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Ad</label>
                        <div class="col-lg-10">
                            <input type="text" name="gonisim" placeholder="" class="form-control" value="<?php echo $users[1]?>" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Soyad</label>
                        <div class="col-lg-10">
                            <input type="text" name="gonsoyad" placeholder="" class="form-control" value="<?php echo $users[2]?>" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">E-Posta</label>
                            <div class="col-lg-10">
                                <input type="email" name="goneposta" placeholder="ornek@portakalyazilim.com.tr" class="form-control" value="<?php echo $users[3]?>" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Adres</label>
                            <div class="col-lg-10">
                                <textarea name="gonadres" class="form-control" rows="5" id="adress"  required><?php echo $users[4]?></textarea>
                            </div>
                        </div>
                    </fieldset>
                                <input type="hidden" name="takmaisim" placeholder="@" class="form-control" value="<?php echo $users[5]?>" required>

                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Parola</label>
                            <div class="col-lg-10">
                                <input type="password" name="sifre" placeholder="" class="form-control" value="<?php echo $users[6]?>" required>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" name="users-update-btn" class="btn btn-labeled btn-success pull-right">
                           <span class="btn-label"><i class="fa fa-refresh"></i>
                           </span>Güncelle</button>


            </form>

            </div>
    </div>
        </div>


    </div>
