<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nhà sách OnePiece</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
<!-- MetisMenu CSS -->
    <link href="../css/admin/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/admin/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/admin/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/admin/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <img src="../images/onepiece.PNG" style="" width="250px" height="52px" alt="logo-trang chủ">
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Hoàng <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="admin.php" style=""><i class="fa fa-home fa-fw"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a href="quanlysanpham.php"><i class="fa fa-product-hunt fa-fw"></i> Quản lý sản phẩm</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Quản lý hóa đơn</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Thống kê sản phẩm</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Quản lý người dùng</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý sản phẩm</h1>
                </div>
            </div>
			
	<!---------------------------------hien san pham ----------------------------------->
	
			<div class="row">
                <div class="col-lg-12">
                    <div class="">
                </div>
            </div>

            <!-- ... Your content goes here ... -->
	<?php
		require('DataProvider.php');
		if(isset($_GET['masach']))
		{
			$masach=$_GET['masach'];
			$sql="select * from sach s,chitietsach ct,theloai tl,tacgia tg where s.MaSach=ct.MaSach and s.MaTacGia=tg.MaTacGia and s.MaTheLoai=tl.MaTheLoai and s.MaSach='".$masach."'";
			$result=DataProvider::executeQuery($sql);
			$row=mysqli_fetch_array($result);
			$tensach=$row['TenSach'];
			$matheloai=$row['MaTheLoai'];
			$tentacgia=$row['TenTacGia'];
			$gia=$row['Gia'];
			$noidunggioithieusach=$row['NoiDungGioiThieu'];
			$nhaxuatban=$row['NXB'];
			$kichthuoc=$row['KichThuoc'];
			$trongluong=$row['TrongLuong'];
			$sotrang=$row['SoTrang'];
			$danhmuc=$row['DanhMuc'];
			$ngayphathanh=$row['NgayPhatHanh'];
			$soluongton=$row['SoLuongTon'];
			$hinhanh=$row['HinhAnh'];
		}
		else
		{
			$masach="";
			$tensach="";
			$matheloai="";
			$tentacgia="";
			$gia="";
			$noidunggioithieusach="";
			$nhaxuatban="";
			$kichthuoc="";
			$trongluong="";
			$sotrang="";
			$danhmuc="";
			$ngayphathanh="";
			$soluongton="";
			$hinhanh="";
		}
	?>
			
			<div clas="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							Sửa sản phẩm
						</div>
						
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form name="sua" action="updateBook.php" method="post">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
                                                    <label>Mã sách</label>
                                                    <input class="form-control" readonly name="masach" value="<?php echo $masach; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Tên sách</label>
                                                    <input class="form-control" name="tensach" value="<?php echo $tensach; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Thể loại</label>
                                                    <select class="form-control" name="matheloai" id="theloai">
                                                        <option value="NN" <?php if($matheloai=="NN") echo "selected" ?> >Học ngoại ngữ</option>
                                                        <option value="KT" <?php if($matheloai=="KT") echo "selected" ?> >Kinh tế</option>
                                                        <option value="KNS" <?php if($matheloai=="KNS") echo "selected" ?> >Kỹ năng sống</option>
                                                        <option value="LS" <?php if($matheloai=="LS") echo "selected" ?> >Lịch sử</option>
                                                        <option value="CN" <?php if($matheloai=="CN") echo "selected" ?> >Chuyên ngành</option>
														<option value="TN" <?php if($matheloai=="TN") echo "selected" ?> >Thiếu nhi</option>
														<option value="TT" <?php if($matheloai=="TT") echo "selected" ?> >Tuổi teen</option>
														<option value="VN" <?php if($matheloai=="VH") echo "selected" ?> >Văn học</option>
                                                    </select>
													<p><i>(Mã thể loại)</i></p>
                                                </div>
												<div class="form-group">
                                                    <label>Tên tác giả</label>
                                                    <input class="form-control" name="tentacgia" value="<?php echo $tentacgia; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Giá</label>
                                                    <input class="form-control" name="gia" value="<?php echo $gia; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Nội dung giới thiệu sách</label>
                                                    <textarea class="form-control" rows="3" name="noidunggioithieusach" ><?php echo $noidunggioithieusach; ?></textarea>
                                                </div>
											</div>
											
											<div class="col-lg-6">
												<div class="form-group">
                                                    <label>Nhà xuất bản</label>
                                                    <input class="form-control" name="nhaxuatban" value="<?php echo $nhaxuatban; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Kích thước</label>
                                                    <input class="form-control" name="kichthuoc" value="<?php echo $kichthuoc; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Trọng lượng</label>
                                                    <input class="form-control" name="trongluong" value="<?php echo $trongluong; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Số trang</label>
                                                    <input class="form-control" name="sotrang" value="<?php echo $sotrang; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Danh mục</label>
                                                    <input class="form-control" name="danhmuc" value="<?php echo $danhmuc; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Ngày phát hành</label>
                                                    <input class="form-control" name="ngayphathanh" value="<?php echo $ngayphathanh; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Số lượng tồn</label>
                                                    <input class="form-control" name="soluongton" value="<?php echo $soluongton; ?>">
                                                </div>
												
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="panel panel-default">
													<div class="panel-heading">												
														Sửa hình ảnh
														<button type="button" style="float:right" onclick="suahinh()">
															Sửa hình
														</button>
													</div>
													<div class="panel-body" style="margin-bottom:10px;">
														
														<div class="row">
															<div class="col-lg-5">
																<center><label>Hình ảnh</label></center>
																<center><div id="xemhinhanh" style="width:120px;height:170px;"> </div></center>
															</div>
															<div class="col-lg-7">
																<div id="hienthisuahinh"></div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<center>
													<button type="submit" class="btn btn-default">Sửa</button>
													<button type="reset" class="btn btn-default">Đặt lại</button>
												</center>
											</div>
										</div>
									</form>
								</div>
							</div>
	
						</div>
					</div>
				</div>
			</div>

        </div>
    </div>

</div>
<script>
	function suahinh()
	{
		var x=document.getElementById('hienthisuahinh');
		if(x.innerHTML=="")
		{
			var s="<input type='file' name='hinhanh' id='ha' accept='image/png,image/jpeg' onchange='hienanhmoi()'>";
				s=s+"<center><div id='xemhinhanhmoi' style='width:120px;height:170px;'> </div></center>";
			document.getElementById('hienthisuahinh').innerHTML=s;
		}
		else document.getElementById('hienthisuahinh').innerHTML="";
	}
	function hienanhmoi()
	{
		var x=document.forms['sua']['hinhanh'].value;
		document.getElementById('xemhinhanhmoi').innerHTML="<img src='"+x+"' style='width:100%;height:100%'>";
	}
</script>
<?php
	if($matheloai!="")
		echo "<script>";
				if($matheloai=="NN")
				{
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/ngoaingu/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="KT")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/kinhte/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="KNS")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/kynangsong/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="LS")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/lichsu/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="CN")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/chuyennganh/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="TN")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/thieunhi/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="TT")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/tuoiteen/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				else if($matheloai=="VH")
				{	
					echo "document.getElementById('xemhinhanh').innerHTML='<img src=\'../images/vanhoc/".$hinhanh."\' style=\'width:100%;height:100%\'>';";
				}
				
			echo "</script>";
?>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/admin/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/admin/startmin.js"></script>

</body>
</html>

