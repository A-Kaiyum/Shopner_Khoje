 <?php
 class donors extends DBconnection{

    public $id;
    public $name;
    public $address;
    public $email;
    public $phone;
    public $donation;
    public $updated_at;
    private $table_name = "donors";

    public function __construct(){
    parent::__construct();

}

    public function getDonors(){
        $sql = "SELECT * FROM ".$this->table_name;
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];

}

public function getDonation(){
        $sql = "SELECT sum(donation) as 'td' FROM donors";
        $query = $this->db->prepare($sql);
        $query->execute();
        $req = $query->fetchAll(PDO::FETCH_ASSOC);
        $td= $req[0]['td'];
        return $td;
        
}

    public function getDonorById($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];

}
    public function getDonorByEmail($email){

        $sql = "SELECT * FROM ".$this->table_name." WHERE email=?";
        $query = $this->db->prepare($sql);
        $query->execute([$email]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];

}

    public function save(){
        $sql = "INSERT INTO ".$this->table_name."(name,address,email,phone,donation) VALUES(?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$this->name,$this->address,$this->email,$this->phone,$this->donation]);
        return $this->db->lastInsertId();

}

    public function update($id){

        $sql = "UPDATE ".$this->table_name." SET name=?,address=?, email=?, phone=?, donation=? WHERE id=$id";
        $query = $this->db->prepare($sql);
        $status = $query->execute([$this->name,$this->address,$this->email,$this->phone,$this->donation]);
            return $status ? true : false;
}



    public function delete($id){
        $sql = "DELETE FROM ".$this->table_name." WHERE id =?";
        $query = $this->db->prepare($sql);
        $status = $query->execute([$id]);
        return $status ? true : false;


}

 }




 ?>