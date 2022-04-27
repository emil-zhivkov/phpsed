<?php
namespace Emo\Sed;

use function PHPUnit\Framework\throwException;

class Sed
{

    /**
     * @param $search
     * @param $replace
     * @param $file
     */
    public function substitude($search, $replace, $file)
    {
        /**
         * Check if search string is empty
         */
        $this->validate('search',$search);

        /**
         * Check if search replace is empty
         */
        $this->validate('replace',$replace);

        /**
         * Check for file existing and file is writable
         */
        $this->validateFile($file);

        /**
         * exec command
         */
        exec("sed -i 's/".$search."/".$replace."/' ". $file);

    }

    /**
     * @param $string
     */
    protected function validate($arg, $string)
    {
        if (empty($string)) {
            throw new \Exception($arg . ' string is empty');
        }
    }


    /**
     * @param $file
     */
    protected function validateFile($file){
        if (!file_exists($file)) {
            die($file.' not exists');
        }

        if (!is_writable($file)){
            die($file.' id not writable');
        }
    }
}