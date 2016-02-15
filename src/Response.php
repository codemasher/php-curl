<?php
/**
 * Class Response
 *
 * @filesource   Response.php
 * @created      13.02.2016
 * @package      chillerlan\TinyCurl
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2016 Smiley
 * @license      MIT
 */

namespace chillerlan\TinyCurl;

/**
 *
 */
class Response extends ResponseBase implements ResponseInterface{

	/**
	 * Response constructor.
	 *
	 * @param resource $curl
	 */
	public function __construct($curl){
		parent::__construct($curl);

		$this->response_body = curl_exec($this->curl);
		$this->getInfo();
		curl_close($this->curl);
	}

}
