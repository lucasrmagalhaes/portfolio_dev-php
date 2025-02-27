<?php foreach ($contact_links as $link): ?>
    <div class="bg-gray-300 rounded-[8px] w-full cursor-pointer">
        <a
            class="flex items-center justify-between px-5 py-5 gap-3 outline-0 hover:outline hover:outline-1 hover:outline-blue transition group" href="<?= $link['media_social_link'] ?>"
            target="_blank"
        >
            <span class="text-gray-400 text-[28px] group-hover:text-blue"><i class="<?= htmlspecialchars($link['media_social_logo']) ?>"></i></span>
            <span class="flex-1 font-text text-[16px] text-gray-500 font-medium"><?= htmlspecialchars($link['media_social_name']) ?></span>
            <span class="text-blue text-[20px]"><i class="ph ph-arrow-up-right"></i></span>
        </a>
    </div>
<?php endforeach; ?>
