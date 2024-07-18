<?php

namespace classes\FileWriter;
class FileWriter
{
    public $filename;
    public $content;

    public function __construct($filename, $content)
    {
        $this-> $filename = $filename;
        $this->content = $content;
    }
    public function writeFile($filename, $content)
    {
// Вначале убедимся, что файл существует и доступен для записи.
        if (is_writable($filename)) {

            // В примере мы открываем $filename в режиме «записи в конец».
            // Поэтому смещение установлено в конец файла и
            // значение переменной $content допишется в конец файла при вызове функции fwrite().
            if (!$fp = fopen($filename, 'a')) {
                echo "Не могу открыть файл ($filename)";
                exit;
            }

            // Записываем значение переменной $content в открытый файл.
            if (fwrite($fp, $content) === FALSE) {
                echo "Не могу произвести запись в файл ($filename)";
                exit;
            }

            echo "Ура! Записали ($content) в файл ($filename)";
            fclose($fp);
        } else {
            echo "Файл $filename недоступен для записи";
        }

    }

}