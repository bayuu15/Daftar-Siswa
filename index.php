<?php 
    include ("template/header.php");
    $nomer = 1;
    
    $students = [

    [

        "nama" => "bayu",
        "kelas" => "11",
        "jurusan" => "PPLG",
        "umur" =>  17,
        "keterangan" =>  "Hadir",
    ],

    [
        "nama" => "bayu000",
        "kelas" => "11",
        "jurusan" => "PPLG",
        "umur" =>  197,
        "keterangan" =>  "Hadir",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div class="col-xxl-8">
                <div class="panel">
                    <div class="panel-header">
                        <h1>Daftar Siswa</h1>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php foreach($students as $students) : ?>
                                <tr>
                                    <td><?= $nomer++ ?></td>
                                    <td><?= $students["nama"] ?></td>
                                    <td><?= $students["kelas"] ?></td>
                                    <td><?= $students["jurusan"] ?></td>
                                    <td><?= $students["umur"] ?></td>
                                    <td><?= $students["keterangan"] == 'Hadir'?
                                        '<span class="bg-success p-2 rounded text-light">hadir</span>':                                   
                                        '<span class="bg-danger p-2 rounded text-light">hadir</span>' 
                                    
                                    ?></td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
</div>

    

<?php include 'template/footer.php' ?>
</body>
</html>
