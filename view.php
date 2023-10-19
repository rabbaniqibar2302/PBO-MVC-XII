<html>
    <head>
        <title>Halaman CRUD | MVC</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hape</th>
            </tr>
            <?php
            foreach($user as $data){
                echo "<tr>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>