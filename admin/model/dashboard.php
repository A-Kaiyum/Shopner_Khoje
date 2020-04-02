 <?php
 class dashboard extends DBconnection{

    
    public function __construct(){
    parent::__construct();

}


  
public function getDonation(){
        $sql = "SELECT sum(donation) FROM donors";
        $query = $this->db->query($sql);
        $data = $query->execute();
        return $data ? $data :[];
        
}
/*
public function getPeople(){
        $sql = "SELECT id FROM proples";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
         return $data ? $data :[];
        
}

    
*/
 }




 ?>