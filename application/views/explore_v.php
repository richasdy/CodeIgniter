
    <main id="explore">
        <ul class="explore__users">
            <?php foreach ($friends as $friend => $f) { ?>
            
                <li class="explore__user">
                    <div class="explore__user-column">
                        <img src="<?=base_url()?>assets/images/<?= $f['ava'] ?>" class="explore__avatar"/>
                        <div class="explore__info">
                            <span class="explore__username"><?= $f['username'] ?></span>
                            <span class="explore__full-name"><?= $f['name'] ?></span>
                        </div>
                    </div>
                    <div class="explore__user-column">
                        <button>Follow</button>
                    </div>
                </li>

            <?php } ?>
        </ul>
    </main>