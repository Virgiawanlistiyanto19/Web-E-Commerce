<?php
include "../Beranda/Koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM orders");
$userData = mysqli_query($conn, "SELECT * FROM users");
$itemData = mysqli_query($conn, "SELECT * FROM orderItems");
$itemData = mysqli_query($conn, "SELECT * FROM products");

function getDataByKeyword($keykey, $keyvalue, $returnedData, $array) {
    foreach ($array as $data) {
        if (empty($data[$returnedData])) {
            return "not found";
        } else {
            return $data[$returnedData];
        }
    }
    return "Not found";
}

if ($query) {
    echo '<table>
        <tr>
            <th>Id</th>
            <th>Orderer ID</th>
            <th>Orderer Name</th>
        </tr>';
    while ($data = mysqli_fetch_array($query)) {
        echo '<tr>
            <td>' . htmlspecialchars($data['orderId']) . '</td>
            <td>' . htmlspecialchars($data['ordererId']) . '</td>
            <td>' . htmlspecialchars(getDataByKeyword($data['ordererId'], 'UserID', 'Username', $userData)) . '</td>
        </tr>';
    }
    echo '</table>';
} else {
    echo '<p>No data available</p>';
}
?>
