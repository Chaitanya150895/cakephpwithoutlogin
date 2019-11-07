<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class DetailsController extends AppController
{
   public $paginate = [
       'page' => 1,
       'limit' => 150,
       'maxLimit' => 150,
       'sortWhitelist' => [
           'id', 'name'
       ]
   ];
}