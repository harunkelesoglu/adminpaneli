<?php echo $message;?>
<div class="row">
    <div class="col-lg-offset-2 col-lg-8">
                <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">Cesit Güncelle</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post">
                            <input type="hidden" name="ycesitno" placeholder="örneğin pastalar" class="form-control" value="<?php echo $data[0]?>">
                            <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Çeşidin Adı</label>
                                <div class="col-lg-10">
                                    <input type="text" name="ycesitisim" placeholder="örneğin pastalar" class="form-control" value="<?php echo $data[1]?>" required>
                                </div>
                            </div>
                                </fieldset>
                            <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Seo İsmi</label>
                                <div class="col-lg-10">
                                    <input type="text" name="seoismi" placeholder="anahtar kelimeler"  data-role="tagsinput" class="form-control" value="<?php echo $data[2]?>" required>
                                </div>
                            </div>
                        </fieldset>
                            <fieldset>
                            <button type="submit" name="category-update-btn" class="btn btn-labeled btn-success pull-right">
                           <span class="btn-label"><i class="fa fa-refresh"></i>
                           </span>Güncelle</button>
                         </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>