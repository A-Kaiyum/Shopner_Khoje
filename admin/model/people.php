 <?php
 class peoples extends DBconnection{

    public $id;
    public $name;
    public $address;
    public $phone;
    public $created_at;
    private $table_name = "peoples";

    public function __construct(){
    parent::__construct();

}

    public function getPeoples(){
        $sql = "SELECT * FROM ".$this->table_name;
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];

}
    public function getPeopleById($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];

}
    

    public function save(){
        $sql = "INSERT INTO ".$this->table_name."(name,address,phone) VALUES(?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$this->name,$this->address,$this->phone]);
        return $this->db->lastInsertId();

}

    public function update($id){

        $sql = "UPDATE ".$this->table_name." SET name=?,address=?, phone=? WHERE id=$id";
        $query = $this->db->prepare($sql);
        $status = $query->execute([$this->name,$this->address,$this->phone]);
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