<?php

class ShowDetail
{
	public static function showChiTiet()
			{
					require('DataProvider.php');
					if(isset($_GET['masach']))
						$MaSach=$_GET['masach'];
					if(isset($MaSach))
					{
			
			
								
							
							//  Kết lại xem bảng chi tiết sách
							$sql="SELECT sach.MaSach,chitietsach.NXB,chitietsach.KichThuoc,chitietsach.TrongLuong,chitietsach.SoTrang,chitietsach.DanhMuc,chitietsach.NgayPhatHanh,chitietsach.SoLuongTon,chitietsach.NoiDungGioiThieu,sach.TenSach,sach.HinhAnh,sach.Gia,tacgia.TenTacGia,theloai.MaTheLoai
									FROM chitietsach,sach,tacgia,theloai
									WHERE chitietsach.MaSach=sach.MaSach AND sach.MaTheLoai=theloai.MaTheLoai AND sach.MaTacGia=tacgia.MaTacGia AND sach.MaSach='".$MaSach."'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);

							
							//  Hiện chi tiết sản phẩm
							$s="";
							
									 
									
									$s=$s.'<div id="tongtieude">'
										.'<div id="chitietanh">'
											.'<img src="../images/';
											if($row['MaTheLoai']=="NN")
											{	
												$s=$s.'ngoaingu/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="KT")
											{	
												$s=$s.'kinhte/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="KNS")
											{	
												$s=$s.'kynangsong/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="CN")
											{	
												$s=$s.'chuyennganh/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="LS")
											{	
												$s=$s.'lichsu/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="TN")
											{	
												$s=$s.'thieunhi/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="TT")
											{	
												$s=$s.'tuoiteen/' . $row['HinhAnh'].'">';
											}	
											if($row['MaTheLoai']=="VH")
											{	
												$s=$s.'vanhoc/' . $row['HinhAnh'].'">';
											}	
											$s=$s.'</div>'
												.'<div id="thongtinsach">'
													.'<div id="tieudesach">'.$row['TenSach']
													.'</div>'
													.'<div id="tacgia">Tác giả: <font style="color:#33cc33">'.$row['TenTacGia'].'</font>'
													.'</div>'
													.'<div id="giasach">'.$row['Gia']. '<sup><u>đ</u></sup>'
													.'</div>'
													.'<div id="buyandnumber">'
														.'<div id="nhapsoluong">Nhập số lượng : </div>'
															.'<div class="input-group spinner" id="nhapso">'
																.'<input type="text" class="form-control" value="1">'
																.'<div class="input-group-btn-vertical">'
																  .'<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>'
																  .'<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>'
																.'</div>'
															.'</div>'
														.'<div><button type="button" class="btn btn-danger btn-lg m-t-22 m-l-5" onclick="datmua()">Đặt mua</button></div>'
													.'</div>'
													.'<div class="intro">'
														.'<div class="block ">'
															.'<div class="blockcontent">'
																	
																.'<p><i class="fa fa-check"></i><span style="font-size:14px;">Bọc Plastic miễn ph&iacute;&nbsp;</span></p>'
																	
																.'<p><i class="fa fa-check"></i><span style="font-size:14px;">Giao h&agrave;ng miễn ph&iacute; trong nội th&agrave;nh TP. HCM với đơn h&agrave;ng&nbsp; <span style="color:#33cc33;"><strong>&ge; 150.000 đ</strong></span></span></p>'
																	
																.'<p><i class="fa fa-check"></i><span style="font-size:14px;">Giao h&agrave;ng miễn ph&iacute; to&agrave;n quốc với đơn h&agrave;ng <span style="color:#33cc33;"><strong>&ge; 250.000 đ</strong></span></span></p>'
															.'</div>'
														.'</div>'
													.'</div>'
													
												.'</div>'
												

											.'</div>'
											.'<div id="thongtinsp">'
												.'<div id="info">Giới thiệu sách</div>'
												.'<div id="detail">'.$row['NoiDungGioiThieu']
												.'</div>'

											.'</div>'
										.'<div class="product-tabs-content">'
											.'<div id="info">Thông tin khác</div>'
											.'<div class="table-responsive m-t-20">   '       
											  .'<table class="table" >'
												.'<tbody>'
												  .'<tr class="success">'
													.'<td>Tác giả</td>'
													.'<td>'.$row['TenTacGia'] .'</td>'
												  .'</tr>'			 
												  .'<tr class="success">'
													.'<td>NXB</td>'
													.'<td>'.$row['NXB'].'</td>'
												  .'</tr>'
												  .'<tr>'
													.'<td>Số trang</td>'
													.'<td>'.$row['SoTrang'].'</td>'
												  .'</tr>'
												  .'<tr class="success">'
													.'<td>Kích thước</td>'
													.'<td>'.$row['KichThuoc'].'</td>'
												  .'</tr>'
												  .'<tr>'
													.'<td>Trọng lượng</td>'
													.'<td>'.$row['TrongLuong'].'</td>'
												  .'</tr>'
												  .'<tr class="success">'
													.'<td>Ngày phát hành</td>'
													.'<td>'.$row['NgayPhatHanh'].'</td>'
												  .'</tr>'
												  .'<tr>'
													.'<td>Danh mục</td>'
													.'<td>'.$row['DanhMuc'].'</td>'
												  .'</tr>'						 						  
												.'</tbody>'
											  .'</table>'
											.'</div>'
										.'</div>';														
											
							
							
								echo $s;
							
							
									
							
						
					}		
			}
}