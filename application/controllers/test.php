<?php

class test extends CI_Controller{

  public function test1( $name = 'fucking' ){

    //检测是否有用户需要的页面
    if( !file_exists( APPPATH.'/views/test/'.$name.'.php' ) ){

      show_404();
    }  

    $data['title']  = ucfirst( $name );//首字符大写

    $data['txt']    = '好吧~这样算是第一个codeignite程序了';

    $this->load->view( 'templates/header', $data );
    $this->load->view( 'test/fucking.php', $data );
    $this->load->view( 'templates/footer', $data );
  }
}
