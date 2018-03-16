<?php
if (function_exists('throttle') === false) {

    /**
     * @param $channel
     * @param null $interval
     * @param bool $by_server
     * @return bool
     */
    function throttle($channel, $interval = null, $by_server = true)
    {
        try {
            $key = 'throttle-' . $channel;
            if ($by_server) {
                if (file_exists($file_name = public_path('host.txt'))) {
                    $key = \Illuminate\Support\Facades\File::get($file_name) . '-' . $key;
                }
            }

            if (is_null($interval)) {
                $interval = config('throttle.interval');
            }

            if (cache($key) === 'locked') {
                return false;
            }

            cache([$key => 'locked'], now()->addSeconds($interval));
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
}