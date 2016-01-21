<?php 
/** 
 * 
 * Author: smaij 
 * 
 * URL : http://www.smaij.com 
 * 
 * Created in: 2016-01-21 15:46
 * 
 * Description: 
 *  
 * Update Content: 
 * 
 **/ 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  /**
   *
   * login_verify
   * 登录验证用户名和密码
   *
   * @param string $username  用户名
   * @param string $password  用户密码
   *
   * return bool
   *  true  验证成功
   *  false 验证失败
   **/
  public function login_verify($username , $password){

    if($password != null && $username != null ){

      return $this->db->get_where(
        'user',
        array(
          'username' => $username,
          'password' => $password
        )
      );
    
    }
  }
}

