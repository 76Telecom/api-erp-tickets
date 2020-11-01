<?php

namespace Telecom76;

/**
 * @author @CaioAgiani
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
   * @param  mixed $ur, $post
   * @return array
   */
  public function Acess($url, $post = false)
  {
    if (!$post) return file_get_contents($url);

    $options = [
      'http' => [
        'method' => 'POST',
        'content' => $post,
        'header' =>
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' .
          'Accept-language: en\r\n' .
          'Cookie: ' . $this->cookie . '\r\n'
      ]
    ];

    $request = stream_context_create($options);

    return file_get_contents($url, false, $request);
  }
}
