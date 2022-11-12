<?php
    use App\Models\mahasiswa;
?> 
<html>
    <head>
        <title>Index Mahasiswa</title>
    </head>
    <body>
        <h1>Index Mahasiswa</h1>
        <a href="/mahasiswa/new"><button type = "button">Add</button></a>
        <br/>
        <table>
            <th>
                <tr>Student ID</tr>
                <tr>Nama</tr>
                <tr>Jurusan</tr>
                <tr>Tahun</tr>
            </th>
            <?php      
            $mahasiswas = mahasiswa::get();
  
            foreach ($mahasiswas as $mahasiswa) {
                echo "<tr>";
                echo "<td>".$mahasiswa->studentID."<td>";
                echo "<td>".$mahasiswa->nama."<td>";
                echo "<td>".$mahasiswa->jurusan."<td>";
                echo "<td>".$mahasiswa->tahunMasuk."<td>";
                echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>