<?php 
/** 
 * 
 * Author: smaij 
 * 
 * URL : http://www.smaij.com 
 * 
 * Created in: 2016-01-15 18:18
 * 
 * Description: 
 *  这是新闻查询的controller
 *
 *  
 * Update Content: 
 * 
 **/
class News extends CI_Controller{

  //新闻数据
  protected $data = array();

  public function __construct(){
    //引用父类的 construct 方法
    parent::__construct();
    //调用 model器中的 news_model.php
    $this->load->model( 'news_model' );
    $this->load->helper( 'url_helper' );//URL 辅助函数
  }

  /**
   *
   * 显示新闻
   * @param int $option 显示条目
   *
   * 将获取的新闻传递到view 进行显示
   *
   **/
  public function display( $slug = NULL ){

    echo $slug;
    $this->data['title']    = '新闻列表';
    $this->data['news']= $this->news_model->get_news( $slug );

    $this->load->view( 'templates/header', $this->data );
    $this->load->view( 'news/list', $this->data );
    $this->load->view( 'templates/footer', $this->data );
  }

  /**
   *
   * 创建新闻条目
   *
   **/
  public function create(){

    $this->load->helper( 'form' );
    $this->load->library( 'form_validation' );

    $data['title'] = ' Create a news item ';

    $this->form_validation->set_rules( 'title' , 'Title', 'required' );
    $this->form_validation->set_rules( 'text'  , 'Text' , 'required' );

    if( $this->form_validation->run() === FALSE ){

      $this->load->view( 'templates/header', $data );
      $this->load->view( 'news/create' );
      $this->load->view( 'templates/header', $data );
    }else{
      //如果提交
      //调用news_model的set_news方法
      $this->news_model->set_news();
      //显示插入成功
      $this->load->view( 'news/success' );
    
    }
  }

}

