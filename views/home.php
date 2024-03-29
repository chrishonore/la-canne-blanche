<?php include 'script/getSeries.php'; ?>

<div class="home">
    <div class="banner-image d-flex">
        <aside class="p-5 mb-5 col-xl-7 col-lg-9 col-md-10 col-sm-12">
            <img draggable="false" width="400" src="https://img1.psthc.fr/3567/00_547f822774570.PNG" alt="" class="img-fluid">
            <p class="ps-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magnam repudiandae tempore. Ad dolorem, enim facere fuga illo iusto magnam nemo numquam obcaecati quisquam! A aliquam corporis, culpa delectus dignissimos dolorem esse facilis id ipsa ipsam ipsum optio reiciendis rem sunt suscipit ut veritatis? Aliquam dolorem enim harum necessitatibus quod sequi velit. Adipisci alias animi dolores eius hic impedit non omnis repellendus sint veritatis.tur vero voluptatum! Consequuntur iste laborum similique?</p>

            <button class="btn btn-info px-3 py-2 ms-3 mt-3 rounded-0">Où regarder ?</button>
            <button class="btn btn-outline-info px-3 py-2 ms-3 mt-3 rounded-0">Plus d'infos</button>
        </aside>
    </div>

    <section class="items-container p-5">
        <h1 class="mb-3 text-white-50">Les meilleurs titres du moment !</h1>

        <div class="row g-3">
            <?php foreach ($final as $index => $result): ?>
                <article class="col-6 col-md-4 col-lg-3 col-xl-3">
                    <img width="430" class="item-card img-fluid rounded-4 user-select-none" draggable="false"
                         src="<?= htmlspecialchars($result['image'], ENT_QUOTES, 'UTF-8') ?>"
                         alt="" style="min-width: 150px;"
                         data-bs-toggle="modal" data-bs-target="#modal"
                         onclick="showModal(<?= $index; ?>)">
                </article>
            <?php endforeach; ?>
        </div>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-dark p-0">
                    <button type="button" class="position-absolute end-0 m-3 text-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img width="100%" id="modalImage" src="" alt="" class="img-fluid">
                    <div class="p-3">
                        <h3 class="btn btn-dark rounded-5 px-2 py-1 text-white-50 float-end">Policier</h3>
                        <h2 class="modal-title py-2" id="modalTitle">Titre</h2>
                        <p class="py-3 ps-1" id="modalDesc">Description</p>

                        <table class="table table-dark table-responsive">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th class="text-center">Disponible</th>
                                    <th class="text-end">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a class="text-decoration-none" href="https://www.netflix.com/" target="_blank">
                                        <span class="pe-0 material-symbols-outlined">explore</span> Netflix
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span id="netflix" class="material-symbols-outlined">check_circle</span>
                                </td>
                                <td class="text-end">Abonnement</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="text-decoration-none" href="https://tv.apple.com/" target="_blank">
                                        <span class="pe-0 material-symbols-outlined">explore</span> Apple Tv
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span id="appletv" class="material-symbols-outlined">check_circle</span>
                                </td>
                                <td class="text-end">Achat / Louer</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="text-decoration-none" href="https://primevideo.com" target="_blank">
                                        <span class="pe-0 material-symbols-outlined">explore</span> Amazon Prime
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span id="prime" class="material-symbols-outlined">check_circle</span>
                                </td>
                                <td class="text-end">Abonnement</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="text-decoration-none" href="https://www.disneyplus.com/" target="_blank">
                                        <span class="pe-0 material-symbols-outlined">explore</span> Disney+
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span id="disneyplus" class="material-symbols-outlined">check_circle</span>
                                </td>
                                <td class="text-end">Abonnement</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        const results = <?php echo json_encode($final); ?>

        function showModal(index) {
            const result = results[index]

            document.getElementById('modalImage').src = result.image
            document.getElementById('modalTitle').textContent = result.title
            document.getElementById('modalDesc').textContent = result.description

            const setPlatformAvailability = (platformId, isAvailable) => {
                const element = document.getElementById(platformId)

                if (isAvailable) {
                    element.textContent = 'check_circle'
                    element.classList.add('text-success')
                    element.classList.remove('text-danger')
                } else {
                    element.textContent = 'block'
                    element.classList.add('text-danger')
                    element.classList.remove('text-success')
                }
            };

            setPlatformAvailability('netflix', result.netflix)
            setPlatformAvailability('appletv', result.appletv)
            setPlatformAvailability('prime', result.prime)
            setPlatformAvailability('disneyplus', result.disneyplus)
        }
    </script>
</div>
