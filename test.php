<?php
	class paging{
		var $url ='';
		var $perPage=12;
		var $totPage=0;
		var $curPage=1;
		
		public function initialize($params = array()){
			if(count($params)> 0){
				
				foreach($params as $key => $val){
					if(isset($this->$key)){
						$this->$key = $val;
					}
				}
			}
		}
?>
