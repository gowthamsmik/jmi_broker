<?php

include("config.php");
session_start();

$_SESSION['pageType'] = 'tools';
$_SESSION['currentPage'] = 'heatmap';
$sessionUser = $_SESSION['user'];
$location = "";

$stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
$stmt->bindParam(':user', $sessionUser);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bindParam(':userId', $user['id']);
$stmtNotificationsAll->execute();
$notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
$stmtNotificationsUnseen->bindParam(':userId', $user['id']);
$stmtNotificationsUnseen->execute();
$notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

$client = new \GuzzleHttp\Client();

$crawler = $client->request('GET', 'https://www.investing.com/tools/currency-heatmap');

$heatmap0 = $crawler->filter('div.wrapper > section#leftColumn')->each(function ($node) {
    return $node->html();
});

$heatmap = $heatmap0[0];

if ($_SERVER['REQUEST_URI'] == '/ar') {
    $client = new \GuzzleHttp\Client();

    $crawler = $client->request('GET', 'https://sa.investing.com/tools/currency-heatmap');

    $heatmap0 = $crawler->filter('div.wrapper > section#leftColumn')->each(function ($node) {
        return $node->html();
    });

    $heatmap = $heatmap0[0];
}
?>
