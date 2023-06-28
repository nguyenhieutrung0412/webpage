<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Upload danh sách bài nhạc</h1>
<p style="color:#390;width:100%;display:block;padding:0;margin:0 0 10px 0;text-align:center">Album: {detail.name}</p>
<div class="tools_box">
	<a href="{detail.btn_back}"><i class="fa fa-arrow-circle-left"></i> Back</a>
</div>

<div class="frm_upload">
<form name="frmForm" action="" id="frmForm" method="post" enctype="multipart/form-data">
    <input type="hidden" name="code" value="1" />
    <input type="file" name="mp3_file[]" id="mp3_file" accept=".mp3,audio/*" multiple="multiple">
    <div>
    <i class="fa fa-cloud-upload"></i><br />
    Chọn file định dạng .mp3<br />
    <span class="id_file"></span></div>
    <button type="submit" style="margin:10px 0 0 0" onclick="return uploadMusic()">Tải lên ngay</button>
</form>
</div>
<div class="status"></div>
<div class="progress">
 
<div class="bar">&nbsp;</div>
 
<div class="percent">0%</div>
  </div>
  

<div style="border:0;width:80%;clear:both;float:left;margin:161px 0 0 0" id="file_list"></div>

<script>
//https://phppot.com/jquery/jquery-progress-bar-for-php-ajax-file-upload/
//https://morioh.com/p/9dfea5496bc3
//https://www.tricksofit.com/2015/11/upload-multiple-files-with-progress-bar#.YLC_Qaj7TIV

	$(document).ready(function(e) {
		
	$('#frmForm').submit(function(e) {
  var status = $('.status');
  var percent = $('.percent');
  var bar = $('.bar');
 
  $('form').ajaxForm({
    dataType:'json',
    beforeSend: function() {
        status.fadeOut();
        bar.width('0%');
        percent.html('0%');
    },
 
    /* progress bar call back*/
    uploadProgress: function(event, position, total, percentComplete) {
        var pVel = percentComplete + '%';
        bar.width(pVel);
        percent.html(pVel);
    },
 
    /* complete call back */
    complete: function(data) {
        data = $.parseJSON(data.responseText);
        status.html(data.count + ' Files uploaded!').fadeIn();
    }
 
  });
});
	
		
    $('input#mp3_file').change(function(){
				var files = $(this)[0].files;
				var txt = "";
				$('.id_file').html('Có <u>('+files.length+'</u>) được chọn').fadeIn();
				
				for (var i = 0; i < files.length; i++) {
					txt += "<br><strong>" + (i+1) + ". File mp3</strong><br>";
        	var file = files[i];
						if ('name' in file) {
						txt += "Name: " + file.name + "<br>";
					}
					if ('size' in file) {
						txt += "Size: " + file.size + " bytes <br>";
					}
				}
				$('#file_list').html(txt);
		});
  });
function uploadMusic(){
	var x = document.getElementById("mp3_file");
	if (x.files.length == 0) {
		alert('Vui lòng chọn ít nhất 1 hoặc tối thiểu 100 file (.mp3) để upload.');
		return false;
	}if (x.files.length > 100) {
		alert('Số file tối thiểu 100 file (.mp3) để upload.');
		return false;
	}else{
		return true;
		/*$.each($('#mp3_file')[0].files, function(i, file) {
			console.log('file-'+(i+1), file);
		});*/
			
	}
	return false;
}
</script>