<?
function _instagram(){
	$user_r = file_get_contents_curl(INSTAGRAM_API_URL.'users/'.INSTAGRAM_USER_ID.'/?access_token='.INSTAGRAM_ACCESS_TOKEN);
	$media_r = file_get_contents_curl(INSTAGRAM_API_URL.'users/'.INSTAGRAM_USER_ID.'/media/recent/?access_token='.INSTAGRAM_ACCESS_TOKEN);
	
    if($user_r && $media_r){
    	$user_data = json_decode($user_r);
    	$media_data = json_decode($media_r);
    	$context = array('user'=>$user_data->data,'media'=>$media_data->data,'pagination'=>$media_data->pagination);
    	echo json_encode($context);
    }else{
    	header('HTTP/1.0 500 Internal Error', true, 500);
    }
    
}