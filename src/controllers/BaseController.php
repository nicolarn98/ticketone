<?php

namespace App\controllers;

class BaseController {
    protected function response_ok($response, $data) {
        $data = array(
          'error' => false,
          'data' => $data,
        );

        return $response->withJson($data);
    }

    protected function response_bad($response, $message, $code) {
        $data = array(
            'error' => array(
                'message' => $message,
                'code' => $code
            ),
            'data' => false,
        );

        return $response->withJson($data);
    }
}
