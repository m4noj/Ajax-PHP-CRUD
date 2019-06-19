<?php require_once "db.php";
class user extends db {
	public function insert($f,$l,$w,$c,$e){
		$query = "INSERT INTO users(first,last,work,city,email) VALUES(?,?,?,?,?) ";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$f,$l,$w,$c,$e])){
			echo "Registered Successfully!";
		}
	}
	public function get_row($id){
		$query = "SELECT * FROM users WHERE id = ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$id]);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			return $row;		
		}
	}
	public function load(){
		$query = "SELECT * FROM users ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
			$out = "";
			$out .= "<table style='font-size:14px;' class='table table-responsive table-hover'><tr class='bg-light'><th>ID</th><th>First Name</th><th>Last Name</th><th>Occupation</th><th>City</th><th>Email</th><th colspan='2'>Option</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$id = $row['id'];
				$first = $row['first'];
				$last = $row['last'];
				$work = $row['work'];
				$city = $row['city'];
				$email = $row['email'];
				$out .="<tr><td>$id</td><td>$first</td><td>$last</td><td>$work</td><td>$city</td><td>$email</td>";
				$out .="<td><a href='edit.php?id=$id' class='edit btn btn-sm btn-success' title='edit'><i class='fa fa-fw fa-pencil'></i></a></td>";    
				$out .="<td><span id='$id' class='del btn btn-sm btn-danger' title='delete'><i class='fa fa-fw fa-trash'></i></span></td>";    
			} 
		$out .= "</table>";
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-info text-center col-sm-5 mx-auto'>No records yet. its time to add new!</p>";
		}
		return $out;
		return $out;
	}
	// update data
	public function update($f,$l,$w,$c,$e,$id){
		$query = "UPDATE users SET first = ?,last = ?,work = ?,city=?,email=? where id = ? ";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$f,$l,$w,$c,$e,$id])){
			echo "Data updated! <a href='index.php'>view</a>";
		}
	}
	//user search results
	public function search($text){
		$text = strtolower($text); 
		$query = "SELECT * FROM users WHERE first LIKE ? OR last LIKE ? OR work LIKE ? OR email LIKE ? or city LIKE ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$text,$text,$text,$text,$text]);
			$out = "";
			$out .= "<table style='font-size:14px;' class='table table-responsive table-hover'><tr class='bg-light'><th>ID</th><th>First Name</th><th>Last Name</th><th>Occupation</th><th>City</th><th>Email</th><th colspan='2'>Option</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$id = $row['id'];
				$first = $row['first'];
				$last = $row['last'];
				$work = $row['work'];
				$city = $row['city'];
				$email = $row['email'];
				$out .="<tr><td>$id</td><td>$first</td><td>$last</td><td>$work</td><td>$city</td><td>$email</td>";
				$out .="<td><a href='edit.php?id=$id' class='edit btn btn-sm btn-success' title='edit'><i class='fa fa-fw fa-pencil'></i></a></td>";    
				$out .="<td><span id='$id' class='del btn btn-sm btn-danger' title='delete'><i class='fa fa-fw fa-trash'></i></span></td>";    
			}
		$out .= "</table>";
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-danger text-center col-sm-3 mx-auto'>Not Found.</p>";
		}
		return $out;
	}
	public function delete($id){
		$query = "DELETE FROM users WHERE id = ?";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$id])){
			echo "1 record deleted.";
		}
	}
//end of class
}