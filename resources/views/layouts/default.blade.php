<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIPLOMA-SUPPLEMENT</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="background-gradient">

<header>
    <a href="/" class="background-gradient">Головна</a>
    <a href="/marking-subjects" class="background-gradient">Оцінювання предметів</a>
    <a href="/students-list" class="background-gradient">Генерування звітів</a>
</header>

<hr class="background-gradient">

@yield('content')


<script>
    function generate() {

        function generateGradient() {
            const hexValues = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e"];

            function populate(a) {
                for (let i = 0; i < 6; i++ ) {
                    const x = Math.round(Math.random() * 14);
                    const y = hexValues[x];
                    a += y;
                }
                return a;
            }

            const newColor1 = populate('#');
            const newColor2 = populate('#');
            const angle = Math.round(Math.random() * 360);
            return "linear-gradient(" + angle + "deg, " + newColor1 + ", " + newColor2 + ")";
        }

        const elements = document.getElementsByClassName('background-gradient');

        for (const i in elements) {
            if (elements[i].style) {
                elements[i].style.background = generateGradient();
            }
        }

    }

    document.onload = generate();
</script>
</body>
</html>
