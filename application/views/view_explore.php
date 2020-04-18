    <main id="explore">
        <ul class="explore__users">
        <?php foreach($explore as $e): ?>
            <li class="explore__user">      
                <div class="explore__user-column">
                    <img src="<?= base_url() . 'assets/uploads/' . $e->url ?>" class="explore__avatar"/>
                    <div class="explore__info">
                        <span class="explore__username"><?= $e->username ?></span>
                        <span class="explore__full-name"><?= $e->name ?></span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
        <?php endforeach ?>
        </ul>

    </main>
</body>