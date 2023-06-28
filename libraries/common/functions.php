<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
function ob_html_compress($buffer) {
	$buffer = preg_replace('/<!--(.*)-->/Uis', '', $buffer);
	$buffer = str_replace(array("\n","\r","\t"),'',$buffer);
	return $buffer;
}

function stripUnicode($str){
	if(!$str) return false;
	$unicode = array(
	'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|ä',
	'd'=>'đ',
	'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
	'i'=>'í|ì|ỉ|ĩ|ị',
	'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
	'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ü',
	'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
	'n'=>'ñ',
	'й'=>'И'
	);
	foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
	return $str;
}
function khongdau($str) {
$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
$str = preg_replace("/(đ)/", 'd', $str);
$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
$str = preg_replace("/(Đ)/", 'D', $str);
//$str = str_replace("'", " ", str_replace("&*#39;","",$str));
//$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
//$str = str_replace("---", "-", str_replace("&*#39;","",$str));
return strtolower($str);
}

function capitalize($str) {
		return ucwords(strtolower($str));
}

function Vi_2_En($str) {
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
  $str = preg_replace("/(đ)/", "d", $str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
  $str = preg_replace("/(Đ)/", "D", $str);
  return $str;
}
//Get Last Word in String
function last_word($string){
	  if ( strrpos($string, " ") ) {
		$letztes_wort_anfang = strrpos($string, " ") + 1;
		$laenge_letztes_wort = strlen($string) - $letztes_wort_anfang;
		$letztes_wort = substr($string, $letztes_wort_anfang, $laenge_letztes_wort);
		return $letztes_wort;
	  }
	  else
		return $string;
	}
function str2url($str  = NULL){
	if(!$str) return NULL;
	$str = mb_strtolower($str,'utf-8');
	$str  = stripUnicode($str);
	$str = preg_replace('/[^0-9a-z\.]/is',' ',$str);
	$str = trim($str);
	$str = preg_replace('/\s+/','-',$str);
	return str_replace(' ','-',$str);
}

function format_date($date_system,$date_format = 'Y-m-d'){
	return date($date_format, strtotime($date_system));
}

function print_flash_image($file,$w=0,$h=0,$url = NULL){
	if(substr($file,'-4')=='.swf'){
		$str = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'.$w.'" height="'.$h.'" title="Homepage Banner">
                    <param name="movie" value="'.$file.'" />
                    <param name="quality" value="high" />
                    <embed src="'.$file.'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'.$w.'" height="'.$h.'"></embed>
       	  	      </object>';
	}else{
		$str = '';
		if($url) $str .= '<a href="'.$url.'">';
		$str .= '<img src="'.$file.'"'.($w?' width="'.$w.'"':'').' '.($h?'height="'.$h.'"':'').' />';
		if($url) $str .= '</a>';
	}
	return $str;
}

function count_word($str,$n = 20){
	$tmp = explode(' ',$str);
	$count = count($tmp);
	if($count <= $n) return $str;
	for($i=$n;$i<$count;$i++) unset($tmp[$i]);
	return implode(' ',$tmp).'...';
}
	
function data2xml($data,$parent = 0,$parents = '',$sep = '/',$dir,$ext = ''){
	$str = '';
	if(count($data[$parent])){
		$str .= '<ul>';
		if($parents) $parents .= $sep.$parent;
		else $parents = $dir;
		foreach($data[$parent] as $rs){
			$str .= '<li><a href="'.$parents.$sep.$rs['id'].$ext.'">'.$rs['name'].'</a></li>';
			$str .= data2xml($data,$rs['id'],$parents,$sep,$dir,$ext);
		}
		$str .= '</ul>';
	}
	return $str;
}


function upload($tagname,$upload_dir,$ex_name=NULL,$allow_ext=NULL,$lang = NULL){
	$arr = array();
	$arr['error'] = 0;
	if(!is_writable($upload_dir)){
		$arr['error'] = 1;
		$arr['msg'] =  'You have no <strong>WRITE</strong> access for folder <strong>'.$upload_dir.'</strong>';
		return $arr;
	}
	
	if($lang){
		$filesize=$_FILES[$tagname]["size"][$lang];
		$fileerror=$_FILES[$tagname]["error"][$lang];
		$filename = basename($_FILES[$tagname]["name"][$lang]);
		$file_tmp = $_FILES[$tagname]["tmp_name"][$lang];
	}else{
		$filesize=$_FILES[$tagname]["size"];
		$fileerror=$_FILES[$tagname]["error"];
		$filename = basename($_FILES[$tagname]["name"]);
		$file_tmp = $_FILES[$tagname]["tmp_name"];
	}
	
	if($filename && $fileerror){
		$arr['error'] = 1;
		$arr['msg'] =  'The file size is so large to upload ( Max file size: <strong>'.ini_get('upload_max_filesize ').'</strong>)';
		return $arr;
	}	
	$continue = 0;
	if($filename && is_array($allow_ext)) for($i=0; $i<count($allow_ext);){
		if(strtolower(substr($filename,-1*strlen($allow_ext[$i]))) == $allow_ext[$i]){ 
			$continue = 1; 
			$i = count($allow_ext)  + 1;
		}else{
			$i++;
		}
	}else{
		$continue = 1;
	}
	
	if(!$continue){
		$arr['error'] = 1;
		$arr['msg'] =  'Not allow extentions file, you can only upload file '.implode(',',$allow_ext);
		return $arr;
	}
	
	$upload_file = $ex_name.preg_replace('/[^a-z0-9\.\-_]/is','',$filename);
	if(file_exists($upload_dir.$upload_file)) $upload_file = str_shuffle('phpbasic').'_'.$upload_file;
	if (@move_uploaded_file($file_tmp, $upload_dir.$upload_file) ){       
		@chmod ($upload_file,0777);         
		return  $upload_file;
	}
	if(!$continue){
		$arr['error'] = 1;
		$arr['msg'] =  'Server cannot upload this file, please try again';
	
	}
}


function strip_html_tags($text){
//https://www.zimplicit.se/en/knowledge/remove-all-html-plain-text
// Remove invisible content:
    $text = preg_replace(
        array(
            //ADD a (') before @<head ON NEXT LINE. Why? see below
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$",
        ),
        $text);
    return strip_tags( $text );
}


//check cookie for vote
function check_cookie($id){
   if(isset($_COOKIE['p_'.$id])){
	return true;
   }else{
	return false;
   }   
}
function checkCookie($id){
   if(isset($_COOKIE['flag_'.$id])){
	return true;
   }else{
	return false;
   }   
}
function base64url_encode($data){
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
}
function base64url_decode($data) { 
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
}

//xóa định dạng style trong html
function remove_style($input){
	$output = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $input);
	$output = preg_replace('/(<[^>]+) dir=".*?"/i', '$1', $output);
	$output = preg_replace( '/(width|height)="\d*"\s/', "", $output);
	return $output;
}

