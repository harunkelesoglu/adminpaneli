<?php
include "connection.php";
class CRUD extends Connection{




    public function Create($table,$data){
try {
    $columns = array_keys($data);

    $values = array_values($data);

    $columnslist = implode(',', $columns);

    $cs = str_repeat('?,', count($columns) - 1);

    $sql = "INSERT INTO " . $table . "(" . $columnslist . ") VALUES(${cs}?)";

    $insert = $this->DBH->prepare($sql);

    $insert->execute($values);
    return true;


    }catch (PDOException $e){

    $e->getMessage();

}
 }




    public function View($table,$data){
        try {
            $columns = array_keys($data);

            $values = array_values($data);

            $sql = (isset($data)) ? " SELECT * FROM " . $table . " WHERE " . $columns[0] . " = " . $values[0] : " SELECT * FROM " . $table;

            $retrieve = $this->DBH->prepare($sql);

            $retrieve->execute();

            $fetch = $retrieve->fetchAll(PDO::FETCH_ASSOC);

            return $fetch;
        }catch(PDOException $e){

            $e->getMessage();

        }

    }



    public function Update($table,$data){
        try{

        $columns=array_keys($data);

        $values=array_values($data);

        $map=array_map(function($key){return $key."=?,";},$columns);

        $columnslist=implode(' ',$map);

        $trimcolumnlist=rtrim($columnslist,',');

        $sql="UPDATE ".$table." SET ".$trimcolumnlist." WHERE ".$columns[0]."=".$values[0];

        $update=$this->DBH->prepare($sql);

        $update->execute($values);

        return  true;

        }catch (PDOException $e){
           return $e->getMessage();
        }

    }


    public function Delete($table,$data){
    try{
        $columns=array_keys($data);

        $values=array_values($data);

        $sql="DELETE FROM ".$table." WHERE ".$columns[0]." = ".$values[0];

        $delete=$this->DBH->prepare($sql);

        $delete->execute();

        return true;
    }catch (PDOException $e){
        $e->getMessage();
    }
    }




    public function Retriewe($table,$column=0){

        $column=($column==0) ? " * " : implode(',',array_values($column));


        $sql=" SELECT ".$column." FROM ".$table;
        $view=$this->DBH->prepare($sql);
        $view->execute();
        $fetch=$view->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;

    }
}

/*$table='liste';

$obj=new CRUD();
$return=$obj->View($table;
print_r($return);
*/


/*$table='cesidi';
$obs=new CRUD();

$data=array("ycesitno"=>'',
    "ycesitisim"=>'qeqyuıy',
    "seoismi"=>'qeyıyuı');

$result= $obs->Create($table,$data);
echo $result;
if($result==1){
    echo "Kayıt başarılı";
}elseif($result==0){
    echo "kayıt başarız";
}else{
    echo "bu ne mesajı";
}
$table_recipe='liste';
$obj=new CRUD();

$data=array('yno'=>'',
    'yisim'=>'yisim',
    'ymalzeme'=>'ingredients',
    'ymevsim'=> 'ymevsim',
    'ycesit'=> 'ycesit',
    'ygonderen'=>'',
    'ykackisilik'=> 'capacity',
    'ytarifi'=> 'ytarifi',
    'ygontarih'=>'',
    'yresmi'=>'',
    'sayac'=>''
);


$recipe=$obj->Create($table_recipe,$data);
echo $recipe;
*/


?>