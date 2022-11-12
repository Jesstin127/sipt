<html>
    <head>
        <title>Create Mahasiswa</title>
    </head>
    <body>
        <h1>Create Mahasiswa</h1>
        <a href="/"><button type = "button">Back</button></a>
        <br/>
 
        <form action="/mahasiswa/store" method="post">
         {{ csrf_field() }}
         ID <input type="text" name="id" required="required"> <br/>
         Student ID <input type="text" name="studentId" required="required"> <br/>
         Nama <input type="text" name="nama" required="required"> <br/>
         Jurusan <input type="text" name="jurusan" required="required"> <br/>
         Tahun <input name="tahunMasuk" required="required"></input> <br/>
         <input type="submit" value="Simpan Data">
        </form>
        
       </body>
       </html>
    </body>
</html>