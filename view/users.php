
<a href="user-add" role="button" class="btn btn-labeled btn-success pull-right">
               <span class="btn-label"><i class="fa fa-plus-circle"></i>
               </span>Kullanıcı Ekle</a>
        <h3>Kullanıcılar
        </h3>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <table id="datatable1" class="table table-striped table-hover">
                        <thead>
            <tr>
                <th class="sort-numeric">Id</th>
                <th class="sort-alpha">Ad</th>
                <th class="sort-alpha">Soyad</th>
                <th class="sort-alpha">E-posta</th>
                <th class="sort-alpha">Kullanıcı Adı</th>
                <th style="width: 5%">Yemek Sayısı</th>
                <th style="width: 15%">Sil / Güncelle</th>
            </tr>
            </thead>
            <tbody>

            <?php for($i=0;$i<count($data);$i++){

                echo "<tr><td>".implode('</td><td>',array_values($data[$i])).'</td> <td class="text-center">
                         <a class="btn btn-pill-left btn-danger"  href="user-del?id='.array_values($data[$i])[0].'"> <i class="fa fa-trash-o"></i></a>
                         <a class="btn btn-pill-right btn-warning" href="user-update?id='.array_values($data[$i])[0].'"> <i class="fa fa-edit"></i></a>
                            </td>
                       </tr>';
            }?>

            </tbody>
        </table>
    </div>
    </div>
</div>
</div>

