
<?php
// require_once "pdo.php";

function check_cinema($cinema_halls_id)
{
    $sql = "SELECT cinema_halls_id FROM `seats` WHERE cinema_halls_id = '$cinema_halls_id'";
    return  pdo_query_one($sql);
}
function seat_all()
{
    $sql = "SELECT seats.*, cinema_halls.hall_name, movies.name_movie FROM `seats` JOIN cinema_halls JOIN movies  WHERE seats.cinema_halls_id = cinema_halls.id AND cinema_halls.movies_id = movies.id";
    return pdo_query($sql);
}
function seat_id()
{
    $sql = "SELECT seats.*, cinema_halls.hall_name, movies.name_movie FROM `seats` JOIN cinema_halls JOIN movies  WHERE seats.cinema_halls_id = cinema_halls.id AND cinema_halls.movies_id = movies.id ";
    return pdo_query_one($sql);
}

function seat_a($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'A%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}

function seat_b($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'B%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_c($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'C%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_d($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'D%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_e($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'E%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_f($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'F%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_g($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'G%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_h($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'H%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_i($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'I%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_j($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'J%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}
function seat_k($id)
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'K%' AND cinema_halls_id  = $id";
    return pdo_query($sql);
}

function insert_seat($cinema_halls_id)
{
    $seatData = array();

    // Vòng lặp cho ghế A, B, C (17 ghế giá 45)
    for ($i = 1; $i <= 17; $i++) {
        $seatData[] = array('A' . $i, 45, $cinema_halls_id);
        $seatData[] = array('B' . $i, 45, $cinema_halls_id);
        $seatData[] = array('C' . $i, 45, $cinema_halls_id);
    }

    // Vòng lặp cho ghế D, E (17 ghế giá 80)
    for ($i = 1; $i <= 17; $i++) {
        $seatData[] = array('D' . $i, 80, $cinema_halls_id);
        $seatData[] = array('E' . $i, 80, $cinema_halls_id);
    }

    // Vòng lặp cho ghế E, F, G, H, I (15 ghế giá 80)
    for ($i = 1; $i <= 15; $i++) {
        
        $seatData[] = array('F' . $i, 80, $cinema_halls_id);
        $seatData[] = array('G' . $i, 80, $cinema_halls_id);
        $seatData[] = array('H' . $i, 80, $cinema_halls_id);
        $seatData[] = array('I' . $i, 80, $cinema_halls_id);
    }

    for ($i = 1; $i <= 15; $i++) {
        $seatData[] = array('J' . $i, 45, $cinema_halls_id);
        $seatData[] = array('K' . $i, 45, $cinema_halls_id);
    }

    foreach ($seatData as $seat) {
        $seat_number = $seat[0];
        $stiff_price = $seat[1];

        $sql = "INSERT INTO `seats`(`seat_number`, `stiff_price`, `cinema_halls_id`) VALUES ('$seat_number', $stiff_price, $cinema_halls_id)";
        pdo_execute($sql);
    }
}


