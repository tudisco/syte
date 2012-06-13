<?
function _blog() {

	$tag = $_GET['tag'];
		

	if($tag){
		$url = TUMBLR_API_URL."/posts?api_key=".TUMBLR_API_KEY."&tag=".$tag;
	}else{
		$url = TUMBLR_API_URL."/posts?api_key=".TUMBLR_API_KEY;
	}
		
	$data = file_get_contents_curl($url);

	if($data){
		echo $data;
	}else{
		header('HTTP/1.0 500 Internal Error', true, 500);
	}
}