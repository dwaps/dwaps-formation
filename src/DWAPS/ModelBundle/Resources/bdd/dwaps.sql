-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 18 Janvier 2017 à 22:10
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dwaps`
--

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_category`
--

CREATE TABLE `dwaps_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_category`
--

INSERT INTO `dwaps_category` (`id`, `name`, `route`) VALUES
(1, 'CSS', 'css'),
(2, 'HTML', 'html'),
(3, 'Serveur', 'server'),
(4, 'SVG', 'svg'),
(5, 'Apache', 'apache'),
(6, 'Animation', 'animation'),
(8, 'Flexbox', 'flexbox'),
(9, 'Projet', 'project'),
(10, 'Javascript', 'javascript'),
(11, 'Bootstrap', 'bootstrap'),
(12, 'PHP', 'php'),
(13, 'SQL', 'sql'),
(14, 'AngularJS', 'angularjs'),
(15, 'Ionic', 'ionic'),
(16, 'Git', 'git'),
(17, 'SASS', 'sass'),
(18, 'Préprocesseur', 'preprocessor'),
(19, 'VueJS', 'vuejs'),
(20, 'Blender', 'blender'),
(21, 'Gimp', 'gimp'),
(22, 'Hardware', 'hardware'),
(23, 'Regex', 'regex'),
(24, 'Webpack', 'webpack'),
(25, 'NodeJS', 'nodejs'),
(26, 'BabylonJS', 'babylonjs'),
(27, 'Linux', 'linux'),
(28, 'Polymer', 'polymer'),
(29, 'Web components', 'web-components'),
(30, 'Arduino', 'arduino'),
(31, 'Assembleur', 'assembleur'),
(32, 'Python', 'python'),
(33, 'Java', 'java'),
(34, 'Android', 'android'),
(35, 'Mobile', 'mobile'),
(36, 'Web', 'web'),
(37, 'Desktop', 'desktop'),
(38, 'Application', 'application'),
(39, 'Wordpress', 'wordpress'),
(40, 'Joomla!', 'joomla'),
(41, 'JQuery', 'jquery'),
(42, 'VexFlow', 'vexflow'),
(43, 'VexTab', 'vextab'),
(44, 'Electronique', 'electronique'),
(45, 'C++', 'c-plus-plus'),
(46, 'Sublime Text', 'sublime-text'),
(48, 'Swift', 'swift'),
(49, 'REST', 'rest'),
(50, 'API', 'api'),
(51, 'AJAX', 'ajax'),
(52, 'Emmet', 'emmet'),
(53, 'TinyMCE', 'tinymce'),
(54, 'Astuces', 'astuces'),
(55, 'YML', 'yml'),
(56, 'TWIG', 'twig'),
(57, 'Google', 'google'),
(58, 'Symfony', 'symfony'),
(59, 'JSON', 'json'),
(60, 'Bower', 'bower'),
(61, 'Terminal', 'terminal'),
(62, 'Doctrine', 'doctrine');

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_category_dwaps_tuto`
--

CREATE TABLE `dwaps_category_dwaps_tuto` (
  `dwaps_category_id` int(11) NOT NULL,
  `dwaps_tuto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_category_dwaps_tuto`
--

INSERT INTO `dwaps_category_dwaps_tuto` (`dwaps_category_id`, `dwaps_tuto_id`) VALUES
(1, 18),
(1, 20),
(1, 21),
(1, 23),
(2, 21),
(3, 24),
(5, 24),
(6, 18),
(6, 21),
(8, 20),
(9, 17),
(9, 19),
(9, 22),
(9, 25),
(10, 15),
(10, 19),
(11, 23),
(12, 15),
(14, 19),
(15, 19),
(16, 17),
(29, 19),
(35, 19),
(35, 20),
(36, 15),
(36, 18),
(36, 20),
(36, 21),
(36, 22),
(36, 23),
(36, 25),
(38, 19),
(53, 15),
(54, 15),
(54, 18),
(54, 25),
(55, 15),
(58, 15),
(58, 25),
(60, 22),
(61, 22),
(62, 25);

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_image`
--

