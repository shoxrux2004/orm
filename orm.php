<?php
class Sorov{
    private $host_name="localhost";
    private $username="root";
    private $password="";
    private $db_name="talaba";
    private $link;

    public function __construct(){
        $this->link=mysqli_connect($this->host_name,$this->username,$this->password,$this->db_name);
        if (!($this->link)){
            exit("MB ga ulanishda xatolik: ");
        }
    }   
    public function query($q){

        $s=mysqli_query($this->link,$q);
        
        return $this->s;
    }
    public function insert($table,$arr)
		{
			$sql = "INSERT INTO ".$table." ";
			$t1 = "";
			$t2 = "";
			$n = count($arr);
			$i = 0;
			foreach ($arr as $key => $value) {
				$i++;
				if($i==$n){
					$t1 .= $key;
					$t2 .= "'".$value."'";
				}
				else{
					$t1 .= $key.",";
					$t2 .= "'".$value."',";
				}
			}
			$sql .= "($t1) VALUES ($t2)";
            echo $sql;
			return $this->query($sql);
		}


    // Delete function usul 1
    // public function delete($table,$arr,$cond="no")
	// 	{
	// 		$sql = "DELETE FROM ".$table." WHERE ";
	// 		$t = "";
	// 		$n = count($arr);
	// 		$i = 0;
	// 		if($cond=="no"){
	// 			foreach ($arr as $key => $value) {
	// 				$i++;
	// 				if($i==$n){
	// 					$t .= "$key='$value'";
	// 				}
	// 				else{
	// 					$t .= "$key='$value'  AND ";
	// 				}
	// 			}
	// 			$sql .= $t;
	// 		}
	// 		else{
	// 			$sql .= $cond;
	// 		}
            
	// 		return $this->query($sql);
	// 	}
    // Delete function usul 2
    // public function delete($table, $condition = "")
    // {
    //     $sql = "DELETE FROM $table $condition";
    //     return $this->query($sql);
    // }

      }
    // $obj1=new Sorov();
    // print_r($obj1->delete('guruh1'));

    // $obj=new Sorov();
    // $ism=$_POST['ism'];
    // $fam=$_POST['fam'];
    // $email=$_POST['email'];
    // $login=$_POST['login'];
    // $parol=$_POST['parol'];
    // $parol2=$_POST['parol2'];
    // print_r($obj->insert('foydalanuvchi',['ism'=>"$ism",'fam'=>"$fam",'email'=>"$email",'login'=>"$login",'parol'=>"$parol",'parol2'=>"$parol2"]));

?>