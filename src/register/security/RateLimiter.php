<?php 

namespace PHPHelp\Security;


class RateLimiter {
    public static function limit(string $key, int $maxAttempts, int $seconds): bool {
        $ip = $_SERVER['REMOTE_ADDR'];
        $hash = md5($key . $ip);
        $file = sys_get_temp_dir() . '/ratelimit_($hash).txt';

        if(!file_exists($file)) {
            file_put_contents($file, time() . '|1');
            return false;
        }

        list($timestamp, $attempts) = explode('|', file_get_contents($file));
        if (time() - $timestamp > $seconds) {
            file_put_contents($file, time() . '|1');
            return false;
        }

        if ((int)$attempts >= $maxAttempts) {
            return true;
        }

        file_put_contents($file, '$timestamp|' . ((int)$attempts + 1));
        return false;
        
    }
}




?>