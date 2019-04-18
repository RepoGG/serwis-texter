<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;
use Elastica\Client as ElasticaClient;

class ClientController extends Controller
{
    protected $elasticsearch;

    protected $elastica;
}
