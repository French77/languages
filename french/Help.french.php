<?php
// Version: 2.0; Help

$txt['close_window'] = 'Fermer la fenêtre';

$txt['cannot_change_voter_visibility'] = '
	Les membres peuvent parfois voter différemment s\'ils savent que leur vote sera public.
	Pour cette raison, une fois que ce paramètre est déterminé, il ne peut être modifié, ce qui
	permet aux votants de savoir à l\'avance qui pourra consulter ces informations.';

$txt['admins_see_votes'] = '
	Les administrateurs peuvent systématiquement voir qui a voté pour quoi. De toute manière,
	ils ont généralement accès à la base de données et pourraient la consulter pour avoir ces informations.';

$txt['help_manage_boards'] = '
	Dans ce menu, vous pouvez créer/réorganiser/supprimer des sections et les catégories
	les concernant. Par exemple, si vous avez un gros site offrant des informations variées
	sur plusieurs sujets tels que "Sports" et "Voitures" et "Musique", ces
	titres seraient ceux des catégories que vous créeriez. Sous chacune de ces catégories vous voudriez assurément insérer, de manière hiérarchique, des <em>sous-catégories</em>,
	ou "sections", pour des sujets les concernant. C\'est une simple hiérarchie, avec cette structure&#8239;: <br>
	<ul class="list">
		<li>
			<strong>Sports</strong>
			&nbsp;- Une "catégorie"
		</li>
		<ul class="list">
			<li>
				<strong>Baseball</strong>
				&nbsp;- Une section de la catégorie "Sports"
			</li>
			<ul class="list">
				<li>
					<strong>Stats</strong>
					&nbsp;- Une sous-section de la section "Baseball"
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- Une section de la catégorie "Sports"</li>
		</ul>
	</ul>
	Les catégories vous permettent de séparer votre forum en différents sujets ("Voitures,
	Sports"), et les "sections" en dessous sont les sujets dans lesquels
	vos membres peuvent poster. Un utilisateur intéressé par les Twingo
	voudra poster un message dans "Voitures-&gt;Twingo". Les catégories permettent aux gens
	de rapidement trouver ce qui les intéresse&#8239;: au lieu d\'un "Magasin", vous avez
	un "Magasin d\'informatique" et un "Magasin de chaussures" où vous pouvez aller. Cela simplifie
	votre recherche d\'un "disque dur", parce que vous pouvez aller directement au "Magasin d\'informatique"
	plutôt qu\'au "Magasin de chaussures"... Où vous ne trouverez sans doute pas votre disque dur. ;-)
	<br>
	Comme précisé plus haut, une section est un sujet clé sous une catégorie mère.
	Si vous voulez discuter de "Twingo", vous irez à la catégorie "Voitures" et
	irez à la section "Twingo" pour y poster votre avis à propos de cette automobile.<br>
	Les fonctions administratives possibles ici sont de créer des nouvelles sections
	sous chaque catégorie, réordonner les sections (placer "Twingo" sous "Renault"), ou
	supprimer une section entièrement.';

$txt['help_need_deny_perm'] = '
	Normalement, le contrôle de l\'accès aux sections est assez simple&#8239;: les utilisateurs
	qui peuvent voir une section dans la liste peuvent aussi y accéder, et ceux qui n\'y ont pas
	accès ne pourront pas la voir dans la liste.<br><br>
	Toutefois, il peut arriver que vous décidiez d\'empêcher un groupe de voir une section
	dans la liste, même si certains de ses membres y ont accès via un autre groupe auquel ils
	appartiendraient. Par exemple, un groupe destiné à réunir les trolleurs et autres gêneurs
	à surveiller. Vous pourriez vouloir empêcher aux membres de ce groupe d\'accéder à certains
	groupes&#8239;; l\'interdiction de permission est faite pour cela.<br><br>
	Un membre d\'un groupe à qui l\'on empêche de voir ou d\'accéder à une section ne pourra pas le faire,
	même s\'il appartient aussi à un autre groupe qui, lui, en a le droit. Seuls les administrateurs
	sont exempts de toute interdiction.';

$txt['help_edit_news'] = '
	<ul class="list">
		<li>
			<strong>Nouvelles</strong><br>
			Cette partie vous permet de définir du contenu pour les news de la page d\'accueil.
			Mettez-y ce que vous voulez (par ex., "Ne manquez pas la conférence de mardi prochain"). Les news sont affichées de manière aléatoire.
		</li>
		<li>
			<strong>Infolettres</strong><br>
			Cette partie vous permet d\'envoyer des newsletters (infolettres) aux membres du forum par message personnel ou e-mail. Choisissez d\'abord les groupes auxquels envoyer l\'infolettre, puis ceux dont vous ne voulez pas qu\'ils la reçoivent. Si vous le désirez, vous pouvez ajouter des membres et adresses e-mail individuellement. Enfin, mettez le contenu du message à envoyer, et choisissez le type d\'envoi (message personnel sur le forum, ou e-mail).
		</li>
		<li>
			<strong>Paramètres</strong><br>
			Cette partie contient des réglages liés aux news et aux infolettres, par exemple le choix des groupes qui peuvent modifier les news ou envoyer des infolettres.
		</li>
	</ul>';

$txt['help_view_members'] = '
	<ul class="list">
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

$txt['help_ban_gmail_style'] = 'Google Mail, ou GMail, offre des fonctionnalités pratiques pour aider ses utilisateurs à organiser leurs comptes, qui peuvent aussi troubler
	les systèmes de filtrage de bans classiques&#8239;:
	<ul class="list">
		<li>Les points dans le nom d\'utilisateur sont ignorés. Ainsi, jean.dupont@gmail.com renvoie au même compte que j.ean.d.u.pond@gmail.com ou même jeandupont@gmail.com.</li>
		<li>Les utilisateurs peuvent ajouter un label "+" à leur nom d\'utilisateur pour aider à filtrer les mails. Par exemple, un mail envoyé à jeandupond+boulot@gmail.com
			sera livré à jeandupond@gmail.com et le label +boulot peut être utilisé dans un filtre personnalisé.</li>
	</ul>
	Si vous choisissez un ban de type "Domaine façon GMail", ces facteurs seront ignorés. Il ne suffit pas juste d\'appliquer un filtre à googlemail.com et gmail.com,
	car Google Apps peut permettre à tout domaine d\'utiliser GMail avec au moins la fonctionnalité +label activée.';

$txt['help_no_hostname_ban'] = 'Les lookups de nom d\'hôte étant désactivés, tous les bans associés à un lookup sont également désactivés.';

$txt['help_ban_email_types'] = 'Les e-mails peuvent être bannis de plusieurs façons.
	<ul class="list">
		<li>Une adresse ou plus - bannir des adresses individuelles, ou des types très précis d\'e-mail, comme trolleur@exemple.com. Ou, si le trolleur se crée des e-mails comme trolleur1@exemple.com et trolleur2@exemple.com, vous pouvez bannir trolleur*@exemple.com pour être tranquille.</li>
		<li>Un domaine entier - si un indésirable possède son propre nom de domaine, il peut souvent utiliser l\'adresse de son choix. Vous pouvez donc bannir leur domaine entier, par exemple tout ce qui provient de @exemple.com, quel que soit ce qui le précède. Vous n\'avez qu\'à entrer le nom de domaine, et rien d\'autre.</li>
		<li>Un TLD (ensemble de domaines) - certains ont noté une prédominance de spams provenant d\'adresses e-mail en .ru, mais sans domaine spécifique. Vous pouvez bannir tout ce qui provient de .ru par exemple, ou même toutes les adresses en .com.</li>
	</ul>';

$txt['help_ban_membername_style'] = 'En appliquant un ban - ou plutôt une restriction - sur les noms de membre valides, vous pouvez choisir de l\'appliquer aux identifiants (ce que l\'utilisateur utilise pour se connecter), aux noms d\'utilisateur (ceux affichés dans les messages), ou aux deux. La plupart du temps, identifiant et nom d\'utilisateur correspondent, mais souvent les utilisateurs peuvent changer leur nom affiché dans le profil.';

$txt['help_featuresettings'] = '
	Il y a plusieurs fonctionnalités dans cette section qui peuvent être changées à votre goût.';

$txt['help_time_format'] = '
	Vous avez la possibilité d\'ajuster la manière dont le temps et les dates seront affichés sur votre forum. Ce ne sont pas des hiéroglyphes, c\'est relativement simple. La structure est la même que pour la fonction <span class="bbc_tt">strftime</span> de PHP, et elle est décrite ci-dessous (pour plus de détails, allez sur <a href="http://www.php.net/manual/fr/function.strftime.php" target="_blank">php.net</a>).<br>
	<br>
	Voici quelques-uns des caractères reconnus pour générer la date&#8239;:
	<div style="padding: 5px 0 5px 30px">
		<span class="bbc_tt">%a</span> - Nom du jour de la semaine (abrégé)<br>
		<span class="bbc_tt">%A</span> - Nom du jour de la semaine (complet)<br>
		<span class="bbc_tt">%b</span> - Nom du mois (abrégé)<br>
		<span class="bbc_tt">%B</span> - Nom du mois (complet)<br>
		<span class="bbc_tt">%d</span> - Jour du mois (01 à 31)<br>
		<span class="bbc_tt" style="color: #999">%D</span> - Équivalent de %m/%d/%y<br>
		<span class="bbc_tt">%e</span> - Jour du mois (1 à 31)<br>
		<span class="bbc_tt">%z</span> - Jour du mois à la française (1er à 31)<br>
		<span class="bbc_tt">%H</span> - Heure au format 24 heures (de 00 à 23)<br>
		<span class="bbc_tt">%I</span> - Heure au format 12 heures (de 01 à 12)<br>
		<span class="bbc_tt">%m</span> - Numéro du mois (01 à 12)<br>
		<span class="bbc_tt">%M</span> - Minutes en chiffres (de 00 à 59)<br>
		<span class="bbc_tt">%p</span> - Ajoute "AM" (avant midi) ou "AM" (après midi), selon l\'heure<br>
		<span class="bbc_tt" style="color: #999">%R</span> - Heure et minutes, équivalent de %H:%M<br>
		<span class="bbc_tt">%S</span> - Secondes en chiffres (de 00 à 59)<br>
		<span class="bbc_tt" style="color: #999">%T</span> - Heure, minutes et secondes, équivalent de %H:%M:%S<br>
		<span class="bbc_tt">%y</span> - Année sur 2 chiffres (de 00 à 99)<br>
		<span class="bbc_tt">%Y</span> - Année sur 4 chiffres<br>
		<span class="bbc_tt">%%</span> - Le symbole \'%\' en lui-même<br>
	</div>
	<em>* Les caractères grisés ne fonctionnent pas sur les serveurs Windows.</em>';

$txt['help_live_news'] = '
	Cette boîte affiche les dernières dépêches en provenance de <a href="http://wedge.org/" target="_blank">Wedge.org</a>.
	Vous devriez y surveiller les annonces concernant les mises à jour, nouvelles versions de Wedge et informations importantes de l\'équipe.';

$txt['help_registrations'] = '
	Cette section contient toutes les fonctions nécessaires pour la gestion des nouvelles inscriptions sur votre forum. Elle peut contenir jusqu\'à trois
	rubriques, visibles selon vos paramètres de forum. Celles-ci sont détaillés ci-dessous&#8239;:<br><br>
	<ul class="list">
		<li>
			<strong>Inscrire un nouveau membre</strong><br>
			À partir de cet écran, vous pouvez inscrire un nouveau membre à sa place. Cette option peut être utile lorsque les nouvelles inscriptions sur le forum sont désactivées,
			ou lorsque l\'administrateur souhaite se créer un compte de test. Si l\'activation du nouveau compte par le membre est sélectionnée,
			le nouveau membre recevra un e-mail contenant un lien d\'activation, sur lequel il devra cliquer avant de pouvoir utiliser son compte. De même, vous pouvez choisir d\'envoyer
			le nouveau mot de passe à l\'adresse e-mail spécifiée.
		</li>
			<strong>Modifier l\'accord d\'inscription</strong><br>
			Vous permet de spécifier le texte de l\'accord d\'inscription affiché lors de l\'inscription d\'un membre sur votre forum.
			Vous pouvez ajouter ou enlever ce que vous souhaitez au texte d\'accord inclus par défaut avec Wedge.<br><br>
		</li>
		<li>
			<strong>Paramètres</strong><br>
			Cette section ne sera visible que si vous avez la permission d\'administrer le forum. Depuis cette interface, vous pouvez choisir la méthode d\'inscription
			en vigueur sur votre forum et configurer quelques autres réglages relatifs à l\'inscription.
		</li>
	</ul>';
$txt['help_login_type'] = 'Ce paramètre permet de configurer si les utilisateurs doivent entrer leur identifiant (nom du compte), leur adresse e-mail ou l\'un des deux au choix, pour se connecter au forum. Veuillez noter, que dans le cas d\'une connexion avec identifiant, le mot de passe est généralement crypté par le navigateur avant son envoi, ce qui n\'est jamais le cas si c\'est une adresse e-mail qui est utilisée...';

$txt['help_modlog'] = '
	Cette section permet à l\'équipe des administrateurs de conserver des traces de chaque action de modération effectuée sur le forum par un modérateur ou un administrateur (voire même par un membre). Afin que
	les modérateurs ne puissent enlever les références aux actions entreprises, les entrées ne pourront être supprimées que 24 heures après leur application.
	La colonne \'Objet\' liste les variables associées à l\'action.';
$txt['help_adminlog'] = '
	Cette section permet aux membres de l\'équipe d\'administration de pister les actions effectuées par tout administrateur sur le forum. Afin que les administrateurs ne puissent enlever les références aux actions entreprises, les entrées ne pourront être supprimées que 24 heures après leur application.';
$txt['help_error_log'] = '
	Le journal d\'erreurs conserve des traces de toutes les erreurs sérieuses rencontrées lors de l\'utilisation de votre forum. Il liste toutes les erreurs par date, qui peuvent être récupérées
	en cliquant sur la flèche noire accompagnant chaque date. De plus, vous pouvez filtrer les erreurs en sélectionnant l\'image accompagnant les statistiques des erreurs. Ceci
	vous permet, par exemple, de filtrer les erreurs par nom de membre. Lorsqu\'un filtre est actif les seuls résultats affichés seront ceux correspondants aux critères du filtre.';
$txt['help_smileys'] = '
	Ici, vous pouvez ajouter et supprimer des smileys et des jeux de smileys. Note importante&#8239;: si un smiley est présent dans un jeu, il l\'est aussi dans tous les autres - autrement, cela pourrait prêter à
	confusion pour les utilisateurs utilisant des jeux différents.<br><br>

	Vous pouvez aussi modifier les icônes de message depuis cette interface, si vous les avez activés sur la page des paramètres.';

$txt['help_serversettings'] = '
	Ici, vous pouvez régler la configuration de votre serveur. Cette section comprend la base de données et les chemins des dossiers, ainsi que d\'autres
	options de configuration importantes tels que les paramètres d\'e-mail et de cache. Faites attention lors de la modification de ces paramètres,
	ils pourraient rendre le forum inaccessible';
$txt['help_manage_files'] = '
	<ul class="list">
		<li>
			<strong>Parcourir les Fichiers</strong><br>
			Parcourir à travers tous les fichiers joints, avatars et vignettes stockés par Wedge.<br><br>
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

$txt['help_topicSummaryPosts'] = 'Vous permet de régler le nombre de messages précédents affichés sur la page de réponse à un sujet, juste sous la zone de réponse.';
$txt['help_enableAllMessages'] = 'Mettez ici le nombre <em>maximum</em> de messages qu\'un sujet aura lors de l\'affichage par le lien "Tous". Le régler au-dessous du "Nombre de messages à afficher lors du visionnement d\'un sujet" signifiera simplement que le lien ne sera jamais affiché, et indiquer une valeur trop élevée peut ralentir votre forum.';
$txt['help_pruneSavedDrafts'] = 'Les brouillons sauvegardés sur le serveur n\'ont pas de date limite en temps normal, mais l\'administrateur peut utiliser cette option pour nettoyer automatiquement la base de données en supprimant les brouillons plus anciens. Ainsi, si vous entrez un chiffre N et qu\'il y a des brouillons créés depuis plus de N jours, ces derniers seront supprimés. Mettez à 0 pour toujours conserver les brouillons, du moins jusqu\'à leur publication, ou suppression par l\'auteur.';
$txt['help_allow_guestAccess'] = 'Décocher cette option limitera les actions possibles des invités aux seules opérations de base - connexion, inscription, rappel du mot de passe, etc. - sur votre forum. Ce n\'est pas comme désactiver l\'accès aux sections pour les invités.';
$txt['help_userLanguage'] = 'Activer cette option permettra aux utilisateurs de sélectionner la langue dans laquelle le forum leur sera affiché.
	Cela n\'affectera pas la langue par défaut.';
$txt['help_availableLanguage'] = 'Cette option contrôle les langues sélectionnables par les utilisateurs pour leur interface. Inutile, donc, de désinstaller un pack de langue pour empêcher son utilisation future.';
$txt['help_trackStats'] = 'Stats&#8239;:<br>Permet aux visiteurs de voir les derniers messages postés et les sujets les plus populaires sur votre forum.
	Cela affichera aussi plusieurs autres statistiques, comme le record d\'utilisateurs en ligne au même moment, les nouveaux membres et les nouveaux sujets.<hr>
	Pages vues&#8239;:<br>Ajoute une autre colonne à la page des statistiques contenant le nombre de pages vues sur votre forum.';
$txt['help_titlesEnable'] = 'Activer les titres personnels permettra aux membres possédant les permissions suffisantes de s\'attribuer un titre spécial pour eux-mêmes.
		Il sera affiché sous leur pseudonyme.<br><em>Par exemple :</em><br>Loulou<br>Oui, c\'est moi';
$txt['help_todayMod'] = 'Cette option affichera "Aujourd\'hui" ou "Hier" à la place de la date.<br><br>
		<strong>Exemples :</strong><br><br>
		<dt>
			<dt>Désactivé</dt>
			<dd>3 Octobre 2009 à 00:59:18</dd>
			<dt>Seulement Aujourd\'hui</dt>
			<dd>Aujourd\'hui à 00:59:18</dd>
			<dt>Aujourd\'hui &amp; Hier</dt>
			<dd>Hier à 21:36:55</dd>
		</dt>';
$txt['help_disableCustomPerPage'] = 'Cocher cette option pour empêcher les utilisateurs de personnaliser le nombre de messages et de sujets par page à afficher, respectivement sur l\'index des messages et la page d\'affichage du sujet.';
$txt['help_enablePreviousNext'] = 'Cette option affichera un lien vers le sujet précédent et le sujet suivant.';
$txt['help_ignoreMoveVsNew'] = 'Si l\'utilisateur déplace un sujet vers une autre section, l\'utilisateur pourra choisir, par défaut, la destination
		parmi la liste des sections auxquelles il pourrait d\'habitude créer des sections (pour éviter qu\'ils ne les déplacent dans le forum des
		news de votre site, par exemple).<br><br>Activez cette option pour lui permettre au contraire de déplacer ses sujets
		vers n\'importe quelle destination visible pour lui.';
