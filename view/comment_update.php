<?php echo $message;?>
<div class="row">
    <div class="col-lg-offset-2 col-lg-8">
        <!-- START panel-->
        <div class="panel panel-default">
            <div class="panel-heading">Yorumu Güncelle</div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    <input type="hidden" name="yorumpk" placeholder="" value="<?php echo $comment[0]?>" >
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Yemek</label>
                            <div class="col-sm-10">
                             <p class="form-control"><?php echo $recipe[0]['yisim']?></p>
                            </div>
                        </div>
                    </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Yorum</label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="comment" placeholder="yorumunuz..." class="form-control" required><?php echo $comment[3]?></textarea>
                                </div>
                            </div>
                        </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Puan</label>
                            <div class="col-lg-10">
                                <input type="text" name="point" value="<?php echo $comment[4]?>" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="<?php echo $comment[4]?>" data-slider-orientation="horizontal" style="" class="slider slider-horizontal form-control">
                            </div>
                        </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Ad Soyad</label>
                                <div class="col-lg-10">
                                    <input type="text" name="adsoyad" placeholder="@" class="form-control" value="<?php echo $comment[8]?>" required>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" name="comment-update-btn" class="btn btn-labeled btn-success pull-right">
                           <span class="btn-label"><i class="fa fa-refresh"></i>
                           </span>Güncelle</button>



                </form>
            </div>
        </div>
    </div>

