<?php

use Marktic\Partners\Partners\Models\Partner;

/** @var Partner[] $items */
?>
<div class="partners-grid">
    <?php foreach ($items as $item): ?>
        <?php $logo = $item->metadata['logo'] ?? null; ?>
        <?php $url = $item->url ?: ($item->metadata['website'] ?? null); ?>
        <div class="partner-item">
            <?php if ($logo): ?>
                <?php if ($url): ?><a href="<?= htmlspecialchars((string) $url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener"><?php endif; ?>
                    <img src="<?= htmlspecialchars((string) $logo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars((string) ($item->label ?: $item->name), ENT_QUOTES, 'UTF-8'); ?>" class="partner-logo" />
                <?php if ($url): ?></a><?php endif; ?>
            <?php else: ?>
                <?php if ($url): ?><a href="<?= htmlspecialchars((string) $url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener"><?php endif; ?>
                    <span class="partner-name"><?= htmlspecialchars((string) ($item->label ?: $item->name), ENT_QUOTES, 'UTF-8'); ?></span>
                <?php if ($url): ?></a><?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
