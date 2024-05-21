<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>건국대학교 청원</title>
    <?php include 'styles.php'; ?>
    <style>
        nav ul li a {
            font-size: 1rem; /* 글씨 크기 조정 */
            font-weight: bold;  /* 글씨 두께를 조정 (옵션) */
        }

        nav ul li a:hover {
            color: #1D4ED8;
            transition: color 0.3s ease-in-out;
        }

        /* 카드 호버 애니메이션 */
        .petition-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="dark-mode">
    <nav class="bg-white shadow fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <img src="kulogo.png" alt="Konkuk University Logo" class="h-12">
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-blue-600">청원 소개</a></li>
                <li><a href="#" class="hover:text-blue-600">청원 하기</a></li>
                <li><a href="#" class="hover:text-blue-600" onclick="openModal('mypageModal')">마이페이지</a></li>
                <li><a href="#" class="hover:text-blue-600">문의하기</a></li>
                <?php if (isAdmin()) { ?>
                    <li><a href="#" onclick="openModal('adminModal')" class="hover:text-blue-600">관리자 페이지</a></li>
                <?php } ?>
            </ul>
            <div class="flex space-x-4">
                <div class="relative">
                    <input type="text" class="border px-4 py-2 rounded" placeholder="검색">
                    <button class="absolute right-2 top-2"><i class="fas fa-search"></i></button>
                </div>
                <?php if (!isset($_SESSION['userid'])) { ?>
                    <button class="border px-4 py-2 rounded hover:bg-gray-100" onclick="openModal('loginModal')">로그인</button>
                    <button class="border px-4 py-2 rounded hover:bg-gray-100" onclick="openModal('registerModal')">회원가입</button>
                <?php } else { ?>
                    <form method="post">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="border px-4 py-2 rounded hover:bg-gray-100">로그아웃</button>
                    </form>
                <?php } ?>
                <button class="border px-4 py-2 rounded hover:bg-gray-100" onclick="toggleDarkMode()">다크 모드</button>
            </div>
        </div>
    </nav>

    <header class="relative pt-20">
        <div class="slideshow-container">
            <img src="https://placehold.co/1920x600?text=1" class="slides fade">
            <img src="https://placehold.co/1920x600?text=2" class="slides fade">
            <img src="https://placehold.co/1920x600?text=3" class="slides fade">
        </div>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30 flex flex-col items-center justify-center text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold">건국대학교 청원</h1>
            <p class="text-sm md:text-lg mt-4">KU petition</p>
            <button class="mt-6 px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded" onclick="openModal('createPetitionModal')">청원하기</button>
        </div>
    </header>
</body>
</html>