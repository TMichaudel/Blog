<?php
 
	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);

class Article
{
	private $_IDarticle;
	private $_titreArticle;
	private $_contenuArticle;
	private $_imageArticle;
	private $_noteArticle;
	private $_dateArticle;
	private $_publieurArticle;
	
	public function __construct ($IDarticle, $titreArticle, $contenuArticle, $imageArticle, $noteArticle, $publieurArticle, $dateArticle)
	{
		$this->_IDarticle = $IDarticle;
		$this->_titreArticle = $titreArticle;
		$this->_contenuArticle = $contenuArticle;
		$this->_imageArticle = $imageArticle;
		$this->_noteArticle = $noteArticle;
		$this->_publieurArticle = $publieurArticle;
		$this->_dateArticle = $dateArticle;
		
	}
	
	public function getIDarticle ()
	{
		return $this->_IDarticle;
	}
	
	public function setIDarticle ($IDarticle)
	{
		$this->_IDarticle = $IDarticle;
	}
	
	public function getTitreArticle ()
	{
		return $this->_titreArticle;
	}
	
	public function setTitreArticle ($titreArticle)
	{
		$this->_titreArticle = $titreArticle;
	}
	
	public function getContenuArticle ()
	{
		return $this->_contenuArticle;
	}
	
	public function setContenuArticle ($contenuArticle)
	{
		$this->_contenuArticle = $contenuArticle;
	}
	
	public function getImageArticle ()
	{
		return $this->_imageArticle;
	}
	
	public function setImageArticle ($imageArticle)
	{
		$this->_imageArticle = $imageArticle;
	}
	
	public function getNoteArticle ()
	{
		return $this->_noteArticle;
	}
	
	public function setNoteArticle ($noteArticle)
	{
		$this->_noteArticle = $noteArticle;
	}
	
	public function getPublieurArticle ()
	{
		return $this->_publieurArticle;
	}
	
	public function setPublieurArticle ($publieurArticle)
	{
		$this->_publieurArticle = $publieurArticle;
	}
	
	public function getDateArticle ()
	{
		return $this->_dateArticle;
	}
	
	public function setDateArticle ($dateArticle)
	{
		$this->_dateArticle = $dateArticle;
	}
	public function __toString()
	{
		return "
		<div id='titre'>".$this->getTitreArticle()."<br/></div>
		<div id='article'>
			<img src=".$this->getImageArticle()." alt='text'/>
		</div>
			".$this->getContenuArticle()."
		
		<br/>
		Publie par ".$this->getPublieurArticle()." le ".$this->getDateArticle()." <br/>";
	}
}
?>
