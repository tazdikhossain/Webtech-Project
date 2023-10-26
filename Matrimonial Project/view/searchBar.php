<?php
if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns using concat MySQL function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `username`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// Function to connect and execute the query
function filterTable($query) {
    $connect = mysqli_connect("127.0.0.1", "root", "", "webtech");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP HTML TABLE DATA SEARCH</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <form action="your_php_file.php" method="post">
        <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>

        <table>
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Email</th>
            </tr>

            <!-- Populate table from MySQL database -->
            <?php while ($row = mysqli_fetch_array($search_result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </form>

</body>
</html>
