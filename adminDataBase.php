<?php
	/**
	* 
	*/
	class personMode
	{
		private $sqlCon ;
		
		function __construct()
		{
			$this ->sqlCon = mysql_connect("localhost", "wang","wang123456") or die("link error");
			mysql_select_db('missWang',$this ->sqlCon);
			mysql_set_charset('utf8');
		}
		public function add( $data='' )
		{
			$name = $data['name'];
			$tel = $data['tel'];
			$qq = $data['qq'];
			$mail = $data['mail'];
			$skill = $data['skill'];
			$mes = $data['mes'];
			$sql = "insert into person (`name`,`tel`,`qq`,`mail`,`skill`,`mes`) values(".
				"'". $name."',".
				"'".$tel."',".
				"'".$qq."',".
				"'".$mail."',".
				"'".$skill."',".
				"'".$mes."')";
			
			if(mysql_query($sql,$this ->sqlCon))
			{
				mysql_close($this ->sqlCon);
				return 1;
			}
			else
			{
				mysql_close($this ->sqlCon);
				return 0;
			}
			
		}

		public function get($num = 0)
		{
			$data = '';
			$count = $this ->getCount();
			if($count <= $num)
				return;
			$sql = "select * from person limit ".$num.",". 10;
			$query = mysql_query($sql,$this ->sqlCon);
			$data['num'] = $num + 10;
			$i = 0;
			while($datas = mysql_fetch_assoc($query))
			{
				$data['data'][$i ++] = $datas;	
			}
			mysql_close($this ->sqlCon);
			return json_encode($data);	
			
		}
		public function upData($id,$data)
		{
			$sql = "UPDATE `person` SET `myMes`='" . $data . "' WHERE `id`=" . $id;
			if(mysql_query($sql,$this ->sqlCon))
			{
				mysql_close($this ->sqlCon);
				return 1;
			}
			else
			{
				mysql_close($this ->sqlCon);
				return 0;
			}

		}

		public function del($id)
		{
			$sql = "DELETE FROM `person` WHERE id = ".$id;
			if(mysql_query($sql,$this ->sqlCon))
			{
				mysql_close($this ->sqlCon);
				return 1;
			}
			else
			{
				mysql_close($this ->sqlCon);
				return 0;
			}
		}
		private function getCount()
		{
			$sql = "select count(*) from person";
			$count = mysql_query($sql,$this ->sqlCon);
			$c = mysql_fetch_array($count);
			return $c[0];
		}


	}

	$p = new personMode();
	$p ->upData(1,2);
	/**
	* 
	*/
	
	