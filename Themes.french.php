<?php
// Version: 2.0; Themes

$txt['themeadmin_explain'] = 'Les thèmes <em>(parfois appelés \'apparences\' ou \'habillages\')</em> sont des présentations graphiques pour votre forum. Ces paramètres affectent la sélection des thèmes et quel thème les invités et les autres membres utilisent.';

$txt['theme_allow'] = 'Autoriser les membres à choisir leur propre thème ?';
$txt['theme_guests'] = 'Thème par défaut pour les invités&#8239;';
$txt['theme_guests_mobile'] = 'Thème par défaut pour les invités (mode mobile)&#8239;';
$txt['theme_select'] = 'choisir...';
$txt['theme_reset'] = 'Régler tout le monde sur&#8239;';
$txt['theme_nochange'] = 'Aucun changement';
$txt['theme_forum_default'] = 'Thème par défaut';

$txt['theme_remove_confirm'] = 'Êtes-vous sûr de vouloir supprimer ce thème définitivement ?';

$txt['theme_install'] = 'Installer un Nouveau Thème';
$txt['theme_install_file'] = 'Depuis une archive sur votre ordinateur&#8239;';
$txt['theme_install_dir'] = 'Depuis un dossier sur le serveur&#8239;';
$txt['theme_install_error'] = 'Ce dossier de thème n\'existe pas, ou ne contient pas de thème&#8239;!';
$txt['theme_install_write_error'] = 'Le dossier des thèmes ne doit pas être en lecture seule pour continuer&#8239;!';
$txt['theme_install_go'] = 'Installer&#8239;!';
$txt['theme_install_new'] = 'Ou créer une copie du thème par défaut, nommée&#8239;';
$txt['theme_install_new_confirm'] = 'Êtes-vous sûr de vouloir installer ce nouveau thème ?';
$txt['theme_install_writable'] = 'Attention - vous ne pouvez pas créer ou installer un nouveau thème car votre dossier de thèmes est en lecture seule&#8239;!';
$txt['theme_installed'] = 'Installé avec succès';
$txt['theme_installed_message'] = 'a été installé avec succès.';

$txt['theme_latest'] = 'Les Thèmes - les Derniers et les Plus Réussis';
$txt['theme_latest_fetch'] = 'Recherche des derniers thèmes depuis wedge.org...';

$txt['theme_set'] = 'Utiliser le thème par défaut';
$txt['skin_users'] = array(
	0 => 'Personne n\'utilise ce thème.',
	1 => '1 personne utilise ce thème.',
	'n' => '%s personnes utilisent ce thème.',
);
$txt['current_theme'] = 'Thème actuel';

$txt['theme_skins'] = 'Styles';
$txt['theme_skin_preview'] = 'Prévisualiser ce style';
$txt['theme_skin_set'] = 'Utiliser ce style';

$txt['theme_edit'] = 'Modifier un Thème';
$txt['theme_edit_style'] = 'Modifier les feuilles de style (couleurs, polices, etc.)';
$txt['theme_edit_index'] = 'Modifier index.template.php (le modèle principal)';
$txt['theme_edit_no_save'] = 'Ce fichier ne peut pas être sauveradé parce qu\'il n\'est pas inscriptible&#8239;! Veuillez vous assurer que le fichier suivant est en chmod 777 ou possède les permissions suffisantes.';
$txt['theme_edit_save'] = 'Sauvegarder les changements';

$txt['theme_global_description'] = 'Ceci est le thème par défaut, ce qui signifie que votre thème changera suivant les réglages de l\'administrateur et/ou la section que vous consultez.';

