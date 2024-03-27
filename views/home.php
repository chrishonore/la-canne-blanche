<?php
$results = [
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVqWVujN-BUQ3oO2xdbXelb4V7h2QClUdrE8scrOgUgvudpSpGKkyQKsHbymxSenhNrns7MjIO8Hc2g6FRU1N_frvvjut5ogx5ezbYTYkvqaFd1yHYe1gm-iE6EsgnCLpIOK.jpg?r=c62'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABfQuNegkrQOd5GujjowtDNNRnwr8HhNN0Qb0miAIPOFgee4jhCTxOIWgoOTZp2r6MH3JOt4Of9a8KzGBqbZePpgFvJaO0FytPuk.webp?r=3f6'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVuuY6ld3ibuFxrr7RKGRLdqcMdZLV2zkfQKRJNtD0xPv3ce6zuFhrvLCEghwb8UcxCxoIJYLB9OtuHFe8oWqxI-avcpdEwDlsMAHJDUmYIkGknA-RXngXFywFRsEo1M7SIl.jpg?r=3c9'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABbN-fvG60EWJXh7libv67ZQakx4P4FpNS7RURBpxS-UtadwVQKtY-8Hq7CA4QwaU5lpaZzmadF0YzQqVZXQG9mDZtG5MFZXxjNoBQ7LjQWO6Q17lS1nzCDEPEvykniaxWBz1.jpg?r=a62'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABTrUU544o2L_TjDTvDpJhRP1PhAygf2v-pzBzuC2eA1CMEIIjNhY4-JiTXctVClZqAwS_2hIl-Fs4cPkGRFKAYBr-jpyDZ6HB8JtZG0tqD4zVm26vKZo_sZdZUxN22hcFef9UmeFN77ZasyRAcqUNKB0899-u5LuNiSnOMjDzFzEW70M21VcWOgjnzjlyA4.jpg?r=0e8'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABV263NtsJhWS_LDFwqXe9uihmKABVMfxpC9eAE6ZZf9x2eAYavXoWsxdCr-9N4Fa23BySPhgfj4mNpn_lDwAQG2yUmMHusPgxjk.webp?r=0cd'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABbdXyznY6WSOmldYAGYKOYL5K_2ZThLIqKK5XYEfJUThlLqYk-pGQ-QnYa4rZ_Gh5inXYq2e0sU89J5BivG2MvQd91NV4dqBIpbGt7oWgvyG1NNOt5TDf4zd95qbPekn2cPb.jpg?r=1cd'],
    ['title' => 'Game Of Throne', 'image' => 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABd3FkLtrglDNJ6G9zGQQBeejORh9L0ivPdliJV_Xefg4Z9VWXLEiwWRvvs5zodeoF7YCy5lCzuUUi5RQSn-YJ5kIBpDid2VFPIvvFPEEfbpnAi4LnVzagujhQH1joSf1Wydw.jpg?r=97c'],
];

?>

<div class="home">
    <div class="banner-image">
    </div>

    <section class="items-container p-5">
        <h1 class="mb-3 text-white-50">Les meilleurs titres du moment !</h1>

        <div class="row g-3">
            <?php foreach ($results as $result): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                    <article class="item-card h-100">
                        <img width="430" class="img-fluid rounded-4" src="<?= htmlspecialchars($result['image'], ENT_QUOTES, 'UTF-8') ?>" alt="" style="min-width: 150px;">
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>
