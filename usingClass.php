<?php
require_once "Converter.php";
$converter = new Converter();

if (isset($_POST['type']) && isset($_POST['value'])) {
  $type = $_POST['type'];
  $value = $_POST['value'];

  if ($type == 'int') {
    $data = $converter->intToRoman((int)$value);
    $correctedValue = $converter->romanToInt($data);
  } elseif ($type == 'roman') {
    $data = $converter->romanToInt($value);
    $correctedValue = $converter->intToRoman((int)$data);
  }

  echo json_encode(['result' => $data, 'correctedValue' => $correctedValue]);
}
