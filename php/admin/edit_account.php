<?php 
include("./model/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Quản lý tài khoản</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/panel.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fileinput.css">

    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

</head>

<?php
include("header.php");
include("./model/Account.php");
$conn = connectDB();
$arrAcc = getAllAcc($conn);
?>
<section id="main-content" class="container"">
        <section class="wrapper >
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-11">
                    <section class="panel">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($arrAcc as $i){
                                    echo '<tr><td scope="row">'.$i['accID'].'</td>
                                    <td>'.$i['username'].'</td>
                                    <td>'.$i['password'].'</td>
                                    <td>'.$i['name'].'</td>';
                                    echo'<td><button type ="button" class="btn btn-danger xoa" name="xóa" id="'.$i['accID'].'"onclick="do_delete(this.id)">Xóa</button>
                                    <a href ="detail_account.php?id='.$i['accID'].'" class="btn btn-primary" name="sửa" id="'.$i['accID'].'">Sửa</a></td>';
                                    echo'</tr>';
                                }
                            ?>
                            </tbody>
                        </table>
                    </section>
            </div>
        </div>
    </section>
</section>

<script type="text/javascript">
    function do_delete(id) {
        var answer = confirm("Delete user?")
        var id = id;
        console.log(id);
        if (answer) {
            var formData = {
                'delAccount' : 1,
                'id' :id
            };
            console.log(formData);
            $.ajax({
                type        : 'POST', 
                url         : './controller/modifyAccount.php', 
                data        : formData,
                dataType	: "text",
                success     :function(data){
                    swal("Thành công");
                    location.reload();
                        
                    
                },
                error       :function(data){
                    alert("Đã có lỗi, xin vui lòng thử lại");
                }

            })
        }
        else {
            
        }
    }
    
</script>

<script src="./js/fileinput.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>