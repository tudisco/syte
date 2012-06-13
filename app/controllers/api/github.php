<?
function _github($username){

	$user_r = file_get_contents_curl(GITHUB_API_URL.'users/'.$username.'?access_token='.GITHUB_ACCESS_TOKEN);
	$repos_r = file_get_contents_curl(GITHUB_API_URL.'users/'.$username.'/repos?access_token='.GITHUB_ACCESS_TOKEN);

    $context = new stdClass();
    $context->user = json_decode($user_r);
    $context->repos = json_decode($repos_r);

    echo json_encode($context);
}