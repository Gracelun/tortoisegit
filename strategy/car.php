<?php
interface ShoutBehavior{
	public function shout();
}
class ambulanceShout implements ShoutBehavior{
	public function shout(){
		echo "救護車鳴笛聲";
	}
}
class policeShout implements ShoutBehavior{
	public function shout(){
		echo "警車鳴笛聲";
	}
}
class noShout implements ShoutBehavior{
	public function shout(){
		echo "沒有鳴笛聲";
	}
}

abstract class Car{

	public $shoutBehavior;
	//車種
	abstract public function display();
	//加速
	public function speedUp(){echo '加速';}
	//減速
	public function speedDown(){echo '減速';}

	public function setShoutBehavior(shoutBehavior $behavior){
		$this->shoutBehavior = $behavior;
	}
	public function getShoutBehavior(){
		return $this->shoutBehavior->shout();
	}
}

class Truck extends Car{
	public function display(){echo "我是卡車";}
}
class SUV extends Car{
	public function display(){echo "我是休旅車";}
}
class Ambilance extends Car{
	public function display(){echo "我是救護車";}
}
class Police extends Car{
	public function display(){echo "我是警車";}
}




$ambulance = new Ambilance();
$ambulance->setShoutBehavior(new ambulanceShout());

$ambulance->display();//我是救護車
$ambulance->getShoutBehavior();//救護車鳴笛聲

$police = new Police();
$police->setShoutBehavior(new policeShout());

$police->display();//我是警車
$police->getShoutBehavior();//警車鳴笛聲

$truck = new Truck();
$truck->setShoutBehavior(new noShout());

$truck->display();//我是卡車
$truck->getShoutBehavior();//沒有鳴笛聲



?>