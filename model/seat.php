
<?php
function seat_all()
{
    $sql = "SELECT * FROM seats";
    return pdo_query($sql);
}

function seat_a()
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'A%'";
    return pdo_query($sql);
}

function seat_b()
{
    $sql = "SELECT * FROM `seats` WHERE seat_number LIKE 'B%'";
    return pdo_query($sql);
}
function insert_seat($seat_number, $stiff_price, $cinemas_halls_id)
{
    $seatData = array();

    // Vòng lặp cho ghế A, B, C (17 ghế giá 45)
    for ($i = 1; $i <= 17; $i++) {
        $seatData[] = array('A' . $i,  45, $cinemas_halls_id);
        $seatData[] = array('B' . $i,  45, $cinemas_halls_id);
        $seatData[] = array('C' . $i,  45, $cinemas_halls_id);
    }
    // Vòng lặp cho ghế D, E (17 ghế giá 80)
    for ($i = 1; $i <= 17; $i++) {
        $seatData[] = array('D' . $i,  80, $cinemas_halls_id);
        $seatData[] = array('E' . $i,  80, $cinemas_halls_id);
    }
    
    // Vòng lặp cho ghế E, F, G, H, I (15 ghế giá 80)
    for ($i = 1; $i <= 15; $i++) {
        $seatData[] = array('E' . $i, 80, $cinemas_halls_id);
        $seatData[] = array('F' . $i, 80, $cinemas_halls_id);
        $seatData[] = array('G' . $i, 80, $cinemas_halls_id);
        $seatData[] = array('H' . $i, 80, $cinemas_halls_id);
        $seatData[] = array('I' . $i, 80, $cinemas_halls_id);
    }
    for ($i = 1; $i <= 15; $i++) {
        $seatData[] = array('J' . $i, 80, $cinemas_halls_id);
        $seatData[] = array('K' . $i, 80, $cinemas_halls_id);
        
    }
    $sql = "INSERT INTO `seats`( `seat_number`, `stiff_price`, `$cinemas_halls_id`) 
VALUES ('$seat_number','$stiff_price','$cinemas_halls_id')";
    
    foreach ($seatData as $sql) {
        // $stmt->execute($seat);
        pdo_execute($sql);
    }
}

