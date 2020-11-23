<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/lib/css/form_elements.css">
    <link rel="stylesheet" href="/assets/lib/css/other_elements.css">
    <link rel="stylesheet" href="/assets/lib/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/profile.css">
</head>
<body>
    <div class="header">
        <div class="header_wrapper">
            <div class="header_icon">TempName</div>
            <div class="form_element ">
                <label>
                    <span class="form_element_caption"></span>
                    <input type="text" name="input" placeholder="Поиск по сайту" class="form_element_input form_element_input_status_search">
                </label>
                <span class="form_element_caption form_element_input_status_error_message"></span>
            </div>
            <a href="#" class="header_link">Новости</a>
            <a href="#" class="header_link">Мероприятия</a>
            <a href="#" class="header_link header_avatar_text">Владимир Милевский</a>
            <div class="header_avatar"></div>
            <a href="#" class="header_notification">
                    <div class="header_notification_list">
                        <div class="header_notification_list_avatar"></div>
                        <div class="header_notification_list_text">
                            <div class="header_notification_list_name">Владимир Милевский</div>
                            <div class="header_notification_list_comment">Прислал Вам приглашение на <span class="header_notification_list_comment_color">мероприятие</span></div>
                            <div class="header_notification_list_date">2 часа назад</div>
                        </div>
                        <div class="header_notification_list_image"></div>
                    </div>
            </a>
            <div class="header_settings"></div>
        </div>
    </div>
    <div class="content">
        <div class="content_wrapper">
            <ul class="content_link_menu">
                <li class="content_link_list"><a href="/pages/profile.php" class="content_link"><span class="content_link_text content_link_icon_home">Моя страница</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_friends">Друзья</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_communities">Сообщества</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_activity">Мероприятия</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_messages">Сообщения</span></a></li>
                <li class="content_link_list"><a href="/pages/photos.php" class="content_link"><span class="content_link_text content_link_icon_photos">Фотографий</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_videos">Видеозаписи</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_favorites">Избранное</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_i_like_it">Мне понравилось</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_articles">Статьи</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_reports">Отчеты</span></a></li>
                <li class="content_link_list"><a href="#" class="content_link"><span class="content_link_text content_link_icon_waiting">Еду/Ожидаю</span></a></li>
            </ul>
            <div class="content_profile">
                <div class="content_profile_background"></div>
                <div class="content_profile_avatar"></div>
                <div class="content_profile_title">Владимир Милевский <span class="content_profile_status">Online</span></div>

                <div class="content_profile_post_start">
                    <div class="content_profile_post_number">1345</div>
                    <a href="#" class="content_profile_post_category">Друзей</a>
                </div>
                <div class="content_profile_post">
                    <div class="content_profile_post_number">788</div>
                    <a href="#" class="content_profile_post_category">Подписчиков</a>
                </div>
                <div class="content_profile_post">
                    <div class="content_profile_post_number">56</div>
                    <a href="#" class="content_profile_post_category">Публикаций</a>
                </div>
                <div class="content_profile_post">
                    <div class="content_profile_post_number">14</div>
                    <a href="#" class="content_profile_post_category">Сообществ</a>
                </div>
            </div>
            <div class="content_rating">
                <div class="content_rating_title">Рейтинг</div>
                <div class="content_rating_text">Организатор <span class="content_rating_text_number">124</span></div>
                <div class="content_rating_text">Участник <span class="content_rating_text_number">19</span></div>
                <div class="content_rating_text content_rating_text_bord">Публицист <span class="content_rating_text_number">35</span></div>
            </div>
            <div class="content_profile_data">
                <div class="content_profile_data_title">Профиль</div>
                <div class="content_profile_data_text_wrapper">
                    <div class="content_profile_data_text">Дата рождения</div>
                    <div class="content_profile_data_text">Город</div>
                    <div class="content_profile_data_text">Семейное положение</div>
                    <div class="content_profile_data_text">Интересы</div>
                </div>
                <div class="content_profile_data_text_data ">
                    <div class="content_profile_data_text">22 Сентября 2001</div>
                    <div class="content_profile_data_text">Москва</div>
                    <div class="content_profile_data_text">В активном поиске</div>
                    <div class="content_profile_data_text">Мотоциклы,путешествия,музыка</div>
                </div>
                <a href="#" class="content_profile_data_link">Смотреть полностью</a>
            </div>
            <div class="content_profile_banner">
                <div class="content_profile_banner_title">Вы учавствуете:</div>
                <div class="content_profile_banner_first">
                    <div class="content_profile_banner_first_image"></div>
                    <div class="content_profile_banner_first_title">Фестиваль красок</div>
                    <div class="content_profile_banner_first_text">Организатор:</div>
                    <div class="content_profile_banner_first_text_data">Владимир Милевский</div>
                    <div class="content_profile_banner_first_text">Дата:</div>
                    <div class="content_profile_banner_first_text_data">12 Ноября 2019</div>
                    <div class="content_profile_banner_first_text">Место:</div>
                    <div class="content_profile_banner_first_text_data">г.Москва</div>
                    <div class="content_profile_banner_first_link">Подробнее</div>
                </div>
                <a href="#" class="content_profile_banner_subtitle_first">Все мероприятия</a>
                <div class="content_profile_banner_second">
                    <div class="content_profile_banner_second_images">
                        <a href="#" class="content_profile_banner_second_icon"></a>
                    </div>
                    <a href="#" class="content_profile_banner_second_text">Надежный туроператор с индивидуальным подбором</a>
                </div>
            </div>
            <div class="content_profile_media">
                <div class="content_profile_media_photo">
                    <div class="content_profile_media_title">Фотографии <a href="/pages/photos.php" class="content_profile_media_subtitle">Смотреть все</a></div>
                    <div class="content_profile_media_photo_gallery">
                        <div class="content_profile_media_photo_gallery_photo_1"></div>
                        <div class="content_profile_media_photo_gallery_photo_2"></div>
                        <div class="content_profile_media_photo_gallery_photo_3"></div>
                        <div class="content_profile_media_photo_gallery_photo_4"></div>
                        <div class="content_profile_media_photo_gallery_photo_5"></div>
                        <div class="content_profile_media_photo_gallery_photo_6"></div>
                    </div>
                </div>
                <div class="content_profile_media_video">
                    <div class="content_profile_media_title">Видео<a href="#" class="content_profile_media_video_subtitle">Смотреть все</a></div>
                    <iframe src="https://www.youtube.com/embed/URDXZSJZ2ME" class="content_profile_media_video_gallery_video"></iframe>
                </div>
            </div>
            <div class="content_profile_posts">
                <div class="content_profile_posts_menu">
                    <div class="content_profile_posts_post_menu_title">Мои записи<span class="content_profile_posts_post_menu_subtitle">Мероприятия</span></div>
                    <div class="content_profile_posts_post_menu_icon_plus"></div>
                    <div class="content_profile_posts_post_menu_icon_search"></div>
                </div>
                <div class="content_profile_posts_interaction">
                    <div class="content_profile_posts_interaction_avatar"></div>
                    <div class="content_profile_posts_interaction_block">
                        <div class="content_profile_posts_interaction_block_icon_paperclips"></div>
                        <div class="content_profile_posts_interaction_block_icon_camera"></div>
                        <div class="content_profile_posts_interaction_block_icon_video"></div>
                        <div class="content_profile_posts_interaction_block_icon_smile"></div>
                        <form>
                            <label>
                                <textarea class="content_profile_posts_interaction_block_comments" placeholder="Введите текст"> </textarea>
                            </label>
                            <div class="form_element">
                                <input type="checkbox" class="custom-checkbox" id="checkbox-1" name="checkbox_1" value="checkbox_1">
                                <label for="checkbox-1">Запретить комментарий</label>
                            </div>
                            <div class="form_element">
                                <input type="checkbox" class="custom-checkbox" id="checkbox-2" name="checkbox_2" value="checkbox_1">
                                <label for="checkbox-2">Запретить оценку</label>
                            </div>
                            <div class="form_element">
                                <input type="checkbox" class="custom-checkbox" id="checkbox-3" name="checkbox_3" value="checkbox_1">
                                <label for="checkbox-3">Запретить репост</label>
                            </div>
                            <div class="form_element">
                                <input type="button" class="form_element_button" value="Опубликовать">
                            </div>
                            <div class="form_element">
                                <input type="button" class="form_element_button_2" value="В черновики">
                            </div>
                            <div class="form_element">
                                <input type="button" class="form_element_button_2" value="Отменить">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content_profile_posts_post">
                    <div class="content_profile_posts_post_user_avatar"></div>
                    <div class="content_profile_posts_post_user_title">
                        Владимир Милевский
                        <div class="content_profile_posts_post_user_date">8 Сентября 2019</div>
                    </div>
                    <button class="content_profile_posts_post_user_menu">
                        <div class="content_profile_posts_post_user_menu_list">
                            <div class="content_profile_posts_post_user_menu_interaction">Удалить</div>
                            <div class="content_profile_posts_post_user_menu_interaction">Редактировать</div>
                            <div class="content_profile_posts_post_user_menu_interaction">В закладки</div>
                        </div>
                    </button>
                    <div class="content_profile_posts_post_user_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat et nulla et finibus. Suspendisse arcu diam, ultrices in neque non, condimentum luctus augue. Cras accumsan orci et risus posuere bibendum.</div>
                    <div class="content_profile_posts_post_user_interaction">
                        <div class="comments">
                            <div class="comments_image"></div>
                            <div>10</div>
                        </div>

                        <div class="like">
                            <div class="like_image"></div>
                            <div>150</div>
                        </div>

                        <div class="message">
                            <div class="message_image"></div>
                            <div>10</div>
                        </div>
                    </div>
                </div>
                <div class="content_profile_posts_post">
                    <div class="content_profile_posts_post_user_avatar"></div>
                    <div class="content_profile_posts_post_user_title">
                        Владимир Милевский
                        <div class="content_profile_posts_post_user_date">8 Сентября 2019</div>
                    </div>
                    <button class="content_profile_posts_post_user_menu">
                        <div class="content_profile_posts_post_user_menu_list">
                            <div class="content_profile_posts_post_user_menu_interaction">Удалить</div>
                            <div class="content_profile_posts_post_user_menu_interaction">Редактировать</div>
                            <div class="content_profile_posts_post_user_menu_interaction">В закладки</div>
                        </div>
                    </button>
                    <div class="content_profile_posts_post_user_content content_profile_posts_post_user_content_two"></div>
                    <div class="content_profile_posts_post_user_interaction">
                        <div class="comments">
                            <div class="comments_image"></div>
                            <div>10</div>
                        </div>

                        <div class="like">
                            <div class="like_image"></div>
                            <div>150</div>
                        </div>

                        <div class="message">
                            <div class="message_image"></div>
                            <div>10</div>
                        </div>
                    </div>
                    <div class="content_profile_posts_post_user_comments">
                        <div class="content_profile_posts_post_user_comment_avatar"></div>
                        <div class="content_profile_posts_post_user_comment_title">
                            Владимир Милевский
                            <div class="content_profile_posts_post_user_comment_date">8 Сентября 2019</div>
                        </div>
                        <div class="content_profile_posts_post_user_comment_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat et nulla et finibus.</div>
                    </div>
                    <div class="content_profile_posts_post_user_comments">
                        <div class="content_profile_posts_post_user_comment_avatar content_profile_posts_post_user_comment_avatar_two"></div>
                        <div class="content_profile_posts_post_user_comment_title">
                            Владимир Милевский
                            <div class="content_profile_posts_post_user_comment_date">8 Сентября 2019</div>
                        </div>
                        <div class="content_profile_posts_post_user_comment_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat et nulla et finibus.</div>
                    </div>
                    <div class="widget_comments">
                        <div class="widget_comments_paperclips"></div>
                        <div class="widget_comments_camera"></div>
                        <div class="widget_comments_smile"></div>
                        <div class="widget_comments_button"></div>
                        <label class="widget_content_commits">
                            <textarea name="comment" cols="1" rows="1" class="widget_content_comments" placeholder="Написать комментарий..."></textarea>
                        </label>

                    </div>
                    <div class="widget_comments_viewing">Смотреть все комментарий</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
