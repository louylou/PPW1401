<?php

class dvdView { //this class is responsible for presenting the data from the model

	public function showHeader($pageTitle = '') {
	
		include "views/header.inc";
	
	}//end showHeader

	public function showFooter() {
	
		include "views/footer.inc";
	}//end showFooter
	
	public function showLatest($rows) {
		
		include "views/latestDvds.inc"; #this would be the grouphome page
		
	}//end show Latest
	
	
	public function showDetail($rows) {
		
		include "views/detail_view.inc";
		
	}//end showDetail
	
	public function show($template, $data = array()) {
		$templatePath = "views/".$template.".inc";
		
		if (file_exists($templatePath) ){
			include $templatePath;
		}//end if
	}//end show
	
}//end dvdView

?>
