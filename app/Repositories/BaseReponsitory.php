
<?php
	namespace App\Reponsitories;

	interface BaseRepository
	{
		function getAll();

		Function getById();

		function create(array $attributes);

		function update($id, array $attributes);

		function delete($id);
	}
?>