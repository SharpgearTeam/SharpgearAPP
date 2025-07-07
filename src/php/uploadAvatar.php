<?php
require_once 'uploadimage.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'Método não permitido']);
  exit;
}

try {
  $url = handleAvatarUpload('imagem');
  echo json_encode(['success' => true, 'avatar_url' => $url]);
} catch (RuntimeException $e) {
  http_response_code(400);
  echo json_encode(['error' => $e->getMessage()]);
}
?>