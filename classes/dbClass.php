<?php

class DB {

  static private $_instance = null;
  static private $_debugMode = DEBUG_SQL;
  static private $log = null;
  static private $lastQuery = null;
  static public $connection = null;
  
  static private $server = null;
  static private $user = null;
  static private $password = null;
  static private $db = null;

  private function __construct() {	  
	$hostAndPort = explode(':',self::$server);
	$port =  null;
	$host = self::$server;
	if(!empty($hostAndPort[1])){
	  $port = $hostAndPort[1];
	  $host = $hostAndPort[0];
	}

    self::$connection = new mysqli($host, self::$user, self::$password, self::$db, $port);
    if (self::$connection->connect_error) {
      die('Ошибка подключения ('.self::$connection->connect_errno.') '
        .self::$connection->connect_error);
    }
  }

  private function __clone() {

  }

  private function __wakeup() {

  }

  /**
   * Возвращает запись в виде массива.
   * @param obj $object
   * @return array
   */
  public static function fetchArray($object) {
    return @mysqli_fetch_array($object);
  }

  /**
   * Возвращает ряд результата запроса в качестве ассоциативного массива.
   * @param obj $object
   * @return array
   */
  public static function fetchAssoc($object) {
    return @mysqli_fetch_assoc($object);
  }

  /**
   * Возвращает запись в виде объекта.
   * @param obj $object
   * @return obj
   */
  public static function fetchObject($object) {
    return @mysqli_fetch_object($object);
  }

  /**
   * Возвращет единственный экземпляр данного класса.
   * @return object - объект класса DB
   */
  static public function getInstance() {
    if (is_null(self::$_instance)) {
      self::$_instance = new self;
    }
    return self::$_instance;
  }

  /**
   * Инициализирует единственный объект данного класса, устанавливает кодировку БД utf8.
   * @return object - объект класса DB
   */
  public static function init($server, $user, $password, $db) {
	self::$server = $server;
	self::$user = $user;
	self::$password = $password;
	self::$db = $db;
	self::getInstance();
    DB::query('SET names utf8');
  }

  /**
   * Возвращает сгенерированный колонкой с AUTO_INCREMENT
   * последним запросом INSERT к серверу.
   * @return int
   */
  public static function insertId() {
    return @mysqli_insert_id(self::$connection);
  }

  /**
   * Возвращает количество рядов результата запроса.
   * @param obj $object
   * @return int
   */
  public static function numRows($object) {
    return @mysqli_num_rows($object);
  }

  /**
   * Выполняет запрос к БД.
   *
   * @param srting $sql запрос.( Может содержать дополнительные аргументы.)
   * @return obj|bool
   */
  public static function query($sql) {

    if (($num_args = func_num_args()) > 1) {
      $arg = func_get_args();
      unset($arg[0]);

      // Экранируем кавычки для всех входных параметров.
      foreach ($arg as $argument => $value) {
        $arg[$argument] = mysqli_real_escape_string(self::$connection, $value);
      }
      $sql = vsprintf($sql, $arg);
    }
    $obj = self::$_instance;

    if (isset(self::$connection)) {
      $obj->count_sql++;

      $startTimeSql = microtime(true);
      $result = mysqli_query(self::$connection, $sql)
        or die(self::console('<br/><span style="color:red">Ошибка в SQL запросе: '
          . '</span><span style="color:blue">'.$sql.'</span> <br/> '
          . '<span style="color:red">'.mysqli_error(self::$connection).'</span>'));

      $timeSql = microtime(true) - $startTimeSql;
      $obj->timeout += $timeSql;
      self::$lastQuery = $sql;

      return $result;
    }
    return false;
  }
  
  public static function console($text = '') {

    $stack = debug_backtrace();
  
    unset($stack[0]);
    $obj = self::$_instance;
    $html = '<script>var consoleCount = $(".wrap-mg-console").length; if(consoleCount>1){$(".wrap-mg-console").hide();}</script>
      <div class="wrap-mg-console '.time().'" style="height: 200px; width:100%; position:fixed;z-index:66;bottom:0;left:0;right:0;background:#fff;">
      <div class="mg-bar-console" style="background:#dfdfdf; height: 30px; line-height: 30px; padding: 0 0 0 10px; width:100%; border-top: 2px solid #a3a3a3; border-bottom: 2px solid #a3a3a3;">
      Всего выполнено запросов: '.$obj->count_sql.' шт. за '.round($obj->timeout, 4).' сек.
      <a style="float:right; margin-right:30px;" href="javascript:void(0);" onclick=\'$(".wrap-mg-console").hide()\'>Закрыть</a>
      </div>
      <div class="mg-console" style="background:#f4f4f4; height: 200px; overflow:auto;">
      <script>$(".'.time().'").show();</script>     
      ';
    $logStack = '';
    foreach ($stack as $item) {
      $logStack .= '<p style="margin:5px; font-size:10px;"><br/><span style="color:#c71585">'.$item['file'].' (line '.$item['line'].")</span></p>";
    }
    $html.= self::$log.'<br/>'.$text.$logStack;
    $html.='</div>
    </div>';
    return $html;
  }

  /**
   * Экранирует кавычки для части запроса.
   *
   * @param srting $noQuote - если true, то не будет выводить кавычки вокруг строки.
   * @param srting $string часть запроса.
   */
  public static function quote($string, $noQuote = false) {
    return (!$noQuote) ? "'".mysqli_real_escape_string(self::$connection, $string)."'" : mysqli_real_escape_string(self::$connection, $string);
  }

  /*
   * Выводит последний выполненный запрос.
   */
  public static function lastQuery() {
    return self::$lastQuery;
  }

}
