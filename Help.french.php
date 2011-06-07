<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Fermer la fenêtre';

$helptxt['manage_boards'] = '
	<strong>Gestion des Sections et des Catégories</strong><br>
	Dans ce menu, vous pouvez créer/réorganiser/supprimer des sections et les catégories
	les concernant. Par exemple, si vous avez un gros site offrant des informations variées
	sur plusieurs sujets tels que &quot;Sports&quot; et &quot;Voitures&quot; et &quot;Musique&quot;, ces
	titres seraient ceux des catégories que vous créeriez. Sous chacune de ces catégories vous voudriez assurément insérer, de manière hiérarchique, des <em>sous-catégories</em>,
	ou &quot;sections&quot;, pour des sujets les concernant. C\'est une simple hiérarchie, avec cette structure&nbsp;: <br>
	<ul class="normallist">
		<li>
			<strong>Sports</strong>
			&nbsp;- Une &quot;catégorie&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>Baseball</strong>
				&nbsp;- Une section de la catégorie &quot;Sports&quot;
			</li>
			<ul class="normallist">
				<li>
					<strong>Stats</strong>
					&nbsp;- Une sous-section de la section &quot;Baseball&quot;
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- Une section de la catégorie &quot;Sports&quot;</li>
		</ul>
	</ul>
	Les catégories vous permettent de séparer votre forum en différents sujets (&quot;Voitures,
	Sports&quot;), et les &quot;sections&quot; en dessous sont les sujets dans lesquels
	vos membres peuvent poster. Un utilisateur intéressé par les Twingo
	voudra poster un message dans &quot;Voitures->Twingo&quot;. Les catégories permettent aux gens
	de rapidement trouver ce qui les intéresse&nbsp;: au lieu d\'un &quot;Magasin&quot;, vous avez
	un &quot;Magasin d\'informatique&quot; et un &quot;Magasin de chaussures&quot; où vous pouvez aller. Cela simplifie
	votre recherche d\'un &quot;disque dur&quot;, parce que vous pouvez aller directement au &quot;Magasin d\'informatique&quot;
	plutôt qu\'au &quot;Magasin de chaussures&quot; (où vous ne trouverez sans doute pas votre disque dur ;) ).
	<br>
	Comme précisé plus haut, une section est un sujet clé sous une catégorie mère.
	Si vous voulez discuter de &quot;Twingo&quot;, vous irez à la catégorie &quot;Voitures&quot; et
	irez à la section &quot;Twingo&quot; pour y poster votre avis à propos de cette automobile.<br>
	Les fonctions administratives possibles ici sont de créer des nouvelles sections
	sous chaque catégorie, réordonner les sections (placer &quot;Twingo&quot; sous &quot;Renault&quot;), ou
	supprimer une section entièrement.';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>Nouvelles</strong><br>
			Cette partie vous permet de définir du contenu pour les news de la page d\'accueil.
			Mettez-y ce que vous voulez (par ex., &quot;Ne manquez pas la conférence de mardi prochain&quot;). Les news sont affichées de manière aléatoire et doivent être placées dans des boîtes séparées.
		</li>
		<li>
			<strong>Infolettres</strong><br>
			Cette partie vous permet d\'envoyer des newsletters (infolettres) aux membres du forum par message personnel ou e-mail. Choisissez d\'abord les groupes auxquels envoyer l\'infolettre, puis ceux dont vous ne voulez pas qu\'ils la reçoivent. Si vous le désirez, vous pouvez ajouter des membres et adresses e-mail individuellement. Enfin, mettez le contenu du message à envoyer, et choisissez le type d\'envoi (message personnel sur le forum, ou e-mail).
		</li>
		<li>
			<strong>Paramètres</strong><br>
				Cette partie contient des réglages liés aux news et aux infolettres, par exemple le choix des groupes qui peuvent modifier les news ou envoyer des infolettres. Vous pouvez également paramétrer l\'activation des flux RSS sur le forum, mais aussi choisir la longueur maximale des messages (en caractères) dans ces mêmes flux RSS.
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>Voir tous les membres</strong><br>
			Voir tous les membres dans votre forum. Il vous est présenté une liste d\'hyperliens avec les pseudos des membres. Vous pouvez cliquer
			sur n\'importe lequel de ces pseudos pour trouver plus de détails à propos du membre (site web, âge, etc.), et en tant qu\'administrateur
			vous avez la possibilité de modifier ces paramêtres. Vous avez un contrôle sur vos membres, incluant la possibilité
			de les supprimer de votre forum.<br><br>
		</li>
		<li>
			<strong>En attente d\'approbation</strong><br>
			Cette rubrique n\'est affiché que si vous avez activé l\'approbation par un administrateur des nouvelles inscriptions à votre forum. Peu importe qui s\'inscrit pour rejoindre votre
			forum, il ne sera un membre complet qu\'une fois son compte approuvé par un admin. La rubrique liste tous ces membres qui
			sont encore en attente d\'approbation, de même que leur adresse e-mail et leur adresse IP. Vous pouvez choisir d\'accepter ou de rejeter (supprimer)
			n\'importe quel membre dans la liste en cochant la case suivant le nom du membre et en choisissant l\'action correcte à appliquer dans le menu déroulant au bas
			de l\'écran. Lorsque vous rejetez un membre, vous pouvez choisir de le supprimer en l\'avertissant ou non de votre décision.<br><br>
		</li>
		<li>
			<strong>En attente d\'activation</strong><br>
			Cette rubrique n\'est visible que si vous avez choisi l\'activation des comptes des membres sur votre forum. Cette section liste tous
			les membres qui n\'ont pas encore activé leur nouveau compte. Depuis cet écran, vous pouvez choisir de les accepter, de les rejeter ou de leur rappeler
			l\'activation de leur compte. Comme pour le paramètre précédent, vous avez la possibilité d\'informer ou non le membre
			des actions que vous avez effectuées.<br><br>
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Bannir des membres</strong><br>
	SMF offre la possibilité de &quot;bannir&quot; des utilisateurs, afin d\'empêcher le retour de personnes ayant dérangé
	l\'atmosphère de votre forum par du pollupostage (spamming), des déviations de sujets (trolling), etc. En tant qu\'administrateur,
	lorsque vous voyez un message, vous pouvez voir l\'adresse IP du posteur au moment de l\'envoi du message incriminé. Dans la liste de bannissement,
	vous entrez simplement cette adresse IP, sauvegardez, et l\'utilisateur banni ne pourra plus poster depuis son ordinateur. <br>Vous pouvez aussi
	bannir des gens par leur adresse e-mail.';

$helptxt['featuresettings'] = '<strong>Fonctionnalités et Options</strong><br>
	Il y a plusieurs fonctionnalités dans cette section qui peuvent être changées à votre goût.';

$helptxt['securitysettings'] = '<strong>Sécurité et Modération</strong><br>
	Cette section contient les réglages en relation avec la sécurité et la modération de votre forum.';

$helptxt['modsettings'] = '<strong>Modifier les Caractéristiques et les Options</strong><br>
	Plusieurs options peuvent être modifiées ici selon vos préférences. Les options pour les extensions installées vont généralement apparaître ici.';

$helptxt['number_format'] = '<strong>Format des nombres</strong><br>
	Vous pouvez utiliser cette fonction afin de spécifier l\'allure qu\'auront les nombres insérés dans votre forum. Le format de cette fonction se constitue de cette façon&nbsp;:<br>
	<div style="margin-left: 2ex;">1,234.00</div><br>
	Où \',\' est le caractère utilisé pour séparer les milliers des centaines, \'.\' est celui utilisé pour séparer les unités des décimales et le nombre de zéros dicte à quelle décimale les nombres doivent être arrondis.';

$helptxt['time_format'] = '<strong>Format de l\'heure</strong><br>
	Vous avez la possibilité d\'ajuster la manière dont le temps et les dates seront affichés sur votre forum. Il y a beaucoup de lettres, mais c\'est relativement simple. La convention d\'écriture s\'accorde avec celle de la fonction <tt>strftime</tt> de PHP et est décrite ci-dessous (plus de détails peuvent être trouvés sur <a href="http://www.php.net/manual/fr/function.strftime.php" target="_blank">php.net</a>).<br>
	<br>
	Les caractères suivants sont reconnus en tant qu\'entrées dans la chaîne du format de l\'heure&nbsp;:
	<div class="smalltext">
	&nbsp;&nbsp;%a - Nom du jour (abrégé)<br>
	&nbsp;&nbsp;%A - Nom du jour (complet)<br>
	&nbsp;&nbsp;%b - Nom du mois (abrégé)<br>
	&nbsp;&nbsp;%B - Nom du mois (complet)<br>
	&nbsp;&nbsp;%d - Jour du mois (01 à 31)<br>
	&nbsp;&nbsp;%D - La même chose que %m/%d/%y <strong>*</strong><br>
	&nbsp;&nbsp;%e - Jour du mois (1 à 31)<br>
	&nbsp;&nbsp;%H - Heure au format 24 heures (de 00 à 23)<br>
	&nbsp;&nbsp;%I - Heure au format 12 heures (de 01 à 12)<br>
	&nbsp;&nbsp;%m - Numéro du mois (01 à 12)<br>
	&nbsp;&nbsp;%M - Minutes en chiffres<br>
	&nbsp;&nbsp;%p - Met &quot;am&quot; ou &quot;pm&quot; selon la période de la journée<br>
	&nbsp;&nbsp;%R - Heure au format 24 heures<strong>*</strong><br>
	&nbsp;&nbsp;%S - Secondes en chiffres<br>
	&nbsp;&nbsp;%T - Temps en ce moment, la même chose que %H:%M:%S<strong>*</strong><br>
	&nbsp;&nbsp;%y - Année au format 2 chiffres (00 to 99)<br>
	&nbsp;&nbsp;%Y - Année au format 4 chiffres<br>
	&nbsp;&nbsp;%% - Le symbole \'%\' en lui-même<br>
	<br>
	<em>* Ne fonctionnent pas sur les serveurs Windows.</em></div>';

$helptxt['live_news'] = '<strong>En direct de Wedge...</strong><br>
	Cette boîte affiche les dernières dépêches en provenance de <a href="http://wedge.org/" target="_blank">Wedge.org</a>.
	Vous devriez y surveiller les annonces concernant les mises à jour, nouvelles versions de Wedge et informations importantes de l\'équipe.';

