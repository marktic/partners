<?php

use Marktic\Partners\Partners\Models\Partner;

/** @var Partner[] $items */
?>
<div class="partner-logo-inline">
    <?php foreach ($items as $item): ?>
        <?php $url = $item->url ?: ($item->metadata['website'] ?? null); ?>
        <?php $logo = $item->metadata['logo'] ?? null; ?>
        <?php if ($logo): ?>
            <?php if ($url): ?><a href="<?= htmlspecialchars((string) $url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener"><?php endif; ?>
                <img src="<?= htmlspecialchars((string) $logo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars((string) ($item->label ?: $item->name), ENT_QUOTES, 'UTF-8'); ?>" />
            <?php if ($url): ?></a><?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
