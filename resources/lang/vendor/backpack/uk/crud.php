<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new'                => 'Зберегти та створити',
    'save_action_save_and_edit'               => 'Зберегти та продовжити редагування',
    'save_action_save_and_back'               => 'Зберегти та вийти',
    'save_action_changed_notification'        => 'Дія після збереження була змінена',
    // Create form
    'add'                                     => 'Додати',
    'back_to_all'                             => 'Повернутися до списку',
    'cancel'                                  => 'Відмінити',
    'add_a_new'                               => 'Додати новий(у)',

    // Edit form
    'edit'                                    => 'Редагувати',
    'save'                                    => 'Зберегти',

    // Revisions
    'revisions'                               => 'Версии',
    'no_revisions'                            => 'Версий не найдено',
    'created_this'                            => 'создал(а) это',
    'changed_the'                             => 'изменил(а)',
    'restore_this_value'                      => 'Восстановить это значение',
    'from'                                    => 'с',
    'to'                                      => 'по',
    'undo'                                    => 'Шаг назад',
    'revision_restored'                       => 'Версия успешно восстановлена',

    // CRUD table view
    'all'                                     => 'Всі ',
    'in_the_database'                         => 'в базі даних',
    'list'                                    => 'Список',
    'actions'                                 => 'Дії',
    'preview'                                 => 'Попередній перегляд',
    'delete'                                  => 'Видалити',
    'admin'                                   => 'Панель керування',
    'details_row'                             => 'Это строка сведений. Измените, пожалуйста',
    'details_row_loading_error'               => 'Произошла ошибка при загрузке сведений. Повторите операцию.',

    // Confirmation messages and bubbles
    'delete_confirm'                          => 'Вы уверены. что хотите удалить эту запись?',
    'delete_confirmation_title'               => 'Запись удалена',
    'delete_confirmation_message'             => 'Запись была успешно удалена',
    'delete_confirmation_not_title'           => 'НЕ удалено',
    'delete_confirmation_not_message'         => 'Произошла ошибка. Запись не была удалена',
    'delete_confirmation_not_deleted_title'   => 'Не удалено',
    'delete_confirmation_not_deleted_message' => 'Ничего не произошло. Ваша запись сохранена/',

    // DataTables translation
    'emptyTable'                              => 'В таблиці немає доступних даних',
    'info'                                    => 'Показано _START_ до _END_ з _TOTAL_ співпадінь',
    'infoEmpty'                               => 'Показано 0 до 0 из 0 співпадінь',
    'infoFiltered'                            => '(відфільтровано из _MAX_ співпадінь)',
    'infoPostFix'                             => '',
    'thousands'                               => ',',
    'lengthMenu'                              => '_MENU_ записів на сторінці',
    'loadingRecords'                          => 'Завантаження...',
    'processing'                              => 'Обробка...',
    'search'                                  => 'Пошук: ',
    'zeroRecords'                             => 'Співпадінь не  знайдено',
    'paginate'                                => [
        'first'    => 'Перша',
        'last'     => 'Остання',
        'next'     => 'Наступна',
        'previous' => 'Попередня',
    ],
    'aria'                                    => [
        'sortAscending'  => ': нажмите для сортировки по возрастанию',
        'sortDescending' => ': нажмите для сортировки по убыванию',
    ],

    // global crud - errors
    'unauthorized_access'                     => 'У Вас нет необходимых прав для просмотра этой страницы.',
    'please_fix'                              => 'Пожалуйста, исправьте следующие ошибки:',

    // global crud - success / error notification bubbles
    'insert_success'                          => 'Запись была успешно добавлена.',
    'update_success'                          => 'Запись была успешно изменена.',

    // CRUD reorder view
    'reorder'                                 => 'Змінити порядок',
    'reorder_text'                            => 'Використовуйте drag&drop для зміни порядку.',
    'reorder_success_title'                   => 'Готово',
    'reorder_success_message'                 => 'Порядок був збережений.',
    'reorder_error_title'                     => 'Помилка',
    'reorder_error_message'                   => 'Порядок не був збережений.',

    // CRUD yes/no
    'yes'                                     => 'Так',
    'no'                                      => 'Ні',

    // CRUD filters navbar view
    'filters'                                 => 'Фільтри',
    'toggle_filters'                          => 'Переключити фільтри',
    'remove_filters'                          => 'Очистити фільтри',

    // Fields
    'browse_uploads'                          => 'Загрузить файлы',
    'clear'                                   => 'Очистить',
    'page_link'                               => 'Ссылка на страницу',
    'page_link_placeholder'                   => 'http://example.com/your-desired-page',
    'internal_link'                           => 'Внутренняя ссылка',
    'internal_link_placeholder'               => 'Внутренний путь. Например: \'admin/page\' (без кавычек) для \':url\'',
    'external_link'                           => 'Внешняя ссылка',
    'choose_file'                             => 'Выбрать файл',

    //Table field
    'table_cant_add'                          => 'Не удалось добавить новую :entity',
    'table_max_reached'                       => 'Максимальное количество из :max достигнуто',

    // File manager
    'file_manager'                            => 'Файловый менеджер',
    'clone' => 'Дублювати'
];
