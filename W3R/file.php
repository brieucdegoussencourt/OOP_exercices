<?php
declare(strict_types=1);
//Write a PHP class called 'File' with properties like 'name' and 'size'.
//Implement a static method to calculate the total size of multiple files
class File
{
    public string $name;
    private int $size;

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

//Create 10 instances of the 'File' class with the name 'file#' and size 100.
$files = [];
for ($i = 1; $i <= 10; $i++) {
    $files[] = new File("file$i", 100);
} 

//Output the total number of the files.
echo "The total number of files is " . count($files) . ". <br>";
//Output the total size of the files.
echo "The total size of the files is " . File::calculateTotalSize($files) . " bytes. <br>";
