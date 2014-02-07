<?php

class authView {

	public function show($template, $data = array()) {
		$templatePath = "views/".$template.".inc";
		
		if (file_exists($templatePath) ){
			include $templatePath;
		}//end if
	}//end show

}//end class

?>