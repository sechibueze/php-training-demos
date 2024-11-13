<?php

function generateTimeSlots($startTime, $endTime, $interval) {
    try {
        $start = new DateTime($startTime);
        $end = new DateTime($endTime);
    } catch (Exception $e) {
        return ["Error: Invalid time format."];
    }

    if ($start >= $end) {
        return ["Error: Start time must be earlier than end time."];
    }

    if ($interval <= 0) {
        return ["Error: Interval must be a positive number."];
    }

    $interval = new DateInterval("PT{$interval}M"); 
    $slots = []; 

    
    while ($start < $end) {
        $slotStart = $start->format('g:i A'); 
        $start->add($interval); // Move to the end of the slot
        $slotEnd = $start->format('g:i A'); 

        if ($start <= $end) {
            $slots[] = "$slotStart - $slotEnd";
        }
    }

    if (empty($slots)) {
        return ["No available slots for the given interval."];
    }

    return $slots;
}

// Example usage
$startTime = "9:00";
$endTime = "15:00";   
$interval = 19;      

$availableSlots = generateTimeSlots($startTime, $endTime, $interval);

// Display available time slots
foreach ($availableSlots as $slot) {
    echo $slot . "<br>";
}
?>
