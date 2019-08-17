<?php

namespace JianJye\CFStream;

use GuzzleHttp\Client;

class CFStreamLaravel extends CFStream
{
    public function __construct()
    {
        parent::__construct(config('cfstream.key'), config('cfstream.zone'), config('cfstream.account'), config('cfstream.email'));
    }
}
