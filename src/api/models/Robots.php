<?php

// namespace Api\Models;

// use Phalcon\Mvc\Controller;

// class Robots extends Controller
// {
//     // public function page($name = 'imran', $limit = 10, $page = 1)
//     // {
//     //     $products = array(
//     //         array('name' => $name, 'limit' => $limit, 'page' => $page),
//     //     );
//     //     return json_encode($products);
//     // }
//     public function add()
//     {
//         $insert = $this->request->getPost();
//         print_r($insert);
//         // die;
//         $data = $this->mongo->rest_api->products->insertOne([
//             'name' => $insert['name'],
//             'price' => $insert['price'],
//             'category' => $insert['category'],
//             'quantity' => $insert['quantity'],
//         ]);
//         echo "<pre>";
//         print_r($data);
//     }
//     public function page($perpage, $page, $search ='')
//     {
//         $search=$this->request->getPost();
//         $perpage;
//         $page;
//         $this->mongo->rest_api->products->findOne(['name'=>$search])

//     }
// }
