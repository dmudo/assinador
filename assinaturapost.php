<?php
//Header informando que é uma imagem JPEG
/*header( 'Content-type: image/jpeg');*/
header('Content-Disposition: form-data; filename="assinatura.jpeg"');


// Carregar imagem já existente no servidor
$im = imagecreatefromjpeg( "assinatura.jpeg" );
/* @Parametros
 * "foto.jpg" - Caminho relativo ou absoluto da imagem a ser carregada.
 */
/*$im = imagecreate(400, 30);*/
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 12, 0);
/*$texto = "faael webmaster";*/ 
/*$font = 'SegoeBold.ttf';*/
$font = dirname(__FILE__) . "/SegoeBold.ttf";
$font1 = dirname(__FILE__) . "/segoe.otf";
/* $font = 'arial.ttf'; */

$nome = ( $_POST['nome'] );


$celular = urldecode( $_POST['celular'] );
$departamento0 = ( $_POST['departamento0'] );
$departamento = ( $_POST['departamento'] );
$departamento1 = ( $_POST['departamento1'] );
$departamento2 = ( $_POST['departamento2'] );
$departamento3 = ( $_POST['departamento3'] );
$departamento4 = ( $_POST['departamento4'] );
$departamento5 = ( $_POST['departamento5'] );
$departamento6 = ( $_POST['departamento6'] );
$departamento7 = ( $_POST['departamento7'] );
$departamento8 = ( $_POST['departamento8'] );



imagettftext($im, 20, 0, 30, 43, $black, $font, $nome );
imagettftext($im, 15, 0, 30, 92, $black, $font1, $departamento0 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento1 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento2 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento3 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento4 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento5 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento6 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento7 );
imagettftext($im, 17, 0, 30, 68, $black, $font1, $departamento8 );
imagettftext($im, 15, 0, 30, 118, $black, $font1, $celular );


imagejpeg($im); 
imagedestroy($im);

 
// eEnvia a imagem para o borwser ou arquivo
imagejpeg( $imagem, NULL, 100 );
/* @Parametros
 * $imagem - Imagem previamente criada Usei imagecreatefromjpeg
 * NULL - O caminho para salvar o arquivo.
          Se não definido NULL a imagem será mostrado no browser.
 * 80 - Qualidade da compresão da imagem.
 */



