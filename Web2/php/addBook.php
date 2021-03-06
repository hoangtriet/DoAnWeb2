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

			<div clas="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							Thêm sản phẩm
						</div>
						
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form name="them" action="executeAddBook.php" method="post">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
                                                    <label>Tên sách</label>
                                                    <input class="form-control" name="tensach">
                                                </div>
												<div class="form-group">
                                                    <label>Thể loại</label>
                                                    <select class="form-control" name="matheloai" id="theloai">
                                                        <option value="NN">Học ngoại ngữ</option>
                                                        <option value="KT">Kinh tế</option>
                                                        <option value="KNS">Kỹ năng sống</option>
                                                        <option value="LS">Lịch sử</option>
                                                        <option value="CN">Chuyên ngành</option>
														<option value="TN">Thiếu nhi</option>
														<option value="TT">Tuổi teen</option>
														<option value="VN">Văn học</option>
                                                    </select>
													<p><i>(Mã thể loại)</i></p>
                                                </div>
												<div class="form-group">
                                                    <label>Mã sách</label>
                                                    <input class="form-control" name="masach">
                                                </div>
												<div class="panel panel-default">
													<div class="panel-heading">												
														Tác giả
														<select class="form-control" name="loaitacgia" style="width:170px;float:right;margin-top:-6px" onchange="chonloaitacgia()">
															<option value="tacgiamoi" selected>Thêm tác giả mới</option>
															<option value="tacgiacu">Tác giả cũ</option>
														 </select>
													</div>
													<div class="panel-body" style="margin-bottom:10px;">
														<div class="row" id="showloaitacgia">
															<div class='col-lg-3'>
																<div class='form-group'>
																	<label>Mã tác giả</label>
																	<input class='form-control' name='matacgia' id='matg' readonly>
																</div>
															</div>
															<div class='col-lg-9'>
																<div class='form-group'>
																	<label>Tên tác giả</label>
																	<input class='form-control' name='tentacgia'>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
                                                    <label>Giá</label>
                                                    <input class="form-control" name="gia">
                                                </div>
												<div class="form-group">
                                                    <label>Nội dung giới thiệu sách</label>
                                                    <textarea class="form-control" rows="3" name="noidunggioithieusach" ></textarea>
                                                </div>
											</div>
											
											<div class="col-lg-6">
												<div class="form-group">
                                                    <label>Nhà xuất bản</label>
                                                    <input class="form-control" name="nhaxuatban">
                                                </div>
												<div class="form-group">
                                                    <label>Kích thước</label>
                                                    <input class="form-control" name="kichthuoc">
                                                </div>
												<div class="form-group">
                                                    <label>Trọng lượng</label>
                                                    <input class="form-control" name="trongluong">
                                                </div>
												<div class="form-group">
                                                    <label>Số trang</label>
                                                    <input class="form-control" name="sotrang">
                                                </div>
												<div class="form-group">
                                                    <label>Danh mục</label>
                                                    <input class="form-control" name="danhmuc">
                                                </div>
												<div class="form-group">
                                                    <label>Ngày phát hành</label>
                                                    <input class="form-control" name="ngayphathanh">
                                                </div>
												<div class="form-group">
                                                    <label>Số lượng tồn</label>
                                                    <input class="form-control" name="soluongton">
                                                </div>
												
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="panel panel-default">
													<div class="panel-heading">												
														Thêm hình ảnh
														<button type="button" style="float:right;margin-top:-4px" onclick="suahinh()">
															Thêm hình
														</button>
													</div>
													<div class="panel-body" style="margin-bottom:10px;">
														
														<div class="row">
															<div class="col-lg-12">
																<center><label>Hình ảnh</label></center>
																<center><div id="xemhinhanh" style="width:120px;height:170px;"> </div></center>
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
	function chonloaitacgia()
	{
		var x=document.forms['them']['loaitacgia'].value;
		var s="";
		if(x=="tacgiamoi")
		{
			var s= "<div class='col-lg-3'>"
						+"<div class='form-group'>"
							+"<label>Mã tác giả</label>"
							+"<input class='form-control' name='matacgia' id='matg' readonly>"
						+"</div>"
					+"</div>"
					+"<div class='col-lg-9'>"
						+"<div class='form-group'>"
							+"<label>Tên tác giả</label>"
							+"<input class='form-control' name='tentacgia'>"
						+"</div>"
					+"</div>";
		}
		else if(x=="tacgiacu")
		{
			s="<div class='col-lg-3'>"
				+"<div class='form-group'>"
					+"<label>Mã tác giả</label>"
					+"<select class='form-control' name='matacgia' id='matg'>"
						+"<option value=''>3</option>"
						+"<option value=''>2</option>"
						+"<option value=''>1</option>"
					+"</select>"
				+"</div>"
			+"</div>"
			+"<div class='col-lg-9'>"
				+"<div class='form-group'>"
					+"<label>Tên tác giả</label>"
					+"<input class='form-control' name='tentacgia'>"
				+"</div>"
			+"</div>";
		}
		document.getElementById("showloaitacgia").innerHTML=s;
	}
</script>
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

