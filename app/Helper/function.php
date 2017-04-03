<?php
/**
 * Hàm in hoa tất cả các chữ cái đầu của họ tên. VD: nguyễn văn an
 * @param (string)	$name: Họ tên (chưa đúng định dạng)
 * @return (string) 	=> Nguyễn Văn An
 * @author Phuong Huu <huu.phuong195@gmail.com>
 */
function capitalize_unicode($name) {
	$name = trim($name);
	return mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
}


/**
 * Hàm tìm số trong chuỗi
 * @param (string)	$str: Chuỗi input
 * @return integer 	=> Phần tử số cuối cùng của chuỗi
 * @author Phuong Huu <huu.phuong195@gmail.com>
 */
function num_in_str($str) {
	preg_match_all('!\d+!', $str, $matches);
	$result = end($matches[0]) ? end($matches[0]) : null;
	return $result;
}


/**
 * Lưu thông điệp vào mảng tin nhắn
 * @param int 		$row: Số bản ghi bị ảnh hưởng bởi truy vấn
 * @param string 	$message: Thông điệp tin nhắn
 * @return []
 */
function showMessage($row, $message) {
	$result = ($row > 0) ? array('success',  $message . ' thành công')
						 : array('error', $message . ' thất bại');
	return $result;
}


/**
 * In nhanh một mảng
 * @param []	$data: Mảng dữ liệu cần in
 * @author Phuong Huu <huu.phuong195@gmail.com>
 */
function pr($data) {
	echo "<meta charset='UTF-8' />";
	echo "<pre>"; print_r ($data); echo "</pre>";
	exit();
}

/**
 * Trả về dữ liệu json & không bị lỗi font Unicode
 * @param [array, int, string v.v..]	$data: biến dữ liệu
 * @author Phuong Huu <huu.phuong195@gmail.com>
 */
function toJson($data) {
	echo json_encode($data);
	exit();
}



/**
 * Cắt chữ cuối cùng trong một chuỗi
 * @param (string)	$string: Chuỗi đầu vào
 * @return (string) Chữ cuối cùng của $string
 * @author Phuong Huu <huu.phuong195@gmail.com>
 */
function last_word($string) {
	$string = trim($string);
	$pieces = explode(' ', $string);
	return array_pop($pieces);	// Lấy ra phần tử cuối cùng của mảng vừa đc explore ở trên
}




function current_year() {
	if (date('Y', time()) == 2015)
		return date('Y', time());
	return '2015 - ' . date('Y', time());
}


function keepSelect($data, $name, $id, $firstItem, $keepItem = null) {
	echo "<option value=''>$firstItem</option>";
	foreach ($data as $item) {
		echo "<option value='". $item[$id] ."' ";
			if (!empty($keepItem) && $item[$id] == $keepItem) {
				echo "selected='selected'";
			}
		echo ">$item[$name]</option>";
	}
}



function priority($data, $keepItem = null, $title = null) {
	echo "<option value=''>-- Chọn vị trí --</option>";
	for ($i=1, $max = max($data[0]); $i<=$max+1; $i++) {
		echo "<option value='$i'";
			if (!empty($keepItem) && $keepItem == $i) {
				echo "selected='selected";
			}
		echo ">$i</option>";
	}
}


function timestamps($time) {
	return strtotime(str_replace('/', '-', $time));
}


function event_status($before, $after) {
	$now = time();
	if(($now >= $before) && ($now) <= $after) {
		$class = "success";
	}elseif ($now < $before) {
		$class = "info";
	}else {
		$class = "danger";
	}
	return $class;
}


function concatElement($data1, $data2, $ma_sukien) {
	for ($i=0, $count = count($data1); $i<$count; $i++) {
		$array[$i] = array(
			'ma_binhluan'  => time() - 1456047882 + $i,	// Luôn luôn là duy nhất.
			'ma_sukien'    => $ma_sukien,				// Và nó là hằng số
			'ma_thanhvien' => $data1[$i],
			'ghichu'       => $data2[$i]
		);
	}
	return $array;
}

function ctl_red($answerStatus) {
	if ($answerStatus == 'ctl' || empty($answerStatus)) {
		echo "class='bg-danger'";
	}
}


/**
 * Chuyển hướng người dùng với biến GET nếu có
 * @return redirect URL
 * @author Phuong Huu <huu.phuong195@gmail.com>
 */
 function redirectWithParam() {
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}

