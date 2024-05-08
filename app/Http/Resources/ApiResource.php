<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiResource extends JsonResource
{
    public $status;
    public $message;
    public $data;
    public $statusCode;
    public $statusMessage;
    public $headers;

    public function __construct($status, $message, $data, $statusCode, $statusMessage, $headers = []) {
        $this->status = $status;
        $this->message = $message;
        parent::__construct($data);
        $this->statusCode = $statusCode;
        $this->statusMessage = $statusMessage;
        $this->headers = $headers;
    }


    public function toArray(Request $request): array
    {
        return[
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource,
        ];
    }


    public function toResponse($request)
    {
        return response($this->toArray($request), $this->statusCode, $this->headers);
    }
}
