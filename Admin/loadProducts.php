<?php
include "../Beranda/Koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM products");
if ($query) {
    echo '<table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Sold</th>
            <th>Action</th>
        </tr>';
    while ($data = mysqli_fetch_array($query)) {
        echo '<tr>
            <td>' . htmlspecialchars($data['productImage']) . '</td>
            <td>' . htmlspecialchars($data['productName']) . '</td>
            <td>' . htmlspecialchars($data['productPrice']) . '</td>
            <td>' . htmlspecialchars($data['productStock']) . '</td>
            <td>' . htmlspecialchars($data['productSold']) . '</td>
        </tr>';
    }
    echo '</table>';
} else {
    echo '<p>No data available</p>';
}
?>
