<?php
				
class News
{
	/**
		* Возвращает одну новость по id
		* @param integer $id
	*/
	public static function getNewsItemById($id)
	{
		$id = intval($id);

		if($id) {

			$db = DB::getConnection();

			$newsItem = array();

			$result = $db->query("SELECT * FROM news WHERE id=$id");

			return $result->fetch(PDO::FETCH_ASSOC);
		}

	}

	/**
		* Возвращает массив элементов
		* @return array
	*/
	public static function getNewsList()
	{
		
		$db = DB::getConnection();

		$newsList = array();

		$result = $db->query('SELECT id, title, date, short_content '
			.'FROM news '
			.'ORDER BY date DESC '
			.'LIMIT 10');

		return $result->fetchAll();
	}

}