CREATE TABLE `dwaps_image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_image`
--

INSERT INTO `dwaps_image` (`id`, `url`, `alt`) VALUES
(15, 'tinymce', 'tinymce'),
(17, 'git', 'git'),
(18, 'animate.css', 'animate.css'),
(19, 'ionic-2', 'ionic-2'),
(20, 'flexbox-css', 'flexbox-css'),
(21, 'dwaps-css', 'dwaps-css'),
(22, 'bower', 'bower'),
(23, 'bootstrap', 'bootstrap'),
(24, 'apache-2', 'apache-2'),
(25, 'symfony', 'symfony');

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_nav`
--

CREATE TABLE `dwaps_nav` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_nav_child`
--

CREATE TABLE `dwaps_nav_child` (
  `id` int(11) NOT NULL,
  `nav_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_tuto`
--

CREATE TABLE `dwaps_tuto` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_tuto`
--

INSERT INTO `dwaps_tuto` (`id`, `image_id`, `title`, `description`, `date`) VALUES
(15, 15, 'Intégrer un éditeur de texte WYSIWYG', 'Si vous avez besoin de concevoir un back-office, l\'interface d\'administration d\'un site web par exemple, ou encore un simple blog, votre client vous sera très reconnaissant d\'avoir pensez à lui faciliter la vie en intégrant une solution d\'édition de texte dans votre projet...', '2017-01-17 16:31:21'),
(17, 17, 'Prise en main du logiciel Git', 'Dans ce tuto, vous apprendrez à prendre en main ce logiciel de contrôle de version très populaire et facilitant l\'avancement de projet autant que le travail en équipe.', '2017-01-18 09:47:37'),
(18, 18, 'Création d\'un menu avec animate.css', 'Animate.css fait partie de ces petits frameworks bien utiles qu\'il faut toujours avoir à portée de main. Il permet d\'intégrer facilement des animation CSS dans votre projet.', '2017-01-18 12:24:18'),
(19, 19, 'Création d\'une app de base avec Ionic 2', 'La différence entre la 1ère et la 2ème version de Ionic est extraordinaire. Cela est dû au passage d\'AngularJS à Angular 2 d\'une part et de la montée en puissance des Web components. Dans ce tuto, je vous propose une prise en main de ce framework.', '2017-01-18 12:54:37'),
(20, 20, 'Les flexbox : pour une mise en page impeccable', 'Ce modèle de boîte flexible vous permettra de créer des layouts adaptatifs efficaces et faciles à mettre en place. Si vous êtes web designer et que vous ne connaissez pas encore cet outil, vous ne le regretterez pas !', '2017-01-18 14:39:01'),
(21, 21, 'Reproduire le logo DWAPS en CSS', 'Vous ne le savez peut-être pas mais avec du pur CSS, on peut en faire des choses ! Y compris dessiner... Je vous propose ici de reproduire le logo DWAPS de toute pièce uniquement avec ce langage. Une fois fini et pour le rendre un peu plus vivant, on lui affectera une animation que nous coderons également en CSS.', '2017-01-18 15:01:03'),
(22, 22, 'La gestion de dépendance avec Bower', 'A mesure qu\'un projet web grossit, il devient difficile de gérer ses librairies. Sans parler des librairies dont dépendent ces librairies... Bref, le casse-tête est de taille. Bower est justement une solution à ce problème : c\'est un gestionnaire de paquet côté front-end que je vous propose de découvrir sans plus attendre.', '2017-01-18 15:37:15'),
(23, 23, 'Découverte de Bootstrap', 'Vous en avez assez de réécrire du code CSS rébarbatif  pour la gestion de l\'adaptabilité multi écran par exemple ? Utilisez Bootstrap ! Ce framework vous permettra de concevoir plus rapidement votre projet en responsive web design. Avec lui, il n\'y a même plus besoin de se préoccuper de la création d\'une feuille de style de base ou d\'un reset CSS !', '2017-01-18 16:12:30'),
(24, 24, 'Mettre en place un serveur web', 'Je vous propose ici de découvrir comment installer et configurer un serveur Apache 2 sur Linux. Cet outil est indispensable pour tester ses sites Internet avant leur hébergements pour le public. Avec une gestion multi-thread en plus d\'une gestion multi-processus, ce serveur gère les requêtes clients sans difficultés, vous ne serez pas déçu.', '2017-01-18 16:30:37'),
(25, 25, 'Créer des entités à partir de la BDD', 'Dans un projet Symfony, si le client ne me fournit pas de base, je crée mes entités avant de les insérer en base de données car cela m\'évite d\'avoir à coder en SQL. En effet, Symfony met à notre disposition tout un panel de lignes de commandes dont certaines sont spécifiques à Doctrine et rendent la tâche plus aisée. Dans le cas d\'une base existante, il est nécessaire de faire le chemin inverse : c\'est ce que nous verrons dans ce tuto...', '2017-01-18 22:04:38');

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_tuto_content`
--

CREATE TABLE `dwaps_tuto_content` (
  `id` int(11) NOT NULL,
  `tuto_id` int(11) NOT NULL,
  `chapter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notLast` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_tuto_content`
--

INSERT INTO `dwaps_tuto_content` (`id`, `tuto_id`, `chapter`, `paragraph`, `notLast`) VALUES
(26, 15, 'Présentation de TinyMCE', 'TinyMCE est un &eacute;diteur de texte aujourd\'hui tr&egrave;s populaire. Il s\'agit d\'une solution <a href="https://fr.wikipedia.org/wiki/What_you_see_is_what_you_get" target="_blank">WISIWIG</a>&nbsp;(What You See Is What You Get) &eacute;crit en Javascritpt qui s\'int&eacute;gre tr&egrave;s facilement dans votre&nbsp;code.<br /><br />Dans ce tuto, nous verrons comment l\'installer au sein d\'un projet Symfony. Bien entendu, TinyMCE est parfaitement utilisable ailleurs. Avant d\'aller plus loin, je vous invite &agrave; jeter un oeil sur la <a href="https://www.tinymce.com/docs/" target="_blank">doc</a>, et &agrave; voir <a href="https://www.tinymce.com/docs/demo/basic-example/" target="_blank">quelques exemples</a>&nbsp;de ce qu\'il est possible de faire avec un tel outil.', 1),
(27, 15, 'Installation de TinyMCE', 'Pour inclure TinyMCE dans un projet Symfony, la d&eacute;marche reste classique. Elle est d&eacute;crite (en anglais, of course) dans le GitHub de <a href="https://github.com/stfalcon/TinymceBundle" target="_blank">Stefan Tanasiychuk</a>.<br /><br />La premi&egrave;re chose &agrave; faire est d\'utliser notre cher gestionnaire de paquet <a href="https://getcomposer.org/" target="_blank">composer</a>&nbsp;:<br /><code style="display: block; width: 90%; min-height: 50px; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;"><code style="display: block; width: 90%; min-height: 50px; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;"><span style="color: white;">composer require stfalcon/tinymce-bundle=\'2.0\'<br /><br />OU<br /><br /></span><span style="color: #ffffff;">composer require stfalcon/tinymce-bundle=\'1.0\'</span></code></code>Si vous travaillez la derni&egrave;re version de Symfony (&gt;=3.0), vous avez devinez : il faut utiliser la version 2.0 du bundle TinyMCE. En dessous (&gt;=2.1 et &lt;=2.8), installez la version 1.0. Vous devez &eacute;galement disposez d\'une version &gt;=5.4 de PHP sur votre ordinateur (selon les recommendations d&eacute;crites sur github).<br /><br />Ensuite, il vous faudra d&eacute;clarer le nouveau composant &agrave; Symfony en l\'ajoutant &agrave; la liste des bundles de production g&eacute;r&eacute;s par le kernel :<br /><code style="display: block; width: 90%; min-height: 50px; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">&lt;?php<br /><br />&nbsp; &nbsp;// ...<br /><br />&nbsp; &nbsp;public function registerBundles()<br />&nbsp; &nbsp;{<br />&nbsp; &nbsp; &nbsp; $bundles = array(<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// ...<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;new Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle(),<br />&nbsp; &nbsp; &nbsp; ];<br />&nbsp; &nbsp;}<br /><br /></code>Une derni&egrave;re &eacute;tape importante : TinyMCE doit avoir une copie des resources n&eacute;cessaires &agrave; son fonctionnement dans le r&eacute;pertoire web/. Pour ce faire, utilisez la commande suivante :&nbsp;\r\n<code style="display: block; width: 90%; min-height: 50px; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">php bin/console assets:install web/ --symlink</code>\r\n&nbsp;L\'option --symlink permet d\'&eacute;viter une copie en dur et l\'acc&egrave;s aux resources se fait donc par un lien symbolique. Cette option n\'est pas toujours support&eacute;e (il peut y avoir des soucis sous Windows en particulier).<br />Si vous rencontrez des difficult&eacute;s, il vous suffira de l\'omettre pour r&eacute;soudre le probl&egrave;me.', 1),
(28, 15, 'Configuration de TinyMCE', 'Avant de pouvoir utiliser TinyMCE, il faudra l\'initialiser. Pour cela, rien de plus simple : sous Symfony, il est possible de l\'utiliser via <a href="http://twig.sensiolabs.org/" target="_blank">TWIG</a>&nbsp;(qui est le moteur de template int&eacute;gr&eacute; par d&eacute;faut &agrave; Symfony). Voyez plut&ocirc;t :<br /><code style="display: block; width: 90%; min-height: 30px; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">{{ tinymce_init() }}&nbsp;<br /></code>\r\n&nbsp;Ce "twig tag" est &agrave; placer au-dessous de votre textarea. Ensuite, vous avez le choix : soit vous utilisez la classe&nbsp;<em>tinymce</em>, soit vous ciblez le textarea par un s&eacute;lecteur CSS. Ci-dessous, je vous pr&eacute;sente les deux fa&ccedil;on de faire :<br /><code style="display: block; width: 90%; min-height: 30px; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;"><span style="color: #ffffff;">M&eacute;thode 1 :</span><br /><br /><span style="color: #ffffff;">&lt;textarea class="tinymce" rows="10" cols="30"&gt;&lt;/texarea&gt;</span><br /><span style="color: #ffffff;">{{&nbsp;tinymce_init() }}</span><br /><br /><br /><span style="color: #ffffff;">M&eacute;thode 2 :<br /></span><br /><span style="color: #ffffff;">&lt;textarea rows="10" cols="30"&gt;&lt;/texarea&gt;<br />{{<br />&nbsp; &nbsp;tinymce_init({<br />&nbsp; &nbsp; &nbsp; selector: \'textarea\'<br />&nbsp; &nbsp;})<br />}}</code>Ici pour la deuxi&egrave;me m&eacute;thode, j\'ai utilis&eacute; le nom de l\'&eacute;lement HTML lui-m&ecirc;me, mais rien ne vous emp&ecirc;che d\'opter pour une classe perso ou un identifiant. M&ecirc;me [cols=30] aurait march&eacute;...<br /><br /><br />On s\'arr&ecirc;te l&agrave; pour ce tuto. En effet, il ne faut rien de plus pour avoir un &eacute;diteur de texte fonctionnel, il n\'y a qu\'&agrave; afficher la page dans le navigateur pour le constater.<br />Il s\'agit cependant d\'une utilisation de base de TinyMCE. Celui-ci offre en r&eacute;alit&eacute; tout un panel d\'options tr&egrave;s int&eacute;ressantes pour l\'&eacute;laboration d\'un &eacute;diteur riche et adaptable aux besoins du client.<br /><br />Dans un prochain tutoriel, je vous pr&eacute;senterais une utilisation plus pouss&eacute;e de cet outil.', 0),
(32, 17, 'Qu\'est-ce que Git ?', 'Comme je l\'ai dis dans le r&eacute;sum&eacute; de ce tuto, Git est un logiciel de gestion de version (VCS en anglais pour Version Control System) d&eacute;centralis&eacute; (c\'est-&agrave;-dire que chacun peut travailler sur une copie du projet sans d&eacute;ranger le travail d\'un autre). Il a été créé par <a href="https://fr.wikipedia.org/wiki/Linus_Torvalds" target="_blank">Linus Torvalds</a>(un des hommes à l\'origine de Linux).<br /><br />Un tel logiciel a pour but de sauvegarder chaque &eacute;tape de modification d\'un projet de mani&egrave;re &agrave; s\'y retrouver et faciliter le travail en &eacute;quipe. On pourra par exemple int&eacute;grer une fonctionnalit&eacute; (ex: ajout et gestion d\'un bouton "j\'aime") &agrave; un projet puis, d&egrave;s que le code fonctionne parfaitement, utiliser Git pour valider ("commiter"). Par la suite, si on effectue une nouvelle modification mais que cette derni&egrave;re ne fonctionne pas, qu\'on d&eacute;cide de revenir en arri&egrave;re apr&egrave;s avoir ajouter une tonne de fichiers et dossiers, pas de soucis : il suffira de rentrer une commande git pour retrouver l\'&eacute;tat de notre projet au moment du dernier commit !<br /><br />Avec Git on est donc s&ucirc;r d\'envoyer sur le serveur de partage un projet qui tient toujours la route, et chaque contributeur peut ainsi ajouter sa pierre &agrave; l\'&eacute;difice sans risquer de compromettre l\'avenir du projet.<br /><br />Il y aurait bien d\'autres choses &agrave; dire sur Git mais le but de ce tuto n\'est pas de vous noyer sous une tonnes d\'infos, et je pense que de toute fa&ccedil;on la meilleur mani&egrave;re d\'appr&eacute;hender quelque chose, c\'est de mettre les mains dans le cambouis. Alors allons-y !', 1),
(33, 17, 'Installation de Git', 'Pour installer Git, rendez-vous sur&nbsp;<a href="https://git-for-windows.github.io/">https://git-for-windows.github.io</a>&nbsp;pour ceux qui sont sous Windows. Vous voyez le gros bouton "Download" ? &nbsp;Eh bien, cliquez dessus pour t&eacute;l&eacute;charger <em>msys</em>&nbsp;et Git.<br /><br />Pourquoi deux installations en une ? Tout simplement parce que Git s\'utilise avec des commandes Unix et ne comprends pas les commandes Windows. Le r&ocirc;le de <em>msys</em> est donc d\'&eacute;muler les commandes Unix autrement Git serait inutilisable.<br /><br />A l\'installation, le mieux est de laisser toutes les options par d&eacute;faut. Vous&nbsp;pourrez ensuite commencer &agrave; travailler en ouvrant l\'application <em>Git bash</em>&nbsp;(le terinal d&eacute;di&eacute; &agrave; Git).<br /><br />Sous Linux c\'est beaucoup plus facile&nbsp;: une simple commande permet de l\'installer :<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">apt install git</code>', 1),
(34, 17, 'Configuration minimale de Git', 'Toutes les commandes Git commencent par le mot cl&eacute;... <em>git</em>, vous l\'aurez devin&eacute; ! Avant de pouvoir utiliser notre VCS, il est n&eacute;cessaire au stricte minimum de lui dire qui vous &ecirc;tes. Pour ce faire, vous aurez deux commandes &agrave; taper :<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">git config --global user.name "Michael Cornillon"<br />git config --global user.email contact@dwaps.fr</code><br />Bien entendu, vous devrez remplacer <em>Michael Cornillon</em> et <em><a href="mailto:contact@dwaps.fr">contact@dwaps.fr</a></em>&nbsp;par vos infos personnelles, je ne vous le fais pas dire ! L\'option --global permet de donner ces infos une fois pour toutes : en effet, comme on peut s\'y attendre, <em>global</em>&nbsp;rend l\'enregistrement accessible partout sur l\'ordinateur. Vous pourrez ensuite &agrave; tout moment modifier cela pour chaque projet en ommettant simplement l\'option --global, cela&nbsp;&eacute;crasera ce param&eacute;trage uniquement pour le r&eacute;pertoire&nbsp;courant.', 1),
(35, 17, 'Utilisation de Git', 'C\'est bon, nous sommes maintenant pr&ecirc;t &agrave; d&eacute;marrer un projet Git. Alors, bien s&ucirc;r, quand je dis&nbsp;<em>projet Git</em>, je parle de n\'importe quel type de projet (Blender, AngularJS, Symfony, Ionic, NodeJS...) g&eacute;r&eacute; par Git.<br /><br />La toute premi&egrave;re d&eacute;marche, c\'est l\'initialisation (on dit "initialiser un d&eacute;p&ocirc;t Git"). Avant cela, rendez-vous dans votre r&eacute;pertoire :<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;"><span style="color: #ffffff;">cd chemin/vers/mon/projet</span><br /><span style="color: #ffffff;">git init</span><br /><span style="color: #ffffff;">D&eacute;p&ocirc;t Git vide initialis&eacute; dans /home/michael/DWAPS-Formation/tuto-git/.git/</span><br /></code> En passant, le message de confirmation de&nbsp;<em>git init</em> vous indique que le r&eacute;pertoire&nbsp;<em>.git</em> a &eacute;t&eacute; cr&eacute;er. Celui-ci contient tous les &eacute;l&eacute;ments indispensable &agrave; Git pour g&eacute;rer le d&eacute;p&ocirc;t.<br /><br />Pour tester les fonctionnalit&eacute;s de Git, nous allons cr&eacute;er un premier fichier dans lequel nous &eacute;crirons le fameux <em>Hello World!</em> :<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">touch test.txt<br />echo "Hello World!" &gt; test.txt</code>Un&nbsp;<em>git status</em> permettra de constater que Git a bien compris qu\'il y a du nouveau dans le r&eacute;pertoire ! Le message qu\'il affiche nous donne plusieurs informations, entre autres, celle qui nous informe que pour l\'instant le fichier test.txt n\'est pas encore&nbsp;<em>index&eacute;</em> (c\'est-&agrave;-dire qu\'il n\'est pas r&eacute;f&eacute;renc&eacute; dans son <em>index</em>). Index ? <a href="https://fr.wiktionary.org/wiki/qu%C3%A9saco#fr" target="_blank">K&eacute;saco</a>&nbsp;? Un peu de patience...<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">git status<br />Sur la branche master<br /><br />Validation initiale<br /><br />Fichiers non suivis:<br />&nbsp; &nbsp;(utilisez "git add &lt;fichier&gt;..." pour inclure dans ce qui sera valid&eacute;)<br /><br />&nbsp; &nbsp; &nbsp; test.txt<br /><br />aucune modification ajout&eacute;e &agrave; la validation mais des fichiers non suivis sont pr&eacute;sents (utilisez "git add" pour les suivre)</code>En lisant le message de confirmation, on peut d&eacute;j&agrave; un peu mieux comprendre ce qu\'est l\'index : une&nbsp;<em>zone</em> dans laquelle Git stocke tous les fichiers qu\'il s\'appr&eacute;te &agrave; valider.<br /><br />En fait, un fichier peut avoir 3 &eacute;tats : non index&eacute;s, index&eacute;, valid&eacute;&nbsp;(on dit aussi&nbsp;<em>commit&eacute;</em> qui est un anglicisme informatique). En bref, un fichier non index&eacute; est un fichier que Git d&eacute;tecte mais ne peut pas suivre car il ne lui a pas encore affect&eacute; d\'identifiant. AVant de le faire, il lui faut notre permission. Cela se fait au travers de la commande&nbsp;<em>git add</em>, comme indiqu&eacute; :&nbsp;<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">git add test.txt</code>A pr&eacute;sent, notre fichier est pass&eacute; de l\'&eacute;tat&nbsp;<em>non index&eacute;</em> &agrave; l\'&eacute;tat&nbsp;<em>index&eacute;</em>. C\'est-&agrave;-dire qu\'il poss&egrave;de d&eacute;sormais un identifiant unique qui permettra &agrave; Git de faire correctement sa validation. Pour effectuer cela, il faut utiliser la commande&nbsp;<em>git commit</em>. Celle-ci doit s\'accompagner d\'un petit message descriptif gr&acirc;ce &agrave; l\'option <em>-m</em> :<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">git commit -m "Mon premier commit"<br /></code>Attention, je dois vous apporter une pr&eacute;cision <strong>tr&egrave;s imporante</strong>&nbsp;!<br /><br />En r&eacute;alit&eacute;, Git n\'affecte pas d\'identifiant &agrave; un ou plusieurs fichiers mais leurs&nbsp;<strong>modifications</strong> ! C\'est un concept qu\'il faut bien comprendre : Git n\'enregistre pas des fichiers dans leur ensemble mais des portions de fichiers, autrement dit toutes les portions qui ont chang&eacute;. Dans notre cas, le fichier test.txt est une modification &agrave; part enti&egrave;re puisqu\'au d&eacute;marrage de Git, il n\'existait pas. Dans le r&eacute;pertoire&nbsp;<em>.git</em>, Git poss&egrave;de un fichier qui r&eacute;f&eacute;rence l\'&eacute;tat courant du d&eacute;p&ocirc;t. En ajoutant test.txt et en &eacute;crivant &agrave; l\'int&eacute;rieur, Git d&eacute;tecte une diff&eacute;rence entre l\'&eacute;tat qu\'il connait et le nouvel &eacute;tat courant. Il doit donc premi&egrave;rement affecter l\'identifiant &agrave; la modification (indexation) puis valid&eacute; cette modification (enregistrement d&eacute;finitif de l\'&eacute;tape via un commit).<br /><br />Pour consulter l\'historique des validations effectu&eacute;es, voici la commande a tap&eacute; et le message qui en r&eacute;sulte :<br /><code style="display: block; width: 90%; background: #000; color: white; margin-top: 10px; margin-bottom: 20px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">git log<br />commit&nbsp;9084510f110c7030f0acc14d71c306f8767a18a5<br />Author: Michael Cornillon &lt;contact@dwaps.fr&gt;<br />Date: Wed Jan 18 12:03:45 2017 +0100<br /><br />&nbsp; &nbsp;Premier commit</code>\r\n<ul>Dans la confirmation, plusieurs infos :\r\n<li>L\'identifiant du commit (de la modification valid&eacute;) : il s\'agit d\'un hash cryptographique unique compos&eacute; de 40 caract&egrave;res</li>\r\n<li>Le pr&eacute;nom, le nom et l\'adresse mail de l\'auteur de la modification (rappelez-vous... la commande&nbsp;<em>git config user.name</em>... )</li>\r\n<li>La date de modification</li>\r\n<li>Le message du commit</li>\r\n</ul>', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_tuto_dwaps_category`
--

CREATE TABLE `dwaps_tuto_dwaps_category` (
  `dwaps_tuto_id` int(11) NOT NULL,
  `dwaps_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_tuto_dwaps_category`
--

INSERT INTO `dwaps_tuto_dwaps_category` (`dwaps_tuto_id`, `dwaps_category_id`) VALUES
(15, 12),
(15, 36),
(15, 53),
(15, 54),
(15, 55),
(15, 58),
(17, 9),
(17, 16),
(18, 1),
(18, 6),
(18, 36),
(18, 54),
(19, 9),
(19, 10),
(19, 14),
(19, 15),
(19, 29),
(19, 35),
(19, 38),
(20, 1),
(20, 8),
(20, 35),
(20, 36),
(21, 1),
(21, 2),
(21, 6),
(21, 36),
(22, 9),
(22, 36),
(22, 60),
(22, 61),
(23, 1),
(23, 11),
(23, 36),
(24, 3),
(24, 5),
(25, 9),
(25, 36),
(25, 54),
(25, 58),
(25, 62);

-- --------------------------------------------------------

--
-- Structure de la table `dwaps_user`
--

CREATE TABLE `dwaps_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dwaps_user`
--

INSERT INTO `dwaps_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'dwaps', 'dwaps', 'contact@dwaps.fr', 'contact@dwaps.fr', 1, NULL, '$2y$13$UXO9t59AOz7AGwkti38sf.PqwqEVnuaBExJrrUFGZGkY5jJdwDXdW', '2017-01-18 21:48:18', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `dwaps_category`
--
ALTER TABLE `dwaps_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dwaps_category_dwaps_tuto`
--
ALTER TABLE `dwaps_category_dwaps_tuto`
  ADD PRIMARY KEY (`dwaps_category_id`,`dwaps_tuto_id`),
  ADD KEY `IDX_B6B7AB98CA271E67` (`dwaps_category_id`),
  ADD KEY `IDX_B6B7AB986089919` (`dwaps_tuto_id`);

--
-- Index pour la table `dwaps_image`
--
ALTER TABLE `dwaps_image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dwaps_nav`
--
ALTER TABLE `dwaps_nav`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dwaps_nav_child`
--
ALTER TABLE `dwaps_nav_child`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_56D257EE3DA5256D` (`image_id`),
  ADD KEY `IDX_56D257EEF03A7216` (`nav_id`);

--
-- Index pour la table `dwaps_tuto`
--
ALTER TABLE `dwaps_tuto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_48A168503DA5256D` (`image_id`);

--
-- Index pour la table `dwaps_tuto_content`
--
ALTER TABLE `dwaps_tuto_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DD31F15328B30A4C` (`tuto_id`);

--
-- Index pour la table `dwaps_tuto_dwaps_category`
--
ALTER TABLE `dwaps_tuto_dwaps_category`
  ADD PRIMARY KEY (`dwaps_tuto_id`,`dwaps_category_id`),
  ADD KEY `IDX_8EA59E26089919` (`dwaps_tuto_id`),
  ADD KEY `IDX_8EA59E2CA271E67` (`dwaps_category_id`);

--
-- Index pour la table `dwaps_user`
--
ALTER TABLE `dwaps_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C44F3C4E92FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_C44F3C4EA0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_C44F3C4EC05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `dwaps_category`
--
ALTER TABLE `dwaps_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pour la table `dwaps_image`
--
ALTER TABLE `dwaps_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `dwaps_nav`
--
ALTER TABLE `dwaps_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dwaps_nav_child`
--
ALTER TABLE `dwaps_nav_child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dwaps_tuto`
--
ALTER TABLE `dwaps_tuto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `dwaps_tuto_content`
--
ALTER TABLE `dwaps_tuto_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `dwaps_user`
--
ALTER TABLE `dwaps_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `dwaps_category_dwaps_tuto`
--
ALTER TABLE `dwaps_category_dwaps_tuto`
  ADD CONSTRAINT `FK_B6B7AB986089919` FOREIGN KEY (`dwaps_tuto_id`) REFERENCES `dwaps_tuto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B6B7AB98CA271E67` FOREIGN KEY (`dwaps_category_id`) REFERENCES `dwaps_category` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `dwaps_nav_child`
--
ALTER TABLE `dwaps_nav_child`
  ADD CONSTRAINT `FK_56D257EE3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `dwaps_image` (`id`),
  ADD CONSTRAINT `FK_56D257EEF03A7216` FOREIGN KEY (`nav_id`) REFERENCES `dwaps_nav` (`id`);

--
-- Contraintes pour la table `dwaps_tuto`
--
ALTER TABLE `dwaps_tuto`
  ADD CONSTRAINT `FK_48A168503DA5256D` FOREIGN KEY (`image_id`) REFERENCES `dwaps_image` (`id`);

--
-- Contraintes pour la table `dwaps_tuto_content`
--
ALTER TABLE `dwaps_tuto_content`
  ADD CONSTRAINT `FK_DD31F15328B30A4C` FOREIGN KEY (`tuto_id`) REFERENCES `dwaps_tuto` (`id`);

--
-- Contraintes pour la table `dwaps_tuto_dwaps_category`
--
ALTER TABLE `dwaps_tuto_dwaps_category`
  ADD CONSTRAINT `FK_8EA59E26089919` FOREIGN KEY (`dwaps_tuto_id`) REFERENCES `dwaps_tuto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8EA59E2CA271E67` FOREIGN KEY (`dwaps_category_id`) REFERENCES `dwaps_category` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
