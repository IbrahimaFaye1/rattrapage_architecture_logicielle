<?php
	require_once 'ConnexionManager.php';

	/**
	 * Classe de gestion des accès aux articles
	 */
	class articleDao
	{
		private $bdd;

		public function __construct()
		{
			$this->bdd = (new ConnexionManager)->getInstance();
		}

		public function getList()
		{
			$data = $this->bdd->query('SELECT * FROM article');
			return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
		}

		public function getById($id)
		{
			$data = $this->bdd->query('SELECT * FROM article WHERE id = '.$id);
			return $data->fetch(PDO::FETCH_OBJ);
		}

		public function getByCategoryId($id)
		{
			$data = $this->bdd->query('SELECT * FROM article WHERE categorie = '.$id);
			return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
		}

		public function addArticle()
		{
			$data = $this->bdd->prepare("INSERT INTO article (titre, contenu, categorie, dateCreation, dateModification) VALUES(?, ?, ?, ?, ?)");
			$data->execute(array($_POST['titre'], $_POST['contenu'], $_POST['categorie'], NOW(), NOW()));

			return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
		}

		public function dropArticle($id)
		{
			$data = $this->bdd->query('SELECT * FROM article WHERE id = '.$id);
			return $data->fetch(PDO::FETCH_OBJ);
		}
	}
?>