<?php
Library::import('recess.http.Request');

interface IController {
	function serve(Request $request);
	static function getRoutes($class);
}

?>