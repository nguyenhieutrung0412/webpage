<h1 class="mtitle">Thành viên</h1>
<p class="msg">Total: <u>{detail.total}</u> members</p>

<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table">
  <tr>
    <th width="4%">STT</th>
    <th width="15%">Họ và tên</th>
    <th>Email</th>
    <th>Mật khẩu</th>
    <th>Timestamp</th>
    <th width="8%">Gift code</th>
    <th>Action(s)</th>
  </tr>
  <!--BASIC ds-->
  <tr id="del{ds.code}">
    <td align="center">{ds.stt}</td>
    <td>{ds.hoten}</td>
    <td>{ds.email}</td>
    <td>{ds.matkhau2}</td>
    <td>{ds.timestamp}</td>
    <td>{ds.id_album}
    <a href="javascript:void(0)" style="float:right" onclick="return active('member','active_gift',{ds.code_act2},{ds.active_quatang})">
    <img src="template/images/icons_default/status{ds.active_quatang}.gif"/>
    </a>
    </td>
    <td align="center">
    <a href="javascript:void(0)" onclick="return active('member','active',{ds.code_act},{ds.active})">
    <img src="template/images/icons_default/status{ds.active}.gif"/>
    </a>
    <a href="javascript:void(0)" onclick="return Delete('member','delete',{ds.code_act},{ds.active})">
    <img src="template/images/icons_default/delete.png"/>
    </a>
    </td>
  </tr>
  <!--BASIC ds-->
</table>
<script type="text/javascript">
$(document).ready(function(e) {
  $('.breadcrumb,.module_description').remove();
});
</script>