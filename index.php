<?php
//date_default_timezone_set('Asia/Tokyo');
class moon
{
    public const GREGORIAN = array(0, 2, 0, 2, 2, 4, 5, 6, 7, 8, 9, 10);
    public function main($year = 2012, $mon = 12, $day = 12)
    {
        $cnt=0;
        $start = base_convert(bin2hex('🌑'), 16, 10);//U+1F311
        $moon_age =[3,4,5,3,4,4,3,4];
        $moon_age_sum = $moon_age[0];
        for($i=0;$i<30;$i++){
            if($i>($moon_age_sum - 1)){
                $cnt++;
                $moon_age_sum = $moon_age_sum + $moon_age[$cnt];
            }
            $moon_emoji[] = hex2bin(base_convert(($start + $cnt), 10, 16));
        }
        return $moon_emoji[(int)(((((int)$year - 11) % 19) * 11 + static::GREGORIAN[(int)$mon - 1] + (int)$day) % 30)];
    }
}

print "moon::main(2021, 3, 31)::" . moon::main(2021, 3, 31);
