<?php

class MiniBlogApplication extends Application
{
  protected $login_action = ['account', 'signin'];

  public function getRootDir()
  {
    return dirname(__FILE__);
  }

  protected function registerRoutes()
  {
    return [
      // UserControllerのルーティング
      'user/:user_name' => ['controller' => 'status', 'action' => 'user'],
      'user/:user_name/status/:id' => ['controller' => 'status', 'action' => 'show'],
      // StatusControllerのルーティング
      '/' => ['controller' => 'status', 'action' => 'index'],
      '/status/post' => ['controller' => 'status', 'action' => 'post'],
      // AccountControllerのルーティング
      '/account' => ['controller' => 'account', 'action' => 'index'],
      '/account/:action' => ['controller' => 'account'],
      '/follow' => ['controller' => 'account', 'action' => 'follow']
    ];
  }

  protected function configure()
  {
    $this->db_manager->connect('master', [
      'dsn' => 'mysql:dbname=mini_blog;host=localhost',
      'user' => 'root',
      'password' => 'root'
    ]);
  }
}
