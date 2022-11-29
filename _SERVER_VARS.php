<?php
	
echo '$_SERVER["GATEWAY_INTERFACE"]';
echo $_SERVER["GATEWAY_INTERFACE"];
echo '<br>';
echo '$_SERVER["DOCUMENT_ROOT"]';
echo $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
echo '$_SERVER["SERVER_ADDR"]';
echo $_SERVER["SERVER_ADDR"];
echo '<br>';
echo '$_SERVER["SERVER_NAME"]';
echo $_SERVER["SERVER_NAME"];
echo '<br>';
echo '$_SERVER["SERVER_SOFTWARE"]';
echo $_SERVER["SERVER_SOFTWARE"];
echo '<br>';
echo '$_SERVER["SERVER_PROTOCOL"];';
echo $_SERVER["SERVER_PROTOCOL"];
echo '<br>';
echo '$_SERVER["REQUEST_METHOD"];';
echo $_SERVER["REQUEST_METHOD"];
echo '<br>';
echo '$_SERVER["REQUEST_TIME"];';
echo $_SERVER["REQUEST_TIME"];
echo '<br>';
echo '$_SERVER["REQUEST_TIME_FLOAT"];';
echo $_SERVER["REQUEST_TIME_FLOAT"];
echo '<br>';
echo '$_SERVER["QUERY_STRING"];';
echo $_SERVER["QUERY_STRING"];
echo '<br>';
echo '$_SERVER["HTTP_ACCEPT_ENCODING"];';
echo $_SERVER["HTTP_ACCEPT_ENCODING"];
echo '<br>';
echo '$_SERVER["HTTP_HOST"];';
echo $_SERVER["HTTP_HOST"];
echo '<br>';
echo '$_SERVER["HTTP_USER_AGENT"];';
echo $_SERVER["HTTP_USER_AGENT"];
echo '<br>';
echo '$_SERVER["REMOTE_ADDR"];';
echo $_SERVER["REMOTE_ADDR"];
echo '<br>';
echo '$_SERVER["REMOTE_PORT"];';
echo $_SERVER["REMOTE_PORT"];
echo '<br>';
echo '$_SERVER["SCRIPT_FILENAME"];';
echo $_SERVER["SCRIPT_FILENAME"];
echo '<br>';
echo '$_SERVER["SCRIPT_NAME"];';
echo $_SERVER["SCRIPT_NAME"];
echo '<br>';
echo 'getcwd();';
echo getcwd();
echo '<br>';
echo 'basename(__FILE__);';
echo basename(__FILE__);
echo '<br>';
echo 'dirname(__FILE__);';
echo dirname(__FILE__);
echo '<br>';

echo 'basename($_SERVER["SCRIPT_FILENAME"], ".php")';
echo basename($_SERVER["SCRIPT_FILENAME"], '.php');
echo '<br>';
echo 'pathinfo(__FILE__, PATHINFO_FILENAME);';
echo pathinfo(__FILE__, PATHINFO_FILENAME);
echo '<br>';


$_SESSION['basename_file']					=	basename(__FILE__);
$_SESSION['current_script_filename'] 	= 	substr($_SERVER["SCRIPT_FILENAME"], strrpos($_SERVER["SCRIPT_FILENAME"], '/') + 1);
$_SESSION['www_root'] 							=	str_replace($_SERVER['PHP_SELF'], '', $_SERVER["SCRIPT_FILENAME"]);		// asdasd  				C:/wamp650/www/LegitPunk.com/templates/file_explorer_iterator/
$_SESSION["base_dir"]								=	str_replace($_SESSION['current_script_filename'], '', $_SERVER["SCRIPT_NAME"]);		// asdasd          				/LegitPunk.com/templates/file_explorer_iterator/
$_SESSION['http_site_dir']						=	$_SESSION["base_dir"].'updates/';
$_SESSION['http_base_dir']						=	'';
$_SESSION["http_domain"]						=	(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}";	


