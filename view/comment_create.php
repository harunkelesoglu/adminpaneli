<?php echo $message;?>
<div class="row">
    <div class="col-lg-offset-2 col-lg-8">
        <!-- START panel-->
        <div class="panel panel-default">
            <div class="panel-heading">Yorum Ekle</div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Web Sitesi</label>
                            <div class="col-lg-10">
                                <input type="text" name="website" placeholder="www.portakalyazilim.com.tr" class="form-control" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Yemek</label>
                            <div class="col-sm-10">
                                <select style="width: 260px;" name="recipe" class="chosen-select">
                                    <?php
                                    for($i=0;$i<count($recipe);$i++) {
                                        echo '<option value="'.array_values($recipe[$i])[0].'">'.array_values($recipe[$i])[1].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Yorum</label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="comment" placeholder="yorumunuz..." class="form-control" required></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Puan</label>
                                <div class="col-lg-10">
                                    <input type="text" name="point" value="" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="0" data-slider-orientation="horizontal" style="" class="slider slider-horizontal form-control">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">E-Posta</label>
                                <div class="col-lg-10">
                                    <input type="email" name="email" placeholder="" class="form-control" required>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Ad Soyad</label>
                                <div class="col-lg-10">
                                    <input type="text" name="adsoyad" placeholder="" class="form-control" required>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" name="comment-add-btn" class="btn btn-labeled btn-success pull-right">
                           <span class="btn-label"><i class="fa fa-check"></i>
                           </span>Ekle</button>
                    </fieldset>


                </form>
            </div>
        </div>
    </div>
</div>

