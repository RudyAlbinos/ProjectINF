<?php
class SQL
{
  public $dbh;
  private static $instance;
  private function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=index;port=3306;connect_timeout=10';
    $user = 'admin';
    $password = 'bhN6@4ba';
    $this->dbh = new PDO($dsn, $user, $password);
  }

  public static function getInstance()
  {
    if (!isset(self::$instance))
    {
      $object = __CLASS__;
      self::$instance = new $object;
    }
    return self::$instance;
  }
  public static function close()
  {
    if (!isset(self::$instance))
    {
      $this ->dbh = null;
    }
  }
}
?>
