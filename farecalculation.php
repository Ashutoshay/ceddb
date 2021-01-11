<?php
// include ('user/database_connection.php');
// $current_location = $_POST['currentlocation'];
// $drop_location = $_POST['drop'];
// $cab_type = $_POST['cabtype'];
// $luggage = $_POST['weight'];






class main{
	public $a,$b,$c,$d,$distance,$fixedRate,$rate,$weight;
	function __construct($a,$b,$c,$d,$distance,$fixedRate,$rate){
		 $this->a = $a;
		 $this->b = $b;
		 $this->c = $c;
		 $this->d = $d;
		 $this->distance = abs($distance[$a]-$distance[$b]);
		 $this->fixedRate = $fixedRate;
		 $this->rate = $rate;
	}
	function luggage(){
		if($this->d <=0)
			$totalWeight = 0;
		elseif($this->d >0 && $this->d<=10)
			$totalWeight = 50;
		elseif($this->d >10 && $this->d <=20)
			$totalWeight = 100;
		else{
			$totalWeight = 200;
		}
		if($this->c == "CedSUV")
		return 2*$totalWeight;
		else
		return $totalWeight;
	}
	function fare($i,$j){
		if($this->distance <= 10)
			$totalFare = ($this->rate[$i][$j]*$this->distance)+$this->fixedRate[$i];
		elseif($this->distance>10 && $this->distance <=60){
			$e = ($this->rate[$i][$j]*10);$j=1;
			$this->distance = $this->distance -10;
			 $totalFare = ($this->rate[$i][$j]*$this->distance)+$this->fixedRate[$i]+$e;}
		elseif ($this->distance>60 && $this->distance<=160) {
			$e = ($this->rate[$i][$j]*10)+($this->rate[$i][1]*50);$j=2;
				$this->distance = $this->distance-60;
			 $totalFare = ($this->rate[$i][$j]*$this->distance)+$this->fixedRate[$i]+$e;
		}else{
		$e = ($this->rate[$i][$j]*10)+($this->rate[$i][1]*50)+($this->rate[$i][2]*100);$j=3;
			$this->distance = $this->distance-160;
			 $totalFare = ($this->rate[$i][$j]*$this->distance)+$this->fixedRate[$i]+$e;
			}
			 $totalFare += $this->luggage();
			 return $totalFare;
	}
	function fun(){
		$v = $this->distance;
		switch ($this->c) {
			case 'CedMicro':
			$totalFare = $this->fare(0,0);
				break;
		case 'CedMini':
		$totalFare = $this->fare(1,0);
			break;
			case 'CedRoyal':
			$totalFare = $this->fare(2,0);
			break;
		case 'CedSUV':
			$totalFare = $this->fare(3,0);
			break;
        }
    //     include ('user/database_connection.php');
    //     $status = 1;
    //     $fid = $_SESSION['user_id'];
    //     $sql = "INSERT INTO ride (pickup, drop_point, cab_type, luggage, total_fare, total_distance, ride_status, id)VALUES('".$this->a."','".$this->b."','".$this->c."','".$this->d."', '".$totalFare."', '".$v."', '".$status."', '".$fid."')";
	// $query = mysqli_query($connect,$sql);
    // // header("location:display.php");
    // if ($connect->query($sql) === TRUE) {
    //     echo "New record created successfully";
    //     // header("location:userdashboard.php");
    //   } else {
    //     echo "Error: " . $sql . "<br>" . $connect->error;
	//   }
				session_start();
			$_SESSION['pickup'] = $this->a;
			$_SESSION['drop'] = $this->b;
			$_SESSION['cab'] = $this->c;
			$_SESSION['luggage'] = $this->d;
			$_SESSION['fare'] = $totalFare;
			$_SESSION['distance'] = $v;
		echo "<h3>Current Location :</h3> $this->a<br><h3>Drop Location :</h3> $this->b<br><h3>luggage Weigth(KG) :</h3>$this->d<br><h3>Total Distance:</h3>$v<br><h3>Total Fare(Rs.) :</h3> $totalFare";
	}
}
$obj1 = new main(
	$_POST['currentlocation'],
	$_POST['drop'],
	$_POST['cabtype'],
	$_POST['weight'],
	array('Charbag' =>0,'Indira Nagar'=>10,'BBD'=>30,'Barabanki'=>60,'Faizabad'=>100,'Basti'=>150,'Goarkhpur'=>210 ),
	array(50,150,200,250),
	array(
		array(13.50,12.00,10.20,8.50),
		array(14.50,13.00,11.20,9.50),
		array(15.50,14.00,12.20,10.50),
		array(16.50,15.00,13.20,11.50)
    ));
    
    // if(isset($_POST['submit'])){
 $obj1->fun();
// echo "hello";


    // }


?>