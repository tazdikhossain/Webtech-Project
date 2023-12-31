<?php
require_once('../model/searchmodel.php');
require_once('../controller/sessionCheckUser.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input {
            width: 80%;
            padding: 8px;
        }

        footer {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr height="100px">
            <td>
                <center>
                    <input type="text" id="searchInput" onkeyup="search()" name="title" placeholder="Search By Name">
                </center>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>

    <center>
        <font size="12">Search Results</font>
        <br><br><br>
        <hr width="80%">
        <br><br><br>

        <table id="searchResults" width="100%" border="1" cellspacing="0" cellpadding="10">
            <!-- Results will be displayed here dynamically using JavaScript -->
        </table>

        <br>
        <br>
        <br>
    </center>

    <br>
    <br>
    <br>

    <center>
        <footer>
            <a href="">About Us<br></a>
            <a href="">Helpline<br></a>
            <a href="">FAQ<br></a>
            <a href="">Terms and Condition<br></a>
            Copyright &copy; 2023
        </footer>
    </center>

    <script>
        function search() {
            let searchInput = document.getElementById('searchInput').value;

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/search-controller.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send('name=' + searchInput);

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    displayResults(JSON.parse(this.responseText));
                }
            };
        }

        function displayResults(results) {
            let table = document.getElementById('searchResults');
            table.innerHTML = ''; // Clear previous results

            if (results.length > 0) {
                // Create header row
                let headerRow = table.insertRow(0);
                headerRow.innerHTML = '<th>ID</th><th>User Name</th><th>Email</th><th>Address</th><th>Action</th>';

                // Populate rows with results
                for (let i = 0; i < results.length; i++) {
                    let row = table.insertRow(i + 1);
                    row.innerHTML = `<td>${results[i].id}</td><td>${results[i].username}</td><td>${results[i].email}</td><td>${results[i].address}</td><td><a href="showDetails.php?id=${results[i].id}&username=${results[i].username}&email=${results[i].email}&address=${results[i].address}">Show Details</a></td>`;
                }
            } else {
                let messageRow = table.insertRow(0);
                messageRow.innerHTML = '<td colspan="5">No results found.</td>';
            }
        }
    </script>
</body>

</html>

