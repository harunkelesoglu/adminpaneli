

    <a href="category-add" role="button" class="btn btn-labeled btn-success pull-right">
         <span class="btn-label"><i class="fa fa-plus-circle"></i>
               </span>Yemek Çeşidi Ekle</a>
        <h3>Yemek Çeşitleri</h3>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">

                <table id="datatable1" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="sort-numeric">id</th>
                        <th class="sort-alpha">Kategori</th>
                        <th class="sort-alpha">Seo</th>
                        <th >Sil/Güncelle</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php for($i=0;$i<count($c_result);$i++){

                        echo "<tr><td>".implode('</td><td>',array_values($c_result[$i])).'</td> <td class="text-center">
                         <a class="btn btn-pill-left btn-danger" href="category-del?id='.array_values($c_result[$i])[0].'"> <i class="fa fa-trash-o"></i></a>
                         <a class="btn btn-pill-right btn-warning" href="category-update?id='.array_values($c_result[$i])[0].'"> <i class="fa fa-edit"></i></a>
                            </td>
                       </tr>';


                    }?>

                    </tbody>
                </table>
            </div>
         </div>
       </div>
  </div>







