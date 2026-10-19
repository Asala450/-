<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP және API зертханалық жұмыс</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>HTTP сұраныстар және сыртқы API</h1>
    <p>JSONPlaceholder API арқылы жұмыс</p>
</header>

<main>

    <!-- GET бөлімі -->
    <section class="box">
        <h2>Пайдаланушылар</h2>

        <button id="loadBtn">Деректерді жүктеу</button>
        <button id="reloadBtn">Қайта жүктеу</button>

        <div class="filters">
            <input
                type="text"
                id="searchInput"
                placeholder="Аты бойынша іздеу..."
            >

            <select id="companyFilter">
                <option value="all">Барлық компаниялар</option>
            </select>

            <select id="sortSelect">
                <option value="none">Сұрыптау</option>
                <option value="asc">Аты бойынша A-Z</option>
                <option value="desc">Аты бойынша Z-A</option>
            </select>
        </div>

        <p id="loading"></p>
        <p id="error"></p>

        <div id="usersContainer" class="users"></div>
    </section>


    <!-- POST бөлімі -->
    <section class="box">
        <h2>Жаңа пайдаланушы қосу</h2>

        <form id="userForm">

            <label for="name">Аты-жөні:</label>
            <input
                type="text"
                id="name"
                placeholder="Аты-жөніңізді енгізіңіз"
                required
            >

            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                placeholder="example@gmail.com"
                required
            >

            <button type="submit">Пайдаланушыны жіберу</button>

        </form>

        <div id="postResult" class="result"></div>
    </section>

</main>

<footer>Z
    <p>Зертханалық жұмыс №6 | HTTP және Fetch API</p>
</footer>

<script src="script.js"></script>

</body>
</html>