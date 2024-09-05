<?php

// Set the number of iterations to execute
$iterations = 1000;

// Record the initial memory usage
$initialMemory = memory_get_usage();

for ($i = 0; $i < $iterations; $i++) {
    // Assume login.php is the file you want to test
    ob_start();
    include 'login.php';
    ob_end_clean();
}

// Record the final memory usage
$finalMemory = memory_get_usage();

// Calculate the memory usage difference
$memoryLeak = $finalMemory - $initialMemory;

echo "Initial Memory: " . $initialMemory . " bytes\n";
echo "Final Memory: " . $finalMemory . " bytes\n";
echo "Memory Leak: " . $memoryLeak . " bytes\n";

if ($memoryLeak > 1024 * 1024) { // Set a threshold, for example, 1MB
    echo "Memory leak detected!";
} else {
    echo "No significant memory leak detected.";
}




