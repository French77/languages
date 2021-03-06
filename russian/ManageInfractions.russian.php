<?php
// Version: 2.0; ManageInfractions

$txt['infractions_desc'] = 'Здесь настраиваются предупреждения, которые доступны для выдачи модераторами.';
$txt['infractionlevels_desc'] = 'Здесь настраиваются шаблоны предупреждений и наказания за них.';
$txt['infractionsettings_desc'] = 'Здесь изменяются основные настройки обработки предупреждений.';

$txt['revoke_own_issued'] = 'Разрешить удаление собственноручно выданных предупреждений?';
$txt['revoke_any_issued'] = 'Группы, которые могут удалять любые выданные предупреждения';
$txt['no_warn_groups'] = 'Группы, которые не могут получать предупреждения';

$txt['setting_warning_show'] = 'Пользователи, которые могут видеть статус предупреждений';
$txt['setting_warning_show_subtext'] = 'Укажите, кто может видеть уровень предупреждений пользователей на форуме.';
$txt['setting_warning_show_none'] = 'Никто';
$txt['setting_warning_show_mods'] = 'Только модераторы';
$txt['setting_warning_show_user'] = 'Модераторы и предупрежденные пользователи';
$txt['setting_warning_show_all'] = 'Все пользователи';

$txt['infractionlevels_extra'] = 'Ниже приведены различные наказания, которые могут применяться к учётным записям пользователей. Когда пользователи накапливают предупреждения, они получают баллы — это можно использовать для установки автоматических штрафов, применяющихся только при достижении заданного количества баллов.';
$txt['infraction_no_avatar'] = 'Скрытие аватара пользователя';
$txt['infraction_no_sig'] = 'Скрытие подписи пользователя';
$txt['infraction_scramble'] = 'Перемешивание букв в сообщениях';
$txt['infraction_scramble_help'] = 'Сообщения отображаются, но все слова перемешиваются: первая и последняя буквы остаются на месте, а остальные выводятся в неправильном порядке. Текст читается с трудом, поэтому, скорее всего, будет проигнорирован пользователями.';
$txt['infraction_disemvowel'] = 'Удаление гласных в сообщениях';
$txt['infraction_disemvowel_help'] = 'Сообщения отображаются, но с отсутствующими гласными. Эффект заключается в том, что текст будет читаться с усилием, поэтому большинство пользователей просто проигнорирует подобные сообщения.';
$txt['infraction_moderate'] = 'Сообщения требуют одобрения модератора';
$txt['infraction_post_ban'] = 'Запрет на отправку сообщений в темах';
$txt['infraction_pm_ban'] = 'Запрет на отправку личных сообщений';
$txt['infraction_soft_ban'] = 'Пользователь будет заблокирован (мягко)';
$txt['infraction_hard_ban'] = 'Пользователь будет заблокирован (жёстко)';

$txt['enact_infraction'] = 'Выносимое наказание:';
$txt['points_infraction'] = 'Баллы предупреждений:';

$txt['enabled_infraction'] = 'Включено?';

$txt['preset_infractions'] = 'Шаблоны предупреждений';
$txt['preset_infractions_desc'] = 'Предварительно настроенные предупреждения — это те, которые администратор может выдать быстро и легко, например, с помощью шаблонов. Можно разрешить определенным группам модераторов использовать предупреждения только из данного списка, или предоставить им дополнительные возможности.';
$txt['adhoc_infractions'] = 'Специальные предупреждения';
$txt['adhoc_infractions_desc'] = 'Можно планировать типы возможных инцидентов и предоставить своим модераторам предустановленные варианты предупреждений для оформления наказаний. Но иногда модераторы вольны делать что-нибудь &laquo;не по сценарию&raquo;. Такие правила также настраиваются здесь.';

$txt['add_infraction'] = 'Добавить предупреждение';
$txt['delete_infraction_confirm'] = 'Хотите удалить данное предупреждение?';

