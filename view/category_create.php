
<?php echo $message;?>
  <div class="row">

          <div class="col-lg-offset-2 col-lg-8">
             <!-- START panel-->
            <div class="panel panel-default">
                <div class="panel-heading">Çeşit Ekle</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Çeşidin Adı</label>
                            <div class="col-lg-10">
                                <input type="text" name="ycesitisim" placeholder="örneğin pastalar" class="form-control" required>
                            </div>
                        </div>
                            </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Seo</label>
                                <div class="col-sm-10">
                                    <input type="text"  name="seoismi" placeholder="enter'a bas"  data-role="tagsinput"  class="form-control" required>
                                </div>
                                </div>
                        </fieldset>

                            <button type="submit" name="category-add-btn" class="btn btn-labeled btn-success pull-right">
                           <span class="btn-label"><i class="fa fa-check"></i>
                           </span>Ekle</button>



                    </form>
                </div>
            </div>
        </div>
</div>




