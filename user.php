<?
class User{
	int $id;
	string $username;
	string $password;
	public bool register(string $user, string $password, string $passwordCheck){
		echo "User: "+$user+"<br>";
		echo "Password: "+$password+"<br>";
		echo "Password check: "+$passwordCheck+"<br>";
		if($password == $passwordCheck){
		// if(!$this->exists($user)) return false;
		//else
			return true;
		}
		return false;
	}
	public bool login(string $username, string $password){
		if($this->username == $username && $this->password == $password){
			echo "loged in!"	
			return true;	
		} 
		echo "wrong user data";
		return false;
	}
	public bool logout(){

	}
	public bool exists(){
		// check bd
		// if(bd->queryUser($user,$password))
		return true;
		//else return false;
	}
}

?>