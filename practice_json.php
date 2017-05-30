<?php 


	// $jsondata = file_get_contents('sample.json');

	// var_dump($jsondata);//string(254)の文字として認識されている。

	// echo '<br>';

	// $array = json_decode($jsondata, true);

	// var_dump($array);//array(4)の配列として認識されている。

	// echo '<br>';
	// echo 'お名前：'.$array['name'];
	// echo '<br>';
	// echo 'gender：'.$array['gender'];


	// echo '<br>';
	// echo 'gender：'.$array['gender'];
	// echo '<br>';


	//趣味を複数個jsonファイルに追加して、リスト形式で表示して下さい
	$hobby = file_get_contents('sample.json');

	var_dump($hobby);
	echo '<br>';

	$array = json_decode($hobby, true);

	var_dump($array);
	echo '<br>';
	echo '<br>';

	echo 'hobby：';
	echo '<ul>
			<li>'.$array['hobby'][0].
			'<li>'.$array['hobby'][1].
			'<li>'.$array['hobby'][2].
		'<ul>';
























 ?>