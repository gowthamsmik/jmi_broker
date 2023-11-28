<?php
include("config.php");
session_start();

$_SESSION['pageType'] = 'tools';
$_SESSION['currentPage'] = 'calendar';

$session_user = isset($_SESSION['user']) ? $_SESSION['user'] : '';

// Replace this with your logic for getting user location
$location = ''; // Replace with your logic

$stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
$stmt->bindParam(':user', $session_user);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bindParam(':userId', $user['id']);
$stmtNotificationsAll->execute();
$notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

$date = isset($_GET['date']) ? $_GET['date'] : '';

// Add your logic for handling different date options here
if (isset($_GET['date'])) {
    switch ($date) {
        case 'this-week':
            $d = strtotime("today");
            $start_week = strtotime("last sunday midnight", $d);
            $end_week = strtotime("next saturday", $d);
            break;
        case 'last-week':
            $d = strtotime("-1 week +1 day");
            $start_week = strtotime("last sunday midnight", $d);
            $end_week = strtotime("next saturday", $d);
            break;
        case 'next-week':
            $d = strtotime("+1 week -1 day");
            $start_week = strtotime("last sunday midnight", $d);
            $end_week = strtotime("next saturday", $d);
            break;
        case 'this-month':
            $d = strtotime("today");
            $start_week = strtotime("first day of this month", $d);
            $end_week = strtotime("last day of this month", $d);
            break;
        case 'last-month':
            $d = strtotime("today");
            $start_week = strtotime("first day of last month", $d);
            $end_week = strtotime("last day of last month", $d);
            break;
        case 'next-month':
            $d = strtotime("today");
            $start_week = strtotime("first day of next month", $d);
            $end_week = strtotime("last day of next month", $d);
            break;
        case 'today':
            $start_week = strtotime("today");
            $end_week = strtotime("today");
            break;
        case 'tomorrow':
            $start_week = strtotime("+1 days");
            $end_week = strtotime("+1 days");
            break;
        case 'yesterday':
            $start_week = strtotime("-1 days");
            $end_week = strtotime("-1 days");
            break;
        default:
            // Handle default case
            break;
    }

    $start = date("Y-m-d", $start_week);
    $end = date("Y-m-d", $end_week);

    $period = new DatePeriod(
        new DateTime($start),
        new DateInterval('P1D'),
        new DateTime($end)
    );

    $economic_calendar = [];
    foreach ($period as $key => $value) {
        $stmtEconomicCalendar = $conn->prepare("SELECT * FROM economic_calendar WHERE year = :year AND date_month = :dateMonth AND date_day = :dateDay");
        $stmtEconomicCalendar->bindParam(':year', $value->format('Y'));
        $stmtEconomicCalendar->bindParam(':dateMonth', date("M", $end_week));
        $stmtEconomicCalendar->bindParam(':dateDay', $value->format('d'));
        $stmtEconomicCalendar->execute();
        $economic_calendar = array_merge($economic_calendar, $stmtEconomicCalendar->fetchAll(PDO::FETCH_ASSOC));
    }
}

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
$stmtNotificationsUnseen->bindParam(':userId', $user['id']);
$stmtNotificationsUnseen->execute();
$notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

$segment = isset($_REQUEST['segment']) ? $_REQUEST['segment'] : '';


?>
