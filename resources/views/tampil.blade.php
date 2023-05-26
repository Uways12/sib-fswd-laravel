<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas_19/title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script></head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
<body>
    <h1 style="text-align: center;">Data Pengguna  </h1>
    <a href="tambah_pengguna.php" style="width: 12em; color:white" class="col btn btn-primary form-control my-2 mx-4" role="button">+ Tambah Pengguna</a>
    <div class= "card shadow-lg border-0 m-5 p-5 mx-auto">
    <table id ="myTable">
    <thead class="bg-light" style="color:black">
        <th class="text-center">#</th>
        <th class="text-center">Aksi</th>
        <th class="text-center">Avatar</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Role</th>       
    </thead>

        <tbody>
           
            <tr class="text-center">
                <td><?php echo '1'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                <td><?php echo 'avatar_images.jpeg' ?></td>
                <td><?php echo 'Uways Qurni'?></td>
                <td><?php echo 'uwaysq4@gmail.com'?></td>
                <td><?php echo '083895226351'?></td>
                <td><?php echo 'Admin'?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo '2'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                <td><?php echo 'avatar_images (1).jpeg' ?></td>
                <td><?php echo 'Uways Qurni'?></td>
                <td><?php echo 'uwaysq4@gmail.com'?></td>
                <td><?php echo '083895226351'?></td>
                <td><?php echo 'Admin'?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo '3'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                <td><?php echo 'avatar_images.jpeg' ?></td>
                <td><?php echo 'Ijal'?></td>
                <td><?php echo 'ijal6@gmail.com'?></td>
                <td><?php echo '08389867567'?></td>
                <td><?php echo 'Staff'?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo '4'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                <td><?php echo 'avatar_images.jpeg' ?></td>
                <td><?php echo 'Zani'?></td>
                <td><?php echo 'junot74@gmail.com'?></td>
                <td><?php echo '089665767234'?></td>
                <td><?php echo 'Staff'?></td>
            </tr>
            <tr class="text-center">
        </tbody>
</table>
</div>
       
</body>

<script>
    $(document).ready(function (){
    $('#myTable').DataTable();
    });
</script>

</html>