$txt['help_webmaster_email'] = 'Cette option vous permet de spécifier l\'adresse e-mail de l\'administrateur principal. Cette adresse est utilisée pour les notifications urgentes, telles que les erreurs de base de données.
		<br><br>Pour cette raison, mettez-y une adresse valide.';
$txt['help_mail_from'] = 'Cette option vous permet de spécifier l\'adresse e-mail utilisée en tant que champ "Expéditeur" de tous les e-mails envoyés par le serveur aux membres (notifications, info-lettres, etc).
		<br><br>Utilisez par exemple "no-reply@mon-domaine.com", et si vous le pouvez, assurez-vous que cette adresse no-reply renverra tous les messages à l\'envoyeur.<br><br>En l\'absence d\'adresse, celle de l\'administrateur/webmaster du forum sera utilisée, et il recevra donc potentiellement en retour les spams, erreurs de livraison et réponses erronées qui ne manqueront pas d\'arriver.<br>Trop drôle.';
$txt['help_enableCompressedOutput'] = 'Cette option compressera à la volée les données envoyées, afin de diminuer la consommation de bande passante, mais requiert que zlib soit installé sur le serveur.';
$txt['help_enableCompressedData'] = 'Cette option compressera les données CSS et JavaScript après leur mise en cache. La librairie zlib doit être installée avant tout, et le fichier .htaccess doit être configuré correctement.
		Ce processus permet d\'éviter au serveur de recompresser les fichiers CSS et JS à la volée quand ils sont téléchargés.
		En cas de problème (page vierge de tout style graphique et pas de scripts actifs), désactivez au plus vite l\'option.
		<br><br>Note&#8239;: si votre site est derrière un proxy de type Nginx, pensez à supprimer l\'extension gz de la liste des extensions prises en charge par celui-ci !';