//get real ipaddress
function get_ip(){
	if(!empty($_SERVER['HTTP_CLIENT_IP']))//check ip from share internet
	{
	  $ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))//to check ip is pass from proxy
	{
	  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
	  $ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function autolink($text,$attributes=array()){ 
	$attrs = '';
	foreach ($attributes as $attribute => $value){
		$attrs .= " {$attribute}=\"{$value}\"";
	}
	$text= preg_replace("/(^|[\n ])([\w]*?)([\w]*?:\/\/[\w]+[^ \,\"\n\r\t<]*)/is", "$1$2<a href=\"$3\" ".$attrs.">$3</a>", $text);
	$text= preg_replace("/(^|[\n ])([\w]*?)((www)\.[^ \,\"\t\n\r<]*)/is", "$1$2<a href=\"http://$3\" ".$attrs.">$3</a>", $text);
	$text= preg_replace("/(^|[\n ])([\w]*?)((ftp)\.[^ \,\"\t\n\r<]*)/is", "$1$2<a href=\"ftp://$3\">$3</a>", $text);  
	$text= preg_replace("/(^|[\n ])([a-z0-9&\-_\.]+?)@([\w\-]+\.([\w\-\.]+)+)/i", "$1<a href=\"mailto:$2@$3\">$2@$3</a>", $text);
	return($text);  
}

function nicetime($date){
		if(empty($date)) {
			return "No date provided";
		}
		
		//$periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$periods         = array("giây", "phút", "giờ", "ngày", "tuần", "tháng", "năm", "thập kỷ");
		$lengths         = array("60","60","24","7","4.35","12","10");
		
		$now             = time();
		$unix_date         = strtotime($date);
		
		   // check validity of date
		if(empty($unix_date)) {    
			return "Bad date";
		}
	
		// is it future date or past date
		if($now > $unix_date) {    
			$difference     = $now - $unix_date;
			$tense         = "trước";
			
		} else {
			$difference     = $unix_date - $now;
			$tense         = "hiện tại";
		}
		
		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
			$difference /= $lengths[$j];
		}
		
		$difference = round($difference);
		
		if($difference != 1) {
			//$periods[$j].= "s";
			$periods[$j].= "";
		}
		
		return "$difference $periods[$j] {$tense}";
}