$txt['infraction_name'] = 'Название';
$txt['infraction_points'] = 'Баллы';
$txt['infraction_duration'] = 'Длительность';
$txt['infraction_sanctions'] = 'Наказания';
$txt['infraction_issuers'] = 'Кто может выдать';
$txt['infraction_no_punishments'] = 'Нет';
$txt['no_infractions'] = 'Какие-либо предупреждения отсутствуют.';

$txt['infraction_d'] = array(
	1 => '1 день',
	2 => '2 дня',
	3 => '3 дня',
	4 => '4 дня',
	21 => '21 день',
	'n' => '%1$s дней',
);
$txt['infraction_w'] = array(
	1 => '1 неделя',
	2 => '2 недели',
	3 => '3 недели',
	4 => '4 недели',
	21 => '21 неделя',
	'n' => '%1$s недель',
);
$txt['infraction_m'] = array(
	1 => '1 месяц',
	2 => '2 месяца',
	3 => '3 месяца',
	4 => '4 месяца',
	21 => '21 месяц',
	'n' => '%1$s месяцев',
);
$txt['infraction_y'] = array(
	1 => '1 год',
	2 => '2 года',
	3 => '3 года',
	4 => '4 года',
	21 => '21 год',
	'n' => '%1$s лет',
);
$txt['infraction_i'] = 'Бессрочно';

$txt['infraction_duration_types'] = array(
	'd' => 'дней',
	'w' => 'недель',
	'm' => 'месяцев',
	'y' => 'лет',
	'i' => 'бессрочно',
);

$txt['can_issue_adhoc'] = 'Может выдать специальное предупреждение';
$txt['max_points'] = 'Максимум баллов за предупреждение:';
$txt['max_infractions_day'] = 'Максимум предупреждений для одного пользователя в день:';
$txt['punishments_issuable'] = 'Возможные наказания:';

$txt['add_preset_infraction'] = 'Добавить шаблон предупреждения';
$txt['edit_preset_infraction'] = 'Редактировать шаблон предупреждения';
$txt['infraction_name_desc'] = 'Используйте короткие и понятные формулировки.';
$txt['for_the_duration'] = 'Выберите применяемые ограничения';
$txt['issued_by_adhoc'] = 'Запомните: группы, которые могут выдавать специальные предупреждения, также в состоянии настроить данное предупреждение. Группы, которые не могут выдавать специальные предупреждения, получат для использования только указанные вами варианты.';
$txt['notification_text'] = 'Текст уведомления для использования';
$txt['notification_text_desc'] = 'Если сотрудник форума не уполномочен отправлять специальные предупреждения, для уведомлений будет использована формулировка, указанная здесь.';
$txt['notification_use_none'] = 'Не отправлять сообщение';
$txt['notification_use_custom'] = 'Пользовательская формулировка (ниже)';
$txt['notification_subject'] = 'Заголовок:';
$txt['notification_body'] = 'Текст:';
$txt['notification_body_note'] = '{PUNISHMENTS} будет автоматически заменено формулировкой для описания баллов и наказаний, полученных пользователем за предупреждение.';
$txt['notification_body_message'] = '{MESSAGE} будет автоматически заменено ссылкой на сообщение, за которое вынесено предупреждение.';

