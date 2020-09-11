<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/GamingTech/PHP/database/database.php';
include_once($path);

$path1 = $_SERVER['DOCUMENT_ROOT'];
$path1 .= '/GamingTech/PHP/model/contactModel.php';
include_once($path1);
class contactController
{

    protected $obj;
    private $contact;

    public function __construct()
    {
        $this->obj=new Database();
       
    }
    
   
    public function getAllContact()
    {
        $query=$this->obj->pdo->query('SELECT * FROM contact');
        return $query->fetchAll();
    }
	
    public function create(Contact $Con)
    {
		
        $sql = "INSERT INTO contact (c_name,c_lastname,c_email,c_message,c_country,c_age) VALUES (:firstname,:lastname,:email,:Cmessage,:country,:age)";
        $this->contact=$Con;
        $nameC=$this->contact->getName();
        $lastnameC=$this->contact->getLastName();
        $emailC=$this->contact->getEmail();
        $messageC=$this->contact->getMessage();
        $countryC=$this->contact->getCountry();
        $ageC=$this->contact->getAge();
        $statement = $this->Con->prepare($sql);
        $statement->bindParam(":firstname",$nameC);
        $statement->bindParam(":lastname", $lastnameC);
        $statement->bindParam(":email", $emailC);
        $statement->bindParam(":Cmessage", $messageC);
        $statement->bindParam(":country", $countryC);
        $statement->bindParam(":age", $ageC);

        $statement->execute();
       
    }
   
    
}