<?php


namespace Modules;


class RevertCharacters
{

    public function revertCharacters(string $word): string
    {
        $revd = preg_replace_callback('#([A-Za-zА-Яа-я]+)#', function ($matches) {
            return strrev($matches[1]);
        }, $word);

        $arr = ['.', '!', '?'];
        $word = mb_strtolower($revd);
        $flag = false;

        for ($i = 0; $i < strlen($word); $i++) {
            if ($i == 0) {
                $word[$i] = mb_strtoupper($word[$i]);
            }
            else if ($flag && $word[$i] != ' ') {
                $word[$i] = mb_strtoupper($word[$i]);
                $flag = false;
            } else if (in_array($word[$i], $arr)) {
                $flag = true;
            }
        }
        return $word;
    }

}