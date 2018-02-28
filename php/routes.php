<?php

$webApp->get('/[{path:.*}]', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    return $response->withJson(['path' => $request->getUri()->getPath(), 'data' => $request->getQueryParam('data')]);
});

$webApp->post('/[{path:.*}]', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    return $response->withJson(['path' => $request->getUri()->getPath(), 'data' => $request->getParsedBody()['data']]);
});
