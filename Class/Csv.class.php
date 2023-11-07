<?php
class Csv
{
    private $csvFileContent;

    public function saveFile($csvFileContent)
    {
        if (isset($_GET['csv'])) {
            touch("mesajlar.csv");
            $file = fopen("mesajlar.csv", "wbt");
            foreach ($csvFileContent as $csv) {
                fwrite($file, $csv);
            }
            fclose($file);
        }
        $GLOBALS['file'] = "mesajlar.csv";

        return $GLOBALS['file'];
    }
}