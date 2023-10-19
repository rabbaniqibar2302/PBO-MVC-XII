<html>

<head>
    <title>Halaman CRUD | MVC</title>
    <style>
        /* Global Style */
        body {
            background-color: #F8F8F8;
        }

        div.container {
            width: 960px;
            padding: 10px 50px 50px;
            background-color: white;
            margin: 20px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }

        h1{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            clear: both;
        }
        
        /* Table Design */
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px black solid;
        }
        th, td{
            padding: 8px 15px;
            border: 1px black solid;
        }
        tr:nth-child(2n+3){
            background-color: #F2F2F2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data User</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hape</th>
            </tr>
            <?php
            $i = 1;
            foreach ($user as $data) {
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['alamat'] . "</td>";
                echo "<td>" . $data['no_hape'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>