<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('return_json'))
{
    function return_json($data = NULL, $http_code = 200, $exit = true)
    {
        $output = json_encode($data, JSON_UNESCAPED_UNICODE);
        set_status_header($http_code);
        header('Content-Type: application/json; charset=utf-8');
        header('Content-Length: ' . strlen($output));
        echo $output;
        if ($exit)
        {
            exit;
        }
    }
}
