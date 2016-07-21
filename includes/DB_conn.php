<?php
class DB_conn{
 /* pdo數據源 */
    protected $db_driver = "";
    protected $db_host = "";
    protected $db_user = "";
    protected $db_password = "";
    protected $db_name = "";
    protected $db_table = "";
    protected $db_ut = "";
    protected $db = "";        //數據庫連接句柄

  /* 連接數據庫 begin */
    public function db_conn(){
     try{
            $db = new PDO("$this->db_driver:host=$this->db_host;dbname=$this->db_name","$this->db_user","$this->db_password");
            $db->query("set names '$this->db_ut'");
            $this->db = $db;
        } catch(pdoexception $e) {
            die($e->getmessage());
        }
    }
}