function getMP3BitRateSampleRate($filename)
{
    if (!file_exists($filename)) {
        return false;
    }

    $bitRates = array(
                      array(0,0,0,0,0),
                      array(32,32,32,32,8),
                      array(64,48,40,48,16),
                      array(96,56,48,56,24),
                      array(128,64,56,64,32),
                      array(160,80,64,80,40),
                      array(192,96,80,96,48),
                      array(224,112,96,112,56),
                      array(256,128,112,128,64),
                      array(288,160,128,144,80),
                      array(320,192,160,160,96),
                      array(352,224,192,176,112),
                      array(384,256,224,192,128),
                      array(416,320,256,224,144),
                      array(448,384,320,256,160),
                      array(-1,-1,-1,-1,-1),
                    );
    $sampleRates = array(
                         array(11025,12000,8000), //mpeg 2.5
                         array(0,0,0),
                         array(22050,24000,16000), //mpeg 2
                         array(44100,48000,32000), //mpeg 1
                        );
    $bToRead = 1024 * 12;

    $fileData = array('bitRate' => 0, 'sampleRate' => 0);
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }
    //seek to 8kb before the end of the file
    fseek($fp, -1 * $bToRead, SEEK_END);
    $data = fread($fp, $bToRead);

    $bytes = unpack('C*', $data);
    $frames = array();
    $lastFrameVerify = null;

    for ($o = 1; $o < count($bytes) - 4; $o++) {

        //http://mpgedit.org/mpgedit/mpeg_format/MP3Format.html
        //header is AAAAAAAA AAABBCCD EEEEFFGH IIJJKLMM
        if (($bytes[$o] & 255) == 255 && ($bytes[$o+1] & 224) == 224) {
            $frame = array();
            $frame['version'] = ($bytes[$o+1] & 24) >> 3; //get BB (0 -> 3)
            $frame['layer'] = abs((($bytes[$o+1] & 6) >> 1) - 4); //get CC (1 -> 3), then invert
            $srIndex = ($bytes[$o+2] & 12) >> 2; //get FF (0 -> 3)
            $brRow = ($bytes[$o+2] & 240) >> 4; //get EEEE (0 -> 15)
            $frame['padding'] = ($bytes[$o+2] & 2) >> 1; //get G
            if ($frame['version'] != 1 && $frame['layer'] > 0 && $srIndex < 3 && $brRow != 15 && $brRow != 0 &&
                (!$lastFrameVerify || $lastFrameVerify === $bytes[$o+1])) {
                //valid frame header

                //calculate how much to skip to get to the next header
                $frame['sampleRate'] = $sampleRates[$frame['version']][$srIndex];
                if ($frame['version'] & 1 == 1) {
                    $frame['bitRate'] = $bitRates[$brRow][$frame['layer']-1]; //v1 and l1,l2,l3
                } else {
                    $frame['bitRate'] = $bitRates[$brRow][($frame['layer'] & 2 >> 1)+3]; //v2 and l1 or l2/l3 (3 is the offset in the arrays)
                }

                if ($frame['layer'] == 1) {
                    $frame['frameLength'] = (12 * $frame['bitRate'] * 1000 / $frame['sampleRate'] + $frame['padding']) * 4;
                } else {
                    $frame['frameLength'] = 144 * $frame['bitRate'] * 1000 / $frame['sampleRate'] + $frame['padding'];
                }

                $frames[] = $frame;
                $lastFrameVerify = $bytes[$o+1];
                $o += floor($frame['frameLength'] - 1);
            } else {
                $frames = array();
                $lastFrameVerify = null;
            }
        }
        if (count($frames) < 3) { //verify at least 3 frames to make sure its an mp3
            continue;
        }

        $header = array_pop($frames);
        $fileData['sampleRate'] = $header['sampleRate'];
        $fileData['bitRate'] = $header['bitRate'];

        break;
    }

    return $fileData;
}
/* 
Example:
if (!empty($_FILES['mp3'])) {
    $data = getMP3BitRateSampleRate($_FILES['mp3']['tmp_name']);
}
*/

