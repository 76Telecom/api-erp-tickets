<?php

namespace Telecom76;

/**
 * Class Request cURL
 * @author @CaioAgiani
 *
 * @package 76Telecom
 */
class onCurl
{
  /**
   * @var string
   */
  private $cookie;

  /**
   * @api define settings
   */
  public function __construct($value)
  {
    $this->cookie = $value["COOKIE"];
  }

  /**
   * __contruct cUrl browser
   *
   * @param  mixed $ur, $post
   * @return array
   */
  public function Acess($url, $post = false)
  {
    if (!$post) return file_get_contents($url);

    $opts = array(
      'http' => array(
        'method' => 'POST',
        'content' => $post,
        'header' =>
        "Content-Type: application/x-www-form-urlencoded; charset=UTF-8" .
          "Accept-language: en\r\n" .
          "Cookie: " . $this->cookie . "\r\n"
      )
    );

    $context = stream_context_create($opts);

    return file_get_contents($url, false, $context);
  }
}
