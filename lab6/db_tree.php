<?php
include("dbconfig.php");

header('Content-Type: application/json');


$table_name_query = mysql_query("SELECT table_name FROM information_schema.tables WHERE table_schema='$mysql_database'");

while($table_name = mysql_fetch_array($table_name_query)) {

    $field_count = mysql_query("SELECT count(*) FROM information_schema.columns WHERE table_schema='$mysql_database' and table_name = '$table_name[0]'");

    $db_tables[] = array(
        "name" => $table_name[0],
        "field_count" => mysql_fetch_array($field_count)[0]
        );
}

$db_tables["db_name"] = $mysql_database;

echo json_encode($db_tables);

?>