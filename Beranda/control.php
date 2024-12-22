<?php

    include "koneksi.php";

    $sql = "SELECT * FROM products";
    $datas = array();
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
      }
    }
    
    function fetchData($limit, $array = null, $arrayoffset = 0) {
        if (empty($array)) {
            global $datas;
            $array = $datas;
        }
        $data = [];
        $i = 0;
        # limit = 5, arrayoffset = 0, data yang diambil = 1-5
        # limit = 5, arrayoffset = 1, data yang diambil = 6-10
        $arrayStart = ($limit * $arrayoffset) + 1;
        $arrayEnd = ($arrayStart - 1) + $limit;
        foreach($array as $row) {
            $i++;
            if ($i >= ($arrayStart) && !(empty($row))) {
                $data[] = $row;
            }
            if ($i >= $arrayEnd) {
                return $data;
            }
        }
        return $data;
    }
    function printData($limit, $array = null) {
        if (is_null($array)) {
            global $datas;
            $array = $datas;
        }
        if (count($array) == 0) {
            return [];
        }
        $i = 0;
        foreach ($array as $data) {
            $i++
            ?>
            <p><?php echo $data['productName']." | ".$data['productPrice'];?></p><?php
            if ($i >= $limit) {
                break;
            }
        }
    }

    function searchName($keyword = null, $array = null) {
        include "database.php";
        $temp = [];
        if (empty($array)) {
            #Uses global data if array from param is empty
            global $datas;
            $array = $datas;
        }

        if (empty($keyword)) {
            #Return all data from array if no keyword in param
            return $array;
        }

        $rgxPattern = '/'.preg_quote($keyword, '/').'/i';
        foreach ($array as $data) {
            if (preg_match($rgxPattern,$data["productName"])) {
                $temp[] = $data;
            }
        }
        return $temp;

    }
?>
