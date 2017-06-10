<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
   <table border = 1>
  
   <tr class="bg-info">
   <th>Id</th>
   <th>Nama</th>
   <th>Alamat</th>
   <th>Jenis kelamin</th>
</tr>
<tr>
   <?php
   $no=1;
   ?>
  
   <tr>
<td>{{$no++}}</td>
<td>{{$siswa->nama_siswa}}</td>
<td>{{$siswa->alamat}}</td>
<td>{{$siswa->jk}}</td>
</tr>

</body>
</html>

</body>
</table>
</body>
</html>