$helptxt['registrations'] = '<strong>Gestion des inscriptions</strong><br>
	Cette section contient toutes les fonctions nécessaires pour la gestion des nouvelles inscriptions sur votre forum. Elle peut contenir jusqu\'à quatre
	rubriques, visibles selon vos paramètres de forum. Celles-ci sont détaillés ci-dessous&nbsp;:<br><br>
	<ul class="normallist">
		<li>
			<strong>Inscrire un nouveau membre</strong><br>
			À partir de cet écran, vous pouvez inscrire un nouveau membre à sa place. Cette option peut être utile lorsque les nouvelles inscriptions sur le forum sont désactivées,
			ou lorsque l\'administrateur souhaite se créer un compte de test. Si l\'activation du nouveau compte par le membre est sélectionnée,
			le nouveau membre recevra un e-mail contenant un lien d\'activation, sur lequel il devra cliquer avant de pouvoir utiliser son compte. De même, vous pouvez choisir d\'envoyer
			le nouveau mot de passe à l\'adresse e-mail spécifiée.
		</li>
			<strong>Modifier l\'accord d\'inscription</strong><br>
			Ceci vous permet de spécifier le texte de l\'accord d\'inscription affiché lors de l\'inscription d\'un membre sur votre forum.
			Vous pouvez ajouter ou enlever ce que vous souhaitez au texte d\'accord inclus par défaut avec Wedge.<br><br>
		</li>
		<li>
			<strong>Choisir les noms réservés</strong><br>
			En utilisant cette interface, vous pouvez spécifier des mots ou des noms qui ne pourront pas être utilisés librement par vos membres dans leurs identifiants et pseudonymes.<br><br>
		</li>
		<li>
			<strong>Paramètres</strong><br>
			Cette section ne sera visible que si vous avez la permission d\'administrer le forum. Depuis cette interface, vous pouvez choisir la méthode d\'inscription
			en vigueur sur votre forum et configurer quelques autres réglages relatifs à l\'inscription.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Journal de Modération</strong><br>
	Cette section permet à l\'équipe des administrateurs de conserver des traces de chaque action de modération effectuée sur le forum par un modérateur ou un administrateur (voire même par un membre). Afin que
	les modérateurs ne puissent enlever les références aux actions entreprises, les entrées ne pourront être supprimées que 24 heures après leur application.
	La colonne \'Objet\' liste les variables associées à l\'action.';
$helptxt['adminlog'] = '<strong>Journal d\'Administration</strong><br>
	Cette section permet aux membres de l\'équipe d\'administration de pister les actions effectuées par tout administrateur sur le forum. Afin que les administrateurs ne puissent enlever les références aux actions entreprises, les entrées ne pourront être supprimées que 24 heures après leur application.';
$helptxt['warning_enable'] = '<strong>Gestion des Avertissements</strong><br>
	Cette fonctionnalité permet aux membres des équipes d\'administration et de modération d\'envoyer des avertissements aux utilisateurs - et d\'utiliser un niveau d\'avertissement pour déterminer les actions possibles pour leur cas au niveau du forum. Après avoir activé cette fonctionnalité, un nouveau paramètre sera disponible dans les permissions par section pour définir quels groupes pourront assigner des avertissements aux utilisateurs. Les niveaux d\'avertissement pourront être ajustés à partir du profil des utilisateurs. Les options suivantes sont disponibles:
	<ul class="normallist">
		<li>
			<strong>Niveau d\'avertissement pour une mise en garde</strong><br>
			Ce réglage définit le pourcentage de niveau d\'avertissement qu\'un utilisateur doit atteindre pour recevoir automatiquement une &quot;mise en garde&quot;.
			Tous les utilisateurs qui sont &quot;mis en garde&quot; apparaitront dans l\'endroit adéquat du centre de modération.
		</li>
		<li>
			<strong>Niveau d\'avertissement pour une prémodération des messages</strong><br>
			Si ce niveau d\'avertissement est atteint par un utilisateur, ces messages devront être validés par un modérateur pour apparaître sur le forum. Cela écrasera toutes les permissions par section qui pourront exister en relation avec la modération des messages.
		</li>
		<li>
			<strong>Niveau d\'avertissement pour une suppression des droits d\'écriture</strong><br>
			Si ce niveau d\'avertissement est atteint par un utilisateur, il lui sera impossible d\'envoyer des messages. L\'utilisateur perdra ainsi tous ses droits de postage.
		</li>
		<li>
			<strong>Points d\'avertissement maximum par jour</strong><br>
			Ce réglage limite le nombre de points qu\'un modérateur peut ajouter/retirer à un utilisateur particulier sur une période de vingt quatre heures. Cela pourra être utile pour limiter ce que peut faire un modérateur sur une petite période de temps. Ce réglage peut être désactivé en mettant cette valeur à zéro. Notez que tout utilisateur avec des permissions d\'administration n\'est pas affecté par cette valeur.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Journal d\'Erreurs</strong><br>
	Le journal d\'erreurs conserve des traces de toutes les erreurs sérieuses rencontrées lors de l\'utilisation de votre forum. Il liste toutes les erreurs par date, qui peuvent être récupérées
	en cliquant sur la flèche noire accompagnant chaque date. De plus, vous pouvez filtrer les erreurs en sélectionnant l\'image accompagnant les statistiques des erreurs. Ceci
	vous permet, par exemple, de filtrer les erreurs par nom de membre. Lorsqu\'un filtre est actif les seuls résultats affichés seront ceux correspondants aux critères du filtre.';
$helptxt['theme_settings'] = '<strong>Réglages du Thème</strong><br>
	L\'écran des réglages vous permet de modifier certains réglages spécifiques à un thème. Ces réglages incluent des options telles que le répertoire du thàme et l\'URL du thème, mais
	aussi des options affectant le rendu à l\'écran de votre forum. La plupart des thèmes possédent une variété d\'options configurables par l\'utilisateur, vous permettant d\'adapter un thème
	à vos besoins individuels.';
$helptxt['smileys'] = '<strong>Gestionnaire de smileys</strong><br>
	Ici, vous pouvez ajouter et supprimer des smileys et des jeux de smileys. Note importante&nbsp;: si un smiley est présent dans un jeu, il l\'est aussi dans tous les autres - autrement, cela pourrait prêter à
	confusion pour les utilisateurs utilisant des jeux différents.<br><br>

	Vous pouvez aussi modifier les icônes de message depuis cette interface, si vous les avez activés sur la page des paramètres.';
$helptxt['calendar'] = '<strong>Gérer le calendrier</strong><br>
	Ici vous pouvez modifier les réglages courants du calendrier, ou ajouter et supprimer des fêtes qui apparaissent dans le calendrier.';

$helptxt['serversettings'] = '<strong>Paramètres Serveur</strong><br>
	Ici, vous pouvez régler la configuration de votre serveur. Cette section comprend la base de données et les chemins des dossiers, ainsi que d\'autres
	options de configuration importantes tels que les paramètres d\'e-mail et de cache. Faites attention lors de la modification de ces paramètres,
	ils pourraient rendre le forum inaccessible';
$helptxt['manage_files'] = '
	<ul class="normallist">
		<li>
			<strong>Parcourir les Fichiers</strong><br>
			Parcourir à travers tous les fichiers joints, avatars et vignettes stockés par SMF.<br><br>
		</li><li>
			<strong>Réglages des Fichiers Joints</strong><br>
			Configurer où sont stockés les fichiers joints et mettre les restrictions sur les types de fichiers joints.<br><br>
		</li><li>
			<strong>Réglages des Avatars</strong><br>
			Configurer où sont stockés les avatars et gérer le redimensionnement des avatars.<br><br>
		</li><li>
			<strong>Maintenance des Fichiers</strong><br>
			Contrôler et réparer toute erreur dans le répertoire des fichiers joints et effacer les fichiers joints sélectionnés.<br><br>
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Ceci vous permet de régler le nombre de messages précédemment postés affichés dans le sommaire du sujet sur l\'écran de réponse à un sujet.';
$helptxt['enableAllMessages'] = 'Mettez ici le nombre <em>maximum</em> de messages qu\'un sujet aura lors de l\'affichage par le lien &quot;Tous&quot;. Le régler au-dessous du &quot;Nombre de messages à afficher lors du visionnement d\'un sujet:&quot; signifiera simplement que le lien ne sera jamais affiché, et indiquer une valeur trop élevée peut ralentir votre forum.';
$helptxt['pruneSavedDrafts'] = 'Les brouillons sauvegardés sur le serveur n\'ont pas de date limite en temps normal, mais l\'administrateur peut utiliser cette option pour nettoyer automatiquement la base de données en supprimant les brouillons plus anciens. Ainsi, si vous entrez un chiffre N et qu\'il y a des brouillons créés depuis plus de N jours, ces derniers seront supprimés. Mettez à 0 pour toujours conserver les brouillons, du moins jusqu\'à leur publication, ou suppression par l\'auteur.';
$helptxt['allow_guestAccess'] = 'Décocher cette option limitera les actions possibles des invités aux seules opérations de base - connexion, inscription, rappel du mot de passe, etc. - sur votre forum. Ce n\'est pas comme désactiver l\'accès aux sections pour les invités.';
$helptxt['userLanguage'] = 'Activer cette option permettra aux utilisateurs de sélectionner la langue dans laquelle le forum leur sera affiché.
	Cela n\'affectera pas la langue par défaut.';
$helptxt['trackStats'] = 'Stats&nbsp;:<br>Ceci permettra aux visiteurs de voir les derniers messages postés et les sujets les plus populaires sur votre forum.
	Cela affichera aussi plusieurs autres statistiques, comme le record d\'utilisateurs en ligne au même moment, les nouveaux membres et les nouveaux sujets.<hr>
	Pages vues&nbsp;:<br>Ajoute une autre colonne à la page des statistiques contenant le nombre de pages vues sur votre forum.';
$helptxt['titlesEnable'] = 'Activer les titres personnels permettra aux membres possédant les permissions suffisantes de s\'attribuer un titre spécial pour eux-mêmes.
		Il sera affiché sous leur pseudonyme.<br><em>Par exemple :</em><br>Loulou<br>Oui, c\'est moi';
$helptxt['topbottomEnable'] = 'Ceci ajoutera des boutons &quot;Monter&quot; et &quot;Descendre&quot; au début et à la fin de chaque sujet, afin que les visiteurs passent plus vite du haut au bas de la page et <em>vice versa</em>,
		 sans utiliser la molette de la souris ou la barre de défilement.';
$helptxt['onlineEnable'] = 'Ceci affichera une image indiquant si l\'utilisateur est connecté ou non en ce moment.';
$helptxt['todayMod'] = 'Cette option affichera &quot;Aujourd\'hui&quot; ou &quot;Hier&quot; à la place de la date.<br><br>
		<strong>Exemples :</strong><br><br>
		<dt>
			<dt>Désactivé</dt>
			<dd>3 Octobre 2009 à 00:59:18</dd>
			<dt>Seulement Aujourd\'hui</dt>
			<dd>Aujourd\'hui à 00:59:18</dd>
			<dt>Aujourd\'hui &amp; Hier</dt>
			<dd>Hier à 21:36:55</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Cocher cette option pour empêcher les utilisateurs de personnaliser le nombre de messages et de sujets par page à afficher, respectivement sur l\'index des messages et la page d\'affichage du sujet.';
