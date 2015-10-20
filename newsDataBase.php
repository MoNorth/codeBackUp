<?php
	/**
	* 
	*/
	class newsMode
	{
		
		private $sqlCon ;
		
		function __construct()
		{
			$this ->sqlCon = mysql_connect("localhost", "wang","wang123456") or die("link error");
			mysql_select_db('missWang',$this ->sqlCon);
			mysql_set_charset('utf8');
		}


		public function add($data = '',$type = 'news')
		{
			$title = $data['title'];
			$contant = '<p>' . mb_ereg_replace('\s{1,}','</p><p>',$data['contant']) . '</p>';
			// $title = 'title';
			// $contant = 'contant';
			if($type == 'news')
				$sql = "insert into news (`title`,`contant`) values('"
					.$title."','"
					.$contant."')";
			else if($type == 'know')
				$sql = "insert into know (`title`,`contant`) values('"
					.$title."','"
					.$contant."')";
			else
				return 0;
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
		public function del($id,$type)
		{
			if($type == 'news')
				$sql = "DELETE FROM `news` WHERE id = ".$id;
			else if($type == 'know')
				$sql = "DELETE FROM `know` WHERE id = ".$id;
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

		public function get($num = 0,$count,$type = 'news')
		{
			$data = '';
			$sql = "select * from " . $type . " limit ".$num.",". $count;
			$query = mysql_query($sql,$this ->sqlCon);
			$i = 0;
			while($datas = mysql_fetch_assoc($query))
			{
				$data[$i ++] = $datas;	
			}
			
			if($count == 30||$count == 5)
				return $data;
			else
			{
				$datas['data'] = $data;
				return  json_encode($datas);	
			}
			
		}
		public function close()
		{
			mysql_close($this ->sqlCon);
		}





	}
	
	
