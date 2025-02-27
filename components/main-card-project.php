<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
    <?php foreach ($projetos as $projeto): ?>
        <div class="w-full bg-gray-300 rounded-[12px] outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
            <a
                class="flex flex-row gap-4 p-4"
                href="<?= htmlspecialchars($projeto['link']) ?>"
                target="_blank"
            >
                <img
                    class="w-[224px] h-[156px] rounded-[8px]"
                    src="<?= htmlspecialchars($projeto['src']) ?>"
                    alt="Imagem <?= htmlspecialchars($projeto['titulo']) ?>"
                />
    
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600"><?= htmlspecialchars($projeto['titulo']) ?></span>
                        <p class="font-text text-sm text-gray-500"><?= htmlspecialchars($projeto['descricao']) ?></p>
                    </div>
    
                    <div class="flex flex-wrap w-full gap-2">
                        <?php renderStacks($projetos, 'card', $projeto, 4); ?>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
