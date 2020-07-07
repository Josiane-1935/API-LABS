<?php
namespace Labs\Data_try;
//require_once 'our_autoloader.php';
require_once 'Konekta.php';

class DataTry{
  private $db;

  public $id;
  public $name;
  public $gender;
  public $email;
  public $role_id;

  public function __construct($id, $name, $email, $role_id, $gender)
  {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->role_id = $role_id;
    $this->gender = $gender;
    $this->db = new \Konekta();

  }
  public function GetAll()
  {
    $sql = "SELECT id, name, email, gender FROM user";
    $result = $this->db->konn->query($sql);
    if($result->num_rows > 0){
      echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>gender</th></tr>";
      while($row = $result->fetch_assoc()){
        echo "<tr><td> ".$row["id"]."</td><td> ".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "No results found";
    }
  }
  public function GetAllWithRoles()
  {
    $sql = "SELECT u.id, u.name, u.email, u.gender, r.name FROM user AS u INNER JOIN role AS r ON u.role_id = r.id";
    $result = $this->db->konn->query($sql);
    if($result->num_rows > 0){
      echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>gender</th><th>Role<th></tr>";
      while($row = $result->fetch_assoc()){
        echo "<tr><td> ".$row["id"]."</td><td> ".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["name"]."</td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "No results found";
    }
  }
  public function GetUserByRole($roleId)
  {
      $roleId = $this->db->konn->real_escape_string($roleId);
      $sql = "SELECT id, name, email, gender FROM user WHERE role_id= $roleId";
      $result = $this->db->konn->query($sql);
      if($result->num_rows > 0){
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>gender</th></tr>";
        while($row = $result->fetch_assoc()){
          echo "<tr><td> ".$row["id"]."</td><td> ".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td></tr>";
        }
        echo "</table>";
      }
      else {
        echo "No results found";
      }
  }
  public function GetUserByField($name, $gender, $email)
  {
    $sql="SELECT * FROM USER WHERE name='$this->name' OR gender = '$this->gender' OR email = '$this->email' ";
    $result = $this->db->konn->query($sql);
    if($result->num_rows > 0){
      echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>gender</th><th>RoleId</th></tr>";
      while($row = $result->fetch_assoc()){
        echo "<tr><td> ".$row["id"]."</td><td> ".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["role_id"]."<td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "No results found";
    }
  }
  public function Save()
  {
    $sql = "INSERT INTO user (id, name, email, role_id, gender) VALUES ($this->id, '$this->name', '$this->email', '$this->role_id','$this->gender')";
    if($this->db->konn->query($sql) == TRUE){
      echo "New user created successfully";
    }
    else {
      echo "Error: " .$sql . "<br>" . $this->db->konn->error;
    }
  }
  public function Update()
  {
    $sql="UPDATE user SET name = '$this->name' , email =' $this->email', gender = '$this->gender', role_id = '$this->role_id' WHERE id = $this->id";

    if($this->db->konn->query($sql) == TRUE)
    {
      echo "user Updated successfully";
    }else {
      echo "Error updating user: " .$this->db->konn->error;
    }

  }
  public function Delete($user_id){
    $sql = "DELETE FROM user WHERE id = $user_id";
    if($this->db->konn->query($sql) == TRUE)
    {
      echo "User deleted successfully";
    }else {
        echo "Error deleting user: " .$this->db->konn->error;
    }
  }


}
$getAll = new DataTry(6, 'Lyn Mango', 'lynMango@gmail.com', 2, 'Male');
//echo $getAll->GetAll();
//echo $getAll->GetAllWithRoles();
//echo $getAll->GetUserByRole(1);
//$getAll->Save();
//$getAll->Update();
//$getAll->Delete(6);
echo $getAll->GetUserByField('Lyn Mango', 'Male','lynMango@gmail.com');

?>
