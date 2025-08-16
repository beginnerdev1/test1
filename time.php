<?php
// Set the timezone to local
date_default_timezone_set('Asia/Kolkata');

// Generate hours and minutes
$hours = range(8, 17); // From 8:00 AM to 5:00 PM
$minutes = ['00', '15', '30', '45']; // Minute intervals
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Custom Time Picker</title>
</head>
<body>
    <h1>Select Custom Time</h1>
    <form action="process_time.php" method="post">
        <!-- Time Start -->
        <label for="timeStartHour">Time Start:</label>
        <select id="timeStartHour" name="timeStartHour" required>
            <?php foreach ($hours as $hour): ?>
                <option value="<?php echo $hour; ?>"><?php echo date('g A', strtotime("$hour:00")); ?></option>
            <?php endforeach; ?>
        </select>
        <select id="timeStartMinute" name="timeStartMinute" required>
            <?php foreach ($minutes as $minute): ?>
                <option value="<?php echo $minute; ?>"><?php echo $minute; ?> mins</option>
            <?php endforeach; ?>
        </select>
        
        <!-- Time Stop -->
        <label for="timeStopHour">Time Stop:</label>
        <select id="timeStopHour" name="timeStopHour" required>
            <?php foreach ($hours as $hour): ?>
                <option value="<?php echo $hour; ?>"><?php echo date('g A', strtotime("$hour:00")); ?></option>
            <?php endforeach; ?>
        </select>
        <select id="timeStopMinute" name="timeStopMinute" required>
            <?php foreach ($minutes as $minute): ?>
                <option value="<?php echo $minute; ?>"><?php echo $minute; ?> mins</option>
            <?php endforeach; ?>
        </select>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
