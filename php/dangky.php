<!DOCTYPE html>
<html lang="en">
<head>
<title>Little Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>

<script>
function toidangnhap() {
    window.location="dangnhap.php";
}
</script>

</head>
<?php include("header.php")?>

<div class="home2">
			<div class="home2_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home2_title">Đăng kí</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Trang chủ</a></li>
							<li>Đăng kí</li>
						</ul>
					</div>
				</div>
			</div>
</div>
    <br/><br/><br/><br/><br/><br/>
		<form method ="POST">
		<div class="container text-dark">
		<h2>Hãy nhập các thông tin</h2>
		   <h4>Đăng ký để Little Closet có thể phục vụ bạn tốt hơn thông qua các chương trình chăm sóc khánh hàng và các khuyến mại đặc biệt dành riêng cho khách hàng mua online</h4>
           <div class ="border"></div>
           <br/>
					 <div class="card-group text-dark font-weight-bold">
            <div class="card">
                <div class="card-body">
								<h3 class="card-title">Khách Hàng Mới?</h3>
								<div class="form-group col-lg-12">
								<label for="">Họ Và Tên*:</label>
								<input type ="text" class="form-control col-lg-9" name="ten" id="" rows="1"/>
							</div>
							<div class="form-group col-lg-12">
								<label for="">Tên Đăng Nhập *:</label>
								<input type ="text" class="form-control col-lg-9" name="tendangnhap" id="" rows="1"/>
							</div>
							<div class="form-group col-lg-12">
								<label for="">Mật Khẩu *:</label>
								<input type ="password" class="form-control col-lg-9" name="matkhau" id="" rows="1"/>
							</div>
							<div class="form-group col-lg-12">
								<label for="">Mật Khẩu *:</label>
								<input type ="password" class="form-control col-lg-9" name="rematkhau" id="" rows="1"/>
							</div>
							<div class="form-group col-lg-12">
								<label for="">Email *:</label>
								<input type ="email" class="form-control col-lg-9" name="email" id="" rows="1"/>
							</div>
							<div class="form-group col-lg-12">
								<label for="">Số Điện Thoại *:</label>
								<input type ="text" class="form-control col-lg-9" name="sdt" id="" rows="1"/>
							</div>
							<div class="form-group col-lg-12">
								<label for="">Địa Chỉ *:</label>
								<input type ="text" class="form-control col-lg-9" name="diachi" id="" rows="1"/>
							</div>
							<input type="submit" class="btn btn-danger  pl-5 pr-5 pt-2 pb-2 ml-4 text-center" name="dangky" value = "Đăng Ký"/>
                
              </div>
            </div>
            <div class="card">
                <div class="card-body">
                <div class = "container col-lg-12">
                    <h3 class="card-title">Đã Có Tài Khoản?</h3>
										<button type="button" class="btn btn-danger  pl-5 pr-5 pt-2 pb-2 text-center" name ="dangnhap" onClick ="toidangnhap()"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng Nhập</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
		<?php
			$arr= array();
			$hostname = 'localhost:3306';
			$username = 'root';
			$password = '12345';
			$dbname = "qlbh";
			
			$conn = mysqli_connect($hostname, $username, $password,$dbname);
			if (!$conn) {
				die('Không thể kết nối: ' );
				exit();
			}
			if(isset($_POST['dangky'])){
				mysqli_set_charset($conn,"utf8");    
				$query ="Select accId as dem from account order by accID";
    		$sql = mysqli_query($conn,$query);
				$id=1;
				$result = mysqli_fetch_array($sql);
        if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)) {
						if($id== $row['accID'])
							$id++;
				}
				}
				$name = $_POST['ten'];
				$username = $_POST['tendangnhap'];
				$pass = $_POST['matkhau'];
				$email = $_POST['email'];
				$sdt = $_POST['sdt'];
				$address = $_POST['diachi'];
				$ex = "INSERT INTO account(accID, username, password, name, address, phone, created, admin, email) 
				VALUES ('$id','$username','$pass',N'$name',N'$address','$sdt','16-04-2019',0,'$email')";
				if(mysqli_query($conn,$ex)){
					echo '<script type="text/javascript">
							window.onload = function () { confirm("Thêm thành công!"); }
							var r= confirm("Thêm thành công!\n Bạn có muốn tải lại trang");
							if(r){
									window.location="dangky.php";
							}

							</script>';
					} else{
					echo "ERROR: Không thể thực hiện câu lệnh $ex. " . mysqli_error($conn);
					}
			
			}
		
		?>
		</form>

<?php include("footer.php");?>