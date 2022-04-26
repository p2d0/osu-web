<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'audio' => [
        'autoplay' => 'Грати наступну пісню автоматично',
    ],

    'defaults' => [
        'page_description' => 'osu! - ритм гра лише в *клікові* від вас. Разом з Ouendan/EBA, Taiko та оригінальними ігровими режимами, а також повноцінним редактором рівнів.',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => 'набор карт',
            'beatmapset_covers' => 'обкладинки наборів карт',
            'contest' => 'конкурс',
            'contests' => 'конкурси',
            'root' => 'панель управління',
        ],

        'artists' => [
            'index' => 'список',
        ],

        'beatmapsets' => [
            'show' => '',
            'discussions' => '',
        ],

        'changelog' => [
            'index' => 'список',
        ],

        'help' => [
            'index' => 'зміст',
            'sitemap' => 'Карта сайту',
        ],

        'store' => [
            'cart' => 'корзина',
            'orders' => 'історія покупок',
            'products' => 'товари',
        ],

        'tournaments' => [
            'index' => 'перелiк',
        ],

        'users' => [
            'modding' => 'моддинг',
            'playlists' => 'плейлісти',
            'realtime' => 'мультиплеєр',
            'show' => 'інформація',
        ],
    ],

    'gallery' => [
        'close' => 'Закрити (Esc)',
        'fullscreen' => 'Повноекранний режим',
        'zoom' => 'Збільшити/зменшити',
        'previous' => 'Попередній (стрілка вліво)',
        'next' => 'Далі (стрілка вправо)',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'біткарти',
        ],
        'community' => [
            '_' => 'спільнота',
            'dev' => 'розробка',
        ],
        'help' => [
            '_' => 'допомога',
            'getAbuse' => 'Повідомити про зловживання ',
            'getFaq' => 'чапи',
            'getRules' => 'правила',
            'getSupport' => 'мені, насправді, потрібна допомога!',
        ],
        'home' => [
            '_' => 'головна',
            'team' => 'команда',
        ],
        'rankings' => [
            '_' => 'рейтинги',
            'kudosu' => 'кудосу',
        ],
        'store' => [
            '_' => 'крамниця',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Загальні',
            'home' => 'Головна',
            'changelog-index' => 'Список змін',
            'beatmaps' => 'Бібліотека карт',
            'download' => 'Завантажити osu!',
        ],
        'help' => [
            '_' => 'Допомога і спільнота',
            'faq' => 'Найчастіші питання',
            'forum' => 'Форуми спільноти',
            'livestreams' => 'Прямі трансляції',
            'report' => 'Повідомити про проблему',
            'wiki' => 'Вiкi',
        ],
        'legal' => [
            '_' => 'Права і статус',
            'copyright' => 'Авторські права (DMCA)',
            'privacy' => 'Політика конфіденційності',
            'server_status' => 'Статус серверів',
            'source_code' => 'Початковий програмний код',
            'terms' => 'Умови використання',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => 'Неправильний параметр запиту',
            'description' => '',
        ],
        '404' => [
            'error' => 'Сторінка відсутня',
            'description' => "Вибачте, але запитана сторінка відсутня!",
        ],
        '403' => [
            'error' => "Ви не повинні тут бути.",
            'description' => 'Ви можете спробувати повернутися назад, напевно.',
        ],
        '401' => [
            'error' => "Ви не повинні тут бути.",
            'description' => 'Ви можете спробувати повернутися назад, напевно. Або може увійти.',
        ],
        '405' => [
            'error' => 'Сторінка відсутня',
            'description' => "Вибачте, але запитана сторінка відсутня!",
        ],
        '422' => [
            'error' => 'Неправильний параметр запиту',
            'description' => '',
        ],
        '429' => [
            'error' => 'Перевищений ліміт запитів',
            'description' => '',
        ],
        '500' => [
            'error' => 'Ох, горе! Щось зламалося! ;_;',
            'description' => "Про помилку буде сповіщено.",
        ],
        'fatal' => [
            'error' => 'Ох, горе! Щось жахливо зламалося! ;_;',
            'description' => "Про помилку буде сповіщено.",
        ],
        '503' => [
            'error' => 'Закрито на технічне обслуговування!',
            'description' => "Технічне обслуговування зазвичай займає від 5 секунд до 10 хвилин. Якщо воно затягується, перейдіть :link для отримання додаткової інформації.",
            'link' => [
                'text' => '',
                'href' => '',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "Про всяк випадок, ось код, який ви можете повідомити службі підтримки!",
    ],

    'popup_login' => [
        'button' => 'увійти / зареєструватись',

        'login' => [
            'forgot' => "Я все забув",
            'password' => 'пароль',
            'title' => 'Увійдіть, щоб продовжити',
            'username' => 'ім\'я користувача',

            'error' => [
                'email' => "Ім'я користувача або електронна адреса невірна",
                'password' => 'Хибний пароль',
            ],
        ],

        'register' => [
            'download' => 'Завантажити',
            'info' => 'Пане, Вам потрібний акаунт. Чому Ви досі його не маєте?',
            'title' => "Не маєте акаунту?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Налаштування',
            'follows' => 'Список перегляду',
            'friends' => 'Друзі',
            'logout' => 'Вийти',
            'profile' => 'Мій профіль',
        ],
    ],

    'popup_search' => [
        'initial' => 'Введіть текст для пошуку!',
        'retry' => 'Невдалий пошук. Натисніть щоб повторити.',
    ],
];