echo $_SESSION['basename_file'];						//		Define.php
echo '<br>';
echo $_SESSION['current_script_filename'];	//		Login.php
echo '<br>';
echo $_SESSION['www_root'];							//		C:/wamp650/www
echo '<br>';
echo $_SESSION['base_dir'];								//		LoginSite/L0001_/
echo '<br>';
echo $_SESSION['http_site_dir'];						//		http://localhost/LoginSite/L0001_/updates/00002/
echo '<br>';
echo $_SESSION['http_base_dir'];						//		http://localhost/LoginSite/L0001_/
echo '<br>';
echo $_SESSION["http_domain"];						//		http://localhost
echo '<br>';
echo $_SERVER['PHP_SELF'];								//		LoginSite/L0001_/Login.php
echo '<br>';
echo dirname($_SERVER['SCRIPT_NAME']);
echo '<br>';
echo $_SERVER['REQUEST_URI'];
echo '<br>';
echo  $_SERVER['DOCUMENT_ROOT'];			//		C:/wamp650/www
echo '<br>';


	
echo '$_SERVER["GATEWAY_INTERFACE"]';
echo $_SERVER["GATEWAY_INTERFACE"];
echo '<br>';
echo '$_SERVER["DOCUMENT_ROOT"]';
echo $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
echo '$_SERVER["SERVER_ADDR"]';
echo $_SERVER["SERVER_ADDR"];
echo '<br>';
echo '$_SERVER["SERVER_NAME"]';
echo $_SERVER["SERVER_NAME"];
echo '<br>';
echo '$_SERVER["SERVER_SOFTWARE"]';
echo $_SERVER["SERVER_SOFTWARE"];
echo '<br>';
echo '$_SERVER["SERVER_PROTOCOL"];';
echo $_SERVER["SERVER_PROTOCOL"];
echo '<br>';
echo '$_SERVER["REQUEST_METHOD"];';
echo $_SERVER["REQUEST_METHOD"];
echo '<br>';
echo '$_SERVER["REQUEST_TIME"];';
echo $_SERVER["REQUEST_TIME"];
echo '<br>';
echo '$_SERVER["REQUEST_TIME_FLOAT"];';
echo $_SERVER["REQUEST_TIME_FLOAT"];
echo '<br>';
echo '$_SERVER["QUERY_STRING"];';
echo $_SERVER["QUERY_STRING"];
echo '<br>';
echo '$_SERVER["HTTP_ACCEPT_ENCODING"];';
echo $_SERVER["HTTP_ACCEPT_ENCODING"];
echo '<br>';
echo '$_SERVER["HTTP_HOST"];';
echo $_SERVER["HTTP_HOST"];
echo '<br>';
echo '$_SERVER["HTTP_USER_AGENT"];';
echo $_SERVER["HTTP_USER_AGENT"];
echo '<br>';
echo '$_SERVER["REMOTE_ADDR"];';
echo $_SERVER["REMOTE_ADDR"];
echo '<br>';
echo '$_SERVER["REMOTE_PORT"];';
echo $_SERVER["REMOTE_PORT"];
echo '<br>';
echo '$_SERVER["SCRIPT_FILENAME"];';
echo $_SERVER["SCRIPT_FILENAME"];
echo '<br>';
echo '$_SERVER["SCRIPT_NAME"];';
echo $_SERVER["SCRIPT_NAME"];
echo '<br>';
echo 'getcwd();';
echo getcwd();
echo '<br>';
echo 'basename(__FILE__);';
echo basename(__FILE__);
echo '<br>';
echo 'dirname(__FILE__);';
echo dirname(__FILE__);
echo '<br>';

echo 'basename($_SERVER["SCRIPT_FILENAME"], ".php")';
echo basename($_SERVER["SCRIPT_FILENAME"], '.php');
echo '<br>';
echo 'pathinfo(__FILE__, PATHINFO_FILENAME);';
echo pathinfo(__FILE__, PATHINFO_FILENAME);
echo '<br>';



