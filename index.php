<?php
	header('content-type:text/html;charset=utf8');
	// include('./header.html');
	// echo '<div>主页内容</div>';
	// include('./footer.html');
	
	// var_dump($_SERVER);
	
	// echo $path;
	$dir='main';
	$filename='index';
	//处理路由、url路径
	if(array_key_exists('PATH_INFO',$_SERVER)){
		$path=$_SERVER['PATH_INFO'];
		$str=substr($path, 1);
		$ret=(explode('/', $str));
		// var_dump($ret);
		if(count($ret)==2){
			$dir=$ret[0];
			$filename=$ret[1];
		}else{
			$filename='login';
		}
	}
	include('./views/'.$dir.'/'.$filename.'.html');
?>
