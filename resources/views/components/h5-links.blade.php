<?php
$servers = [['id' => 1, 'ping' => '6ms', 'url' => 'test127.com'], ['id' => 2, 'ping' => '41ms', 'url' => 'test124.com'], ['id' => 3, 'ping' => '64ms', 'url' => 'test133.com'], ['id' => 4, 'ping' => '44ms', 'url' => 'test132.com'], ['id' => 5, 'ping' => '64ms', 'url' => 'test130.com']];
?>

<div class="flex bg-gray-900 justify-center items-center py-10">
    <div class="w-full max-w-md space-y-4">
        <?php foreach ($servers as $server): ?>
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
