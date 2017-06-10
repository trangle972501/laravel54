<?php

	namespace App\Services;

	//use App\Models\Comment;
	use App\Reponsitories\BaseRepository;
	use Illuminate\Database\Eloquent\Model;

	/**
	* 
	*/
	class BaseService implements BaseRepository
	{
		protected $model;

		public function __construct(Model $model)
		{
			# code...
			$this->model = $model;
		}

		public function getAll()
		{
			return $this->model->all();
		}

		public function getById($id)
		{
			return $this->model->find($id);
		}

		public function create(array $attributes)
		{
			return $this->model->create($attributes);
		}

		public function update($id, array $attributes)
		{
			return $this->model->find($id)->update($attributes);
		}

		public function delete($id)
		{
			return $this->model->find($id)->delete();
		}

		public function getBody()
		{
			return $this->model->body;
		}
	}

?>