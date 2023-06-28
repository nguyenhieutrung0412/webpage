<style>
	.td{
		 width:200px; height:23px;
	}
</style>
<!--BASIC detail-->
<form action="" method="post" name="frmDangTin" enctype="multipart/form-data">
	<table width="100%" border="0" align="center" cellspacing="3" cellpadding="3">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFCC"><p>&nbsp;</p>
          <p><strong><em>THÔNG TIN CƠ BẢN</em></strong></p>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td><strong>Mã tin: </strong></td>
        <td><input name="txtMa" value="{detail.id}" type="text" id="txtMa" style="width:200px; height:23px;" readonly="readonly" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="220"><strong>Loại tin rao:</strong></td>
        <td width="363">
          <select name="selectLoaiTin">
               <!--BASIC loaitindang--><option selected value="{loaitindang.id}">{loaitindang.name}</option>
               <!--BASIC loaitindang-->
           </select>  
        </td>
        <td width="381">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Loại địa ốc:</strong></td>
        <td>
           <select class="" name="selectLoaiDiaOc">
            <!--BASIC loaidiaoc--><option selected="selected" value="{loaidiaoc.id}">{loaidiaoc.name}</option>
            <!--BASIC loaidiaoc-->
           </select>
        </td>
        <td><input type="text" name="txtDuongHem" id="txtDuongHem" value="{detail.maloaidiaoc1}" style="width:200px; height:23px;" /></td>
      </tr>
      <tr>
        <td><strong>Quốc gia</strong></td>
        <td>
        <select name="selectQuocGia">
           		<option value="Việt Nam">Việt Nam</option>
           </select>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Tỉnh thành</strong></td>
        <td>
         <select  style="visibility: visible;" name="selectTinhThanh">
           <!--BASIC tinhthanh--><option value="{tinhthanh.id}">{tinhthanh.name}</option>
            <!--BASIC tinhthanh-->
         </select>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Quận / huyện</strong></td>
        <td><label for="txtQuanHuyen"></label>
        <input type="text" name="txtQuanHuyen" id="txtQuanHuyen" value="{detail.quanhuyen}" style="width:200px; height:23px;" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Phường / xã</strong></td>
        <td><label for="txtPhuongXa"></label>
        <input name="txtPhuongXa" type="text" value="{detail.phuongxa}" class="td" id="txtPhuongXa" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Tên đường / phố</strong></td>
        <td><label for="txtDuongPho"></label>
        <input name="txtDuongPho" type="text" class="td" value="{detail.tenduongpho}" id="txtDuongPho" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Tên dự án</strong></td>
        <td><label for="txtTenDuAn"></label>
        <input name="txtTenDuAn" type="text" class="td" id="txtTenDuAn" value="{detail.tenduan}" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Giá</strong></td>
        <td><label for="txtGia"></label>
        <input name="txtGia" type="text" class="td" id="txtGia"  value="{detail.gia}"/> VNĐ / 
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Môi giới</strong></td>
        <td><input name="txtMoiGioi" type="text" class="td" id="txtMoiGioi" value="{detail.moigioi}" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Diện tích sử dụng:</strong> *</td>
        <td><label for="txtDienTichSuDung"></label>
        <input name="txtDienTichSuDung" type="text" class="td" id="txtDienTichSuDung" value="{detail.dientichsudung} m2" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0">
          <tr>
            <td><strong>Diện tích khuôn viên:</strong></td>
            <td></td>
          </tr>
        </table></td>
        <td><input name="txtDienTichNgang" type="text" class="td" id="txtDienTichNgang" value="{detail.khuonvienngang}" /> 
          (m) x 
            <label for="txtDienTichDai"></label></td>
        <td><input name="txtDienTichDai" type="text" class="td" id="txtDienTichDai" value="{detail.khuonviendoc}" />
(m)</td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0">
          <tr>
            <td align="right"><strong> <span id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_lblDTXD">Diện tích xây dựng:</span></strong></td>
            <td></td>
          </tr>
        </table></td>
        <td><label for="txtDienTichXayDung"></label>
        <input name="txtDienTichXayDung" type="text" class="td" id="txtDienTichXayDung" value="{detail.xdngang}" />
        (m) x 
        <label for="txtDienTichXayDung2"></label></td>
        <td><input name="txtDienTichXayDung2" type="text" class="td" id="txtDienTichXayDung2" value="{detail.xddoc}" />
