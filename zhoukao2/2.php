<?php 
$dir = "F:\phpStudy\PHPTutorial\WWW\lianxi\zhoukao";

my_dir($dir);
function my_dir($dir){
   $handle = opendir($dir);
   while (($file = readdir($handle)) != false) {
   	   if($file == '.' || $file == '..'){
          continue;
   	   }

   	   $str = $dir.'/'.$file;
   	   if(is_dir($str)){
          my_dir($str);
   	   }else{
   	   	echo "<br/>";
   	   	echo $str;
   	   }
   }
}


$aPath="/a/b/c/d/test.php";
$bPath="/a/b/d/c/test.php";
$result = findCommonPath($aPath,$bPath);
// var_dump($result);


function findCommonPath($aPath,$bPath){
    $result = [];
    $apathArr = explode('/',$aPath);
    $bpathArr = explode('/',$bPath);

    // var_dump($apathArr);
    $len = count($apathArr)>count($bpathArr) ? count($apathArr)=count($bpathArr);
    var_dump($len);
    for ($i=0; $i <$len ; $i++) { 
    	if($apathArr[$i] == $bpathArr[$i]){
            $result[] = $apathArr[$i];
    	}else{
    		break;
    	}
    }
    
    $result = implode('/',$result);

}


 ?>