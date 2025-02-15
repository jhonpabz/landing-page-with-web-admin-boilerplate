<?php
if (!function_exists('getRandomServers')) {
    function getRandomServers($count = 5)
    {
        $serverUrls = ['test127.com', 'test124.com', 'test133.com', 'test132.com', 'test130.com', 'test128.com', 'test125.com', 'test134.com', 'test131.com', 'test129.com'];

        $selectedUrls = array_rand(array_flip($serverUrls), $count);
        return array_map(
            function ($url, $index) {
                return [
                    'id' => $index + 1,
                    'ping' => rand(5, 100) . 'ms',
                    'url' => $url,
                ];
            },
            $selectedUrls,
            array_keys($selectedUrls),
        );
    }
}
?>

<div class="bg-white flex justify-center items-center min-h-screen">
    <div id="server-container" class="w-full max-w-md space-y-4">
        <?php foreach (getRandomServers() as $server): ?>
        <div
            class="flex items-center justify-between bg-gradient-to-r from-red-500 to-red-700 p-4 rounded-xl shadow-lg text-white">
            <div class="flex items-center text-left space-x-3">
                <span
                    class="bg-yellow-300 text-gray-900 font-bold w-10 h-10 flex items-center justify-center rounded-full text-lg">
                    <?= $server['id'] ?>
                </span>
                <div>
                    <p class="text-sm font-medium">Ping: <span class="font-bold"> <?= $server['ping'] ?> </span></p>
                    <p class="text-md font-semibold"> <?= $server['url'] ?> </p>
                </div>
            </div>
            <a href="https://<?= $server['url'] ?>" target="_blank"
                class="bg-white text-red-600 px-4 py-2 rounded-full font-semibold hover:bg-gray-200 transition">Access</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
