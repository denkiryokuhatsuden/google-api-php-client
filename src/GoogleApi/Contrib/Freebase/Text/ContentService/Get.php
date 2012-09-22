<?php 

namespace GoogleApi\Contrib\Freebase\Text\ContentService;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Get extends Model
{
	public $result;
	
	/**
	 * @param string $result
	 */
	public function setResult($result)
	{
		$this->result = $result;
	}
	
	/**
	 * @return string
	 */
	public function getResult()
	{
		return $this->result;
	}
}