$txt['help_obfuscate_filenames'] = 'Cette option permet de modifier les noms des fichiers JavaScript et CSS après leur mise en cache. Son unique intérêt est de permettre aux
		développeurs JavaScript de rendre plus difficile la vie des méchants voleurs de scripts qui vous en veulent, à vous, personnellement, c\'est sûr,
		c\'est un complot.<br><br>
		Bref, si les noms sont cryptés, ils ne pourront pas retrouver le fichier original non compressé. Évidemment, si la minification est désactivée,
		ça ne sert strictement à rien. Mais je dis ça, je dis rien moi, c\'est pour vous.';
$txt['help_minify'] = 'Cette option permet de minifier les fichiers JavaScript avant leur mise en cache. Si vous autorisez Wedge à minifier les fichiers, il retirera tous
		les commentaires et l\'indentation inutile, ce qui accélèrera la vitesse de chargement du site. Seules les copies du cache sont modifiées, bien sûr.<br><br>
		La compression avec Packer est plus efficace, mais si vos scripts sont mal fichus, ils planteront (utilisez <a href="http://www.jslint.com/" target="_blank">JSLint</a> pour les
		corriger). De plus, si la compression gzip n\'est pas disponible sur votre serveur, Packer se chargera de compresser encore plus les fichiers, au prix d\'un léger
		ralentissement pour les utilisateurs. Sinon, utilisez JSMin, qui est un bon compromis si vos scripts plantent.<br><br>
		Quelques informations sur Google Closure. Si vous choisissez cette option, au lieu de lancer un script PHP local pour minifier vos fichiers, Wedge va envoyer
		ceux-ci aux serveurs de Google et demander une version minifiée. Closure est un poil plus efficace que Packer, mais le processus est beaucoup, BEAUCOUP plus long
		(plusieurs secondes par fichier !), il est donc déconseillé de l\'utiliser si vous mettez à jour vos fichiers très souvent. Enfin, Google impose une limite sur le nombre
		de fichiers compressables par ses soins tous les jours. Wedge détecte ce type d\'erreur et fait appel à Packer pour générer le fichier dans ces conditions.<br><br>
		Désactivez l\'option pour pouvoir débugger plus facilement vos scripts. Non, parce que sinon c\'est même pas la peine d\'y penser. On veut pas vous pourrir la vie,
		hein. Enfin, moi si, mais ça dure juste une minute, je sors mon rire démoniaque et puis je prends un calmant et j\'ajoute ces fichues options qui simplifient tout.';
$txt['help_jquery_origin'] = 'Cette option permet de choisir l\'adresse à partir de laquelle sera chargé le script jQuery. Pour économiser en bande passante, vous pouvez
		choisir un CDN (réseau de distribution) proposé par Google ou Microsoft, ou encore passer directement par le serveur officiel de jquery.com.
		<br><br>Si la bande passante n\'est pas un problème, vous pouvez aussi charger jQuery à partir de votre site, ce qui permet de vous assurer que le script sera
		toujours disponible, et en passant de le compresser en même temps que script.js. Attention, si votre serveur ne dispose pas de la librairie zlib (ce qui est peu
		probable heureusement), passez impérativement par un CDN pour éviter de servir un jQuery non compressé !';
