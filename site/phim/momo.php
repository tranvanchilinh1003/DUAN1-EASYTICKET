<?php
require "../../model/seat.php";
require "../../global.php";
require "../../model/pdo.php";
require "../../model/oder.php";
 include('./helper_momo.php');


$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh Toán Qua Ví MoMo";
$amount = $_POST["total"];
$orderId = rand(00, 9999);
$redirectUrl = "http://wd18305-nhom5.demowebcantho.online/site/trang-chinh/index.php";
$ipnUrl = "http://wd18305-nhom5.demowebcantho.online/site/trang-chinh/index.php";
$extraData = "";



    $partnerCode = $partnerCode;
    $accessKey = $accessKey;
    $serectkey = $secretKey;
    $orderId = $orderId; // Mã đơn hàng
    $orderInfo =$orderInfo;
    $amount = $amount;
    $ipnUrl =$ipnUrl;
    $redirectUrl = $redirectUrl;
    $extraData = $extraData;

    $requestId = time() . "";
    $requestType = "payWithATM";
    $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $serectkey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);

$users_id = $_POST['users_id'];
$total = $_POST['total'];
$selectedSeats = $_POST['seat_number'];
$id = $_POST['cinema_halls_id'];

$result = execPostRequest($endpoint, json_encode($data));
$jsonResult = json_decode($result, true);  // decode json

//Just a example, please check more in there

header('Location: ' . $jsonResult['payUrl']);
update_seat($selectedSeats, $id);
insert_oder($total, $users_id, $id, $selectedSeats);
   
   
