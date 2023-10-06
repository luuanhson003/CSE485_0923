<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Book Homepage</title>
    <style>
        .container{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class = "container">
        <h3 class="text-center text-uppercase text-primary my-3">Quản lý Sách</h3>
        <a href="" class = 'btn btn-primary'>Thêm mới</a>
        <a href="author.php" class="btn btn-primary">Tác Giả</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Sách</th>
                <th scope="col">Năm Xuất Bản</th>
                <th scope="col">ID Tác Giả</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($books as $book){
                ?>
                        <tr>
                        <th scope="row"><?php echo $book->getId();?></th>
                        <td><?php echo $book->getTenSach();?></td>
                        <td><?php echo $book->getNamXuatBan();?></td>
                        <td><?php echo $book->getIdTacGia();?></td>
                        <td>
                            <a href=""><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                                <a href="">
                                    <i class="bi bi-trash3"></i>
                                </a>
                        </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>

<script src="./libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>