function addElementArray($sobaodanhString) {
	$sobaodanhArray = str_split($sobaodanhString);
	if (9 - count($sobaodanhArray) > 0) {
		$element_num = 9 - count($sobaodanhArray);
		for ($i=0; $i<$element_num; $i++) {
			array_unshift($sobaodanhArray, "");
		}
	}
	return $sobaodanhArray;
}


function addElementString($cmndString) {
	$cmndArray = str_split($cmndString);
	if (12 - count($cmndArray) > 0) {
		$element_num = 12 - count($cmndArray);
		for ($i=0; $i<$element_num; $i++) {
			array_unshift($cmndArray, "");
		}
	}
	return $cmndArray;
}

/**
 * Chuyển hướng với biến GET hiện tại
 */
function current_url_with_param()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}


/**
 * Tăng key + 1 để tăng STT
 */
function pluskey($array) {
	// if (!empty (array_values($array))) {
	// 	return array_combine(range(1, count($array)), array_values($array));
	// }
	//return 0;
	return $array;
}



function getdiachi($diachi, $element) {
	$data = explode('*|*', $diachi);
	return $data[$element];
}


function editMavach($mavach) {
	$mavach_data = str_split($mavach);
	$inserted = array('-');
	$array_position = array(3, 7, 11, 15);
	for ($i=1; $i<count($mavach_data); $i++) {
		if (in_array($i, $array_position)) {
			array_splice($mavach_data, $i, 0, $inserted);
		}
	}
	return $mavach_data;
}


function replaceDiachi($diachi) {
	if (!empty($diachi) AND strstr($diachi, '*|*'))
		return str_replace('*|*', ', ', $diachi);
	else
		return $diachi;
}


function get_numerics($str) {
    preg_match_all('/\d+/', $str, $matches);
    return $matches[0];
}


function tiento($sohoso) {
	if (substr($sohoso, 0, 2) == 'OH') {
		return str_replace('OH', '99', $sohoso);
	}else if (substr($sohoso, 0, 2) == 'BD') {
		return str_replace('BD', '98', $sohoso);
	}else {
		return substr($sohoso, 2);
	}
}


function rsrank($stenhh, $stenhv, $staff_name) {
	if ($stenhh != 'Khác' && $stenhv != 'Khác') {
		return sprintf('%s.%s.%s', $stenhh, $stenhv, $staff_name);
	}elseif ($stenhh == 'Khác' && $stenhv != 'Khác') {
		return  sprintf('%s.%s', $stenhv, $staff_name);
	}
}

function numeric_order($page, $key, $limit) {
	if (empty ($page)) {
		$page = 1;
	}
	return ($page-1)*$limit + $key + 1;
}


function objectToArray($arrayObject)
{
	$data = json_encode($arrayObject);
	return json_decode($data, TRUE);
}


function statistical_by_criteria($query_data) {
	$array = array();
	foreach ($query_data as $k => $val) {
		$array[$val->pk_smaldt] = $val->dem;
	}
	return $array;
}

function statistical_by_year($query_data) {
	$array = array();
	foreach ($query_data as $k => $val) {
		$array[$val->pk_smaloainam] = $val->dem;
	}
	return $array;
}

function eachTr($date)
{
	$date = timestamps($date);
	if ($date >= time() + 86400)
	{
		echo 'class="success"';
	}
	else
	{
		echo 'class="danger"';
	}
}


function fail_data()
{
	echo '
	    <h1 style="color: red;">Cảnh báo: Sai lệch dữ liệu</h1>
        <h2 class="text-justify">
          - Hệ thống phát hiện ra dữ liệu bị sai lệch bởi hành động của bạn. <br>
          - Để đảm bảo tính toàn vẹn dữ liệu, hệ thống đã khôi phục trạng thái cũ của dữ liệu. <br>
          - Vui lòng liên hệ SĐT: <a href="tel:01652803200">01652803200</a>, <a href="tel:01669326183">01669326183</a> hoặc gửi email tới địa chỉ:
          <a href="mailto:huu.phuong195@gmail.com">huu.phuong195@gmail.com</a>
          để được hỗ trợ kỹ thuật <br>
          - Click <a title="Quay về trang làm việc" href="/welcome">vào đây</a></strong>
          để quay về trang làm việc.
        </h2>
	';
	exit;
}


function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}