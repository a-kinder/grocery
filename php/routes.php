<?php
$webApp->get('/image', function(\Slim\Http\Response $response, \Angela\Services\GoogleImageOCR $g){
    try{
        return $response->withJson($g->getText('./files/tag.jpg'));

    } catch(\GuzzleHttp\Exception\ClientException $e) {
        return $response->withJson($e->getMessage());
    }
});

$webApp->get('/[{path:.*}]', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    return $response->withJson(['path' => $request->getUri()->getPath(), 'data' => $request->getQueryParam('data')]);
});

$webApp->post('/[{path:.*}]', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    return $response->withJson(['path' => $request->getUri()->getPath(), 'data' => $request->getParsedBody()['data']]);
});
