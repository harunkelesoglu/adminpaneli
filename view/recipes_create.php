<?php echo $message; ?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">Yemek Tarifi Ekle</div>
        <div class="panel-body">
            <form method="post" action="" class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Başlık</label>
                        <div class="col-lg-10">
                            <input type="text" name="yisim" placeholder="örneğin imam bayıldı" class="form-control" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mevsimi</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-4">
                                            <select style="width: 260px;" name='season' class="chosen-select">
                                                <?php
                                                for($i=0;$i<count($mevsim);$i++) {
                                                    echo '<option value="'.array_values($mevsim[$i])[0].'">'.array_values($mevsim[$i])[1].'</option>';
                                                }
                                                ?>
                                            </select>
                                    </div>
                                <label class="col-sm-2 control-label">Kaç Kişilik</label>
                                <div class="col-md-2">
                                    <input type="number" name="capacity" class="form-control">
                                </div>


                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ceşidi</label>
                        <div class="col-sm-10">
                            <select style="width: 260px;" name="category" class="chosen-select">
                                <?php
                                for($i=0;$i<count($cesit);$i++) {
                                    echo '<option value="'.array_values($cesit[$i])[0].'">'.array_values($cesit[$i])[1].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Malzemeler</label>
                        <div class="col-lg-10">
                        <textarea name="ingredients" class="form-control" rows="5" id="comment" required></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tarifi
                        <br><small>(Yemeğin yapılışı)</small></label>
                        <div class="col-sm-10">
                              <textarea name="recipe" data-uk-markdownarea="{mode:'tab'}" onload="this.value='#Title Some content'"># Başlık</textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Resim
                            <br>
                            <small>(Sürükle ve Bırak)</small>
                        </label>
                        <div class="col-sm-10">
                            <div id="upload-drop" class="box-placeholder text-center">
                                <p>
                                    <em class="fa fa-cloud-upload fa-2x"></em>
                                </p>Yükleyeceğiniz resmi buraya sürükleyin ya da <a href="#" class="form-file">buraya tıklayarak seçin<input id="upload-select" type="file" name="upfile"></a>
                            </div>
                            <div id="progressbar" class="progress hidden">
                                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                    <button type="submit" name="recipe-add-btn" class="btn btn-labeled btn-success pull-right">
                           <span class="btn-label"><i class="fa fa-check"></i>
                           </span>Ekle</button>
            </div>

            </form>
        </div>
    </div>
</div>

