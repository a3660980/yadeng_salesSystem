<?php
include("DB_conn.php");
class Cls_Pagination extends DB_conn{//繼承DB_conn類

 /* 分頁顯示參數設置 */
    private $page_size = 10;        //每頁顯示的記錄數目
    private $firstcount = 0;
    private $currentpage = 1;        //頁碼
    private $records = 0;        //表中記錄總數
    private $page_count = 0;    //總頁數
    private $pagestring = "";    //前後分頁鏈接字符串
    private $pagecontect;

 function __construct($db_driver,$db_host,$db_name,$db_table,$db_user,$db_password,$db_ut,$func){
  $this->db_driver = $db_driver;
     $this->db_host = $db_host;
     $this->db_name = $db_name;
     $this->db_table = $db_table;
     $this->db_user = $db_user;
     $this->db_password = $db_password;
     $this->db_ut = $db_ut;
     $this->db_conn();
     $this->func=$func;
    }

 /* 總記錄*/
 private function set_totle(){
  $sr = $this->db->query("$this->db_table")  or die(print_r($this->db->errorInfo(), true)) ;
  $this->records = $sr->rowCount();
 }

 /* 總頁數*/
 private function set_totle_page(){
  $this->page_count = ceil($this->records / $this->page_size);
 }

 /* 頁碼處理 begin */
    private function set_page(){
     $page = $_REQUEST[page];
     if (!isset($page) || $page == NULL || preg_match('/[a-zA-Z]/',$page) || $page < 1) {
   $this->currentpage = 1;
     } else {
    if ($page > $this->page_count) {
         $this ->currentpage = $this->page_count;
       } else {
         $this ->currentpage = $page;
       }
     }
    }

 private function getFirstcount(){
  $this->firstcount = ($this->currentpage - 1) * $this->page_size;
 }

 private function set_pagecontect(){
  $sr = $this->db->query("$this->db_table limit $this->firstcount,$this->page_size");
 
   $this->pagecontect =  $sr   ;

 }

 private function set_pagestring(){
  $this->pagestring="<nav><ul class='pager'>";
  if ($this->currentpage == 1) {
      $this->pagestring .= "<li class='previous disabled'><a href='#'><span aria-hidden='true'></span> 首頁</a></li>
      <li class='previous disabled'><a href='#'>上一頁</a></li>";
     } else {
      $prepg = $this -> currentpage - 1; //上一頁
      $this->pagestring .= "<li class='previous'><a href='?func=$this->func&page=1'><span aria-hidden='true'></span> 首頁</a></li>
    <li class='previous'><a href='?func=$this->func&page=$prepg'>上一頁</a>";

     }
     if ($this -> currentpage == $this -> page_count) {
      $this -> pagestring .= "<li class='next disabled'><a href='#'><span aria-hidden='true'></span> 尾頁</a></li><li class='next disabled'><a href='#'>下一頁</a></li>";
     } else {
      $nextpg = $this -> currentpage + 1; //下一頁
      $this -> pagestring .= "<li class='next'><a href='?func=$this->func&page=$this->page_count'><span aria-hidden='true'></span> 尾頁</a></li><li class='next'><a href='?func=$this->func&page=$nextpg'>下一頁</a></li>";
     }
     $this->pagestring .="</ul></nav>";
 }

 /* 獲取分頁鏈接數據 begin */
    public function get(){
        $page_data[0] = $this->records;        //表中記錄的總數
        $page_data[1] = $this->page_count;    //總頁數
        $page_data[2] = $this->currentpage;        //當前頁碼
        $page_data[3] = $this->pagestring;    //'首頁'、'上一頁'、
//                            //'下一頁'、//'尾頁'
//                            //－－鏈接樣式
//
        $page_data[4] = $this->pagecontect;    //[1]、[2]、[3]
                            //－－鏈接樣式
        return $page_data;
    }

 /* 建立分頁 begin */
    public function create_page(){
  $this->set_totle();
  $this->set_totle_page();
  $this->set_page();
  $this->getFirstcount();
  $this->set_pagecontect();
  $this->set_pagestring();
    }
}