$txt['help_db_show_debug'] = 'Active les fonctionnalités de débogage des requêtes, très utiles pour repérer les erreurs. Les informations sont montrées à la fin de chaque
		page quand cette option est activée.<br><br>
		Les éléments suivants sont affichés&#8239;:
		<ul>
			<li>Les fichiers de modèle (templates) chargés
			<li>Les blocs exécutés (les fonctions appelées pour mettre en place la page entière)
			<li>Les fichiers de langue utilisés
			<li>Les feuilles de style chargées (celles chargées par les extensions n\'apparaîtront pas forcément)
			<li>Le nombre de fichiers inclus (et lesquels)
			<li>Les appels au cache (lesquels sont-ils, et combien de temps y a été consacré)
			<li>Les requêtes utilisées, avec détails complets (administrateurs uniquement)
		</ul>';
$txt['help_db_show_debug_who'] = 'Les informations de débogage sont très utiles pour comprendre les dessous du fonctionnement du forum en cas de problème, mais ils ne sont que rarement
		utiles à ceux qui n\'ont pas de droits d\'administration. Cette option détermine qui pourra visionner ces informations, si elles sont activées.';
$txt['help_db_show_debug_who_log'] = 'Une partie des informations de débogage est une liste des requêtes faites par le forum pendant son fonctionnement. Pour des raisons de sécurité,
		elles ne sont pas montrées directement dans les informations, et cette option permet de s\'assurer qu\'elles ne soient visibles que si nécessaire - parfois,
		pendant un débogage, ces requêtes doivent être fournies à des utilisateurs sans droits d\'administration afin qu\'ils puissent faire des retours.';
$txt['help_databaseSession_enable'] = 'Cette fonction utilise la base de données pour le stockage des sessions - c\'est mieux pour des serveurs à charge balancée, mais aide à régler tous les problèmes de fin de session indésirée et peut aider le forum à fonctionner plus rapidement.';
$txt['help_databaseSession_loose'] = 'Activer cette option diminuera la bande passante utilisée par le forum, et fait en sorte que lorsque l\'utilisateur revient sur ses pas, la page n\'est pas rechargée - le point négatif de cette option est que les (nouvelles) icônes ne seront pas mises à jour, ainsi que quelques autres choses. (Sauf si vous rechargez cette page plutôt que de retourner sur vos pas.)';
$txt['help_databaseSession_lifetime'] = 'Ceci est le temps en secondes au bout duquel la session se termine automatiquement après le dernier accès de l\'utilisateur. Si une session n\'a pas été accédée depuis trop longtemps, un message "Session terminée" est affiché. Tout ce qui est au-dessus de 2400 secondes est recommandé.';
$txt['help_enableErrorLogging'] = 'Ceci indexera toutes les erreurs rencontrées, comme les connexions non réussies, afin que vous puissiez les consulter lorsque quelque chose ne va pas.';
$txt['help_enableErrorQueryLogging'] = 'Ceci enregistrera les requêtes SQL complètes dans le journal d\'erreurs si la base de données retourne une erreur. Requiert l\'activation du journal d\'erreurs.<br><br><strong>Attention, cela modifiera la capacité de filtrage du journal d\'erreurs par message d\'erreur.</strong>';
$txt['help_allow_disableAnnounce'] = 'Permet aux utilisateurs de désélectionner la réception des annonces du forum que vous envoyez en cochant "Annoncer le sujet" lorsque vous postez un message.';
$txt['help_disallow_sendBody'] = 'Cette option supprime l\'option permettant de recevoir le texte des réponses et les messages dans les e-mails de notification.<br><br>Souvent, les membres vont répondre à l\'e-mail de notification, ce qui peut saturer, dans bien des cas, la boîte e-mail du webmestre.';
$txt['help_timeLoadPageEnable'] = 'Afficher dans le pied de page du forum le temps utilisé par Wedge pour générer la page en cours.';
$txt['help_removeNestedQuotes'] = 'Ceci effacera les citations imbriquées dans les messages que vous citez en cliquant sur le bouton Citer.';
$txt['help_max_image_width'] = 'Cette option vous permet de spécifier une taille maximale pour les images postées. Les images plus petites ne seront pas affectées.';
$txt['help_mail_type'] = 'Cette option vous permet d\'utiliser soit le réglage par défaut de PHP ou de l\'outrepasser en utilisant le protocole SMTP. PHP ne supporte pas l\'authentification (que plusieurs FAI requièrent maintenant) donc vous devriez vous renseigner avant d\'utiliser cette option. Notez que SMTP peut être plus lent que sendmail et que certains serveurs ne prendront pas en compte les identifiants et mot de passe.<br><br>Vous n\'avez pas à renseigner les informations SMTP si vous utilisez la configuration par défaut de PHP.';
$txt['help_attachment_manager_settings'] = 'Les fichiers joints sont des fichiers que les membres peuvent uploader et joindre à un message. D\'où le nom. Logique.<br><br>
		<strong>Vérifier l\'extension des fichiers joints</strong> :<br> Voulez-vous contrôler l\'extension des fichiers&#8239;?<br>
		<strong>Extensions autorisées</strong> :<br> Vous pouvez mettre les extensions de fichiers joints autorisées.<br>
		<strong>Répertoire des fichiers joints</strong> :<br> Le chemin vers le dossier de fichiers joints<br>(exemple: /home/sites/yoursite/www/forum/attachments)<br>
		<strong>Taille maximale du répertoire des fichiers joints</strong> (en Ko) :<br> Sélectionnez de quelle taille le dossier de fichiers joints peut t\'il être, en incluant tous les fichiers contenus.<br>
		<strong>Taille totale maximale des fichiers joints par message</strong> (en Ko) :<br> Sélectionnez la taille de fichier maximum de tous les fichiers joints d\'un même message. Si elle est inférieure à la limite de taille de fichier joint, cela sera la limite.<br>
		<strong>Taille maximale de chaque fichier joint</strong> (en Ko) :<br> Sélectionnez la taille de fichier maximum de chaque fichier joint.<br>
		<strong>Nombre maximum de fichiers joints par message</strong> :<br> Sélectionnez le nombre de fichiers joints qu\'une personne peut mettre par message.<br>
		<strong>Afficher les images jointes sous les messages</strong> :<br> Si le fichier uploadé est une image, elle sera affichée sous le message.<br>
		<strong>Montrer les images jointes sous forme de vignettes sous les messages</strong> :<br> Si l\'option au-dessus est sélectionnée, cela sauvegardera une copie (plus petite) du fichier joint pour la vignette afin d\'économiser la bande passante.<br>
		<strong>Largeur et hauteur maximales des vignettes</strong> :<br> Seulement utilisé avec l\'option "Redimensionner les images quand affichées sous les messages", spécifie la taille et la hauteur maximales des vignettes créées pour les fichiers joints. Elles seront redimensionnées proportionnellement.';
$txt['help_attachment_image_paranoid'] = 'Choisissez cette option pour mettre en place des contrôles de sécurité très stricts sur les images envoyées en fichier joint. Attention, ces contrôles peuvent parfois échouer sur des images sans danger. Nous vous recommandons de ne l\'utiliser qu\'en association avec l\'option de réencodage, auquel cas Wedge essaiera de recréer et de mettre en ligne des images saines si le contrôle échoue. Si le réencodage n\'est pas activé, les fichiers joints échouant au contrôle seront rejetés.';
$txt['help_attachment_image_reencode'] = 'Choisissez cette option pour permettre le réencodage des fichier joints envoyés par les utilisateurs. Le réencodage vous garantit une meilleure sécurité, mais il supprime également les animations des images animées.';
$txt['help_avatar_paranoid'] = 'Choisissez cette option pour mettre en place des contrôles de sécurité très stricts sur les avatars au moment où les utilisateurs les envoient. Attention, ces contrôles peuvent parfois échouer sur des images sans danger. Nous vous recommandons de ne l\'utiliser qu\'en association avec l\'option de réencodage, auquel cas Wedge essaiera de recréer et de mettre en ligne des images saines si le contrôle échoue. Si le réencodage n\'est pas activé, les avatars échouant au contrôle seront rejetés.';
$txt['help_avatar_reencode'] = 'Choisissez cette option pour permettre le réencodage des avatars envoyés par les utilisateurs. Le réencodage vous garantit une meilleure sécurité, mais il supprime également les animations des images animées.';

$txt['help_localCookies'] = 'Wedge utilise des cookies (« témoins ») pour conserver les informations de connexion d\'un membre. Les cookies peuvent être stockés dans un dossier global (monserveur.com) ou localement (monserveur.com/chemin/vers/mon/forum).<br>
	Cochez cette option si vous constatez certains problèmes avec des utilisateurs déconnectés automatiquement.<hr>
	Les cookies stockés dans un dossier global sont moins sécurisés lorsqu\'ils sont utilisés sur un serveur mutualisé (comme Multimania/Lycos, Free, OVH, ...).<hr>
	Les cookies stockés localement ne fonctionnent pas à l\'extérieur du dossier du forum. Donc, si votre forum est installé dans le répertoire www.monserveur.com/forum, les pages telles que www.monserveur.com/index.php ne pourront pas accéder aux cookies. Lors de l\'utilisation de SSI.php, il est recommandé de stocker les cookies dans un dossier global.';
$txt['help_allow_non_mod_edit'] = 'En règle générale, un utilisateur peut modifier ses propres messages, mais dans le cas où un modérateur modifie ses messages pour en retirer du contenu offensant, le membre ne pourra plus modifier son propre message, laissant de ce fait le dernier mot aux modérateurs. Cliquez ici pour désactiver cette fonctionnalité, mais ce n\'est pas recommandé.';
$txt['help_enableBBC'] = 'Activer cette fonction autorisera vos membres à utiliser les balises (BBCodes) sur votre forum, afin de permettre la mise en forme du texte, l\'insertion d\'images et plus.';
$txt['help_time_offset'] = 'Tous les propriétaires de forums ne souhaitent pas forcément utiliser le fuseau horaire du serveur sur lequel ils sont hébergés. Utilisez cette fonction pour spécifier un temps de décalage (en heures) sur lequel le forum devrait se baser pour les dates et heures. Les temps négatifs et décimaux sont permis.';
$txt['help_default_timezone'] = 'La zone horaire indique à PHP où se trouve le serveur du site. Assurez-vous que ladite zone soit correctement renseignée, notamment le pays voire la ville. Vous trouverez plus d\'informations sur <a href="http://www.php.net/manual/fr/timezones.php" target="_blank">le site de PHP</a>.';
$txt['help_spamWaitTime'] = 'Ici vous pouvez spécifier le temps minimal requis entre deux envois de messages en provenance d\'un même utilisateur. Cette option peut être utilisée afin de contrer le pollupostage ("spamming").';

$txt['help_enablePostHTML'] = 'Permet l\'utilisation de quelques balises HTML basiques&#8239;:
	<ul class="list" style="margin-bottom: 0">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=""&gt;</li>
		<li>&lt;img src="" alt=""&gt;</li>
		<li>&lt;br&gt;, &lt;hr&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$txt['help_themes'] = 'Ici vous pouvez choisir si le thème par défaut peut être utilisé ou non, quel thème les invités verront ainsi que plusieurs autres options. Cliquez sur un thème à droite pour changer ses propriétés spécifiques.';
$txt['help_theme_install'] = 'Ceci vous permet d\'installer des nouveaux thèmes. Vous pouvez procéder en partant d\'un dossier déjà créé, en transférant une archive d\'un thème ou en copiant le thème par défaut.<br><br>Notez bien que les archives de thèmes doivent contenir un fichier de définition <tt>theme_info.xml</tt>.';
$txt['help_enableEmbeddedFlash'] = 'Cette option permettra à vos visiteurs d\'insérer des animations Flash directement dans leurs messages, comme des images. Ceci peut présenter un sérieux risque de sécurité, bien que peu nombreux soient ceux qui ont réussi l\'exploitation de ce risque.<br><br>UTILISEZ CETTE OPTION À VOS PROPRES RISQUES&#8239;!';
// !!! Add more information about how to use them here.
$txt['help_xmlnews_enable'] = 'Les flux Atom sont comme des flux RSS, mais en mieux.<br>
	Ils permettent à vos utilisateurs de récupérer les nouveautés de votre forum sans devoir s\'y rendre en permanence, grâce à un logiciel client Atom/RSS ou à des services web comme Feedly.
	Il est recommandé de limiter la taille des messages. En effet, certains clients tels que Trillian préfèrent afficher des messages tronqués.';
$txt['help_globalCookies'] = 'Permet l\'utilisation de cookies (« témoins ») indépendants du sous-domaine. Par exemple, si...<br>
	Votre site est situé sur http://www.chezmoi.org/,<br>
	Et votre forum est situé sur http://forum.chezmoi.org/,<br>
	Activer cette fonction vous permettra d\'utiliser les cookies de votre forum sur votre site (grâce à SSI.php, par exemple). Ne l\'activez pas s\'il y a d\'autres sous-domaines qui ne sont pas sous votre contrôle (par exemple hacker.mysite.org).';
$txt['help_secureCookies'] = 'Activer cette option forcera la sécurisation des cookies (« témoins ») créés pour les utilisateurs de votre forum. Ne l\'activez que si vous utilisez le protocole HTTPS sur tout votre site, faute de quoi la gestion des cookies sera fortement perturbée&#8239;!';
$txt['help_securityDisable_why'] = 'Entrez ici le mot de passe de votre compte &ndash; le même que vous utilisez pour vous connecter au forum.<br><br>Avoir à le taper de nouveau permet de vérifier que vous voulez bien accéder au panneau d\'administration, et que c\'est bien <strong>vous</strong> qui le faites.';
$txt['help_emailmembers'] = 'Dans ce message, vous pouvez inclure certaines "variables". Celles-ci sont&#8239;:<br>
	{$board_url} - L\'URL vers votre forum.<br>
	{$current_time} - L\'heure courante.<br>
	{$member.email} - L\'adresse e-mail du membre.<br>
	{$member.link} - Le lien vers le profil du membre.<br>
	{$member.id} - L\'ID du membre.<br>
	{$member.name} - Le nom du membre. (pour un message plus personnalisé.)<br>
	{$latest_member.link} - Le lien vers le profil du membre le plus récent.<br>
	{$latest_member.id} - L\'ID de l\'utilisateur le plus récemment inscrit.<br>
	{$latest_member.name} - Le nom du membre le plus récemment inscrit.';
$txt['help_attachmentEncryptFilenames'] = 'Encrypter les noms des fichiers joints permet le transfert de fichiers dont le nom serait identique, d\'utiliser sécuritairement des fichiers .php pour gérer ces pièces jointes et une plus grande sécurité. D\'un autre côté, cela peut compliquer une reconstruction de base de données si un problème radical se présente.';

$txt['help_failed_login_threshold'] = 'Spécifiez le nombre maximal de tentatives de connexion avant de rediriger l\'utilisateur vers la fonction "Rappel de Mot de Passe".';
$txt['help_enable_quick_login'] = 'Ceci affichera un champ de connexion dans l\'encadré (sidebar) de chaque page du forum, si le visiteur n\'est pas encore connecté.';
$txt['help_oldTopicDays'] = 'Si cette option est activée, un avertissement sera affiché aux utilisateurs qui tenteront de répondre dans un sujet dans lequel il n\'y a eu aucune intervention après un certain laps de temps, en jours, spécifié par ce paramêtre. Réglez-la à 0 pour désactiver cette fonction.';
$txt['help_edit_wait_time'] = 'Temps en secondes permis pour la modification d\'un message avant que la mention "Modifié..." n\'apparaisse.';
$txt['help_edit_disable_time'] = 'Nombre de minutes accordées à un utilisateur pour qu\'il puisse modifier ses messages. Mettre sur 0 pour désactiver. <br><br><em>Note: cela n\'affectera pas les utilisateurs ayant la permission de modifier les messages des autres ou d\'outrepasser explicitement cette limitation.</em>';
$txt['help_posts_require_captcha'] = 'Ce réglage forcera les utilisateurs à rentrer un code affiché sur une image de vérification à chaque fois qu\'ils posteront un message. Seul les utilisateurs avec un compteur de messages en dessous du nombre choisi auront à entrer le code - Cela devrait aider à combattre les scripts automatiques de spam.';
$txt['help_disable_wysiwyg'] = 'Ce réglage désactivera l\'utilisation du WYSIWYG (acronyme de la locution anglaise "What you see is what you get", signifiant littéralement en français "vous aurez ce que vous voyez") sur la page de rédaction des messages chez tous les utilisateurs.';
$txt['help_lastActive'] = 'Sélectionnez le nombre de minutes à afficher dans "Membres actifs dans les X dernières minutes", sur l\'accueil du forum. La valeur par défaut est de 15 minutes, et le maximum est d\'une journée.<br><br>Il est recommandé d\'éviter les valeurs trop élevées, qui pourraient ralentir votre forum mais peut aussi être perçues comme une tentative de faire croire que le forum est plus visité qu\'il ne l\'est réellement. Certains visiteurs le remarqueront et pourraient s\'en offusquer.';

$txt['help_customoptions'] = 'Cette section définit les options qu\'un utilisateur peut choisir à partir d\'une liste déroulante. Il y a quelques points clés à noter pour cette section:
	<ul class="list">
		<li><strong>Option par défaut:</strong> L\'option que vous aurez choisie ici sera celle définie par défaut pour l\'utilisateur lorsqu\'il enregistrera son profil.</li>
		<li><strong>Options à retirer:</strong> Pour retirer une option, laisser simplement vide la boite de texte de cette option - celle-ci sera automatiquement supprimée pour tous les utilisateurs l\'ayant précédemment sélectionnée.</li>
		<li><strong>Réordonner les Options:</strong> Vous pouvez modifier l\'ordre des options en les déplacant. Remarque importante - Assurez-vous de ne <strong>pas</strong> modifier le texte de ces options lorsque vous en modifiez l\'ordre, sinon vous perdrez les données prélablement enregistrées par vos utilisateurs pour ces options.</li>
	</ul>';

$txt['help_autoFixDatabase'] = 'Ceci réparera automatiquement les tables présentant des erreurs. Ainsi, le forum continuera de fonctionner comme si rien ne s\'était produit. La seule façon de régler le problème étant de lancer un REPAIR sur la table en question, cette option évite que le forum ne soit hors service en attendant que vous preniez les mesures nécessaires. Un e-mail vous est envoyé si tel problème se présente.';

$txt['help_enableParticipation'] = 'Cette fonction affiche une icône spéciale sur les sujets dans lesquels un utilisateur est précédemment intervenu.';
$txt['help_correctExclamations'] = 'Cette option permet d\'empêcher les utilisateurs de mettre trop de ???? et de !!!! dans les titres de leurs sujets. Par exemple, un titre de sujet comme "AU SECOURS !!!!!!" sera réduit automatiquement à "AU SECOURS !".';
$txt['help_correctShouting'] = 'Mettez une valeur de pourcentage supérieure à 0 pour que Wedge examine les titres des sujets. S\'il y a plus de 10 caractères et qu\'au moins X% de ceux-ci sont en MAJUSCULES, ils seront réduits à des capitales, Comme Par Exemple Ceci. Mettez à 0 pour désactiver.';

$txt['help_db_persist'] = 'Conserve une connexion permanente avec la base de données afin d\'accroître les performances du forum. Si vous êtes sur un serveur mutualisé (Free, OVH, 1&amp;1...), l\'activation de cette fonction peut occasionner des problèmes avec votre hébergeur, car cela consomme beaucoup de ressources système.';
$txt['help_ssi_db_user'] = 'Réglage optionnel pour utiliser un nom d\'utilisateur et un mot de passe de base de données différents quand vous utilisez SSI.php.';

$txt['help_countChildPosts'] = 'Sélectionner cette option signifie que les messages et les sujets dans une section parente seront comptés dans leur totalité sur la page d\'index.<br><br>Cela rendra les choses notablement plus lentes, mais signifiera qu\'une section parente avec aucun message ne montrera plus forcément \'0\'.';
$txt['help_ignorable_boards'] = 'Cette option permet aux utilisateurs de marquer des sections comme étant à ignorer. Une section ignorée est considérée comme étant toujours "lue" en consultant la liste des sections, et les sujets qu\'elle contient n\'apparaîtront pas dans les pages Messages récents, Messages non lus et Réponses non lues.';
$txt['help_allow_ignore_topics'] = 'Cocher cette option permettra aux utilisateurs de sélectionner les sujets qu\'ils veulent ignorer dans les fonctions <em>Réponses non lues</em> et <em>Messages non lus</em>.';

$txt['help_display_flags'] = 'En plus de la langue par défaut du forum, vous pouvez choisir une langue par défaut pour chaque section individuelle. Cette option vous permet de montrer ou non un drapeau représentant la langue par défaut sur la liste des sections&#8239;:
	<ul class="list">
		<li><strong>Non</strong> - ne montrer aucun drapeau.</li>
		<li><strong>Uniquement pour les sections qui ont une langue par défaut</strong> - si une section a une langue par défaut spécifique, montrer le drapeau de cette langue à côté du nom de la section.</li>
		<li><strong>Oui, pour toutes les sections</strong> - montrer le drapeau de la langue de chaque section à côté du nom de celle-ci, indiquant la langue qui sera utilisée (sauf bien sûr si l\'utilisateur a, lui-même, choisi une langue par défaut&#8239;; on est très conciliants, chez Wedge).</li>
	</ul>';

$txt['help_who_enabled'] = 'Cette option vous permet d\'activer ou non la possibilité de voir qui est en ligne sur le forum et ce qu\'il y fait.';

$txt['help_recycle_enable'] = '"Recycle" les sujets et messages supprimés vers une section spécifique, souvent une section cachée aux utilisateurs normaux.';

$txt['help_max_pm_recipients'] = 'Cette option vous permet de limiter la quantité maximale de messages privés envoyé par un membre du forum. Cette option permet de lutter contre le pollupostage ("spam") du système de MP. Notez que les utilisateurs ayant la permission d\'envoyer des bulletins d\'informations ne sont pas concernés par cette restriction. Réglez-la à 0 pour désactiver la fonction.';
$txt['help_pm_posts_verification'] = 'Cette option forcera les utilisateurs à entrer un code affiché sur une image de vérification à chaque fois qu\'ils envoient un message personnel. Seuls les utilisateurs avec un compteur de messages en dessous de l\'ensemble de nombres auront besoin de saisir le code - Cela devrait aider à lutter contre les robots spammeurs.';
$txt['help_pm_posts_per_hour'] = 'Cette option limitera le nombre de messages personnels qui pourront être envoyés par un utilisateur en une heure de temps. Cela n\'affecte pas les admins ou modérateurs.';

$txt['help_registration_method'] = 'Cette fonction détermine quelle méthode d\'inscription doit être adoptée pour les gens désirant rejoindre votre forum. Vous pouvez sélectionner un de ces choix&#8239;:<br><br>
	<ul class="list">
		<li>
			<strong>Inscription désactivée</strong><br>
				Désactive les procédures d\'inscription, ce qui signifie que personne ne peut plus s\'inscrire sur votre forum.<br>
		</li><li>
			<strong>Inscription immédiate</strong><br>
				Les nouveaux membres peuvent se connecter et poster sur votre forum immédiatement après la procédure d\'inscription.<br>
		</li><li>
			<strong>Activation par e-mail</strong><br>
				Si cette option est sélectionnée, tous les membres qui s\'inscrivent au forum recevront un e-mail contenant un lien pour activer leur compte. Ils ne pourront utiliser leur compte que lorsque celui-ci aura été activé.<br>
		</li><li>
			<strong>Activation par e-mail, puis Approbation par un Admin</strong><br>
				Si cette option est sélectionnée, tous les membres qui s\'inscrivent au forum recevront un e-mail contenant un lien pour activer leur compte. Une fois ce lien suivi, ils devront ensuite attendre qu\'un administrateurr approuve leur inscription définitivement.
		</li><li>
			<strong>Approbation par un Admin</strong><br>
				Si cette option est sélectionnée, l\'inscription de tous les nouveaux utilisateurs de votre forum devra d\'abord être approuvée par les administrateurs pour être ensuite effective et leur permettre ainsi de rejoindre votre communauté.
		</li>
	</ul>';

$txt['help_send_validation_onChange'] = 'Lorsque cette option est cochée, tous les membres qui modifient leur adresse e-mail dans leur profil devront réactiver leur compte grâce à un e-mail envoyé à leur nouvelle adresse.';
$txt['help_send_welcomeEmail'] = 'Lorsque cette option est activée, tous les nouveaux membres recevront un e-mail leur souhaitant la bienvenue sur votre communauté.';
$txt['help_password_strength'] = 'Ce réglage détermine le niveau de sécurité requis pour les mots de passe sélectionnés par les membres de votre forum. Plus ce niveau est "élevé", plus il devrait être difficile de découvrir le mot de passe et de pirater leurs comptes.
	Les niveaux possibles sont&#8239;:
	<ul>
		<li><strong>Bas</strong>&#8239;: Le mot de passe doit être composé d\'au moins 4 caractères.</li>
		<li><strong>Moyen</strong>&#8239;: Le mot de passe doit être formé d\'au moins 8 caractères, et ne peut contenir des parties de l\'identifiant ou de l\'adresse e-mail.</li>
		<li><strong>Élevé</strong>&#8239;: Comme pour le niveau précédent, et le mot de passe doit aussi contenir des lettres majuscules et minuscules et au moins un chiffre.</li>
	</ul>';

$txt['help_coppaAge'] = 'La valeur spécifiée dans ce champ détermine l\'àge minimum que doit avoir un membre pour avoir un accè immédiat aux sections.
	À l\'inscription, il sera demandé aux membres de confirmer s\'ils ont plus que cet âge. Si ce n\'est pas le cas, leur inscription sera rejetée ou suspendue en attente d\'une autorisation parentale - en fonction des restrictions que vous spécifiez.
	Si la valeur est 0 pour cette option toutes les restrictions d\'âge pour les prochaines inscriptions seront ignorées.';
$txt['help_coppaType'] = 'Si la restriction d\'âge est active, ce paramètre définira ce qui se produit lorsqu\'un membre n\'ayant pas l\'âge minimum requis tente de s\'inscrire sur votre forum. Il existe deux choix possibles&#8239;:
	<ul class="list">
		<li>
			<strong>Rejeter son inscription&#8239;:</strong><br>
				N\'importe quel nouvel adhérent n\'ayant pas l\'âge requis verra son inscription rejetée immédiatement.<br>
		</li><li>
			<strong>Nécessiter l\'approbation d\'un parent/tuteur légal</strong><br>
				N\'importe quel nouvel adhérent n\'ayant pas l\'âge requis et qui tente de s\'inscrire sur votre forum verra son compte marqué en attente d\'approbation et il lui sera remis un formulaire à faire remplir par ses parents ou tuteurs avant de pouvoir devenir membre de votre forum.
				Il lui sera aussi présenté les informations de contact du forum enregistrées sur la page des paramètres, afin que le formulaire d\'approbation parentale soit envoyée à l\'administrateur par la poste ou par téléfax.
		</li>
	</ul>';
$txt['help_coppaPost'] = 'Les champs de contact doivent être completées afin que les formulaires d\'autorisation parentale pour les membres n\'ayant pas l\'âge requis soient envoyés à l\'administrateur. Ces détails seront affichés à tous les mineurs et il leur est nécessaire d\'obtenir une approbation parentale. Une adresse postale ou un numéro de téléfax est le minimum requis.';

$txt['help_allow_hideOnline'] = 'En activant cette option, les membres peuvent cacher leur statut de connexion au forum aux autres visiteurs (sauf aux administrateurs). Si elle est désactivée, seuls les utilisateurs qui peuvent modérer le forum entier peuvent cacher leur présence. Notez bien que si vous désactivez cette option, les membres cachés ne seront visibles à tous qu\'à partir de leur prochaine connexion.';

$txt['help_latest_themes'] = 'Cette zone vous montre quelques-uns des derniers thèmes et les plus populaires en provenance de <a href="http://wedge.org/" target="_blank">wedge.org</a>. Cela peut néanmoins ne pas s\'afficher correctement si votre ordinateur a du mal à se connecter à <a href="http://wedge.org/" target="_blank">wedge.org</a>.';

$txt['help_error_plugin_repo'] = 'Aucune réponse n\'a été reçue de ce dépôt la dernière fois qu\'il a été contacté pour savoir si des mises à jour étaient disponibles pour vos extensions. Vous devriez vous assurer de la validité de l\'URL du dépôt. De plus, s\'il requiert un identifiant et un mot de passe, assurez-vous qu\'ils ne sont pas erronés.';
$txt['help_plugins_repo_active'] = 'Si un dépôt n\'est pas marqué comme actif, vous pourrez toujours le parcourir avec la fonction idoine, mais il ne sera pas contacté par votre serveur pour les demandes de mises à jour d\'extensions.';
$txt['help_plugins_password_blank'] = 'Un mot de passe a déjà été spécifié pour ce dépôt, mais il est crypté sur le serveur pour ne pas pouvoir être utilisé par d\'autres personnes.<br><br>Si vous le désirez, vous pouvez changer l\'identifiant ou le mot de passe en les renseignant de nouveau, ou ignorez simplement les boîtes de texte pour ne rien changer.';

$txt['help_secret_why_blank'] = 'Pour votre sécurité, votre mot de passe et la réponse à votre question secrète sont encryptés de telle manière que le moteur Wedge ne peut que vérifier si vous entrez la bonne valeur, sans pouvoir déterminer la valeur en question.';
$txt['help_primary_membergroup'] = '
	Wedge vous permet, pour chaque membre, de définir un groupe principal et des groupes additionnels. Si aucun groupe principal n\'est renseigné, ils seront considérés comme faisant partie du groupe virtuel <em>Membres Réguliers</em>. Si vous définissez le groupe principal d\'un membre, il perdra automatiquement toutes les permissions associées uniquement aux Membres Réguliers. Il est donc <strong>fortement recommandé</strong> d\'assigner des groupes de membres en priorité en tant que groupes additionnels.
	<h6>Pourquoi le groupe Modérateurs n\'est-il pas listé&#8239;?</h6>
	Puisque la modération est définie indépendamment pour chaque section, et que le groupe Modérateurs est de type virtuel, vous devrez assigner les membres en tant que modérateurs à partir de <a href="<URL>?action=admin;area=manageboards">l\'interface de gestion des sections</a>.';

$txt['help_permissions'] = 'Les permissions permettent de définir les droits accordés (ou non) aux membres pour effectuer une action particulière. Ces droits sont définis sur la base des groupes de membres <br><br>Vous pouvez modifier ces droits sur plusieurs sections en même temps en utilisant les cases à cocher, ou modifier les permissions d\'un groupe particulier en cliquant sur le lien \'Modifier\'';
$txt['help_permissions_board'] = 'Si \'Global\' est sélectionné, cela signifie que cette section ne possèdera aucune permission particulière, et aura celles générales de votre forum. \'Local\' signifie qu\'elle aura ses propres permissions - indépendamment des permissions globales. Ceci vous permet d\'avoir des sections avec plus ou moins de permissions que d\'autres, sans navoir à régler toutes les permissions pour chaque section.';
$txt['help_permissions_quickgroups'] = 'Vous permet d\'utiliser les réglages de permissions par "défaut" - standard signifie "rien de spécial", restreint signifie "comme un invité", modérateur signifie "les mêmes droits qu\'un modérateur", et enfin maintenance signifie "des permissions très proches de celles d\'un administrateur".';
$txt['help_permissions_deny'] = 'Interdire des permissions peut être utile quand vous voulez enlever des permissions à certains membres. Vous pouvez ajouter un groupe de membres avec une permission \'interdite\' pour les membres auquels vous voulez interdire une permission.<br><br>À utiliser avec précaution, une permission interdite restera interdite peu importe dans quels autres groupes de membres le membre fait partie.';
$txt['help_permissions_postgroups'] = 'Activer les permissions pour les groupes posteurs vous permettra d\'attribuer des permissions aux membres ayant posté un certain nombre de messages. Les permissions du groupe posteur sont <em>ajoutées</em> aux permissions des membres inscrits.';
$txt['help_membergroup_guests'] = 'Le groupe de membres Invités contient tous les utilisateurs qui ne sont pas connectés à un compte membre sur votre forum.';
$txt['help_membergroup_regular_members'] = 'Les membres inscrits correspondent à tous les utilisateurs ayant un compte membre sur votre forum, mais à qui aucun groupe permanent n\'a été assigné.';
$txt['help_membergroup_administrator'] = 'L\'administrateur peut, par définition, faire tout ce qu\'il veut et voir toutes les sections. Il n\'y a aucun réglage de permissions pour les administrateurs.';
$txt['help_membergroup_moderator'] = 'Le groupe Modérateur est un groupe spécial. Les permissions et réglages pour ce groupe s\'appliquent aux modérateurs mais uniquement <em>dans la (ou les) section(s) qu\'ils modèrent</em>. Au dehors de ces sections, ils sont considérés comme n\'importe quel autre membre régulier.';
$txt['help_membergroups'] = 'Dans Wedge, il y a deux types de groupes auquels vos membres peuvent appartenir. Ce sont&#8239;:
	<ul class="list">
		<li><strong>Groupes permanents&#8239;:</strong> Un groupe permanent est un groupe dans lequel un membre n\'est pas assigné automatiquement. Pour assigner un membre dans un groupe permanent, allez simplement dans son profil et cliquez sur "Paramètres relatifs au compte". Ici vous pouvez paramétrer les différents groupes permanents auxquels les membres peuvent appartenir.</li>
		<li><strong>Groupes posteurs&#8239;:</strong> Au contraire des groupes permanents, un membre ne peut être manuellement assigné à un groupe posteur, basé sur le nombre de message. Les membres sont plutôt assignés automatiqement à un groupe posteur lorsqu\'ils ont atteint le nombre minimum de messages requis pour faire partie de ce groupe.</li>
	</ul>';

$txt['help_group_text_show'] = 'Choisissez les noms à montrer dans les messages, sous le nom de l\'auteur du message, et dans les profils. Wedge ne peut afficher que deux noms de groupe&#8239;: le groupe principal, et le groupe posteur. Par défaut, il affiche uniquement le groupe principal s\'il existe, sinon le groupe posteur.<br><br>Vous pouvez aussi définir des badges pour chaque groupe, y compris les groupes additionnels, et définir leurs règles d\'affichage dans les pages d\'options individuelles des groupes de membres.';
$txt['help_show_group_key'] = 'Dans la section Qui est en ligne du centre d\'informations, les membres en ligne sont listés, avec leur nom dans la couleur de leur groupe, ainsi qu\'indiqué dans la page de configuration des groupes. Il peut s\'avérer utile d\'inclure également sous cette liste les groupes existants avec les couleurs correspondantes, pour guider les néophytes avant tout. Cette option active cette liste. Les groupes sont listés dans le même ordre que leurs badges correspondants, à configurer ci-dessous.';

$txt['help_maintenance_rot'] = 'Vous permet de supprimer <strong>complètement</strong> et <strong>irrévocablement</strong> les vieux sujets. Vous devriez effectuer une copie de sauvegarde de votre base de données avant de procéder à cette action, au cas où vous enleveriez quelque chose que vous ne vouliez pas supprimer.<br><br>À utiliser avec précaution.';
$txt['help_maintenance_members'] = 'Vous permet d\'effacer <strong>complètement</strong> et <strong>irrévocablement</strong> des comptes de membres de votre forum. Vous devriez <strong>absolument</strong> faire une sauvegarde avant, juste au cas où vous effaceriez quelque chose que vous ne vouliez pas effacer.<br><br>Utilisez cette option avec précaution.';

$txt['help_avatar_server_stored'] = 'Ceci permet à vos membres de choisir leur avatar parmi ceux préalablement installés sur votre serveur. Ils sont, généralement, au même endroit que votre forum Wedge, dans le dossier des avatars.<br>Un conseil, si vous créez des répertoires dans ce dossier, vous pouvez faire des "catégories" d\'avatars.';
$txt['help_avatar_external'] = 'Ceci permet à vos membres d\'insérer l\'adresse URL de leur propre avatar. L\'inconvénient est que, dans certains cas, ils pourraient utiliser des avatars beaucoup trop gros ou des images que vous ne voulez pas voir sur votre forum.';
$txt['help_avatar_download_external'] = 'Ceci permet au forum de télécharger l\'avatar choisi par l\'utilisateur via l\'URL donnée par celui-ci. Si l\'opération réussit, l\'avatar sera traité comme un avatar transféré.';
$txt['help_avatar_upload'] = 'Cette option est pratiquement la même chose que "Permettre aux membres de sélectionner un avatar externe", sauf que vous avez un meilleur contrôle sur les avatars, plus de facilité pour les redimensionner, et vos membres n\'ont pas à avoir un endroit où mettre leurs avatars.<br><br>Mais l\'inconvénient est que cela peut prendre beaucoup d\'espace sur votre serveur.';
$txt['help_avatar_download_png'] = 'Les images au format PNG sont plus lourdes, mais offrent un rendu de meilleure qualité. Si la case est décochée, le format JPEG sera utilisé à la place - ce qui donne des fichiers moins lourds, mais de moindre qualité, surtout les dessins, lesquels peuvent devenir assez flous.';
$txt['help_gravatar_settings'] = 'Les Gravatars sont un type d\'avatar généré par <a href="http://www.gravatar.com/">Gravatar.com</a>. Il vous suffit de mettre en ligne votre avatar là-bas et vous pourrez l\'utiliser sur tous les sites compatibles à condition d\'y renseigner la même adresse e-mail - notamment de nombreux blogs WordPress.';
$txt['help_gravatarEnabled'] = 'Les utilisateurs ne pourront utiliser des Gravatars que si cette option est activée.';
$txt['help_gravatarOverride'] = 'Si cette option est activée, les utilisateurs ne pourront pas choisir d\'avatar sur le forum, à l\'exception d\'un Gravatar.';
$txt['help_gravatarAllowExtraEmail'] = 'Si cette option est activée, les utilisateurs pourront fournir une adresse e-mail alternative utilisée uniquement pour choisir leur Gravatar. Nombreux sont ceux qui ont plusieurs adresses e-mail, s\'ils utilisent une adresse particulière pour leur Gravatar, ils pourront ainsi utiliser ce dernier.';
$txt['help_gravatarMaxRating'] = 'À la création d\'un Gravatar, les utilisateurs peuvent indiquer une classification correspondante inspirée de celle de l\'<a href="http://fr.wikipedia.org/wiki/Motion_Picture_Association_of_America" target="_blank">industrie du cinéma</a> américaine. Par exemple, ils peuvent le classifier en G si c\'est une photo d\'une fleur, ou mettre un X pour une photo potentiellement offensante, comme un Teletubby par exemple. (Ben quoi, j\'ai peur des Teletubbies.) Choisissez le niveau maximal acceptable pour le public de votre site.';
$txt['help_avatar_defaults'] = 'Ces options correspondent à des réglages plus généraux de votre forum, par exemple forcer un avatar sur les utilisateurs qui n\'en ont pas encore, ou gérer les avatars des utilisateurs bannis.';
$txt['help_avatar_banned_hide'] = 'Cette option permet de cacher les avatars des utilisateurs bannis, comme s\'ils n\'en avaient pas.<br><br>Attention, si l\'utilisateur est débanni, son avatar ne sera pas restauré automatiquement.';

$txt['help_disableHostnameLookup'] = 'Ceci désactive la recherche du nom de l\'hôte, fonction parfois lente sur certains serveurs. Notez que sa désactivation rend le système de bannissement moins efficace.';

$txt['help_search_weight_frequency'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un facteur d\'ancienneté du message relativement bas. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur compte le nombre de messages correspondants et divise ce résultat par le nombre de messages dans un sujet.';
$txt['help_search_weight_age'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie l\'âge des derniers messages d\'un sujet. Plus le message est récent, plus il est positionné haut dans la liste.';
$txt['help_search_weight_length'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur est basé sur la longueur du sujet. Plus le sujet contient de réponses, plus le pointage est élevé.';
$txt['help_search_weight_subject'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie si le terme recherché peut être trouvé ou non dans le titre du sujet.';
$txt['help_search_weight_first_message'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie si le terme recherché peut être trouvé ou non dans le premier message du sujet.';
$txt['help_search_weight_pinned'] = 'Des facteurs de pertinence sont utilisés pour déterminer l\'intêrêt des résultats de recherche. Changez ces facteurs pour les faire correspondre à des valeurs intéressantes pour votre forum. Par exemple, un forum d\'actualités aura un relativement grand facteur de \'Âge du dernier message\'. Toutes les valeurs sont en relation avec les autres et doivent être des valeurs positives.<br><br>Ce facteur vérifie si un sujet est épinglé et augmente le score de pertinence si il l\'est.';
$txt['help_search'] = 'Ajustez ici tous les réglages de la fonction recherche.';
$txt['help_search_why_use_index'] = 'Un index de recherche peut considérablement améliorer l\'exécution des recherches sur votre forum. En particulier lorsque le nombre de messages sur un forum est de plus en plus grand, la recherche sans index peut prendre un bon moment et augmenter la pression sur votre base de données. Si votre forum a plus de 50.000 messages, vous devriez penser à créer un index de recherche pour assurer un fonctionnement optimal de votre forum.<br><br>À noter qu\'un index de recherche peut prendre un certain espace... L\'index personnalisé peut être jusqu\'à 3 fois plus encombrant que la table des messages, mais sa rapidité et solidité compensent ce défaut.';

$txt['help_see_member_ip'] = 'Votre adresse IP est affichée seulement à vous et à ceux auxquels l\'administrateur en a donné le droit. Rappelez-vous que cette information ne permet pas d\'identifier un individu précisément, la plupart des adresses changeant périodiquement.<br><br>Vous ne pouvez pas voir l\'adresse IP des autres, et les autres ne peuvent pas voir la vôtre.';
$txt['help_whytwoip'] = 'Wedge utilise plusieurs méthodes pour détecter les adresses IP d\'un utilisateur. Habituellement ces deux méthodes donnent la même adresse mais dans certains cas plus d\'une adresse peut être détectée. Dans ce cas Wedge conserve les adresses, et les utilise par exemple lors des contrôles de bannissement. Vous pouvez cliquer sur chaque adresse pour traquer cette IP et la bannir si nécessaire.';

$txt['help_posts_and_topics'] = '
	<ul>
		<li>
			<strong>Paramètres des messages</strong><br>
			Modifie les paramètres relatifs au postage des messages et la façon dont ceux-ci sont affichés.
		</li><li>
			<strong>Code d\'affichage</strong><br>
			Active le code montrant les messages dans un rendu correct. Ajuste aussi quels codes sont permis et ceux qui sont désactivés.
		</li><li>
			<strong>Mots censurés</strong>
			Afin de conserver un registre de langage convenable sur votre forum, vous pouvez censurer certains mots. Cette fonction vous permet de convertir des mots interdits en d\'autres mots innocents. D\'où une possibilité dérivé de remplacement de termes choisis.
		</li><li>
			<strong>Paramètres des sujets</strong>
			Modifie les paramètres relatifs aux sujets&#8239;: le nombre de sujets par page, l\'activation ou non des sujets épinglés, etc.
		</li>
	</ul>';
$txt['help_spider_group'] = 'En sélectionnant un groupe restrictif, lorsqu\'un invité est identifié comme moteur de recherche, certaines permissions lui seront niées (autrement dit "Interdites"), par rapport aux permissions normales d\'un invité. Vous pouvez utiliser ceci pour donner moins d\'accès à un moteur de recherche par rapport à un invité normal. Vous pouvez par exemple vouloir créer un nouveau groupe appelé "Robots" et le sélectionner ici. Vous pourriez donc interdire à ce groupe la permission de voir les profils pour empêcher l\'indexation par les robots des profils de vos membres.<br>Note: La détection des robots n\'est pas parfaite et peut être simulée par les utilisateurs, donc cette fonctionnalité n\'est pas garantie pour restreindre le contenu aux seuls moteurs de recherche que vous avez ajoutés.';
$txt['help_show_spider_online'] = 'Ce paramètre vous permet de choisir si les robots seront montrés ou pas sur la liste des utilisateurs en ligne et la page "Qui est en ligne". Les options&#8239;:
	<ul class="list">
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

$txt['help_pm_bcc'] = 'Lorsque vous envoyez un message personnel vous pouvez choisir d\'ajouter comme destinataire un BCC (soit "Blind Carbon Copy"). L\'existence et l\'identité des destinataires BCC seront cachées aux autres destinataires du message.';

$txt['help_move_topics_maintenance'] = 'Vous permet de déplacer tous les sujets d\'une section à une autre.';
$txt['help_maintain_reattribute_posts'] = 'Vous pouvez utiliser cette fonction pour attribuer des messsages d\'invités de votre forum à un membre inscrit. Ceci est très utile par exemple si un utilisateur a effacé son compte, a changé d\'idée et veut récupérer les anciens messages associé à son compte.';
$txt['help_chmod_flags'] = 'Vous pouvez choisir manuellement les permissions que vous voulez appliquer aux fichiers sélectionnés. Pour ce faire, entrez la valeur du chmod en valeur numérique (en base 8). Note - ces indicateurs n\'auront aucun effet sur les systèmes d\'exploitation Microsoft Windows.';

$txt['help_postmod'] = 'Cette section permet aux membres de l\'équipe de modération disposant des permissions nécessaires, d\'approuver les messages et sujets avant leur apparition en ligne.';

$txt['help_field_show_enclosed'] = 'Entoure le texte entré par l\'utilisateur par du texte ou du HTML, vous permettant d\'ajouter des fournisseurs de messagerie instantanée supplémentaires, des images ou intégrations multimédia, etc. Par exemple&#8239;:<br><br>
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}"&gt;&lt;/a&gt;<br><br>
		À noter que vous pouvez utiliser les variables suivantes&#8239;:<br>
		<ul class="list">
			<li>{INPUT} - Le texte entré par l\'utilisateur.</li>
			<li>{SCRIPTURL} - Adresse web (URL) du forum.</li>
			<li>{IMAGES_URL} - URL du dossier images dans le thème actuel de l\'utilisateur.</li>
			<li>{DEFAULT_IMAGES_URL} - URL du dossier images dans le thème par défaut.</li>
		</ul>';

$txt['help_custom_mask'] = 'Le masque d\'entrée est important pour la sécurité de votre forum. Valider le texte entré par un utilisateur peut vous permettre d\'éviter que ses données soient utilisées de manière inattendue. Vous pouvez utiliser des expressions régulières pour vous y aider.<br><br>
	<div style="margin: 0 2em">
		<span class="bbc_tt">/[A-Za-z]+/</span> - Correspond à toutes les lettres de l\'alphabet, minuscules et majuscules.<br>
		<span class="bbc_tt">/[0-9]+/</span> - Correspond à tous les chiffres.<br>
		<span class="bbc_tt">/[A-Za-z0-9]{7}/</span> - Correspond à une suite de sept chiffres et/ou lettres de l\'alphabet, minuscules ou majuscules.<br>
		<span class="bbc_tt">/[^0-9]*/</span> - Empêche la présence à cet endroit d\'un chiffre.<br>
		<span class="bbc_tt">/^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$/</span> - N\'autoriser que 3 ou 6 caractères hexadécimaux.<br>
	</div><br><br>
	De plus, vous pouvez utiliser les méta-caractères spéciaux ? + * ^ $ \\ et {xx}.
	<div style="margin: 0 2em">
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

$txt['help_reverse_proxy'] = 'Si vous utilisez Bad Behavior derrière un proxy inverse, un répartiteur de charge, un accélérateur HTTP, un cache de contenu ou une autre technologie similaire, activez cette option.';
$txt['help_reverse_proxy_header'] = 'Votre ou vos serveurs proxy inverses doivent placer dans une entête HTTP l\'adresse IP du client Internet dont ils ont reçu la requête. En général, <a href="http://en.wikipedia.org/wiki/X-Forwarded-For">X-Forwarded-For</a> sera de mise, parce qu\'il est supporté par la plupart des serveurs proxy, mais assurez-vous bien qu\'il soit activé sur le vôtre. D\'autres entêtes possibles&#8239;: "X-Real-Ip" (nginx) et "Cf-Connecting-Ip" (CloudFlare).';
$txt['help_reverse_proxy_ips'] = 'Cette zone vous permet de lister les adresses IP dans le style classique (par ex. 127.0.0.1), ou par blocs CIDR (par ex. 127.0.0.0/8). Si vous avez une chaîne de deux (ou plus) proxies inverses entre votre serveur et l\'Internet public, vous devez spécifier <em>toutes</em> les zones IP (au format CIDR) de tous vos serveurs proxy, répartiteurs de charge, etc. Si vous ne le faites pas, il sera impossible de déterminer la véritable adresse IP du client.';

$txt['help_signature_minposts'] = 'Certains administrateurs préfèrent activer des permissions pour l\'affichage des signatures, d\'autres préfèreront permettre l\'ajout d\'une signature, mais sans la montrer publiquement. Cela peut peut-être aider à décourager le spam.';

$txt['help_media_permissions'] = 'D\'ici vous pouvez ajouter, modifier ou supprimer les profils de permissions. Les profils peuvent être assignés à un ou plusieurs albums, et les albums en question suivront les permissions concernées.';

// Help popup for the Media tag...
$txt['help_mediatag'] = '<h2>Le tag [media] et autres joyeusetés.</h2>
	Mais à quoi ça sert, me demandez-vous ? Eh bien, tout simplement à insérer des éléments média partout où vous pouvez utiliser des tags BBC, à commencer par vos messages sur le forum.
	Deux petits exemples pour se mettre en appétit&#8239;:
	<br><br><b>[media id=123 type=preview align=center width=400 caption="Hello, world!"]</b>
	<br>Ce code affichera dans vos messages une image de taille intermédiaire (aperçu), alignée au centre, redimensionnée à 400 pixels de large, et accompagnée d\'un texte descriptif.
	Tous les paramètres sont facultatifs, seul l\'identifiant de l\'élément (id=123) est obligatoire. Vous me direz, ça paraît logique.
	<br>
	<br><b>[media id=1 type=album]</b>
	<br>Ce code montrera une série de vignettes de type box (voir plus bas) appartenant à l\'album numéro 1, reproduisant plus ou moins le visuel de la page web de l\'album en question.
	<br><br>
	<b>Valeurs possibles :</b>
	<br>- type=<em>normal, box, link, preview, full, album</em>
	<br>- align=<em>none, left, center, right</em>
	<br>- width=<em>123</em> (en pixels)
	<br>- caption=<em>"Texte descriptif"</em> ou caption=<em>EnUnMot</em>
	<br><br>
	<h2>Paramètres disponibles</h2>
	<b>id</b>
	<ul class="list">
		<li>Tous les éléments sont identifiés par un numéro dédié que vous pouvez voir dans leur adresse. Indiquez-le ici. C\'est le seul paramètre obligatoire. Je sais, c\'est moche. C\'est la vie.
		Mais faites pas cette tête, vous pouvez quand même spécifier plusieurs éléments en les séparant par une virgule, comme dans "[media id=1,2,3 type=album]".</li>
	</ul>
	<br>
	<b>type</b>
	<ul class="list">
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
	<ul class="list">
		<li><b>none</b> (défaut) - alignement normal. Les vignettes environnantes sont repoussées à la ligne suivante ou précédente.</li>
		<li><b>left</b> - aligner la vignette à gauche. Utilisez plusieurs tags [media] alignés ainsi pour montrer les vignettes côte-à-côte.</li>
		<li><b>center</b> - aligner la vignette au centre. Pour afficher une vignette à gauche, une au milieu et une à droite, insérez-les dans cet ordre : [media align=left][media align=right][media align=center]</li>
		<li><b>right</b> - aligner la vignette à droite. Même remarque que pour <em>left</em>. Rompez.</li>
	</ul>
	<br>
	<b>width</b>
	<ul class="list">
		<li>Utilisez ce paramètre pour forcer la largeur d\'une vignette à la dimension désirée. Indiquez un nombre supérieur à zéro.</li>
		<li>Réglez le paramètre <em>type</em> selon vos besoins. Ainsi, si vos vignettes ont pour largeur par défaut 120 pixels, et vos aperçus 500 pixels, utilisez [media type=preview] si vous forcez une largeur supérieure à 300 pixels, pour éviter un effet de flou trop visible.</li>
	</ul>
	<br>
	<b>caption</b>
	<ul class="list">
		<li>Affiche un texte descriptif sous la vignette. Si le type est défini à <em>link</em>, le texte sera cliquable et vous mènera à la page consacrée à l\'élément.</li>
		<li>Entrez ce que vous voulez. Si votre texte contient des espaces ou des crochets, assurez-vous de l\'entourer de "guillemets". Sinon, ça fait tout n\'importe quoi, et c\'est encore Bibi qui doit s\'y coller pour faire le ménage.</li>
	</ul>';

$txt['help_contacts'] = 'Les listes de contacts vous facilitent la vie pour gérer vos contacts. Vous pouvez leur attribuer des paramètres de confidentialité spécifiques, pratique quand vous ne voulez pas tout partager avec tout le monde.
	<br>Bien entendu, vous pouvez mettre vos amis dans plusieurs listes à la fois.
	<br><br>
	Il y a plusieurs types de listes génériques parmi lesquelles choisir. Vous pouvez aussi créer de nouvelles listes, ou en renommer. À vous de voir&#8239;!
	<br>- <strong>Amis&#8239;</strong>: généralement, les membres les plus proches de vous.
	<br>- <strong>Connaissances&#8239;</strong>: membres avec qui vous êtes en contact, mais avec qui vous ne voulez pas forcément tout partager.
	<br>- <strong>Collègues&#8239;</strong>: membres qui travaillent, ou ont travaillé à vos côtés.
	<br>- <strong>Famille&#8239;</strong>: vos parents, frères et soeurs, cousins, etc.
	<br>- <strong>À suivre&#8239;</strong>: membres que vous ne connaissez pas personnellement, mais que vous désirez suivre, ou retrouver facilement.
	<br>- <strong>Restreints&#8239;</strong>: cette liste spéciale vous permet de considérer un contact comme indésirable. Il ne pourra pas accéder aux contenus protégés, même s\'il est également situé dans une liste autorisée. Le contenu de cette liste n\'est jamais visible qu\'à vous.';
