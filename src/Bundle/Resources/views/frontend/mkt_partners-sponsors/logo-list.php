<?php

use Marktic\Partners\Sponsors\Models\Sponsor;

/** @var Sponsor[] $items */
?>
<ul class="partner-logo-list">
    <?php foreach ($items as $item): ?>
        <?php $url = $item->url ?: ($item->metadata['website'] ?? null); ?>
        <li>
            <?php if ($url): ?><a href="<?= htmlspecialchars((string) $url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener"><?php endif; ?>
                <?php $logo = $item->metadata['logo'] ?? null; ?>
                <?php if ($logo): ?>
                    <img src="<?= htmlspecialchars((string) $logo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars((string) ($item->label ?: $item->name), ENT_QUOTES, 'UTF-8'); ?>" />
                <?php else: ?>
                    <?= htmlspecialchars((string) ($item->label ?: $item->name), ENT_QUOTES, 'UTF-8'); ?>
                <?php endif; ?>
            <?php if ($url): ?></a><?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
