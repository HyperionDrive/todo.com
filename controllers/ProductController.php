<?php 

class ProductController
{
	
	function actionView($id)
	{
		require_once ROOT.'/views/product/view.php';

		return true;
	}
	
}