$helptxt['enablePreviousNext'] = 'Cette option affichera un lien vers le sujet précédent et le sujet suivant.';
$helptxt['ignoreMoveVsNew'] = 'Si l\'utilisateur déplace un sujet vers une autre section, l\'utilisateur pourra choisir, par défaut, la destination
		parmi la liste des sections auxquelles il pourrait d\'habitude créer des sections (pour éviter qu\'ils ne les déplacent dans le forum des
		news de votre site, par exemple).<br><br>Activez cette option pour lui permettre au contraire de déplacer ses sujets
		vers n\'importe quelle destination visible pour lui.';
$helptxt['pollMode'] = 'Ceci détermine si les sondages sont activés ou non. Si les sondages sont désactivés, tous les sondages actuels sont cachés sur la liste des sujets. Vous pouvez choisir de continuer à afficher la partie sujet des sondages en sélectionnant &quot;Montrer les sondages existants comme des sujets&quot;.<br><br>Pour choisir qui peut poster et voir des sondages (et similaires), vous pouvez autoriser ou refuser ces permissions. Rappelez-vous de ceci si les sondages sont désactivés.';
$helptxt['enableVBStyleLogin'] = 'Ceci affichera un champ de connexion au bas de chaque page du forum, si le visiteur n\'est pas encore connecté.';
$helptxt['enableCompressedOutput'] = 'Cette option compressera à la volée les données envoyées, afin de diminuer la consommation de bande passante, mais requiert que zlib soit installé sur le serveur.';
$helptxt['enableCompressedData'] = 'Cette option compressera les données CSS et JavaScript après leur mise en cache. La librairie zlib doit être installée avant tout, et le fichier .htaccess doit être configuré correctement.
		Ce processus permet d\'éviter au serveur de recompresser les fichiers CSS et JS à la volée quand ils sont téléchargés.
		En cas de problème (page vierge de tout style graphique et pas de scripts actifs), désactivez au plus vite l\'option.';
$helptxt['obfuscate_filenames'] = 'Cette option permet de modifier les noms des fichiers JavaScript et CSS après leur mise en cache. Son unique intérêt est de permettre aux
		développeurs JavaScript de rendre plus difficile la vie des méchants voleurs de scripts qui vous en veulent, à vous, personnellement, c\'est sûr,
		c\'est un complot.<br><br>
		Bref, si les noms sont cryptés, ils ne pourront pas retrouver le fichier original non compressé. Évidemment, si la minification est désactivée,
		ça ne sert strictement à rien. Mais je dis ça, je dis rien moi, c\'est pour vous.';
$helptxt['minify'] = 'Cette option permet de minifier les fichiers JavaScript avant leur mise en cache. Si vous autorisez Wedge à minifier les fichiers, il retirera tous
		les commentaires et l\'indentation inutile, ce qui accélèrera la vitesse de chargement du site. Seules les copies du cache sont modifiées, bien sûr.<br><br>
		La compression avec Packer est plus efficace, mais si vos scripts sont mal fichus, ils planteront (utilisez <a href="http://www.jslint.com/" target="_blank">JSLint</a> pour les
		corriger). De plus, si la compression gzip n\'est pas disponible sur votre serveur, Packer se chargera de compresser encore plus les fichiers, au prix d\'un léger
		ralentissement pour les utilisateurs. Sinon, utilisez JSMin, qui est un bon compromis si vos scripts plantent.<br><br>
		Désactivez l\'option pour pouvoir débugger plus facilement vos scripts. Non, parce que sinon c\'est même pas la peine d\'y penser. On veut pas vous pourrir la vie,
		hein. Enfin, moi si, mais ça dure juste une minute, je sors mon rire démoniaque et puis je prends un calmant et j\'ajoute ces fichues options qui simplifient tout.';
$helptxt['jquery_origin'] = 'Cette option permet de choisir l\'adresse à partir de laquelle sera chargé le script jQuery. Pour économiser en bande passante, vous pouvez
		choisir un CDN (réseau de distribution) proposé par Google ou Microsoft, ou encore passer directement par le serveur officiel de jquery.com.
		<br><br>Si la bande passante n\'est pas un problème, vous pouvez aussi charger jQuery à partir de votre site, ce qui permet de vous assurer que le script sera
		toujours disponible, et en passant de le compresser en même temps que script.js. Attention, si votre serveur ne dispose pas de la librairie zlib (ce qui est peu
		probable heureusement), passez impérativement par un CDN pour éviter de servir un jQuery non compressé !';
