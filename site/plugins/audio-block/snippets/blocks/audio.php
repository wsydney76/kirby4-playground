<?php if ($file = $block->source()->toFile()): ?>
    <div class="audio-wrapper">
        <?php if ($poster = $block->poster()->toFile()): ?>
            <figure class="audio-poster">
                <?= $poster->crop(200, 200) ?>
            </figure>
        <?php endif ?>
        <div class="audio-info">
            <h1 class="audio-title"><?= $block->title()->html() ?></h1>
            <h2 class="audio-subtitle"><?= $block->subtitle()->html() ?></h2>
            <div class="audio-description">
                <?= $block->description() ?>
            </div>
            <audio class="audio-element"
                <?= $block->controls()->isTrue() ? 'controls' : '' ?>
                <?= $block->autoplay()->isTrue() ? 'autoplay' : '' ?>
            >
                <source src="<?= $file->url()?>" type="<?= $file->mime() ?>">
                Your browser does not support the <code>audio</code> element.
            </audio>
        </div>
    </div>
<?php endif ?>

<style>
    .audio-wrapper {
        display: flex;
        background: black;
        color: white;
    }
    .audio-poster {
        width: 12rem;
    }
    .audio-title {
        font-size: 1.5rem;
    }
    .audio-subtitle {
        font-size: 1rem;
    }
    .audio-element {
        margin-top: 2rem;
        height: 2rem;
    }
</style>