(m)</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFCC"><p>&nbsp;</p>
          <p><strong class="center"><em>ĐẶC ĐIỂM VÀ TIỆN ÍCH</em></strong></p>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td><strong>Tình trạng pháp lý:</strong></td>
        <td><strong>Số phòng khách:</strong></td>
        <td><strong>Các tiện ích:</strong></td>
      </tr>
      <tr>
        <td>
        	<select name="selectPhapLy">
            <option value="{detail.tinhtrangphaply}" selected="selected">{detail.tinhtrangphaply}</option>
            </select>
        </td>
        <td>
        	<select name="selectSoPhongKhach">
            <option selected="selected" value="{detail.sophongkhach}">{detail.sophongkhach}</option>
            </select>
        </td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_0" name="ckTienNghi" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_0">Đầy đủ tiện nghi</label></td>
      </tr>
      <tr>
        <td><strong>Hướng tài sản:</strong></td>
        <td><table cellspacing="0" cellpadding="0">
          <tr>
            <td></td>
            <td><strong><span id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_lblSoPhongNgu">Số phòng ngủ: </span></strong></td>
          </tr>
        </table></td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_1" name="ckXeHoi" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_1">Chỗ đậu xe hơi</label></td>
      </tr>
      <tr>
        <td>
        	<select name="selectHuong">
            <option value="{detail.huong}" selected="selected">{detail.huongtaisan}</option>
            </select>
        </td>
        <td>
        	<select name="selectPhongNgu">
            <option value="{detail.sophongngu}" selected="selected">{detail.sophongngu}</option>
            </select>
        </td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_2" name="ckSanVuon" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_2">Sân vườn</label></td>
      </tr>
      <tr>
        <td><strong>Đường trước nhà:</strong></td>
        <td><strong><span id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_lblSoPhongTam_VeSinh">Số phòng tắm/vệ sinh: </span></strong></td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_3" name="ckHoBoi" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_3">Hồ bơi</label></td>
      </tr>
      <tr>
        <td>
        	<select name="selectDuongTruocNha">
            		<option value="{detail.duongtruocnha}" selected="selected">{detail.duongtruocnha}</option>
            </select>
        </td>
        <td>
        	<select name="selectPhongTam">
            	<option value="{detail.sophongtam}" selected="selected">{detail.sophongtam}</option>
            </select>
        </td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_4" name="ckKinhDoanh" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_4">Tiện kinh doanh</label></td>
      </tr>
      <tr>
        <td><strong><span id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_lblSoLau">Số lầu: </span></strong></td>
        <td><table cellspacing="0" cellpadding="0">
          <tr>
            <td><strong><span id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_lblSoLau2"> </span></strong></td>
            <td><strong><span id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_lblSoPhongGiaiTri">Số phòng khác: </span></strong></td>
          </tr>
        </table></td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_5" name="ckDeO" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_5">Tiện để ở</label></td>
      </tr>
      <tr>
        <td>
        	<select name="selectSoLau">
            <option value="{detail.solau}" selected="selected">{detail.solau}</option>
            </select>
        </td>
        <td>
        	<select name="selectPhongKhac">
            	<option value="{detail.sophongkhac}" selected="selected">{detail.sophongkhac}</option>
            </select>
        </td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_6" name="ckVanPhong" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_6">Tiện làm văn phòng</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_7" name="ckSanXuat" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_7">Tiện cho sản xuất</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input id="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_8" name="ckSinhVien" type="checkbox" />
        <label for="ctl00_ctl00_cphMainContent_cphMainContent_UcMember_RegisterAsset1_chkListFeature_8">Cho sinh viên thuê</label></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFCC"><p>&nbsp;</p>
        <p><strong><em>THÔNG TIN CHI TIẾT</em></strong></p>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td>Tiêu đề: </td>
        <td colspan="2"><input type="text" name="txtTieuDe" value="{detail.tieude}" style="width:420px; height:25px;" /></td>
      </tr>
      <tr>
        <td>Nội dung: </td>
        <td colspan="2"><textarea name="txtNoiDung" style="width:420px; height:120px;"  >{detail.noidung}</textarea></td>
      </tr>
      <tr>
        <td>Hình ảnh:</td>
        <td><p><a href="../template/Default/upload/{detail.img}" class="mb"><img src="../template/Default/upload/{detail.icon}" width="60px;" /></a></p></td>
        <td>&nbsp;</td>
      </tr>
        <tr>
        <td colspan="3" align="center" bgcolor="#DDF7EB"><p>&nbsp;</p>
          <p><strong><em>LIÊN HỆ</em></strong></p>
          <p>&nbsp;</p></td>
        </tr>
      <tr>
        <td>Người liên hệ:</td>
        <td colspan="2"><input type="text" name="txtNguoiLienHe" style="width:420px; height:24px;" id="txtNguoiLienHe" value="{detail.nguoilienhe}" /></td>
        </tr>
      <tr>
        <td>Điện thoại:</td>
        <td colspan="2"><input type="text" name="txtDienThoai" style="width:420px; height:24px;" id="txtDienThoai" value="{detail.dienthoai}"  /></td>
        </tr>
      <tr>
        <td>Di động:</td>
        <td colspan="2"><input type="text" name="txtDiDong" style="width:420px; height:24px;" id="txtDiDong" value="{detail.didong}"  /></td>
        </tr>
      <tr>
        <td>Địa chỉ:</td>
        <td colspan="2"><input type="text" name="txtDiaChi" style="width:420px; height:24px;" id="txtDiaChi" value="{detail.diachi}"  /></td>
        </tr>
      <tr>
        <td>Tiêu đề:</td>
        <td colspan="2"><input type="text" name="txtTieuDe2" style="width:420px; height:24px;" id="txtTieuDe2" value="{detail.tieudelienhe}" /></td>
        </tr>
      <tr>
        <td>Ghi chú:</td>
        <td colspan="2"><textarea name="txtGhiChu" style="width:420px; height:120px;" id="txtGhiChu"  >{detail.ghichu}</textarea></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
       			<th width="3%" align="center" valign="middle" class="th-status">Active&nbsp;<a href="?mod={module}&amp;act=active&amp;id={detail.id}&amp;parentid={parentid}&amp;type={type}" title="{button.status_hover_item}">
        <img src="images/icons_default/status{detail.active}.gif" /> </a> &nbsp;
        Delete&nbsp;&nbsp; <a href="?mod={module}&amp;act=delete&amp;id={detail.id}&amp;parentid={parentid}&amp;type={type}" onclick="deleteConfirm(this); return false;" title="{button.delete_item}"><img src="images/icons_default/delete{ucp.delete}.png" width="16" height="16" /></a></span></th>
        <td>&nbsp;</td>
      </tr>
   
      <tr>
        <td>&nbsp;</td>
      	<td class="th-status" align="center" >
       
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
</form>
<!--BASIC detail-->