<?php
declare(strict_types=1);
//Write a PHP class called 'File' with properties like 'name' and 'size'.
//Implement a static method to calculate the total size of multiple files
class File
{
    public string $name;
    public int $size;

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public static function calculateTotalSize(array $files): int
    {
        $totalSize = 0;
        foreach ($files as $file) {
            $totalSize += $file->size;
        }
        return $totalSize;
    }
}

// Create 10 instances of the 'File' class with the name 'file#' and a random size between 1 and 10000.
$files = [];
for ($i = 1; $i <= 10; $i++) {
    $files[] = new File("file$i", rand(1, 10000));
}

// Output the details of each file.
echo "FILE DETAILS: <br>";
echo "<pre>";
foreach ($files as $file) {
    echo "File name: " . $file->name . ", Size: " . $file->size . " bytes. <br>";
}
echo "</pre>";

// Output the total number of the files.
echo "TOTAL NUMBER OF FILES:";
echo "<pre>";
echo "The total number of files is " . count($files) . ". <br>";
// Output the total size of the files.
echo "The total size of the files is " . File::calculateTotalSize($files) . " bytes. <br>";
echo "</pre>";

// Output $files array content
echo "FILES[] CONTENT:  <br>";
echo "<pre>";
echo print_r($files, true);
echo "</pre>";