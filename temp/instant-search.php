<?php

// A simple enumeration like structure
class MatchType {
const BEGINS_WITH = 0;
const ENDS_WITH = 1;
const CONTAINS = 2;
}

// A very simple database helper class to simplify the template parsing
class MyDb {
private $db;

public function __construct($host, $username, $password, $db) {
  $this->db = mysql_connect($host, $username, $password);
  mysql_select_db($db);
}

public function __destruct() {
  mysql_close($this->db);
}

public function select($query) {
  return $this->toArray($this->query($query));
}

public function query($query) {
  return mysql_query($query, $this->db);
}

// Very helpful! Now you can deal directly with native
// arrays from your queries (or an empty array if nothing is returned)
private function toArray($results) {
  $arr = array();

  while ($row = mysql_fetch_array($results)) {
    $temp = array();

    foreach ($row as $key => $val) {
      if (is_string($key))
        $temp[$key] = $val;
    }

    array_push($arr, $temp);
  }

  return $arr;
}
}

// Send serialized data back to the view instead of returning HTML
function processRequest($query, $matchType) {
$db = new MyDb("search", "root", "root", "instant_search");
switch ($matchType) {
  case MatchType::BEGINS_WITH:
    $like = "'{$query}%'";
    break;
  case MatchType::ENDS_WITH:
    $like = "'%{$query}'";
    break;
  default:
    $like = "'%{$query}%'";
}

$matches = $db->select("SELECT * FROM names WHERE name LIKE $like ORDER BY name ASC");
echo json_encode(array("matches" => $matches));
}

// Take incoming parameters from HTTP request and respond to it
$query = $_REQUEST["query"];
$matchType = $_REQUEST["matchType"];

processRequest($query, $matchType);

?>