<?php
interface ShoutBehavior{
	public function shout();
}

class Ambulance extends Car implements ShoutBehavior{
	public function display(){
		echo "我是救護車";
	}
	public function shout(){
		echo "發出鳴叫聲";
	}
}

?>