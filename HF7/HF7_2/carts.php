<?php


$url = 'https://fakestoreapi.com/carts/user/1';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
print_r($response_json);
$carts=$response;

$url1 = 'https://fakestoreapi.com/products';
$ch = curl_init($url1);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json1 = curl_exec($ch);
curl_close($ch);
$response1 = json_decode($response_json1, true);
//print_r($response_json1);
$products=$response1;
$sum=0;

foreach ($carts as $cart){
    foreach ($cart['products'] as $cartitem){
        foreach ($products as $product){
            if ($cartitem['productId']==$product['id']){
                $sum+=$product['price']*$cartitem['quantity'];

            }
        }
    }
}
echo $sum;






