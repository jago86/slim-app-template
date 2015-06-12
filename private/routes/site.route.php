<?php
$app->get('/', function() use($app) {
	$dataRender['test_text'] = "Hello, I'm an app template";
	$app->render('index.twig', $dataRender);
});