$txt['tpl_infraction_bad_avatar'] = array(
	'desc' => 'Плохой аватар',
	'subject' => 'Вы получили предупреждение за свой аватар',
	'body' => 'Ваш аватар неуместен на нашем форуме.

Возможные причины:
* он содержит быстро движущиеся или мигающие изображения
* он содержит ненормативную лексику
* он содержит изображения порнографического характера

{PUNISHMENTS}

Обратите внимание: любые нарушения в будущем могут привести к предупреждениям, в результате которых к вашей учётной записи будут применены различные ограничения по использованию форума.',
);
$txt['tpl_infraction_bad_sig'] = array(
	'desc' => 'Плохая подпись',
	'subject' => 'Вы получили предупреждение за свою подпись',
	'body' => 'Ваша подпись неуместна на нашем форуме.

Возможные причины:
* она очень большая и отвлекает других пользователей
* она содержит слишком много ссылок на внешние сайты
* она содержит недопустимый на нашем форуме контент

{PUNISHMENTS}

Обратите внимание: любые нарушения в будущем могут привести к предупреждениям, в результате которых к вашей учётной записи будут применены различные ограничения по использованию форума.',
);
$txt['tpl_infraction_bad_language'] = array(
	'desc' => 'Ненормативная лексика',
	'subject' => 'Вы получили предупреждение за ненормативную лексику',
	'body' => 'Ненормативная лексика недопустима.

Мы не разрешаем использовать ненормативную лексику или небрежное отношение к сотрудникам или другим пользователям форума.

{PUNISHMENTS}

Обратите внимание: любые нарушения в будущем могут привести к предупреждениям, в результате которых к вашей учётной записи будут применены различные ограничения по использованию форума.',
);
$txt['tpl_infraction_spam'] = array(
	'desc' => 'Спам',
	'subject' => 'Вы получили предупреждение за спам',
	'body' => 'Ваши сообщения содержат спам.

Спам — очень распространенная проблема, требующая значительных усилий для борьбы с ней.
Таким образом, мы не приветствуем спам на нашем форуме.

{PUNISHMENTS}

Любые последующие инциденты могут привести к дальнейшим предупреждениям для вашей учётной записи.',
);

$txt['no_punishment'] = 'По этому поводу никаких действий предпринято не было, но это было зарегистрировано в вашей учётной записи.';
$txt['received_punishments'] = array(
	1 => 'В этом случае вы получили следующее наказание:',
	'n' => 'В этом случае вы получили следующие наказания:',
);
$txt['punishments_will_expire'] = array(
	1 => 'Данное наказание будет действовать на вас до {EXPIRY}.',
	'n' => 'Данные наказания будут действовать на вас до {EXPIRY}.',
);
$txt['punishments_no_expire'] = array(
	1 => 'Данное наказание не имеет срока истечения.',
	'n' => 'Данные наказания не имеют срока истечения.',
);

$txt['pun_infraction_no_avatar'] = 'Ваш аватар будет скрыт';
$txt['pun_infraction_no_sig'] = 'Ваша подпись будет скрыта';
$txt['pun_infraction_scramble'] = 'Буквы в ваших сообщениях будут перемешаны';
$txt['pun_infraction_disemvowel'] = 'В ваших сообщениях будут скрыты гласные';
$txt['pun_infraction_moderate'] = 'Ваши сообщения будут требовать одобрения модератора';
$txt['pun_infraction_post_ban'] = 'Вам не разрешено оставлять сообщения';
$txt['pun_infraction_pm_ban'] = 'Вам не разрешено отправлять личные сообщения';
$txt['pun_infraction_soft_ban'] = 'Некоторые возможности форума будут недоступны вам';
$txt['pun_infraction_hard_ban'] = 'Вы забанены на форуме';
$txt['pun_points'] = array(
	1 => 'Вы накопили 1 балл предупреждения, общая сумма: {POINTS}. Это может привести к дальнейшим наказаниям в будущем.',
	'n' => 'Вами накоплено баллов предупреждений: %1$s, общая сумма: {POINTS}. Это может привести к дальнейшим наказаниям в будущем.',
);
$txt['pun_because_message'] = 'Вы получили это предупреждение за свое сообщение: {LINK}';

$txt['error_no_name_given'] = 'Каждое предупреждение должно иметь название, для нормальной работы.';
$txt['error_no_text'] = 'Вы выбрали добавление индивидуального предупреждения, но не заполнили текст.';
$txt['error_invalid_duration'] = 'Вы не указали, как долго должно длиться предупреждение.';
