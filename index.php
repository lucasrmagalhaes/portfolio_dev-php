<?php

    include './components/stacks.php';

    $projetos = [
        [
            'titulo' => "Snake JS",
            'descricao' => "É um projeto inspirado do famoso jogo da cobrinha, desenvolvido para explorar as funcionalidades do JavaScript.",
            'src' => './assets/img/snake.gif',
            'stack' => ['CSS', 'HTML'],
            'link' => 'https://github.com/lucasrmagalhaes/snake-js',
        ],
    ];

    $contact_links = [
        [
            'media_social_name' => 'Linkedin',
            'media_social_logo' => 'ph ph-linkedin-logo',
            'media_social_link' => 'https://www.linkedin.com/in/lucasrmagalhaes/',
        ],
        [
            'media_social_name' => 'Instagram',
            'media_social_logo' => 'ph ph-instagram-logo',
            'media_social_link' => 'https://www.instagram.com/lucaormagalhaesz/',
        ],
        [
            'media_social_name' => 'GitHub',
            'media_social_logo' => 'ph ph-github-logo',
            'media_social_link' => 'https://github.com/lucasrmagalhaes',
        ],
        [
            'media_social_name' => 'Email',
            'media_social_logo' => 'ph ph-envelope-simple',
            'media_social_link' => 'mailto:lucasdarosa.ti@gmail.com',
        ],
    ];

?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wdth,wght@0,101.2,100..900;1,101.2,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'red': '#E3646E',
                            'purple': '#BB72E9',
                            'blue': '#3996DB',
                            'green': '#82BC4F',
                            'yellow': '#EABD5F',
                            'gray-100': '#0D0E11',
                            'gray-200': '#16181D',
                            'gray-300': '#292C34',
                            'gray-400': '#878EA1',
                            'gray-500': '#C0C4CE',
                            'gray-600': '#E2E4E9',
                        },
                        fontFamily: {
                            heading: ['Asap'],
                            subtitle: ['Inconsolata'],
                            tag: ['Inconsolata'],
                            text: ['Maven Pro'],
                        },
                        backgroundImage: {
                            'header-bg': "url('/assets/img/bg_header.jpg')",
                            'footer-bg': "url('/assets/img/bg_footer.jpg')",
                        },
                    }
                }
            }
        </script>

        <title>Lucas Magalhães</title>
    </head>

    <body class="bg-gray-200">
        <header class="bg-header-bg bg-cover bg-center w-full h-screen flex items-center justify-between">
            <div class="mx-auto max-w-screen-lg h-auto flex flex-col items-center space-y-20">
                <div class="flex flex-col items-center space-y-14 h-auto px-4 md:px-[180px]">
                    <div class="flex items-center justify-center h-20 w-20 md:h-24 md:w-24 border border-red rounded-full">
                        <img class="h-18 w-18 md:h-22 md:w-22 bg-cover bg-center rounded-full" src="./assets/img/avatar.jpeg" alt="Perfil" />
                    </div>

                    <div class="space-y-5">
                        <div class="flex flex-col items-center justify-center">
                            <span class="font-subtitle font-bold text-lg md:text-xl text-gray-500">
                                Hello World! Meu nome é <span class="text-red">Lucas Magalhães</span> e sou
                            </span>

                            <span class="font-heading font-bold text-[56px] text-gray-600">
                                Desenvolvedor Full Stack
                            </span>
                        </div>
                        <div class="font-text text-sm text-gray-400 text-center px-2 md:px-0">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-3">
                    <?php renderStacks($projetos, 'header'); ?>
                </div>
            </div>
        </header>

        <main class="w-full py-16 flex flex-col items-center px-4 md:px-20 pb-36">
            <div class="w-full text-center">
                <span class="text-red font-subtitle">Meu trabalho</span>
                <h2 class="text-gray-600 text-xl font-heading font-bold">Veja os projetos em destaque</h2>
            </div>

            <?php include('./components/main-card-project.php'); ?>
        </main>


        <footer class="w-full h-screen bg-footer-bg bg-cover bg-center flex flex-col items-center mx-30 pt-32 mb-50 gap-12">
            <div class="flex flex-col items-center gap-2">
                <span class="text-purple font-subtitle text-[20px]">Contato</span>
                <span class="text-gray-600 font-heading font-bold text-[24px]">Gostou do meu trabalho?</span>
                <p class="text-gray-500 text-[16px] font-text">Entre em contato ou acompanhe minhas redes sociais!</p>
            </div>

            <div class="w-[400px] flex flex-col gap-4">
                <?php include('./components/footer-card-link.php'); ?>
            </div>
        </footer>
    </body>
</html>