//https://stackoverflow.com/questions/4834202/convert-time-in-hhmmss-format-to-seconds-only
function TimeToSec($time) {
    $sec = 0;
    foreach (array_reverse(explode(':', $time)) as $k => $v) $sec += pow(60, $k) * $v;
    return $sec;
}

//hamf xoas attributes trong html
function NoStyle($input){
	$output = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $input);
	$output = preg_replace('/(<[^>]+) dir=".*?"/i', '$1', $output);
	$output = preg_replace( '/(width|height)="\d*"\s/', "", $output);
	return $output;
}
function getExtension($str){
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	$ext = substr($str,$i+1,$l);
	$ext = strtolower($ext);
	return $ext;
}

/*
* Hàm chuyển đổi seconds to time
* https://stackoverflow.com/questions/3534533/output-is-in-seconds-convert-to-hhmmss-format-in-php
*/
function seconds2Time($seconds) {
	$t = round($seconds);
	$days = floor($t/86400);
	$day_sec = $days*86400;
	$hours = floor( ($t-$day_sec) / (60 * 60) );
	$hour_sec = $hours*3600;
	$minutes = floor((($t-$day_sec)-$hour_sec)/60);
	$min_sec = $minutes*60;
	$sec = (($t-$day_sec)-$hour_sec)-$min_sec;
	
	$time_str = sprintf('%02d:%02d:%02d:%02d', $days, $hours, $minutes, $sec);
	
	//đảo ngược mảng theo thứ tự: ss:mm:hh:dd
	$arr = array_reverse(explode(':',$time_str));
	
	$giay = $arr[0];
	$phut = $arr[1];
	$gio = $arr[2];
	
	$ngay = $arr[3]*24;//nếu >= 1 ngày thì nhân số tiếng
	$tonggio = $gio+$ngay.' giờ '.$phut.' phút '.$giay.' giây';
	
	return $tonggio;
}

function get_mime_type($filename) {
    $idx = explode( '.', $filename );
    $count_explode = count($idx);
    $idx = strtolower($idx[$count_explode-1]);

    $mimet = array( 
        'txt' => 'text/plain',
        'htm' => 'text/html',
        'html' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
        'swf' => 'application/x-shockwave-flash',
        'flv' => 'video/x-flv',

        // images
        'png' => 'image/png',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'gif' => 'image/gif',
        'bmp' => 'image/bmp',
        'ico' => 'image/vnd.microsoft.icon',
        'tiff' => 'image/tiff',
        'tif' => 'image/tiff',
        'svg' => 'image/svg+xml',
        'svgz' => 'image/svg+xml',

        // archives
        'zip' => 'application/zip',
        'rar' => 'application/x-rar-compressed',
        'exe' => 'application/x-msdownload',
        'msi' => 'application/x-msdownload',
        'cab' => 'application/vnd.ms-cab-compressed',

        // audio/video
        'mp3' => 'audio/mpeg',
        'qt' => 'video/quicktime',
        'mov' => 'video/quicktime',

        // adobe
        'pdf' => 'application/pdf',
        'psd' => 'image/vnd.adobe.photoshop',
        'ai' => 'application/postscript',
        'eps' => 'application/postscript',
        'ps' => 'application/postscript',

        // ms office
        'doc' => 'application/msword',
        'rtf' => 'application/rtf',
        'xls' => 'application/vnd.ms-excel',
        'ppt' => 'application/vnd.ms-powerpoint',
        'docx' => 'application/msword',
        'xlsx' => 'application/vnd.ms-excel',
        'pptx' => 'application/vnd.ms-powerpoint',


        // open office
        'odt' => 'application/vnd.oasis.opendocument.text',
        'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
    );

    if (isset( $mimet[$idx] )) {
     return $mimet[$idx];
    } else {
     return 'application/octet-stream';
    }
 }