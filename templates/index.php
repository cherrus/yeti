<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое
    эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php $index = 0; ?>
        <?php while ($index < count($categories)): ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="all-lots.html">
                <?=$categories[$index];?></a>
            </li>
            <?php $index++;?>
        <?php endwhile;?>
    </ul>
</section>

<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php $index = 0; ?>
        <?php while ($index < count($lotsList)): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src=<?=$lotsList[$index]["imageUrl"];?> width="350"
                    height="260" alt=<?=$lotsList[$index]["category"];?>>
                </div>
                <div class="lot__info">
                    <span class="lot__category">
                    <?=$lotsList[$index]["category"];?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html">
                    <?=htmlspecialchars($lotsList[$index]["name"]);?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost">
                            <?=priceFormatRubles($lotsList[$index]["price"]);?>
                            </span>
                        </div>
                        <div class="lot__timer timer">
                            <?=terminateTime();?>
                        </div>
                    </div>
                </div>
            </li>
            <?php $index++; ?>
        <?php endwhile; ?>
    </ul>
</section>
