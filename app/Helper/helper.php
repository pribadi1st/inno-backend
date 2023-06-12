<?php

function responseJson($data= null, $status = 200, $message = 'success')
{
    $response = [
        'status' => $status,
        'message' => $message,
    ];

    if ($data) {
        $response['data'] = $data;
    }

    return response()->json($response);
}