$helptxt['disableTemplateEval'] = 'Par défaut, les modèles de thème sont évalués au lieu d\'être simplement inclus, afin de pouvoir afficher plus d\'informations en cas d\'erreur du traitement.<br><br>Toutefois, sur des forums de grande taille, ce processus peut ralentir sensiblement le traitement. Les utilisateurs aguerris peuvent donc préférer le désactiver.';
$helptxt['db_show_debug'] = 'Active les fonctionnalités de débogage des requêtes, très utiles pour repérer les erreurs. Les informations sont montrées à la fin de chaque
		page quand cette option est activée.<br><br>
		Les éléments suivants sont affichés&nbsp;:
		<ul>
			<li>Les fichiers de modèle (templates) chargés
			<li>Les sous-modèles exécutés (tous les modèles utilisés pour mettre en place la page entière)
			<li>Les fichiers de langue utilisés
			<li>Les feuilles de style chargées (celles chargées par les extensions n\'apparaîtront pas forcément)
			<li>Le nombre de fichiers inclus (et lesquels)
			<li>Les appels au cache (lesquels sont-ils, et combien de temps y a été consacré)
			<li>Les requêtes utilisées, avec détails complets (administrateurs uniquement)
		</ul>';
$helptxt['db_show_debug_who'] = 'Les informations de débogage sont très utiles pour comprendre les dessous du fonctionnement du forum en cas de problème, mais ils ne sont que rarement
		utiles à ceux qui n\'ont pas de droits d\'administration. Cette option détermine qui pourra visionner ces informations, si elles sont activées.';
$helptxt['db_show_debug_who_log'] = 'Une partie des informations de débogage est une liste des requêtes faites par le forum pendant son fonctionnement. Pour des raisons de sécurité,
		elles ne sont pas montrées directement dans les informations, et cette option permet de s\'assurer qu\'elles ne soient visibles que si nécessaire - parfois,
		pendant un débogage, ces requêtes doivent être fournies à des utilisateurs sans droits d\'administration afin qu\'ils puissent faire des retours.';
$helptxt['databaseSession_enable'] = 'Cette fonction utilise la base de données pour le stockage des sessions - c\'est mieux pour des serveurs à charge balancée, mais aide à régler tous les problèmes de fin de session indésirée et peut aider le forum à fonctionner plus rapidement.';
$helptxt['databaseSession_loose'] = 'Activer cette option diminuera la bande passante utilisée par le forum, et fait en sorte que lorsque l\'utilisateur revient sur ses pas, la page n\'est pas rechargée - le point négatif de cette option est que les (nouvelles) icônes ne seront pas mises à jour, ainsi que quelques autres choses. (Sauf si vous rechargez cette page plutôt que de retourner sur vos pas.)';
$helptxt['databaseSession_lifetime'] = 'Ceci est le temps en secondes au bout duquel la session se termine automatiquement après le dernier accès de l\'utilisateur. Si une session n\'a pas été accédée depuis trop longtemps, un message &quot;Session terminée&quot; est affiché. Tout ce qui est au-dessus de 2400 secondes est recommandé.';
$helptxt['enableErrorLogging'] = 'Ceci indexera toutes les erreurs rencontrées, comme les connexions non réussies, afin que vous puissiez les consulter lorsque quelque chose ne va pas.';
$helptxt['enableErrorQueryLogging'] = 'Ceci enregistrera les requêtes SQL complètes dans le journal d\'erreurs si la base de données retourne une erreur. Requiert l\'activation du journal d\'erreurs.<br><br><strong>Attention, cela modifiera la capacité de filtrage du journal d\'erreurs par message d\'erreur.</strong>';
$helptxt['allow_disableAnnounce'] = 'Ceci permettra aux utilisateurs de désélectionner la réception des annonces du forum que vous envoyez en cochant &quot;Annoncer le sujet&quot; lorsque vous postez un message.';
$helptxt['disallow_sendBody'] = 'Cette option supprime l\'option permettant de recevoir le texte des réponses et les messages dans les e-mails de notification.<br><br>Souvent, les membres vont répondre à l\'e-mail de notification, ce qui peut saturer, dans bien des cas, la boîte e-mail du webmestre.';
$helptxt['compactTopicPagesEnable'] = 'Ceci est le nombre de pages intermédiaires à afficher lors du visionnement d\'un sujet.<br><em>Exemple&nbsp;:</em>
		&quot;3&quot; pour afficher&nbsp;: 1 ... 4 [5] 6 ... 9 <br>
		&quot;5&quot; pour afficher&nbsp;: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ceci affichera au bas du forum le temps en secondes utilisé par SMF pour générer la page en cours.';
$helptxt['removeNestedQuotes'] = 'Ceci effacera les citations imbriquées dans les messages que vous citez en cliquant sur le bouton Citer.';
$helptxt['simpleSearch'] = 'Ceci affichera un formulaire de recherche simple ainsi qu\'un lien vers un formulaire contenant plus d\'options.';
$helptxt['max_image_width'] = 'Cette option vous permet de spécifier une taille maximale pour les images postées. Les images plus petites ne seront pas affectées.';
$helptxt['mail_type'] = 'Cette option vous permet d\'utiliser soit le réglage par défaut de PHP ou de l\'outrepasser en utilisant le protocole SMTP. PHP ne supporte pas l\'authentification (que plusieurs FAI requièrent maintenant) donc vous devriez vous renseigner avant d\'utiliser cette option. Notez que SMTP peut être plus lent que sendmail et que certains serveurs ne prendront pas en compte les identifiants et mot de passe.<br><br>Vous n\'avez pas à renseigner les informations SMTP si vous utilisez la configuration par défaut de PHP.';
$helptxt['attachment_manager_settings'] = 'Les fichiers joints sont des fichiers que les membres peuvent uploader et joindre à un message. D\'où le nom. Logique.<br><br>
		<strong>Vérifier l\'extension des fichiers joints</strong> :<br> Voulez-vous contrôler l\'extension des fichiers&nbsp;?<br>
		<strong>Extensions autorisées</strong> :<br> Vous pouvez mettre les extensions de fichiers joints autorisées.<br>
		<strong>Répertoire des fichiers joints</strong> :<br> Le chemin vers le dossier de fichiers joints<br>(exemple: /home/sites/yoursite/www/forum/attachments)<br>
		<strong>Taille maximale du répertoire des fichiers joints</strong> (en Ko) :<br> Sélectionnez de quelle taille le dossier de fichiers joints peut t\'il être, en incluant tous les fichiers contenus.<br>
		<strong>Taille totale maximale des fichiers joints par message</strong> (en Ko) :<br> Sélectionnez la taille de fichier maximum de tous les fichiers joints d\'un même message. Si elle est inférieure à la limite de taille de fichier joint, cela sera la limite.<br>
		<strong>Taille maximale de chaque fichier joint</strong> (en Ko) :<br> Sélectionnez la taille de fichier maximum de chaque fichier joint.<br>
		<strong>Nombre maximum de fichiers joints par message</strong> :<br> Sélectionnez le nombre de fichiers joints qu\'une personne peut mettre par message.<br>
		<strong>Afficher les images jointes sous les messages</strong> :<br> Si le fichier uploadé est une image, elle sera affichée sous le message.<br>
		<strong>Montrer les images jointes sous forme de vignettes sous les messages</strong> :<br> Si l\'option au-dessus est sélectionnée, cela sauvegardera une copie (plus petite) du fichier joint pour la vignette afin d\'économiser la bande passante.<br>
		<strong>Largeur et hauteur maximales des vignettes</strong> :<br> Seulement utilisé avec l\'option &quot;Redimensionner les images quand affichées sous les messages&quot;, spécifie la taille et la hauteur maximales des vignettes créées pour les fichiers joints. Elles seront redimensionnées proportionnellement.';
$helptxt['attachment_image_paranoid'] = 'Choisissez cette option pour mettre en place des contrôles de sécurité très stricts sur les images envoyées en fichier joint. Attention, ces contrôles peuvent parfois échouer sur des images sans danger. Nous vous recommandons de ne l\'utiliser qu\'en association avec l\'option de réencodage, auquel cas SMF essaiera de recréer et de mettre en ligne des images saines si le contrôle échoue. Si le réencodage n\'est pas activé, les fichiers joints échouant au contrôle seront rejetés.';
$helptxt['attachment_image_reencode'] = 'Choisissez cette option pour permettre le réencodage des fichier joints envoyés par les utilisateurs. Le réencodage vous garantit une meilleure sécurité, mais il supprime également les animations des images animées.';
$helptxt['avatar_paranoid'] = 'Choisissez cette option pour mettre en place des contrôles de sécurité très stricts sur les avatars au moment où les utilisateurs les envoient. Attention, ces contrôles peuvent parfois échouer sur des images sans danger. Nous vous recommandons de ne l\'utiliser qu\'en association avec l\'option de réencodage, auquel cas SMF essaiera de recréer et de mettre en ligne des images saines si le contrôle échoue. Si le réencodage n\'est pas activé, les avatars échouant au contrôle seront rejetés.';
$helptxt['avatar_reencode'] = 'Choisissez cette option pour permettre le réencodage des avatars envoyés par les utilisateurs. Le réencodage vous garantit une meilleure sécurité, mais il supprime également les animations des images animées.';
$helptxt['cal_enabled'] = 'Le calendrier peut êre utilisé afin d\'afficher les anniversaires et des dates importantes à votre communauté.<br><br>
		<strong>Montrer les jours en tant que liens vers \'Poster un Événement\'</strong>&nbsp;:<br>Ceci permettra à vos membres de poster des événements pour ce jour, lorsqu\'ils cliquent sur la date.<br>
		<strong>Jours d\'avance max. sur l\'accueil</strong>:<br>Si cette option est mise à 7, tous les événements de la semaine à venir seront montrés.<br>
		<strong>Montrer les jours de fête sur l\'accueil du forum</strong>&nbsp;:<br>Montre les jours de fête dans une barre sur l\'accueil du forum.<br>
		<strong>Afficher les anniversaires sur l\'accueil du forum</strong>&nbsp;:<br>Montre les anniversaires du jour dans une barre sur l\'accueil du forum.<br>
		<strong>Montrer les événements sur l\'accueil du forum</strong>&nbsp;:<br>Affiche les événements du jour dans une barre sur l\'accueil du forum.<br>
		<strong>Section où Poster par Défaut</strong>:<br>Quelle est la section par défaut pour poster les événements&nbsp;?<br>
		<strong>Permettre les événements qui ne sont liés à aucun message</strong>&nbsp;:<br>Permet aux membres de poster des événements sans nécessiter la création d\'un nouveau sujet dans le forum.<br>
		<strong>Année minimale</strong>&nbsp;:<br>Sélectionne la &quot;première&quot; année dans la liste du calendrier.<br>
		<strong>Année maximale</strong>&nbsp;:<br>Sélectionne la &quot;dernière&quot; année dans la liste du calendrier<br>
		<strong>Permettre aux événements de durer plusieurs jours</strong>&nbsp;:<br>Sélectionnez pour permettre aux événements de durer plusieurs jours.<br>
		<strong>Durée maximale (en jours) d\'un événement</strong>&nbsp;:<br>Sélectionnez le nombre maximal de jours pour la duré d\'un événement.<br><br>
		Rappelez-vous que l\'usage du calendrier (poster des événements, voir des événements, etc.) est contrôlable par les réglages des permissions à partir de l\'écran de gestion des permissions.';
$helptxt['localCookies'] = 'SMF utilise des cookies (« témoins ») pour conserver les informations de connexion d\'un membre. Les cookies peuvent être stockés dans un dossier global (monserveur.com) ou localement (monserveur.com/chemin/vers/mon/forum).<br>
	Cochez cette option si vous constatez certains problèmes avec des utilisateurs déconnectés automatiquement.<hr>
	Les cookies stockés dans un dossier global sont moins sécurisés lorsqu\'ils sont utilisés sur un serveur mutualisé (comme Multimania/Lycos, Free, OVH, ...).<hr>
	Les cookies stockés localement ne fonctionnent pas à l\'extérieur du dossier du forum. Donc, si votre forum est installé dans le répertoire www.monserveur.com/forum, les pages telles que www.monserveur.com/index.php ne pourront pas accéder aux cookies. Lors de l\'utilisation de SSI.php, il est recommandé de stocker les cookies dans un dossier global.';
$helptxt['enableBBC'] = 'Activer cette fonction autorisera vos membres à utiliser les balises (BBCodes) sur votre forum, afin de permettre la mise en forme du texte, l\'insertion d\'images et plus.';
$helptxt['time_offset'] = 'Tous les propriétaires de forums ne souhaitent pas forcément utiliser le fuseau horaire du serveur sur lequel ils sont hébergés. Utilisez cette fonction pour spécifier un temps de décalage (en heures) sur lequel le forum devrait se baser pour les dates et heures. Les temps négatifs et décimaux sont permis.';
$helptxt['default_timezone'] = 'La zone horaire du serveur indique à PHP où il se trouve. Assurez-vous que ladite zone soit correctement renseignée, notamment le pays voire la ville. Vous trouverez plus d\'informations sur <a href="http://www.php.net/manual/fr/timezones.php" target="_blank">le site de PHP</a>.';
$helptxt['spamWaitTime'] = 'Ici vous pouvez spécifier le temps minimal requis entre deux envois de messages en provenance d\'un même utilisateur. Cette option peut être utilisée afin de contrer le pollupostage (&quot;spamming&quot;).';

$helptxt['enablePostHTML'] = 'Ceci permet l\'utilisation de quelques balises HTML basiques&nbsp;:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Ici vous pouvez choisir si le thème par défaut peut être utilisé ou non, quel thème les invités verront ainsi que plusieurs autres options. Cliquez sur un thème à droite pour changer ses propriétés spécifiques.';
$helptxt['theme_install'] = 'Ceci vous permet d\'installer des nouveaux thèmes. Vous pouvez procéder en partant d\'un dossier déjà créé, en transférant une archive d\'un thème ou en copiant le thème par défaut.<br><br>Notez bien que les archives de thèmes doivent contenir un fichier de définition <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Cette option permettra à vos visiteurs d\'insérer des animations Flash directement dans leurs messages, comme des images. Ceci peut présenter un sérieux risque de sécurité, bien que peu nombreux soient ceux qui ont réussi l\'exploitation de ce risque.<br><br>UTILISEZ CETTE OPTION À VOS PROPRES RISQUES&nbsp;!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permet aux gens de faire référence aux <a href="%1$s?action=feed;sa=news" target="_blank">dernières nouvelles</a>
	et autres données similaires. Il est recommandé de limiter la taille des messages puisque certains clients
	tels que Trillian préfèrent afficher des messages tronqués.';

$helptxt['globalCookies'] = 'Permet l\'utilisation de cookies (« témoins ») indépendants du sous-domaine. Par exemple, si...<br>
	Votre site est situé sur http://www.chezmoi.org/,<br>
	Et votre forum est situé sur http://forum.chezmoi.org/,<br>
	Activer cette fonction vous permettra d\'utiliser les cookies de votre forum sur votre site (grâce à SSI.php, par exemple).';
$helptxt['secureCookies'] = 'Activer cette option forcera la sécurisation des cookies (« témoins ») créés pour les utilisateurs de votre forum. Ne l\'activez que si vous utilisez le protocole HTTPS sur tout votre site, faute de quoi la gestion des cookies sera fortement perturbée&nbsp;!';
$helptxt['securityDisable'] = 'Ceci <em>désactive</em> la vérification supplémentaire du mot de passe pour accéder à la zone d\'administration. Ça n\'est pas recommandé&nbsp;!';
$helptxt['securityDisable_why'] = 'Ceci est votre mot de passe courant. (Le même que vous utilisez pour vous connecter au forum quoi.)<br><br>Avoir à le taper de nouveau permet de vérifier que vous voulez bien effectuer quelque opération d\'administration, et que c\'est bien <strong>vous</strong> qui le faites.';
$helptxt['emailmembers'] = 'Dans ce message, vous pouvez inclure certaines &quot;variables&quot;. Celles-ci sont&nbsp;:<br>
	{$board_url} - L\'URL vers votre forum.<br>
	{$current_time} - L\'heure courante.<br>
	{$member.email} - L\'adresse e-mail du membre.<br>
	{$member.link} - Le lien vers le profil du membre.<br>
	{$member.id} - L\'ID du membre.<br>
	{$member.name} - Le nom du membre. (pour un message plus personnalisé.)<br>
	{$latest_member.link} - Le lien vers le profil du membre le plus récent.<br>
	{$latest_member.id} - L\'ID de l\'utilisateur le plus récemment inscrit.<br>
	{$latest_member.name} - Le nom du membre le plus récemment inscrit.';
$helptxt['attachmentEncryptFilenames'] = 'Encrypter les noms des fichiers joints permet le transfert de fichiers dont le nom serait identique, d\'utiliser sécuritairement des fichiers .php pour gérer ces pièces jointes et une plus grande sécurité. D\'un autre côté, cela peut compliquer une reconstruction de base de données si un problème radical se présente.';

$helptxt['failed_login_threshold'] = 'Spécifiez le nombre maximal de tentatives de connexion avant de rediriger l\'utilisateur vers la fonction &quot;Rappel de Mot de Passe&quot;.';
$helptxt['oldTopicDays'] = 'Si cette option est activée, un avertissement sera affiché aux utilisateurs qui tenteront de répondre dans un sujet dans lequel il n\'y a eu aucune intervention après un certain laps de temps, en jours, spécifié par ce paramêtre. Réglez-la à 0 pour désactiver cette fonction.';
$helptxt['edit_wait_time'] = 'Temps en secondes permis pour la modification d\'un message avant que la mention &quot;Dernière édition&quot; apparaisse.';
$helptxt['edit_disable_time'] = 'Nombre de minutes accordées à un utilisateur pour qu\'il puisse modifier ses messages. Mettre sur 0 pour désactiver. <br><br><em>Note: Cela n\'affectera pas l\'utilisateur qui a la permission de modifier les messages des autres.</em>';
$helptxt['posts_require_captcha'] = 'Ce réglage forcera les utilisateurs à rentrer un code affiché sur une image de vérification à chaque fois qu\'ils posteront un message. Seul les utilisateurs avec un compteur de messages en dessous du nombre choisi auront à entrer le code - Cela devrait aider à combattre les scripts automatiques de spam.';
$helptxt['enableSpellChecking'] = 'Active la vérification orthographique. Vous DEVEZ avoir la librairie pspell installée sur votre serveur et PHP doit être configuré de telle sorte qu\'il utilise cette librairie. Votre serveur ' . (function_exists('pspell_new') ? '<span style="color: green">semble</span>' : '<span style="color: red">NE SEMBLE PAS</span>') . ' avoir la librairie pspell.';
$helptxt['disable_wysiwyg'] = 'Ce réglage désactivera l\'utilisation du WYSIWYG (acronyme de la locution anglaise &quot;What you see is what you get&quot;, signifiant littéralement en français &quot;vous aurez ce que vous voyez&quot;») sur la page de rédaction des messages chez tous les utilisateurs.';
$helptxt['lastActive'] = 'Sélectionnez le nombre de minutes à afficher dans &quot;Membres actifs dans les X dernières minutes&quot;, sur l\'accueil du forum. Par défaut, la valeur est 15 minutes.';

$helptxt['customoptions'] = 'Cette section définit les options qu\'un utilisateur peut choisir à partir d\'une liste déroulante. Il y a quelques points clés à noter pour cette section:
	<ul class="normallist">
		<li><strong>Option par défaut:</strong> L\'option que vous aurez choisie ici sera celle définie par défaut pour l\'utilisateur lorsqu\'il enregistrera son profil.</li>
		<li><strong>Options à retirer:</strong> Pour retirer une option, laisser simplement vide la boite de texte de cette option - celle-ci sera automatiquement supprimée pour tous les utilisateurs l\'ayant précédemment sélectionnée.</li>
		<li><strong>Réordonner les Options:</strong> Vous pouvez modifier l\'ordre des options en les déplacant. Remarque importante - Assurez-vous de ne <strong>pas</strong> modifier le texte de ces options lorsque vous en modifiez l\'ordre, sinon vous perdrez les données prélablement enregistrées par vos utilisateurs pour ces options.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Cette fonction optimise votre base de données tous les X jours. Spécifiez 1 pour effectuer une optimisation quotidienne. Vous pouvez aussi spécifier un nombre maximum d\'utilisateurs en ligne lors de l\'optimisation, donc vous ne surchargerez pas votre serveur et importunerez un minimum de gens.';
$helptxt['autoFixDatabase'] = 'Ceci réparera automatiquement les tables présentant des erreurs et ainsi, le forum continuera de fonctionner comme si rien ne s\'était produit. Ceci peut être utile, car la seule façon de régler le problème est de RÉPARER la table en question, et grâce à cette option, le forum ne sera pas hors service en attendant que vous preniez les mesures nécessaires. Un e-mail vous est envoyé lorsqu\'un tel problème se présente.';

$helptxt['enableParticipation'] = 'Cette fonction affiche une icône spéciale sur les sujets dans lesquels un utilisateur est précédemment intervenu.';

$helptxt['db_persist'] = 'Conserve une connexion permanente avec la base de données afin d\'accroître les performances du forum. Si vous êtes sur un serveur mutualisé (Lycos, Free / Online, OVH, Celeonet, Lewis Media...), l\'activation de cette fonction peut occasionner des problèmes avec votre hébergeur, car cela consomme beaucoup de ressources système.';
$helptxt['ssi_db_user'] = 'Réglage optionnel pour utiliser un nom d\'utilisateur et un mot de passe de base de données différents quand vous utilisez SSI.php.';

$helptxt['countChildPosts'] = 'Sélectionner cette option signifie que les messages et les sujets dans une section parente seront comptés dans leur totalité sur la page d\'index.<br><br>Cela rendra les choses notablement plus lentes, mais signifiera qu\'une parente avec aucun message ne montrera pas \'0\'.';
$helptxt['fixLongWords'] = 'Cette option coupe les mots plus longs qu\'un certain nombre de lettres en plusieurs parties, pour ne pas (trop) déformer la charte graphique de votre forum. Évitez les valeurs inférieures à 40.';
$helptxt['allow_ignore_boards'] = 'Cocher cette option permettra aux utilisateurs de sélectionner les sites qu\'ils veulent ignorer.';
$helptxt['allow_ignore_topics'] = 'Cocher cette option permettra aux utilisateurs de sélectionner les sujets qu\'ils veulent ignorer dans les fonctions <em>Réponses non lues</em> et <em>Messages non lus</em>.';

$helptxt['display_flags'] = 'En plus de la langue par défaut du forum, vous pouvez choisir une langue par défaut pour chaque section individuelle. Cette option vous permet de montrer ou non un drapeau représentant la langue par défaut sur la liste des sections&nbsp;:
	<ul class="normallist">
		<li><strong>Non</strong> - ne montrer aucun drapeau.</li>
		<li><strong>Uniquement pour les sections qui ont une langue par défaut</strong> - si une section a une langue par défaut spécifique, montrer le drapeau de cette langue à côté du nom de la section.</li>
		<li><strong>Oui, pour toutes les sections</strong> - montrer le drapeau de la langue de chaque section à côté du nom de celle-ci, indiquant la langue qui sera utilisée (sauf bien sûr si l\'utilisateur a, lui-même, choisi une langue par défaut ; on est très conciliants, chez Wedge).</li>
	</ul>';

$helptxt['who_enabled'] = 'Cette option vous permet d\'activer ou non la possibilité de voir qui est en ligne sur le forum et ce qu\'il y fait.';

$helptxt['recycle_enable'] = '&quot;Recycle&quot; les sujets et messages supprimés vers une section spécifique, souvent une section caché aux utilisateurs normaux.';

$helptxt['enableReportPM'] = 'Cette option permet aux utilisateurs de rapporter des messages personnels qu\'ils ont reçus à l\'équipe d\'administration. Ceci peut être pratique pour aider à traquer les abus effectués à l\'aide du système de messagerie personnelle.';
$helptxt['max_pm_recipients'] = 'Cette option vous permet de limiter la quantité maximale de messages privés envoyé par un membre du forum. Cette option permet de lutter contre le pollupostage (&quot;spam&quot;) du système de MP. Notez que les utilisateurs ayant la permission d\'envoyer des bulletins d\'informations ne sont pas concernés par cette restriction. Réglez-la à 0 pour désactiver la fonction.';
$helptxt['pm_posts_verification'] = 'Cette option forcera les utilisateurs à entrer un code affiché sur une image de vérification à chaque fois qu\'ils envoient un message personnel. Seuls les utilisateurs avec un compteur de messages en dessous de l\'ensemble de nombres auront besoin de saisir le code - Cela devrait aider à lutter contre les robots spammeurs.';
$helptxt['pm_posts_per_hour'] = 'Cette option limitera le nombre de messages personnels qui pourront être envoyés par un utilisateur en une heure de temps. Cela n\'affecte pas les admins ou modérateurs.';

$helptxt['default_personal_text'] = 'Choisit le texte personnel qu\'un nouvel utilisateur aura par défaut.';

$helptxt['modlog_enabled'] = 'Enregistre toutes les actions de modération dans un journal.';

$helptxt['guest_hideContacts'] = 'Si cette option est sélectionnée, les adresses email et les détails de contact messenger
	des membres de votre forum ne seront visibles par les visiteurs anonymes';

$helptxt['registration_method'] = 'Cette fonction détermine quelle méthode d\'inscription doit être adoptée pour les gens désirant rejoindre votre forum. Vous pouvez sélectionner un de ces choix&nbsp;:<br><br>
	<ul class="normallist">
		<li>
			<strong>Inscription désactivée</strong><br>
				Désactive les procédures d\'inscription, ce qui signifie que personne ne peut plus s\'inscrire sur votre forum.<br>
		</li><li>
			<strong>Inscription immédiate</strong><br>
				Les nouveaux membres peuvent se connecter et poster sur votre forum immédiatement après la procédure d\'inscription.<br>
		</li><li>
			<strong>Activation par e-mail</strong><br>
				Lorsque cette option est sélectionnée, tous les membres qui s\'inscrivent au forum recevront un e-mail contenant un lien pour activer leur compte. Ils ne pourront utiliser leur compte que lorsque celui-ci aura été activé.<br>
		</li><li>
			<strong>Approbation par un Admin</strong><br>
				Lorsque cette option est sélectionnée, l\'inscription de tous les nouveaux utilisateurs de votre forum devra d\'abord être approuvée par les administrateurs pour être ensuite effective et leur permettre ainsi de rejoindre votre communauté.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Identification avec OpenID</strong><br>
	OpenID est un moyen d\'utiliser un seul nom d\'utilisateur pour différents sites web, sans avoir à retenir un identifiant pour chacun d\'eux. Pour utiliser OpenID vous devez d\'abord créer un compte OpenID - une liste de fournisseurs est disponible sur le <a href="http://openid.net/" target="_blank">Site officiel OpenID</a>.<br><br>
	Une fois que vous avez un compte OpenID, entrez simplement votre URL unique d\'identification dans le champ OpenID et validez. Il sera effectué une vérification de votre identité via le site de vos fournisseurs avant de pouvoir entrer sur le site en question.<br><br>
	Lors de votre première visite sur ce site, il vous sera demandé de confirmer une série de détails avant d\'être reconnu, après cela vous pourrez vous connecter sur le site et changer votre profil juste en utilisant votre OpenID.<br><br>
	Pour plus d\'informations, veuillez visiter le <a href="http://openid.net/" target="_blank">Site officiel OpenID</a>.';

$helptxt['send_validation_onChange'] = 'Lorsque cette option est cochée, tous les membres qui modifient leur adresse e-mail dans leur profil devront réactiver leur compte grâce à un e-mail envoyé à leur nouvelle adresse.';
$helptxt['send_welcomeEmail'] = 'Lorsque cette option est activée, tous les nouveaux membres recevront un e-mail leur souhaitant la bienvenue sur votre communauté.';
$helptxt['password_strength'] = 'Ce réglage détermine le niveau de sécurité requis pour les mots de passe sélectionnés par les membres de votre forum. Plus ce niveau est &quot;élevé&quot;, plus il devrait être difficile de découvrir le mot de passe et de pirater leurs comptes.
	Les niveaux possibles sont&nbsp;:
	<ul>
		<li><strong>Bas&nbsp;:</strong> Le mot de passe doit être composé d\'au moins quatre caractères.</li>
		<li><strong>Moyen&nbsp;:</strong> Le mot de passe doit être formé d\'au moins huit caractères, et ne peut contenir des parties de l\'identifiant ou de l\'adresse e-mail.</li>
		<li><strong>élevé&nbsp;:</strong> Comme pour le niveau précédent, et le mot de passe doit aussi contenir des lettres majuscules et minuscules et au moins un chiffre.</li>
	</ul>';

$helptxt['coppaAge'] = 'La valeur spécifiée dans ce champ détermine l\'àge minimum que doit avoir un membre pour avoir un accè immédiat aux sections.
	À l\'inscription, il sera demandé aux membres de confirmer s\'ils ont plus que cet âge. Si ce n\'est pas le cas, leur inscription sera rejetée ou suspendue en attente d\'une autorisation parentale - en fonction des restrictions que vous spécifiez.
	Si la valeur est 0 pour cette option toutes les restrictions d\'âge pour les prochaines inscriptions seront ignorées.';
$helptxt['coppaType'] = 'Si la restriction d\'âge est active, ce paramètre définira ce qui se produit lorsqu\'un membre n\'ayant pas l\'âge minimum requis tente de s\'inscrire sur votre forum. Il existe deux choix possibles&nbsp;:
	<ul class="normallist">
		<li>
			<strong>Rejeter son inscription&nbsp;:</strong><br>
				N\'importe quel nouvel adhérent n\'ayant pas l\'âge requis verra son inscription rejetée immédiatement.<br>
		</li><li>
			<strong>Nécessiter l\'approbation d\'un parent/tuteur légal</strong><br>
				N\'importe quel nouvel adhérent n\'ayant pas l\'âge requis et qui tente de s\'inscrire sur votre forum verra son compte marqué en attente d\'approbation et il lui sera remis un formulaire à faire remplir par ses parents ou tuteurs avant de pouvoir devenir membre de votre forum.
				Il lui sera aussi présenté les informations de contact du forum enregistrées sur la page des paramètres, afin que le formulaire d\'approbation parentale soit envoyée à l\'administrateur par la poste ou par téléfax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Les champs de contact doivent être completées afin que les formulaires d\'autorisation parentale pour les membres n\'ayant pas l\'âge requis soient envoyés à l\'administrateur. Ces détails seront affichés à tous les mineurs et il leur est nécessaire d\'obtenir une approbation parentale. Une adresse postale ou un numéro de téléfax est le minimum requis.';

$helptxt['allow_hideOnline'] = 'En activant cette option, les membres peuvent cacher leur statut de connexion au forum aux autres visiteurs (sauf aux administrateurs). Si elle est désactivée, seuls les utilisateurs qui peuvent modérer le forum entier peuvent cacher leur présence. Notez bien que désactiver cette option ne changera rien dans le statut des membres connectés en ce moment - cela ne leur empêchera la manœuvre que pour les futures connexions.';
$helptxt['make_email_viewable'] = 'Si cette option est activée, les e-mails des utilisateurs, au lieu d\'être cachés aux membres normaux et aux invités, seront publiquement visibles sur le forum. Activer ceci exposera vos utilisateurs à un plus grand risque d\'être victime de spam si des robots collecteurs d\'adresses visitent votre forum. Notez que ce réglage n\'écrase pas le réglage utilisateur pour cacher son adresse e-mail aux autres utilisateurs. Activer ceci n\'est <strong>pas</strong> recommandé.';
$helptxt['meta_keywords'] = 'Cette fonctionnalité est facultative. Ces mots-clés sont placés dans les entêtes de chaque page pour indiquer aux robots le type de contenu de votre site (mais cette technique n\'est plus très efficace de nos jours, NDT). Séparez les mots par des virgules, et n\'utilisez pas de HTML.';

$helptxt['latest_support'] = 'Ce panneau affiche quelques-uns des problèmes et questions les plus fréquents et communs et des informations sur votre serveur. Ne vous inquiétez pas, ces informations ne sont stockées nulle part.<br><br>Si l\'affichage du message &quot;Réception des informations de support&hellip;&quot; persiste, votre ordinateur ne peut probablement pas se connecter sur <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Ici vous pouvez voir quelques extensions parmi les plus populaires et d\'autres choisies au hasard, avec une installation facile et rapide.<br><br>Si cette rubrique ne s\'affiche pas, votre ordinateur n\'arrive peut-être pas à se connecter à <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Cette zone vous montre quelques-uns des derniers thèmes et les plus populaires en provenance de <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>. Cela peut néanmoins ne pas s\'afficher correctement si votre ordinateur a du mal à se connecter à <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Pour votre sécurité, la réponse à votre question (de même que votre mot de passe) est encryptée de telle manière que SMF ne peut que vérifier si vous entrez la bonne valeur, ainsi il ne peut jamais vous révéler (ni à vous ni à personne d\'autre, heureusement&nbsp;!) quelle est votre réponse ou votre mot de passe.';
$helptxt['moderator_why_missing'] = 'Puisque la modération est définie indépendamment pour chaque section, vous devrez assigner les membres en tant que modérateurs à partir de <a href="javascript:window.open(\'%1$s?action=manageboards\'); self.close();">l\'interface de gestion des sections</a>.';

$helptxt['permissions'] = 'Les permissions permettent de définir les droits accordés (ou non) aux membres pour effectuer une action particulière. Ces droits sont définis sur la base des groupes de membres <br><br>Vous pouvez modifier ces droits sur plusieurs sections en même temps en utilisant les cases à cocher, ou modifier les permissions d\'un groupe particulier en cliquant sur le lien \'Modifier\'';
$helptxt['permissions_board'] = 'Si \'Global\' est sélectionné, cela signifie que cette section ne possèdera aucune permission particulière, et aura celles générales de votre forum. \'Local\' signifie qu\'elle aura ses propres permissions - indépendamment des permissions globales. Ceci vous permet d\'avoir des sections avec plus ou moins de permissions que d\'autres, sans navoir à régler toutes les permissions pour chaque section.';
$helptxt['permissions_quickgroups'] = 'Ceci vous permet d\'utiliser les réglages de permissions par &quot;défaut&quot; - standard signifie &quot;rien de spécial&quot;, restreint signifie &quot;comme un invité&quot;, modérateur signifie &quot;les mêmes droits qu\'un modérateur&quot;, et enfin maintenance signifie &quot;des permissions très proches de celles d\'un administrateur&quot;.';
$helptxt['permissions_deny'] = 'Interdire des permissions peut être utile quand vous voulez enlever des permissions à certains membres. Vous pouvez ajouter un groupe de membres avec une permission \'interdite\' pour les membres auquels vous voulez interdire une permission.<br><br>À utiliser avec précaution, une permission interdite restera interdite peu importe dans quels autres groupes de membres le membre fait partie.';
$helptxt['permissions_postgroups'] = 'Activer les permissions pour les groupes posteurs vous permettra d\'attribuer des permissions aux membres ayant posté un certain nombre de messages. Les permissions du groupe posteur sont <em>ajoutées</em> aux permissions des membres inscrits.';
$helptxt['membergroup_guests'] = 'Le groupe de membres Invités contient tous les utilisateurs qui ne sont pas connectés à un compte membre sur votre forum.';
$helptxt['membergroup_regular_members'] = 'Les membres inscrits correspondent à tous les utilisateurs ayant un compte membre sur votre forum, mais à qui aucun groupe permanent n\'a été assigné.';
$helptxt['membergroup_administrator'] = 'L\'administrateur peut, par définition, faire tout ce qu\'il veut et voir toutes les sections. Il n\'y a aucun réglage de permissions pour les administrateurs.';
$helptxt['membergroup_moderator'] = 'Le groupe Modérateur est un groupe spécial. Les permissions et réglages pour ce groupe s\'appliquent aux modérateurs mais uniquement <em>dans la (ou les) section(s) qu\'ils modèrent</em>. Au dehors de ces sections, ils sont considérés comme n\'importe quel autre membre régulier.';
$helptxt['membergroups'] = 'Dans SMF il y a deux types de groupes auquels vos membres peuvent appartenir. Ce sont&nbsp;:
	<ul class="normallist">
		<li><strong>Groupes permanents&nbsp;:</strong> Un groupe permanent est un groupe dans lequel un membre n\'est pas assigné automatiquement. Pour assigner un membre dans un groupe permanent, allez simplement dans son profil et cliquez sur &quot;Paramètres relatifs au compte&quot;. Ici vous pouvez paramétrer les différents groupes permanents auxquels les membres peuvent appartenir.</li>
		<li><strong>Groupes posteurs&nbsp;:</strong> Au contraire des groupes permanents, un membre ne peut être manuellement assigné à un groupe posteur, basé sur le nombre de message. Les membres sont plutôt assignés automatiqement à un groupe posteur lorsqu\'ils ont atteint le nombre minimum de messages requis pour faire partie de ce groupe.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Vous pouvez modifier ces événements en cliquant sur l\'astérisque (*) rouge accompagnant leur nom.';

$helptxt['maintenance_backup'] = 'Cette section vous permettra de faire une copie de sauvegarde des messages, des réglages, des membres et autres informations utiles de votre forum dans un gros fichier.<br><br>Il est recommandé d\'effectuer cette opération souvent, par exemple hebdomadairement, pour plus de sécurité et de protection.';
$helptxt['maintenance_rot'] = 'Ceci vous permet de supprimer <strong>complètement</strong> et <strong>irrévocablement</strong> les vieux sujets. Vous devriez effectuer une copie de sauvegarde de votre base de données avant de procéder à cette action, au cas où vous enleveriez quelque chose que vous ne vouliez pas supprimer.<br><br>À utiliser avec précaution.';
$helptxt['maintenance_members'] = 'Ceci vous permet d\'effacer <strong>complètement</strong> et <strong>irrévocablement</strong> des comptes de membres de votre forum. Vous devriez <strong>absolument</strong> faire une sauvegarde avant, juste au cas où vous effaceriez quelque chose que vous ne vouliez pas effacer.<br><br>Utilisez cette option avec précaution.';

$helptxt['avatar_server_stored'] = 'Ceci permet à vos membres de choisir leur avatar parmi ceux préalablement installés sur votre serveur. Ils sont, généralement, au même endroit que votre forum SMF, dans le dossier des avatars.<br>Un conseil, si vous créez des répertoires dans ce dossier, vous pouvez faire des &quot;catégories&quot; d\'avatars.';
$helptxt['avatar_external'] = 'Ceci permet à vos membres d\'insérer l\'adresse URL de leur propre avatar. L\'inconvénient est que, dans certains cas, ils pourraient utiliser des avatars beaucoup trop gros ou des images que vous ne voulez pas voir sur votre forum.';
$helptxt['avatar_download_external'] = 'Ceci permet au forum de télécharger l\'avatar choisi par l\'utilisateur via l\'URL donnée par celui-ci. Si l\'opération réussit, l\'avatar sera traité comme un avatar transféré.';
$helptxt['avatar_upload'] = 'Cette option est pratiquement la même chose que &quot;Permettre aux membres de sélectionner un avatar externe&quot;, sauf que vous avez un meilleur contrôle sur les avatars, plus de facilité pour les redimensionner, et vos membres n\'ont pas à avoir un endroit où mettre leurs avatars.<br><br>Mais l\'inconvénient est que cela peut prendre beaucoup d\'espace sur votre serveur.';
$helptxt['avatar_download_png'] = 'Les images au format PNG sont plus lourdes, mais offrent un rendu de meilleure qualité. Si la case est décochée, le format JPEG sera utilisé à la place - ce qui donne des fichiers moins lourds, mais de moindre qualité, surtout les dessins, lesquels peuvent devenir assez flous.';
$helptxt['gravatar_settings'] = 'Les Gravatars sont un type d\'avatar généré par <a href="http://www.gravatar.com/">Gravatar.com</a>. Il vous suffit de mettre en ligne votre avatar là-bas et vous pourrez l\'utiliser sur tous les sites compatibles à condition d\'y renseigner la même adresse e-mail - notamment de nombreux blogs WordPress.';
$helptxt['gravatarEnabled'] = 'Les utilisateurs ne pourront utiliser des Gravatars que si cette option est activée.';
$helptxt['gravatarOverride'] = 'Si cette option est activée, les utilisateurs ne pourront pas choisir d\'avatar sur le forum, à l\'exception d\'un Gravatar.';
$helptxt['gravatarAllowExtraEmail'] = 'Si cette option est activée, les utilisateurs pourront fournir une adresse e-mail alternative utilisée uniquement pour choisir leur Gravatar. Nombreux sont ceux qui ont plusieurs adresses e-mail, s\'ils utilisent une adresse particulière pour leur Gravatar, ils pourront ainsi utiliser ce dernier.';
$helptxt['gravatarMaxRating'] = 'À la création d\'un Gravatar, les utilisateurs peuvent indiquer une classification correspondante inspirée de celle de l\'<a href="http://fr.wikipedia.org/wiki/Motion_Picture_Association_of_America" target="_blank">industrie du cinéma</a> américaine. Par exemple, ils peuvent le classifier en G si c\'est une photo d\'une fleur, ou mettre un X pour une photo potentiellement offensante, comme un Teletubby par exemple. (Ben quoi, j\'ai peur des Teletubbies.) Choisissez le niveau maximal acceptable pour le public de votre site.';
$helptxt['avatar_defaults'] = 'Ces options correspondent à des réglages plus généraux de votre forum, par exemple forcer un avatar sur les utilisateurs qui n\'en ont pas encore, ou gérer les avatars des utilisateurs bannis.';
$helptxt['avatar_banned_hide'] = 'Cette option permet de cacher les avatars des utilisateurs bannis, comme s\'ils n\'en avaient pas.<br><br>Attention, si l\'utilisateur est débanni, son avatar ne sera pas restauré automatiquement.';

$helptxt['disableHostnameLookup'] = 'Ceci désactive la recherche du nom de l\'hôte, fonction parfois lente sur certains serveurs. Notez que sa désactivation rend le système de bannissement moins efficace.';

$helptxt['search_weight_frequency'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un facteur d\'ancienneté du message relativement bas. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur compte le nombre de messages correspondants et divise ce résultat par le nombre de messages dans un sujet.';
$helptxt['search_weight_age'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie l\'âge des derniers messages d\'un sujet. Plus récent est le message, le plus haut dans la liste il est positionné.';
$helptxt['search_weight_length'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur est basé sur la longueur du sujet. Plus le sujet contient de réponses, plus le pointage est élevé.';
$helptxt['search_weight_subject'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie si le terme recherché peut être trouvé ou non dans le titre du sujet.';
$helptxt['search_weight_first_message'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie si le terme recherché peut être trouvé ou non dans le premier message du sujet.';
$helptxt['search_weight_sticky'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie si un sujet est populaire et augmente le score de pertinence si il l\'est.';
$helptxt['search'] = 'Ajustez ici tous les réglages de la fonction recherche.';
$helptxt['search_why_use_index'] = 'Un index de recherche peut considérablement améliorer l\'exécution des recherches sur votre forum. En particulier lorsque le nombre de messages sur un forum est de plus en plus grand, la recherche sans index peut prendre un bon moment et augmenter la pression sur votre base de données. Si votre forum a plus de 50.000 messages, vous devriez penser à créer un index de recherche pour assurer un fonctionnement optimal de votre forum.<br><br>À noter qu\'un index de recherche peut prendre un certain espace... Un index à texte intégral est un index géré par MySQL. C\'est relativement compact (approximativement la même taille que la table message), mais beaucoup de mots ne sont pas indexés et il se peut que quelques recherches s\'avèrent très lentes. L\'index personnalisé est souvent plus grand (selon votre configuration, cela peut ètre plus de 3 fois la taille de la table des messages) mais la performance est meilleure qu\'en texte intégral et relativement stable.';

$helptxt['see_member_ip'] = 'Votre adresse IP est affichée seulement à vous et à ceux auxquels l\'administrateur en a donné le droit. Rappelez-vous que cette information ne permet pas d\'identifier un individu précisément, la plupart des adresses changeant périodiquement.<br><br>Vous ne pouvez pas voir l\'adresse IP des autres, et les autres ne peuvent pas voir la vôtre.';
$helptxt['whytwoip'] = 'SMF utilise plusieurs méthodes pour détecter les adresses IP d\'un utilisateur. Habituellement ces deux méthodes donnent la même adresse mais dans certains cas plus d\'une adresse peut être détectée. Dans ce cas SMF conserve les adresses, et les utilise par exemple lors des contrôles de bannissement. Vous pouvez cliquer sur chaque adresse pour traquer cette IP et la bannir si nécessaire.';

$helptxt['ban_cannot_post'] = 'La restriction \'Ne peut pas poster\' a pour conséquence que le forum n\'est accessible qu\'en lecture seule pour l\'utilisateur banni. L\'utilisateur ne peut pas créer de nouveaux sujets ou répondre à ceux existants, envoyer des messages personnels ou voter dans les sondages. L\'utilisateur banni peut toutefois encore lire ses messages personnels et les sujets.<br><br>Un message d\'avertissement est affiché aux utilisateurs qui sont bannis avec cette restriction.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<strong>Paramètres des messages</strong><br>
			Modifie les paramètres relatifs au postage des messages et la façon dont ceux-ci sont affichés. Vous pouvez aussi activer le correcteur orthographique ici.
		</li><li>
			<strong>Code d\'affichage</strong><br>
			Active le code montrant les messages dans un rendu correct. Ajuste aussi quels codes sont permis et ceux qui sont désactivés.
		</li><li>
			<strong>Mots censurés</strong>
			Afin de conserver un registre de langage convenable sur votre forum, vous pouvez censurer certains mots. Cette fonction vous permet de convertir des mots interdits en d\'autres mots innocents. D\'où une possibilité dérivé de remplacement de termes choisis.
		</li><li>
			<strong>Paramètres des sujets</strong>
			Modifie les paramètres relatifs aux sujets&nbsp;: le nombre de sujets par page, l\'activation ou non des sujets épinglés, etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'En sélectionnant un groupe restrictif, lorsqu\'un invité est identifié comme moteur de recherche, certaines permissions lui seront niées (autrement dit &quot;Interdites&quot;), par rapport aux permissions normales d\'un invité. Vous pouvez utiliser ceci pour donner moins d\'accès à un moteur de recherche par rapport à un invité normal. Vous pouvez par exemple vouloir créer un nouveau groupe appelé &quot;Robots&quot; et le sélectionner ici. Vous pourriez donc interdire à ce groupe la permission de voir les profils pour empêcher l\'indexation par les robots des profils de vos membres.<br>Note: La détection des robots n\'est pas parfaite et peut être simulée par les utilisateurs, donc cette fonctionnalité n\'est pas garantie pour restreindre le contenu aux seuls moteurs de recherche que vous avez ajoutés.';
$helptxt['show_spider_online'] = 'Ce paramètre vous permet de choisir si les robots seront montrés ou pas sur la liste des utilisateurs en ligne et la page &quot;Qui est en ligne&quot;. Les options&nbsp;:
	<ul class="normallist">
		<li>
			<strong>Pas du tout</strong><br>
			Les robots seront montrés en tant qu\'invités aux autres utilisateurs.
		</li><li>
			<strong>Montrer le nombre de robots</strong><br>
			L\'accueil du forum indiquera le nombre de robots visitant actuellement le forum.
		</li><li>
			<strong>Montrer le nom des robots</strong><br>
			Les noms des robots seront montrés, les utilisateurs sauront ainsi combien de chaque type de robot visite le forum - valable à la fois pour l\'accueil du forum et la page Qui est en ligne.
		</li><li>
			<strong>Montrer le nom des robots, mais juste à l\'administrateur</strong><br>
			Comme ci-dessus, mais seuls les Administrateurs pourront voir le statut des robots - pour les autres utilisateurs, les robots seront affichés comme étant des invités.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Choisissez le modèle du message d\'anniversaire par e-mail à utiliser. Une prévisualisation sera affichée dans le sujet de l\'e-mail et les champs du corps de l\'e-mail.<br><strong>Attention</strong>, régler cette option n\'active pas automatiquement les e-mails d\'anniversaire. Pour activer les e-mails d\'anniversaire, utilisez la page <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Tâches Planifiées</a> et activez la tâche E-mail d\'anniversaire.';
$helptxt['pm_bcc'] = 'Lorsque vous envoyez un message personnel vous pouvez choisir d\'ajouter comme destinataire un BCC (soit &quot;Blind Carbon Copy&quot;). L\'existence et l\'identité des destinataires BCC seront cachées aux autres destinataires du message.';

$helptxt['move_topics_maintenance'] = 'Ceci vous permet de déplacer tous les sujets d\'un site à un autre.';
$helptxt['maintain_reattribute_posts'] = 'Vous pouvez utiliser cette fonction pour attribuer des messsages d\'invités de votre forum à un membre inscrit. Ceci est très utile par exemple si un utilisateur a effacé son compte, a changé d\'idée et veut récupérer les anciens messages associé à son compte.';
$helptxt['chmod_flags'] = 'Vous pouvez choisir manuellement les permissions que vous voulez appliquer aux fichiers sélectionnés. Pour ce faire, entrez la valeur du chmod en valeur numérique (en base 8). Note - ces indicateurs n\'auront aucun effet sur les systèmes d\'exploitation Microsoft Windows.';

$helptxt['postmod'] = 'Cette section permet aux membres de l\'équipe de modération disposant des permissions nécessaires, d\'approuver les messages et sujets avant leur apparition en ligne.';

$helptxt['field_show_enclosed'] = 'Entoure le texte entré par l\'utilisateur par du texte ou du HTML, vous permettant d\'ajouter des fournisseurs de messagerie instantanée supplémentaires, des images ou intégrations multimédia, etc. Par exemple&nbsp;:<br><br>
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br><br>
		À noter que vous pouvez utiliser les variables suivantes&nbsp;:<br>
		<ul class="normallist">
			<li>{INPUT} - Le texte entré par l\'utilisateur.</li>
			<li>{SCRIPTURL} - Adresse web (URL) du forum.</li>
			<li>{IMAGES_URL} - URL du dossier images dans le thème actuel de l\'utilisateur.</li>
			<li>{DEFAULT_IMAGES_URL} - URL du dossier images dans le thème par défaut.</li>
		</ul>';

$helptxt['custom_mask'] = 'Le masque d\'entrée est important pour la sécurité de votre forum. Valider le texte entré par un utilisateur peut vous permettre d\'éviter que ses données ne soient pas utilisées de manière inattendue. Vous pouvez utiliser des expressions régulières pour vous y aider.<br><br>
	<div class="smalltext" style="margin: 0 2em">
		&quot;[A-Za-z]+&quot; - Correspond à toutes les lettres de l\'alphabet, minuscules et majuscules.<br>
		&quot;[0-9]+&quot; - Correspond à tous les chiffres.<br>
		&quot;[A-Za-z0-9]{7}&quot; - Correspond à une suite de sept chiffres et/ou lettres de l\'alphabet, minuscules ou majuscules.<br>
		&quot;[^0-9]?&quot; - Empêche la présence à cet endroit d\'un chiffre.<br>
		&quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - N\'autoriser que 3 ou 6 caractères hexadécimaux.<br>
	</div><br><br>
	De plus, vous pouvez utiliser les méta-caractères spéciaux ?+*^$ et {xx}.
	<div class="smalltext" style="margin: 0 2em">
		? - Rien, ou une occurrence de l\'expression qui précède.<br>
		+ - Au moins une occurrence de l\'expression qui précède.<br>
		* - Rien, ou au moins une occurrence de l\'expression qui précède.<br>
		{xx} - xx occurrences de l\'expression qui précède.<br>
		{xx,} - xx occurrences, ou plus, de l\'expression qui précède.<br>
		{,xx} - Jusqu\'à xx occurrences de l\'expression qui précède.<br>
		{xx,yy} - Entre xx et yy occurrences de l\'expression qui précède.<br>
		$ - Début de chaîne.<br>
		^ - Fin de chaîne.<br>
		\\ - Échappe le caractère suivant.<br>
	</div><br><br>
	Vous pourrez trouver plus d\'informations et d\'exemples sur le Net.';

$helptxt['reverse_proxy'] = 'Si vous utilisez Bad Behavior derrière un proxy inverse, un répartiteur de charge, un accélérateur HTTP, un cache de contenu ou une autre technologie similaire, activez cette option.';
$helptxt['reverse_proxy_header'] = 'Votre ou vos serveurs proxy inverses doivent placer dans une entête HTTP l\'adresse IP du client Internet dont ils ont reçu la requête. En général, <a href="http://en.wikipedia.org/wiki/X-Forwarded-For">X-Forwarded-For</a> sera de mise, parce qu\'il est supporté par la plupart des serveurs proxy, mais assurez-vous bien qu\'il soit activé sur le vôtre. D\'autres entêtes possibles&nbsp;: "X-Real-Ip" (nginx) et "Cf-Connecting-Ip" (CloudFlare).';
$helptxt['reverse_proxy_ips'] = 'Cette zone vous permet de lister les adresses IP dans le style classique (par ex. 127.0.0.1), ou par blocs CIDR (par ex. 127.0.0.0/8). Si vous avez une chaîne de deux (ou plus) proxies inverses entre votre serveur et l\'Internet public, vous devez spécifier <em>toutes</em> les zones IP (au format CIDR) de tous vos serveurs proxy, répartiteurs de charge, etc. Si vous ne le faites pas, il sera impossible de déterminer la véritable adresse IP du client.';

// Help popup for the Media tag...
$helptxt['mediatag'] = '<h2>Le tag [media] et autres joyeusetés.</h2>
	Mais à quoi ça sert, me demandez-vous ? Eh bien, tout simplement à insérer des éléments média partout où vous pouvez utiliser des tags BBC, à commencer par vos messages sur le forum.
	Deux petits exemples pour se mettre en appétit&nbsp;:
	<br><br><b>[media id=123 type=preview align=center width=400 caption="Hello, world!"]</b>
	<br>Ce code affichera dans vos messages une image de taille intermédiaire (aperçu), alignée au centre, redimensionnée à 400 pixels de large, et accompagnée d\'un texte descriptif.
	Tous les paramètres sont facultatifs, seul l\'identifiant de l\'élément (id=123) est obligatoire. Vous me direz, ça paraît logique.
	<br>
	<br><b>[media id=1 type=album]</b>
	<br>Ce code montrera une série de vignettes de type box (voir plus bas) appartenant à l\'album numéro 1, reproduisant plus ou moins le visuel de la page web de l\'album en question.
	<br><br>
	<b>Valeurs possibles :</b>
	<br>- type=<i>normal, box, link, preview, full, album</i>
	<br>- align=<i>none, left, center, right</i>
	<br>- width=<i>123</i> (en pixels)
	<br>- caption=<i>&quot;Texte descriptif&quot;</i> ou caption=<i>EnUnMot</i>
	<br><br>
	<h2>Paramètres disponibles</h2>
	<b>id</b>
	<ul class="normallist">
		<li>Tous les éléments sont identifiés par un numéro dédié que vous pouvez voir dans leur adresse. Indiquez-le ici. C\'est le seul paramètre obligatoire. Je sais, c\'est moche. C\'est la vie.
		Mais faites pas cette tête, vous pouvez quand même spécifier plusieurs éléments en les séparant par une virgule, comme dans "[media id=1,2,3 type=album]".</li>
	</ul>
	<br>
	<b>type</b>
	<ul class="normallist">
		<li><b>normal</b> (défaut, sauf si configuré différemment) - afficher la vignette. Cliquez dessus pour voir son aperçu.</li>
		<li><b>av</b> - afficher la vidéo ou le fichier audio dans le lecteur adéquat. Si vous ne précisez pas ce paramètre, la vignette habituelle sera affichée, mais en cliquant dessus, c\'est le fichier complet qui sera chargé, brut. Pas classe, pas classe du tout.</li>
		<li><b>box</b> - afficher la vignette complète, avec tous ses détails, comme sur les pages de galerie. Cliquez sur la vignette pour aller vers la page consacrée à l\'élément.</li>
		<li><b>link</b> - afficher la vignette, mais le texte descriptif devient interactif. Cliquez dessus pour aller vers la page consacrée à l\'élément. Si le paramètre caption est vide, un texte par défaut sera montré à la place.</li>
		<li><b>preview</b> (peut être choisi par défaut si configuré) - afficher l\'aperçu de l\'image (à mi-chemin entre la vignette et l\'image complète).</li>
		<li><b>full</b> (peut être choisi par défaut si configuré) - afficher l\'image entière. N\'oubliez pas de régler le paramètre width !</li>
		<li><b>album</b> - afficher les dernières vignettes de l\'album identifié par son ID. Elles seront présentées sous la forme <b>box</b>.</li>
	</ul>
	<br>
	<b>align</b>
	<ul class="normallist">
		<li><b>none</b> (défaut) - alignement normal. Les vignettes environnantes sont repoussées à la ligne suivante ou précédente.</li>
		<li><b>left</b> - aligner la vignette à gauche. Utilisez plusieurs tags [media] alignés ainsi pour montrer les vignettes côte-à-côte.</li>
		<li><b>center</b> - aligner la vignette au centre. Pour afficher une vignette à gauche, une au milieu et une à droite, insérez-les dans cet ordre : [media align=left][media align=right][media align=center]</li>
		<li><b>right</b> - aligner la vignette à droite. Même remarque que pour <i>left</i>. Rompez.</li>
	</ul>
	<br>
	<b>width</b>
	<ul class="normallist">
		<li>Utilisez ce paramètre pour forcer la largeur d\'une vignette à la dimension désirée. Indiquez un nombre supérieur à zéro.</li>
		<li>Réglez le paramètre <i>type</i> selon vos besoins. Ainsi, si vos vignettes ont pour largeur par défaut 120 pixels, et vos aperçus 500 pixels, utilisez [media type=preview] si vous forcez une largeur supérieure à 300 pixels, pour éviter un effet de flou trop visible.</li>
	</ul>
	<br>
	<b>caption</b>
	<ul class="normallist">
		<li>Affiche un texte descriptif sous la vignette. Si le type est défini à <i>link</i>, le texte sera cliquable et vous mènera à la page consacrée à l\'élément.</li>
		<li>Entrez ce que vous voulez. Si votre texte contient des espaces ou des crochets, assurez-vous de l\'entourer de &quot;guillemets&quot;. Sinon, ça fait tout n\'importe quoi, et c\'est encore Bibi qui doit s\'y coller pour faire le ménage.</li>
	</ul>';

?>