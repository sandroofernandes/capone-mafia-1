<?php

namespace app\classes;

class Utils
{
  public static function deleteFilesAndDir($dir)
  {
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
      (is_dir("$dir/$file")) ? self::deleteFilesAndDir("$dir/$file") : @unlink("$dir/$file");
    }
    return @rmdir($dir);
  }

  public static function cleanString($string)
  {
    $chars = array(
      '(' => '', ')' => '', '[' => '', ']' => '', '{' => '', '}' => '', '/' => '', '\\' => '', '-' => '', ' ' => ''
    );
    return strtolower(strtr($string, $chars));
  }

  public static function makeSlug($string)
  {
    $chars = array(
      '(' => '', ')' => '', '[' => '', ']' => '', '{' => '', '}' => '', '/' => '', '\\' => '', '-' => '', ' ' => '-'
    );
    return strtolower(strtr($string, $chars));
  }

  public static function makeJsonUrl($string)
  {
    $chars = array(
      '/' => '\/', '//' => '\/\/'
    );
    return strtolower(strtr($string, $chars));
  }

  public static function cleanAndShortString($string, $limitCharInit, $limitCharEnd)
  {
    $chars = array(
      'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z', 'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c',
      'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
      'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
      'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
      'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
      'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
      'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
      'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r',
    );

    $punctuationAndSymbols = array(
      '/' => '', '\\' => '', '|' => '', '(' => '', ')' => '', '{' => '', '}' => '', '[' => '', ']' => '', '<' => '', '>' => '',
      '-' => '', '_' => '', '+' => '', '"' => '', "'" => '', '*' => '', '#' => '', '=' => '', ',' => '', ';' => '', ':' => '',
      '.' => '', '¨' => '', '?' => '', '!' => '', '@' => '', '$' => '', '%' => '', '&' => '', '©' => '', 'ª' => '', 'º' => '',
      '°' => '', '™' => '', '®' => '', '©' => '',
    );

    // Limpa o texto / Acentuação
    $cleanAccentuation = strtr($string, $chars);

    // Limpa o texto / Pontuação
    $clean = strtr($cleanAccentuation, $punctuationAndSymbols);

    return substr($clean, $limitCharInit, $limitCharEnd);
  }
}
