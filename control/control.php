<?php
class control
{
    private function connect()
    {
        $dbhost ="localhost";
        $dbuser = "root";
        $dbpas = "";
        $dbname = "realestate_db";

        $con =  mysqli_connect($dbhost,$dbuser,$dbpas,$dbname);

        if($con) return $con; die("Can't connect to MySQL Database");
    }

    public function getData($table , $where)
    {
        $con = $this->connect();

        $range = count($where);
        if($range) {
            $fields_ar = array_keys($where);
            $data_ar = array_values($where);
            $fields = "";


            for ($i = 0; $i < $range; $i++) {
                $fields .= $fields_ar[$i] . " = " . $data_ar[$i];
                if ($i < ($range - 1))
                    $fields .= " AND ";
            }
        }
        else
            $fields = 1;

        $query = "SELECT * FROM $table WHERE $fields";
        $result = mysqli_query($con, $query);
        $all_data = mysqli_fetch_all($result);

        return $all_data;

    }
}