$txt['themeadmin_title'] = 'Options de thèmes et disposition';
$txt['themeadmin_description'] = 'Ici vous pouvez modifier les paramètres de vos thèmes, mettre à jour la liste des thèmes, réinitialiser les options des membres et autres réglages du genre.';
$txt['themeadmin_admin_desc'] = 'Cette page vous permet de changer le thème par défaut de votre forum, réinitialiser les membres pour utiliser un certain thème et choisir d\'autres réglages relatifs à la sélection des thèmes. Vous pouvez aussi installer des nouveaux thèmes depuis cette interface.<br><br>N\'oubliez pas de jeter un oeil aux réglages du thème pour votre thème pour des personnalisations de disposition.';
$txt['themeadmin_list_desc'] = 'Ici vous pouvez voir la liste des thèmes actuellement installés, changer leur chemin et réglages, de même que les désinstaller.';
$txt['themeadmin_edit_desc'] = 'Modifiez la feuille de style et le code-source de vos thèmes installés. Veuillez consulter la documentation pour plus d\'informations.';

$txt['themeadmin_list_heading'] = 'Aperçu des paramètres du thème';
$txt['themeadmin_list_tip'] = 'Rappelez-vous, les paramètres de disposition peuvent différer d\'un thème à l\'autre. Cliquez sur le nom du thème ci-dessous pour paramétrer ses options, changer son répertoire ou son URL, ou trouvez d\'autres options.';
$txt['themeadmin_list_theme_dir'] = 'Répertoire des thèmes graphiques';
$txt['themeadmin_list_invalid'] = '(attention, ce chemin est incorrect&#8239;!)';
$txt['themeadmin_list_theme_url'] = 'URL vers le répertoire ci-dessus';
$txt['themeadmin_list_images_url'] = 'URL vers le répertoire des images';
$txt['themeadmin_list_reset'] = 'Réinitialiser l\'URL des thèmes et leur répertoire';
$txt['themeadmin_list_reset_dir'] = 'Chemin absolu vers le répertoire des thèmes';
$txt['themeadmin_list_reset_url'] = 'URL vers le répertoire de base commun';
$txt['themeadmin_list_reset_go'] = 'Tenter de réinitialiser tous les thèmes';

$txt['themeadmin_edit_browse'] = 'Accéder à la liste des fichiers du thème actuel.';
$txt['themeadmin_edit_style'] = 'Accéder aux feuilles de style du thème actuel.';
$txt['themeadmin_edit_copy_template'] = 'Copier un modèle (template) depuis le thème sur lequel celui-ci est basé.';
$txt['themeadmin_edit_exists'] = 'existe déjà';
$txt['themeadmin_edit_do_copy'] = 'copier';
$txt['themeadmin_edit_copy_warning'] = 'Quand Wedge a besoin d\'un modèle ou d\'un fichier de langue qui n\'existe pas dans le thème actuel, il regarde dans le dossier du thème sur lequel celui-ci est basé, ou dans le thème par défaut.<br>À moins que vous ne deviez modifier un modèle, il est plus prudent de ne pas le copier.';
$txt['themeadmin_edit_copy_confirm'] = 'Voulez-vous vraiment copier ce modèle&#8239;?';
$txt['themeadmin_edit_overwrite_confirm'] = 'Voulez-vous vraiment copier ce modèle par-dessus celui qui existe déjà&#8239;?<br>Ceci va ÉCRASER tous les changements que vous avez faits&#8239;!';
$txt['themeadmin_edit_no_copy'] = '<em>(ne peut copier)</em>';
$txt['themeadmin_edit_filename'] = 'Nom de fichier';
$txt['themeadmin_edit_modified'] = 'Dernière modification';
$txt['themeadmin_edit_size'] = 'Taille';
$txt['themeadmin_edit_bytes'] = 'o';
$txt['themeadmin_edit_kilobytes'] = 'Ko';
$txt['themeadmin_edit_error'] = 'Le fichier que vous tentiez de sauvegarder a généré l\'erreur suivante&#8239;:';
$txt['themeadmin_edit_on_line'] = 'Commence à la ligne';
$txt['themeadmin_edit_preview'] = 'Prévisualiser';
$txt['themeadmin_selectable'] = 'Thèmes sélectionnables par l\'utilisateur&#8239;';
$txt['themeadmin_themelist_link'] = 'Montrer la liste des thèmes';
