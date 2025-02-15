<?php
use App\Models\Link;

if (!function_exists('getRandomServers')) {
    function getRandomServers($count = 5)
    {
        // Get links from database where kind is 'btn-link', randomly select $count items
        $links = Link::where('kind', 'btn-link')->inRandomOrder()->limit($count)->get();

        return $links
            ->map(function ($link, $index) {
                return [
                    'id' => $index + 1,
                    'ping' => rand(5, 100) . 'ms',
                    'url' => $link->website,
                ];
            })
            ->all();
    }
}
?>

<div class="bg-gray-900 flex justify-center items-center min-h-screen">
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
                    <p class="text-md font-semibold">
                        <?= preg_replace('/https?:\/\//', '', rtrim($server['url'], '/')) ?> </p>
                </div>
            </div>
            <a class="btn-link" href="<?= $server['url'] ?>" target="_blank"
                class="bg-white text-red-600 px-4 py-2 rounded-full font-semibold hover:bg-gray-200 transition">Access</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
