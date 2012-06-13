<?

require_once(APP_PATH.'inc/twitteroauth.php');

function _twitter($username){
	$conn = new TwitterOAuth(TWITTER_CONSUMER_KEY,TWITTER_CONSUMER_SECRET,TWITTER_USER_KEY,TWITTER_USER_SECRET);
	$res = $conn->get(TWITTER_API_URL.$username);

	echo json_encode($res);
}