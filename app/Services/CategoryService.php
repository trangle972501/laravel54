<?php

	namespace App\Services;

	use App\Models\Category;
	use App\Reponsitories\CategoryRepository;
	use App\ModelViews\CategoryViewModel;


	/**
	* 
	*/
	class CategoryService extends BaseService implements CategoryRepository
	{
		
		function __construct($Category $model)
		{
			# code...
			parent::__construct($model);
		}
	}
?>