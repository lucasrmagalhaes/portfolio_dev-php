<?php

    function getCor($stack) {
        return "#" . substr(md5($stack), 0, 6);
    }

    function renderStacks($projetos, $context = 'header', $projeto = null, $limit = null) {
        if (!isset($projetos) || !is_array($projetos)) {
            return;
        }
        
        if ($context === 'header'):
            $stacks = array_unique(array_merge(...array_column($projetos, 'stack'))); ?>

            <?php foreach ($stacks as $stack): ?>
                <span class="w-auto h-auto px-3 py-1 text-gray-200 text-tag text-[16px] font-bold rounded-full" style="background-color: <?= getCor($stack) ?>;"><?= htmlspecialchars($stack) ?></span>
            <?php endforeach; ?>
        <?php elseif($context === 'card' && isset($projeto['stack'])): 
            $stacks_limitadas = $limit ? array_slice($projeto['stack'], 0, $limit) : $projeto['stack'];
        ?>
                <?php foreach ($stacks_limitadas as $stack): ?>
                    <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-[12px] font-bold rounded-full" style="background-color: <?= getCor($stack) ?>;"><?= htmlspecialchars($stack) ?></span>
                <?php endforeach; ?>
        <?php endif;
    }

?>
