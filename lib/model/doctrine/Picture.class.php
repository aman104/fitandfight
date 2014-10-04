<?php

/**
 * Picture
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ramaform
 * @subpackage model
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Picture extends BasePicture
{

	public function save(Doctrine_Connection $conn = null)
	{
		$picture = parent::save();

		$this->generateThumbnails();

		return $picture;
	}

	public function delete(	Doctrine_Connection $conn = null, $force = false)
	{
		@unlink($this->getPath(false, true));
		@unlink($this->getPath('min', true));
		@unlink($this->getPath('max', true));

		$gallery = $this->getGallery();

		parent::delete();

		if( ! $force)
		{
			$pictures = $gallery->getPictures();
			if(count($pictures) > 0)
			{
				$pictures[0]->setIsDefault(true);
				$pictures[0]->save();
			}
		}

		return true;
	}

	public function generateThumbnails()
	{
		$thumbnail = new sfThumbnail(150, 150, true, false, 100, 'sfImageMagickAdapter');
		$thumbnail->loadFile($this->getPath(false, true));
		$thumbnail->save(sfConfig::get('sf_upload_dir').'/thumbnails/min/'.$this->getFile()); 
		chmod(sfConfig::get('sf_upload_dir').'/thumbnails/min/'.$this->getFile(), 0777);

		$thumbnail = new sfThumbnail(800, 600, true, false, 100, 'sfImageMagickAdapter');
		$thumbnail->loadFile($this->getPath(false, true));
		$thumbnail->save(sfConfig::get('sf_upload_dir').'/thumbnails/max/'.$this->getFile()); 
		chmod(sfConfig::get('sf_upload_dir').'/thumbnails/max/'.$this->getFile(), 0777);
	}

	public function getPath($thumb = false, $absolute = false)
	{

		$prefix = ($absolute) ? sfConfig::get('sf_upload_dir') : '/uploads';

		if($thumb)
		{
			return $prefix.'/thumbnails/'.$thumb.'/'.$this->getFile();
		}
		else
		{
			return $prefix.'/pictures/'.$this->getFile();	
		}
		
	}
}