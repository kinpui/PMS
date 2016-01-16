<?php 
/** 
 * 
 * Author: smaij 
 * 
 * URL : http://www.smaij.com 
 * 
 * Created in: 2016-01-15 18:00
 * 
 * Description: 
 *  
 * Update Content: 
 * 
 **/ 

class News_model extends CI_Model{

  public function __construct(){

    $this->load->database();
  }

  /**
   *
   * 测试获取所有新闻
   *
   * Description:
   *    获取新闻数，通过参数slug进行两种不同的查询
   *    如果没有slug则查询所有的新闻条目
   *    否则查询slug指定的新闻条目
   *
   **/
  public function get_news( $slug = NULL ){

    if( $slug === NULL ){
      $query = $this->db->get( 'news' );
      return $query->result_array();
    }

    $query = $this->db->get_where( 'news' , array( 'slug'=>$slug ) );
    return $query->row_array();
  }
}
