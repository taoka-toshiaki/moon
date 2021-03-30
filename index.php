<?php
//date_default_timezone_set('Asia/Tokyo');
class moon
{
    public const GREGORIAN = array(0, 2, 0, 2, 2, 4, 5, 6, 7, 8, 9, 10);
    public function main($year = 2012, $mon = 12, $day = 12)
    {
        $ICON = (object) [
            (object) ["moon" => '🌑'], //朔
            (object) ["moon" => '🌑'], //朔
            (object) ["moon" => '🌑'], //朔
            (object) ["moon" => '🌒'], //三日月
            (object) ["moon" => '🌒'], //三日月
            (object) ["moon" => '🌒'], //三日月
            (object) ["moon" => '🌒'], //三日月
            (object) ["moon" => '🌓'], //上弦の月',
            (object) ["moon" => '🌓'], //上弦の月',
            (object) ["moon" => '🌓'], //上弦の月',
            (object) ["moon" => '🌓'], //上弦の月',
            (object) ["moon" => '🌓'], //上弦の月',
            (object) ["moon" => '🌔'], //十三夜月
            (object) ["moon" => '🌔'], //十三夜月
            (object) ["moon" => '🌔'], //十三夜月
            (object) ["moon" => "🌕"], //望月
            (object) ["moon" => "🌕"], //望月
            (object) ["moon" => "🌕"], //望月
            (object) ["moon" => "🌕"], //望月
            (object) ["moon" => "🌖"], //寝待月
            (object) ["moon" => "🌖"], //寝待月
            (object) ["moon" => "🌖"], //寝待月
            (object) ["moon" => "🌖"], //寝待月
            (object) ["moon" => '🌗'], //下弦の月
            (object) ["moon" => '🌗'], //下弦の月
            (object) ["moon" => '🌗'], //下弦の月
            (object) ["moon" => "🌘"], //二十六夜月
            (object) ["moon" => "🌘"], //二十六夜月
            (object) ["moon" => "🌘"], //二十六夜月
            (object) ["moon" => "🌘"] //二十六夜月
        ];      
        return $ICON->{(int)(((((int)$year - 11) % 19) * 11 + static::GREGORIAN[(int)$mon - 1] + (int)$day) % 30)}->moon;
    }
}

print "moon::main(2021, 3, 31)::" . moon::main(2021, 3, 31);
