<?php
namespace controllers;

class TextController{

  private static $dir = "text";

  public static function readDataFromFile($fileName) {
    $filePath = self::$dir . "/" . $fileName;
    return explode(PHP_EOL, file_get_contents($filePath));
}

public static function writeDataToFile($fileName, $text) {
    $filePath = self::$dir . "/" . $fileName;
    file_put_contents($filePath, $text . PHP_EOL, FILE_APPEND);
}

}