$object									=	new stdclass();
$object->image				=	array();

$object->image['asd'][0]			=	'uid1';
$object->image['asd'][1]			=	'uid1'	;
$object->image['asd'][2]			=	'uid1';
$object->image['asd'][3]			=	'uid1';
$object->image['asdd'][0]		=	'uid1';
$object->image['assd'][0]			=	'uid1';
$object->image['asd'][4]			=	'uid1';
$object->image['asd'][5]			=	'uid1';
$object->image['awsd'][0]			=	'uid1';
$object->image['asgd'][0]			=	'uid1';
$object->image['asd'][6]			=	'uid1';

/*
$n=0;
foreach($object->image['asd'] as $item)
{
	echo $n.'<br>';
	echo  $item.'<br>';
	$n++;
}

*/



$column2		=	array('image','image','image','image','folder','video','audio','text');

$table				=	array(0 => array('rowid1','image','uid1','data'), 1 => array('rowid2','image','uid2','data'));

/*
$row[0]						=	array('image','uid1','data');
$row[1]						=	array('image','uid2','data');
$row[2]						=	array('image','uid3','data');
$row[3]						=	array('image','uid4','data');
$row[4]						=	array('video','uid5','data');
$row[5]						=	array('audio','uid6','data');
$row[6]						=	array('text','uid7','data');
$row[7]						=	array('image','uid8','data');

$n=0;
foreach($row as $k => $v[0])
{
	echo $n.'<br>';
	echo  $k.'=>'.$v.'<br>';
	$n++;
}

*/

/*
$row['image'][0]						=	'uid1';
$row['image'][1]						=	'uid1';
$row['image'][2]						=	'uid1';
$row['image'][3]						=	'uid1';
$row['video'][0]						=	'uid1';
$row['audio'][0]						=	'uid1';
$row['text'][0]						=	'uid1';
$row['image'][0]						=	'uid1';

$n=0;
foreach($row as $k => $v[0])
{
	echo $n.'<br>';
	echo  $k.'=>'.$v.'<br>';
	$n++;
}
*/


/*
function expandDirectoriesMatrix($base_dir, $level = 0) {
    $directories = array();
    foreach(scandir($base_dir) as $file) {
        if($file == '.' || $file == '..') continue;
        $dir = $base_dir.DIRECTORY_SEPARATOR.$file;
        if(is_dir($dir)) {
            $directories[]= array(
                    'level' => $level,
                    'name' => $file,
                    'path' => $dir,
                    'children' => expandDirectoriesMatrix($dir, $level +1)
            );
        }
    }
    return $directories;
}





$dir = $_SERVER['DOCUMENT_ROOT'].'/templates/_SERVER_VARS/';

$directories = expandDirectoriesMatrix($dir);


function showDirectories($list, $parent = array())
{
    foreach ($list as $directory){
        $parent_name = count($parent) ? " parent: ({$parent['name']}" : '';
        $prefix = str_repeat('-', $directory['level']);
        echo "{$directory['name']} <br/>";  
        if(count($directory['children'])){
            showDirectories($directory['children'], $directory);
        }
    }
}

showDirectories($directories);


function getDirectories(string $path) : array
{
    $directories = [];
    $items = scandir($path);
    foreach ($items as $item) {
        if($item == '..' || $item == '.')
            continue;
        if(is_dir($path.'/'.$item))
            $directories[] = $item;
    }
    return $directories;
}

print_r(getDirectories($dir));


print_r(scandir($dir));


echo '<br>';
echo '<br>';
$dirs = array_filter(glob('*'), 'is_dir');
print_r($dirs);

*/

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
$dir = '_SERVER_VARS/';

$directories = glob($dir .'*/image/data' , GLOB_ONLYDIR);

print_r($directories);

?>