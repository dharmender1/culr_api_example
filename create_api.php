<?php

//header("Access-Control-Allow-Origin: *");

class getVaultSecret {

    private $db;
    private $requestMethod;
    private $userId;
    // private $personGateway;
    public function __construct($db, $requestMethod, $userId)
    {
        echo $this->db = $db;
        echo $this->requestMethod = $requestMethod;
        $this->userId = $userId;
        // $this->personGateway = new PersonGateway($db);
    }
    public function processRequest($database)
    {
        echo $this->db = $database;
        echo $this->requestMethod;
        echo $this->userId;
        // $result = $this->personGateway->findAll();
        // $response['status_code_header'] = 'HTTP/1.1 200 OK';
        // $response['body'] = json_encode($result);
        // return $response;
    }

    public function read()
    {
        // echo $this->db = $database;
        // echo $this->requestMethod;
        // echo $this->userId;
        // $result = $this->personGateway->findAll();
        // $response['status_code_header'] = 'HTTP/1.1 200 OK';
        // $response['body'] = json_encode($result);
        // return $response;


        $result = '{
            "id": 10,
            "title": "HP Pavilion 15-DK1056WM",
            "description": "HP Pavilion 15-DK1056WM Gaming...",
            "price": 1099,
            "discountPercentage": 6.18,
            "rating": 4.43,
            "stock": 89,
            "brand": "HP Pavilion",
            "category": "laptops",
            "thumbnail": "https://i.dummyjson.com/data/products/10/thumbnail.jpeg",
            "images": [
              "https://i.dummyjson.com/data/products/10/1.jpg",
              "https://i.dummyjson.com/data/products/10/2.jpg",
              "https://i.dummyjson.com/data/products/10/3.jpg",
              "https://i.dummyjson.com/data/products/10/thumbnail.jpeg"
            ]
          }';

          return $result;	

    }

}
// $obj = new PersonController("DB Connection", "Req Method", "User id");
// $obj->processRequest("database");


?>