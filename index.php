<?php include_once('header.php'); ?>
<?php include_once('functions.php'); ?>

c
<?php $responseArray = convertIntoArray(); ?>
<div class="container-lg main">
    <div class="row mt-4">
        <span class="text-end">Every <span class="fw-bold text-danger text-italic">7 second</span> website autoload for GET new information</span>
        <?php foreach ($responseArray as $currency) { ?>
            <div class="col-lg-4 col-sm-12 text-center mb-3">
                <div class="card single-card" style="width: 18rem;">
                    <img src="<?= $currency["logo_url"]; ?>" alt="" class="single-card-img">
                    <div class="card-body">
                        <div class="card-title" style="font-weight: bold;"><?= $currency["currency"]; ?></div>
                        <div class="card-text single-card-text">Rp. <?= $currency["price"]; ?></div>
                        <div class="card-text single-card-text">Curculating Supply :<?= $currency["circulating_supply"]; ?></div>
                        <div class="card-text single-card-text">Market Cap : <?= $currency["market_cap"]; ?></div>
                        <div class="card-text single-card-text">Name : <?= $currency["name"]; ?></div>
                        <!-- live cryto 1 day -->
                        <?php if ($currency["1d"]["price_change"] > 0) { ?>
                            <div class="card-text single-card-text fw-bold">Price Change(<span class="fst-italic">1d</span>)<br><span class="price-up">Rp.+<?= $currency["1d"]["price_change"]; ?></span></div>
                        <?php } else { ?>
                            <div class="card-text single-card-text fw-bold">Price Change(<span class="fst-italic">1d</span>)<br><span class="price-down">Rp.<?= $currency["1d"]["price_change"]; ?></span></div>
                        <?php } ?>

                        <!-- live cryto 30 day -->
                        <?php if ($currency["30d"]["price_change"] > 0) { ?>
                            <div class="card-text single-card-text fw-bold">Price Change(<span class="fst-italic">30d</span>)<br><span class="price-up">Rp.+<?= $currency["30d"]["price_change"]; ?></span></div>
                        <?php } else { ?>
                            <div class="card-text single-card-text fw-bold">Price Change(<span class="fst-italic">30d</span>)<br><span class="price-down">Rp.<?= $currency["30d"]["price_change"]; ?></span></div>
                        <?php } ?>

                        <!-- live cryto 365 day -->
                        <?php if ($currency["365d"]["price_change"] > 0) { ?>
                            <div class="card-text single-card-text fw-bold">Price Change(<span class="fst-italic">1y</span>)<br><span class="price-up">Rp.+<?= $currency["365d"]["price_change"]; ?></span></div>
                        <?php } else { ?>
                            <div class="card-text single-card-text fw-bold">Price Change(<span class="fst-italic">1y</span>)<br><span class="price-down">Rp.<?= $currency["365d"]["price_change"]; ?></span></div>
                        <?php } ?>

                        <details>
                            <summary>Other info...</summary>
                            <p>Rank <?= $currency["rank"]; ?></p>
                            <p>Status <?= $currency["status"]; ?></p>
                            <p>First Candle <?= $currency["first_candle"]; ?></p>
                        </details>

                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<?php include_once('footer.php'); ?>