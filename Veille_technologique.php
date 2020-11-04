<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="CSS/Veille_technologique.css" />
<title>Veille technologique</title>
</head>
<body>
<div>
<?php include("menu.php");?>
</div>
<div id="vt">
<table id="tbvt">
<tr>
<td class="veille">
<article class="article">
<header><h1>Chrome 80 est disponible avec un contenu mixte mis à jour automatiquement en HTTPS, des modifications de cookies, une API de sélection de contacts et bien d'autres changements.</h1>
<i><p>Ecrit par Stan Adkens <br> Date de parution : le 5 février 2020  <a href="https://web.developpez.com/">Source</a></p></i>
</header>
<content><p>La nouvelle version de Chrome ,Chrome80, corrige plusieurs problèmes de sécurité et met en place une mise à jour automatique du contenu mixte en HTTPS, la modification des cookies SameSite, une interface utilisateur plus silencieuse pour les notifications et d’autre fonctionnalités pour les développeurs.</p> 

<p>Chrome incite les développeurs à abandonner le HTTP et à passer au HTTPS. Chrome 79 débloque les scripts mixte, les iframes et autres type de contenu que le navigateur bloque par défaut. Chrome 80 réecris l’URL des sites en HTTPS et si le contenu mixte ne charge pas Chrome les bloques par défaut.</p> 

<h3>Cookies SameSite</h3> 

<p>L’attribut SameSite est par défaut sur “Lax” ce qui signifie que les cookies seront accessible qu’à partir de sites dont la navigation est de haut niveau. L’attribut “none” doit être accompagné de l’attribut “Secure". Mise en place d’une classification des cookies.</p> 

<h3>Notifications plus silencieuses</h3> 

<p>Google essaye de rendre les demandes d’autorisations non réclamées moins ennuyeuses. Les utilisateurs peuvent activé cette fonctionnalité dans les paramètres.</p> 

<h3>API de sélection de contacts et API d'indexation de contenu</h3> 

<p>L'API de sélection de contacts permet aux utilisateurs de sélectionner des entrées dans leur liste de contacts et de partager des détails limités des entrées sélectionnées avec un site Web. Google a rendu disponible le nom, l'adresse électronique et le numéro de téléphone du contact. De plus Google lance une version d’essai où il a rajouté l’adresse postale et l’image de l’utilisateur.</p> 
<p>L’API d’indexation de contenu stocke les URL des documents HTML qui affichent les médias stockés, et vous permet d'ajouter, de lister et de supprimer des ressources. De plus le contenu n’est pas détectable et peut être utilisé même si le réseau est indisponible.</p> 
 

<h3>Correctifs de sécurité</h3> 

 

<p>Chrome 80 vient avec 56 correctifs de problèmes de sécurité découverts par des chercheurs externes. Voici quelques correctifs : 
<ul>
 

  <li>  [5 000 $] [1034394] High CVE-2020-6381 : débordement d'entier en JavaScript. Signalé par le Centre national de cybersécurité du Royaume-Uni (NCSC) le 2019-12-09 </li>

  <li>  [2000 $] [1031909] High CVE-2020-6382 : type Confusion en JavaScript. Signalé par Soyeon Park et Wen Xu de la SSLab, Gatech le 2019-12-08 </li>

  <li>  [500 $] [1020745] High CVE-2019-18197 : multiples vulnérabilités dans le XML. Signalé par l'équipe de réponse aux incidents de sécurité des BlackBerry le 2019-11-01 </li>

   <li> [500 $] [1042700] High CVE-2019-19926 : implémentation inappropriée dans SQLite. Rapporté par Richard Lorenz, SAP le 2020-01-16 </li>

 </ul>
</p>
<h3>Fonctionnalités pour développeurs </h3>

 

<p>Chrome 80 introduit les modules ECMAScript dans Web Workers, un outil permettant au contenu web d'exécuter des scripts dans des tâches d'arrière-plan. Les Module Workers prennent en charge les importations JavaScript standard et l'importation dynamique pour le lazy-loading sans bloquer l'exécution de Worker.</p> 
<p>De plus Chrome 80 ajoute, pour les développeurs, des fonctionnalités comme la compression des flux, une amélioration du CSS et bien d’autres encore.</p> 

 
<h4>Lexique:</h4> 
<ul>
<li class="def"><u>API :</u> Interface de programmation d’application.</li><br> 
<li class="def"><u>Contenu mixte :</u> images , video , audio , iframe . </li><br>
<li class="def"><u>Samesite :</u> methode qui défini le comportement des cookies , utilisable dans les API.</li><br>
<li class="def">[numéro d’identification] </li><br>
<li class="def"><u>CVE-2020-6381 :</u> exemple de référence publique.</li><br>
<li class="def"><u>ECMAScript :</u> ensemble de normes pour les languages de type script.</li><br>
<li class="def"><u>Lazy-loading :</u> est une technique qui consiste à faire apparaitre une partie d’une page web une fois qu’elle ait été chargé ou quand l’utilisateur survol une zone.</li> </content>
</ul>
</article>
</td>
<td class="veille">
<article class="article">
<h1>Guide RGPD du développeur</h1>
<i><p>Publié par la CNIL  le 28 janvier 2020   <a href="https://www.cnil.fr/fr/la-cnil-publie-un-guide-rgpd-pour-les-developpeurs">Source</a></p></i>
<p>Ce guide contient 16 fiches thématiques qui répond au besoin du développeur. 

Ce guide ne couvre pas l’ensemble des exigences de réglementations  <p><br> 
<h2>Fiche n°0  </h2>
<p>
-Si le projet est réaliser en équipe , désigner une personne qui se charge de la conformité.  

-Lister les traitements réalisés par les programmes 

-Prévoir les actions à réaliser pour se conformer au RGPD et les risques liés à la collecte des données. 

-S’assurer de la gestion de ces risques , avoir une AIPD. 

-avoir des processus internes qui garantissent la protection des données 

-actualisation régulière de la doumentation qui s’assure de la conformité au RGPD. 
</p>

<h2>Fiche n°1 données à caractère personnel </h2>
<p>
-Definition données personnelles : information se rapportant à une personne physique identifiée ou identifiable. 

Exemple de données personnelles: 

Nom, prénom, pseudonyme, date de naissance ; 

photos, enregistrements sonores de voix ; 

numéro de téléphone fixe ou portable, adresse postale, adresse e-mail ; 

adresse IP, identifiant de connexion informatique ou identifiant de cookie ; 

empreinte digitale, réseau veineux ou palmaire de la main, empreinte rétinienne ; 

numéro de plaque d’immatriculation, numéro de sécurité sociale, numéro d’une pièce d’identité ; 

données d’usage d’une application, des commentaires, etc. 

Identification d’une personne physique : 

à partir d’une seule donnée (exemples : nom et prénom) ; 

à partir du croisement d’un ensemble de données (exemple : une femme vivant à telle adresse, née tel jour et membre de telle association). 

Certaines données sont considérées comme particulièrement sensibles. Le RGPD interdit de recueillir ou d’utiliser ces données, sauf, notamment, si la personne concernée a donné son consentement exprès (démarche active, explicite et de préférence écrite, qui doit être libre, spécifique, et informée). 

Ces exigences concernent les données suivantes : 

les données relatives à la santé des individus ; 

les données concernant la vie sexuelle ou l’orientation sexuelle ; 

les données qui révèlent une prétendue origine raciale ou ethnique ; 

les opinions politiques, les convictions religieuses, philosophiques ou l’appartenance syndicale ; 

les données génétiques et biométriques utilisées aux fins d’identifier une personne de manière unique 

 

L'anonymisation est un processus qui vise à rendre impossible toute identification des individus. 

Ne pas considerer des données brutes comme anonymes.n’est pas soumis au RGPD et irréversible. 

En pratique, un processus de pseudonymisation consiste à remplacer les données directement identifiantes (nom, prénom, etc.) d’un jeu de données par des données indirectement identifiantes (alias, numéro dans un classement, etc.) afin d’en réduire leur sensibilité. Elles peuvent résulter d’un hachage cryptographique des données des individus, tels que son adresse IP, son identifiant utilisateur, son adresse e-mail. 

Ces jeux de données indirectement identifiantes doivent être conservé séparement et être soumises à des mesures techniques et organ(IDEisationnelles. 

RGPD applicable et réversibles. 
</p>

<h2>Fiche n°2 Préparer son environnement </h2>

<p>Choix methodologiques 

Mettre au coeur du développement la protection de la vie privé. 

Si methodes agiles intégrer sécurité . 

Réfléchir au paramètres de la vie privé notamment le paramétrage par défaut . 

Faire une AIPD : c’est obligatoire dans certaines opérations de traitement . 

Choix technologiques  

Architectures et fonctionnalités  

Intégrez la protection de la vie privée, y compris les exigences de sécurité des données, dès la conception de l’application ou du service. 

Gardez la maitrise de votre système. 

Ne pas se reposer sur une seule ligne de défense  

OUTILS ET PRATIQUE  

Utiliser des normes de programmation prenant en compte la sécurité (IDE) 

Le choix des technologies utilisées est crucial. Un certain nombre de points sont à prendre en compte : 

En fonction du domaine d’application ou de la fonctionnalité développée, un langage ou une technologie peut être plus approprié qu’une autre. 

Les langages et technologies éprouvés sont plus sûrs. Ils ont fait, en général, l’objet d’audits afin de corriger les vulnérabilités les plus connues. Il faut cependant faire attention à utiliser les dernières versions de chacune des briques technologiques que vous utiliserez. 

Il faut à tout prix éviter de coder sa solution définitive dans un langage tout juste appris et pas encore maîtrisé. Dans le cas contraire, vous vous exposez à un risque accru de faille de sécurité du fait du manque d’expérience. 

 

Mettre en place un environnement de développement sécurisé et permettant le visionnage du code. 

 
</p>
<h2>
FICHE n°3  Sécuriser son environnement de développement  
</h2>
<p>
Evaluer les risques  

Faire des listes de recommandations sur la sécurisation des serveurs, des postes de travail et des réseaux internes. 

 

Rédigez une documentation regroupant ces recommandations et expliquant leur configuration , des outils de gestion peuvent être utilisés pour réduire la charge de travail. 

Mettez à jour les serveurs et postes de travail, si possible de manière automatique. Vous pouvez vous constituer une liste de veille recensant les vulnérabilités les plus importantes, par exemple les alertes de sécurité, avis de sécurité et les bulletins d'actualité du CERT-FR. 

Documentez gestion clé SSH. 

Favorisez une authenticité forte . 

Tracez accès aux machines et mettre une analyse automatique des journaux. 

 
</p>
<h2>
Fiche n°4 gérer son code source 
</h2>
<p>
Avoir gestionnaire code source  

Paramétrer l’environnement à l’aide du gestionnaie de code source. 

Attribuez des niveaux d’accès aux utilisateurs 

Faire des sauvegardes régulière 

Mettre en place des procédures de développement pour travailler efficacement  

Mettre en oeuvre des outils de métriques de qualité de code  

Conserver secrets et mot de passe en dehors du depot de votre code source 

Chiffrer et déchiffrer ses fichiers 

Outils qui peut être utilisé : Subversion  

 
</p>
<h2>
Fiche n°5 Faire un choix éclairé de son architecture 
</h2>
<p>
 Etudier le parcours de ses données : 

-décrire et schématisé les fonctions du projet  

Les données sur un réseau local doit être en mesure d’être supprimé 

Sécurité des données est assurer par vos connaissances et la qualité du service attendu 

 

En cas de recours à un prestataire pour l’hébergement  

Choisir un prestataire garantissant la mise en place de mesures de sécurité et de confidentialité appropriées, et suffisamment transparentes. 

S'assurer de connaitre géographiquement la localisation des serveurs qui héberge vos données  

S'assurer que le prestataire qui héberge vos données est certifié ou agréé 

Les autres points de vigilance sont notamment :  

l’existence d’une politique de sécurité accessible ; 

les mesures de sécurité et sûreté physique sur le site d’hébergement ; 

le chiffrement des données et les autres procédés garantissant que le prestataire n’a pas accès aux données qui lui sont confiées ; 

la gestion des mises à jour, la gestion des habilitations, l’authentification des personnels et la sécurité des développements applicatifs ; 

la réversibilité/portabilité aisée des données dans un format structuré et couramment utilisé, sur demande et à tout moment. 

 </p>
<h2>
Fiche n°6 sécuriser vos sites web , vos applications et vos serveurs. 
</h2>
 </p>

Mettre en oeuvre le protocole TLS version 1.2 ou 1.3 sur tous les sites web  

Rendez l’utilisation de TLS obligatoire  

Limitez les ports de communication  

L'anssi a publié sur son site des recommandations spécifiques  

Sécuriser les authentifications 

Suivre  la recommandation de la CNIL sur les mots de passe et limiter le nombre de tentatives d’accès 

Ne stockez jamais les mot de passe en clair  

Dans le cas où des cookies sont utilisés pour permettre l’authentification, il est recommandé : 

de forcer l’utilisation d’HTTPS via l’HSTS ; 

d’utiliser l’indicateur secure ; 

d’utiliser l’indicateur HttpOnly. 

Testez les suites cryptographiques installées sur les systèmes et désactivez les suites obsolètes (RC4, MD4, MD5, etc.). Favorisez l’utilisation de l’AES256. Lire la note de l’ANSSI sur le sujet 

Adoptez une politique spécifique de mots de passe pour les administrateurs. Changez les mots de passe, au moins, lors de chaque départ d’un administrateur et en cas de suspicion de compromission. Favorisez l’authentification forte lorsque c’est possible. 

Limitez l’accès aux outils et interfaces d’administration aux seules personnes habilitées. Favoriser l’usage des comptes de moindres privilèges pour les opérations courantes. 

L’accès depuis Internet aux interfaces d’administration doit faire l’objet de mesures de sécurité renforcées. Par exemple, pour les serveurs internes, la mise en œuvre d’un VPN avec authentification forte de l’utilisateur ainsi que du poste qu’il utilise peut être une bonne solution. 

Sécuriser les infrastructures 

Effectuez des sauvegardes si possible chiffrées et régulièrement vérifiées 

Limitez le nombre de composants mis en oeuvre : 

Installez mises à jour critiques  

 Automatisez une veille des vulnérabilités  

Utilisez des outils de détection des vulnérabilités  

Restreignez ou interdisez l’accès physique et logique aux ports de diagnostic et de configuration à distance. 

Protégez les bases de données que vous rendez accessibles sur Internet, 

En matière de gestion de bases de données, les bonnes pratiques sont notamment de : 

utiliser des comptes nominatifs pour l’accès aux bases de données et créer des comptes spécifiques à chaque application ; 

révoquer les privilèges d’administration des comptes nominatifs ou applicatifs pour empêcher la modification de la structure de la base de données des applications (tables, vues, procédures, etc.) ; 

mettre en œuvre des mesures contre les attaques par injection de code SQL, de scripts, etc. ; 

favoriser le chiffrement des données sur les disques de stockage et dans les bases de données 

 
</p>
<h2>
Fiche n°7 Minimisez les données collectées  
</h2>
 
<p>
Avant la collecte, pensez au différents type de données que vous devez collecter et essayez de restreindre votre collecte au strict nécessaire. 

 

Réfléchissez aux différents types de données qui devront être collectées avant la mise en place d’une application et documentez cette réflexion. 

Si des données spécifiques ne sont pas nécessaires pour une certaine catégorie de personnes, ne les collectez pas. 

Traitez et stockez les données de façon à réduire leur précision (à l’instar de la pseudonymisation). Par exemple, stockez seulement l’année de naissance au lieu d’une date de naissance complète si l’application n’a besoin que de l’année. 

En cas de collecte de données particulièrement sensibles, par exemple celles relatives à la santé ou à des condamnations pénales, veillez bien à ne collecter que le minimum requis. En raison de ces contraintes réglementaires, le plus simple est encore de ne pas les collecter si vous pouvez vous en passer. 

Minimisez la quantité de données collectées également dans les données de journalisation et n’y stockez pas de données sensibles ou critiques (données de santé, mots de passe, etc.). 

Certaines fonctionnalités qui améliore l’expérience utilisateur ne sont pas nécessaire et donc l’utilisateur doit pouvoir choisir de les activer ou non . 

Associer des durée de conservations de données  

 

Une fois les données collectées , mettez en place des mécanismes d’effacement automatique 

Mettez en œuvre un système de purge automatique à l’expiration de la durée de conservation. Vous pouvez également mettre en place des revues manuelles des données stockées de façon périodique. 

Afin de garantir un effacement complet, effacez physiquement toutes les données qui ne sont plus nécessaires grâce à des outils spécialisés ou en détruisant les supports physiques. 

Si les données sont encore utiles, vous pouvez réduire leur sensibilité en les pseudonymisant, voire en les anonymisant. En cas de pseudonymisation, ces données restent soumises à la réglementation sur les données personnelles (voir la fiche 1). 

Journalisez les procédures d’effacement automatique. Les journaux correspondants pourront être utilisés comme preuve d’effacement d’une donnée. 

 </p>
<h2>
Fiche n°8 Gerer les utilisateurs  
</h2>
<p>
Les bonnes pratiques de gestion des utilisateurs  

Utilisations d’identifiants propre et uniques à chaque utilisateurs  

Imposer une authentification  

Pour vous assurer que chaque personne (utilisateur ou collaborateur) ne puisse accéder qu’aux données dont il a effectivement besoin, votre système doit prévoir dès la conception des politiques de gestion d’accès aux données différenciées (lecture, écriture, suppression, etc.) suivant les personnes et les besoins. Un mécanisme de gestion des profils utilisateurs global vous permettra de regrouper différents droits en fonction d’un rôle exercé par un groupe d’utilisateurs au sein de l’application. 

Avoir un système de journalisation pour tracer les activités et détecter toutes les anomalies ou évènements liés à la sécurité. 

S'assurer de la robustesse de votre système de gestion des profils . 

 

Fluidifier la gestion des profils d’habilitation 

 

Prévoyez de documenter ou automatiser les procédures de mouvement de vos collaborateurs, d’inscription et de désinscription de vos utilisateurs. 

Revoir régulièrement les droits accordés aux utilisateurs et collaborateurs. 

L’utilisation de compte "suprême" (type root, administrateur, etc.) est à proscrire pour les opérations conventionnelles, car elle constitue la clé de voute de votre système et une cible privilégiée pour un éventuel attaquant externe. Nous vous recommandons d’y associer une politique de mot de passe fort (suite de 10 à 20 caractères ou multifacteur) et de limiter à son plus strict nécessaire le nombre de personnes ayant connaissance de celui-ci. 

Favorisez l’usage d’un gestionnaire de mots de passe au sein de votre projet et privilégiez le passage à une authentification forte lorsque c’est possible. Évitez également les comptes génériques partagés entre plusieurs personnes. 

 </p>
<h2>
Fiche n°9 maitriser vos bibliothèques et vos SDK 
</h2>
 
<p>
Faire un choix éclairé  

Évaluez l’intérêt de l’ajout de chaque dépendance. 

Choisissez des logiciels, bibliothèques et SDK maintenus : 

Si vous souhaitez utiliser du logiciel libre ou open source, essayez de choisir des projets ou des solutions avec une communauté active, des mises à jour régulières et une bonne documentation ; 

Si vous utilisez d’autres types de solutions avec un support commercial, assurez-vous contractuellement que le code sera maintenu et mis à jour pendant toute la durée de vie de votre projet. 

 

Prenez en compte la question de la vie privée. 

Si vous utilisez des mécanismes cryptographiques, il est fortement déconseillé d’implémenter des algorithmes ou des protocoles cryptographiques vous-mêmes. Essayez plutôt de choisir des bibliothèques cryptographiques maintenues, reconnues et faciles d’utilisation. 

 

Evaluer les éléments choisis  

 

Lisez leur documentation et changez leur configuration par défaut. 

Auditez vos bibliothèques et SDK. Savez-vous vraiment ce que font toutes les bibliothèques et SDK que vous intégrez ? Quelles sont les données qui sont envoyées à travers ces dépendances et quelles sont les destinataires de ces données ? Cet audit vous permettra de déterminer les obligations à respecter en matière de protection des données et d’établir la responsabilité des acteurs ; 

Cartographiez vos dépendances. 

Faites attention aux tentatives de typosquattage et autres techniques malveillantes. 

 

Maintenir les bibliothèques et SDK  

 

Utilisez des systèmes de gestion de dépendances (tels que yum, apt, maven, pip, etc.) afin de maintenir une liste à jour de vos dépendances. 

Gérez les mises à jour de vos dépendances, particulièrement dans le cas de mises à jour de sécurité qui corrigent des vulnérabilités. Vous devez mettre en place une procédure documentée pour les gérer et les déployer le plus vite possible ; 

Faites attention aux versions des bibliothèques et SDK en fin de support qui ne seront plus maintenues : essayez de trouver une autre solution (choisir une nouvelle bibliothèque, renouveler un support commercial) ; 

Surveillez les statuts des projets open-source, notamment le changement de propriétaire du domaine ou du package, certaines attaques utilisant des mises à jour malicieuses de dépendances populaires. 

 </p>
<h2>
Fiche n°10 Veillez à la qualité de votre code et à sa documentation 
</h2>
 
<p>
Documentez le code et l’architecture  

Avoir une documentation pour la maintenabilité du projet  

Documentez aussi l’architecture  

Maintenez la documentation en même temps que le code 

« Versionnez » la documentation avec le code : si vous utilisez un gestionnaire de code source vous pouvez pour chaque « commit » modifiant votre code inclure également les changements de documentation (voir notamment la fiche « Gérer son code source »). 

Pensez à aborder la sécurité dans votre documentation 

 

Controlez la qualité de votre code et de sa documentation  

Un code de qualité passe par l’adoption de bonnes pratiques et de conventions de codage appliquées de manière cohérente sur l’ensemble de votre programme. Pour choisir votre convention de codage, le mieux est de se référer à des conventions existantes. Voici quelques exemples de bonnes pratiques supplémentaires :  

Utiliser des noms de variables et de fonctions explicites permet de comprendre plus facilement ce qu’il se passe au premier regard ; 

Correctement indenter son code permet de percevoir la structure du code plus rapidement ; 

Éviter la redondance de code permet de réduire les efforts de correction qui doivent être apportés en plusieurs endroits. Un oubli est vite arrivé. 

Des outils existent pour aider à contrôler la qualité d’un code. Une fois correctement paramétrés, ils éviteront de relire le code pour vérifier la bonne mise en place des conventions de codage. 

Des outils peuvent vous aider à contrôler la qualité de votre code, par exemple : 

Les environnements de développement intégrés (« IDE »), éventuellement à l’aide de greffons (« plugins »), peuvent être configurés pour respecter les règles d’indentation du code, les sauts de ligne entre les différentes portions de code ou encore la position des accolades et autres parenthèses ; 

Les logiciels de mesure de la qualité du code source peuvent signaler les duplications de code, le respect des règles de programmation ou des bugs potentiels. </p>
<h2>
Fiche n°11 Testez vos applications  
</h2>
 
<p>
Automatisez les tests  

Faire des tests de développement et de sécurité  

Mettre en place un système d’intégrité continue  

 

Intégrez les tests dans votre stratégie d’entreprise  

Dans la mise en place de l’environnement de tests dans la stratégie de l’entreprise, les métriques acceptables doivent être définies conjointement par toutes les parties avant le développement. 

Les métriques auxquelles il faut réfléchir sont par exemple : 

le taux de couverture des tests et leur type ; 

le taux de réplication du code ; 

le nombre de vulnérabilités (au sens de ce que détectent les outils) et leur type, etc. 

 

Attention aux données de test 

Les données réelles de production ne doivent pas être utilisées  

En cas d’utilisation de ces données , prenez en compte les risques lié à la sécurité  

Crée un jeu de données fictives 

Anonymiser les données personnelles si besoin d’importer des configurations existantes  

 
</p>
<h2>
Fiche n°12 Informer les personnes  
</h2>
 
<p>
Qui informer et quand le faire ?  

En cas de collecte directe de données  

En cas de collecte indirecte de données personnelles  

Les moments où cette information est nécessaire : 

au moment du recueil des données en cas de collecte directe ; 

dès que possible en cas de collecte indirecte (notamment lors du premier contact avec la personne) et au plus tard, dans le délai d’un mois (sauf exceptions) ; 

en cas de modification substantielle ou d’événement particulier. Par exemple : nouvelle finalité, nouveaux destinataires, changement dans les modalités d’exercice des droits, violation de données. 

       

Quelles informations dois-je donner ?  

Dans tous les cas, il faut préciser : 

L’identité et les coordonnées de l’organisme qui collecte les données (qui traite les données ?) ; 

Les finalités (à quoi vont servir les données collectées ?) ; 

La base légale sur laquelle repose le traitement des données (retrouvez toutes les informations sur les bases légales) ; 

Le caractère obligatoire ou facultatif du recueil des données (ce qui suppose une réflexion en amont sur l’utilité de collecter ces données au vu de l’objectif poursuivi – principe de « minimisation » des données) et les conséquences pour la personne en cas de non-fourniture des données ; 

Les destinataires ou catégories de destinataires des données (qui a besoin d’y accéder ou de les recevoir au vu des finalités définies, y compris les sous-traitants ?) ; 

La durée de conservation des données (ou critères permettant de la déterminer) ; 

L’existence des droits des personnes concernées ainsi que les moyens de les exercer (les droits d’accès, de rectification, d’effacement et à la limitation sont applicables pour tous les traitements) ; 

Les coordonnées du délégué à la protection des données de l’organisme, s’il a été désigné, ou d’un point de contact sur les questions de protection des données personnelles ; 

Le droit d’introduire une réclamation auprès de la CNIL. 

Dans certains cas particuliers, il faut fournir des informations supplémentaires, comme dans le cas de transferts de données hors UE, de prise de décision entièrement automatisée ou de profilage, ou encore lorsque la base légale du traitement est l’intérêt légitime poursuivi par l’organisme qui collecte les données (voir le site de la CNIL pour en savoir plus). 

En cas de collecte indirecte, il faut ajouter : 

Les catégories de données recueillies ; 

La provenance des données (en indiquant notamment si elles sont issues de sources accessibles au public). 

 

Sous quel forme dois-je fournir ces informations ? 

L'information doit être facile d’accès  

Elle doit être fournie de manière claire et compréhensible 

Elle doit être écrite de manière concise et amener les informations les plus pertinentes au bon moment  

Les informations en rapport avec la protection des données doivent pouvoir être distinguées de celles qui ne sont pas spécifiquement liées à la vie privée (comme les clauses contractuelles ou les conditions générales d’utilisation). 

 

Quelle communication effectuer lorsque la sécurité des données est compromise ? 

Signaler la violation à la CNIL dans les 72 heures . 

Si ces risques sont élevés, l’organisme doit également en informer les personnes concernées le plus rapidement possible et leur adresser des conseils pour protéger leurs données (ex. annulation d’une carte bancaire compromise, modification d’un mot de passe, modification des paramétrages vie privée…). 

La notification de la violation à la CNIL doit se faire via le site web de la CNIL. 

 </p>
<h2>
Fiche n°13 Préparer l’exercice des droits des personnes  
</h2>
<p>
Les mesures minimales à mettre en place  

Tous les organismes qui utilisent des données personnelles ont l’obligation d’indiquer où et comment les personnes peuvent exercer leurs droits relatifs à ces données. Vous pouvez par exemple mentionner une adresse e-mail ou un formulaire web au moment de l’information des personnes, ainsi que dans votre politique de vie privée. 

Afin de faciliter l’exercice des droits des personnes, ceux-ci peuvent être aussi implémentés, totalement ou en partie, directement dans l’application ou le logiciel que vous développez. Cette implémentation spécifique n’est pas obligatoire, mais elle permet de répondre aux attentes des utilisateurs et de réduire le temps et la complexité de traitement de ce type de demandes. 

Avant tout, en cas d’accès ou d’opérations directement effectuées par une personne pour exercer ses droits, n’oubliez pas de gérer son authentification de façon sécurisée. De manière générale, tracez également toutes les opérations ayant un impact sur ses données personnelles. 

Voici quelques exemples de droits et leur possible implémentation  

Droit d’accès : les personnes ont le droit d’obtenir une copie de toutes les informations que vous avez à leur sujet. Cela permet, entre autres, à une personne de savoir si des données la concernant sont traitées et d’en obtenir une copie lisible dans un format compréhensible. Il permet notamment de contrôler l’exactitude des données. 

 Possible implémentation : prévoyez une fonctionnalité permettant d’afficher toutes les données relatives à une personne. S’il y a beaucoup de données, vous pouvez scinder ses données en plusieurs affichages. Si les données sont trop volumineuses, proposez à la personne de télécharger une archive contenant toutes ses données. 

Droit à l’effacement : les personnes ont le droit de demander l’effacement de l’intégralité des données que vous détenez sur elles. 

 Possibles implémentations :  

Prévoyez une fonctionnalité permettant d’effacer toutes les données relatives à une personne. 

Prévoyez aussi une notification automatique des sous-traitants afin qu’ils effacent eux aussi les données relatives à cette personne. 

Prévoyez un effacement des données également dans les sauvegardes, ou une autre solution permettant de ne pas restaurer les données effacées relatives à cette personne. 

Droit d’opposition : les personnes ont le droit de s’opposer dans certains cas à ce que leurs données soient utilisées pour un objectif précis. 

 Possible implémentation : prévoyez une fonctionnalité permettant à la personne concernée de s’opposer au traitement. Lorsque la personne exerce son droit d’opposition par ce biais, le responsable de traitement doit supprimer les données déjà collectées, et ne doit par la suite plus collecter de données associées à cette personne. 

Droit à la portabilité : les personnes ont le droit de récupérer leurs données dans un format lisible par machine, pour leur propre usage ou pour les fournir à un autre organisme. 

 Possible implémentation : prévoyez une fonctionnalité permettant à la personne concernée de télécharger ses données dans un format standard lisible par un ordinateur (CSV, XML, JSON, etc.) 

Droit à la rectification : Les personnes ont le droit de demander la modification de leurs données lorsque celles-ci sont incorrectes afin de limiter l’utilisation ou la diffusion d’informations erronées. 

 Possible implémentation : permettez de pouvoir modifier directement les données dans le compte utilisateur. 

Droit à la limitation du traitement : les personnes ont le droit de demander à ce que le traitement de leurs données soit bloqué pendant un certain temps, par exemple le temps d’examiner une contestation de sa part sur l’utilisation de ses données ou une demande d’exercice de droits. 

 Possible implémentation : permettez à des administrateurs de mettre des données relatives à une personne en « quarantaine » : ces données ne pourront alors plus être lues ou modifiées. 

 </p>
<h2>
Fiche n°14 les cycles de conservation des données    
</h2>
 
<p>
Le cycle de conservation des données à caractère personnel peut être divisé en trois phases successives distinctes :  

La base active ; 

L’archivage intermédiaire ; 

L’archivage définitif ou la suppression. 

Les mécanismes de suppression de données personnelles des bases actives permettent de garantir que les données sont conservées et accessibles par les services opérationnels uniquement le temps nécessaire à l’accomplissement de l’objectif poursuivi par le traitement. 

Veillez à ne pas conserver les données en base active en les notant simplement comme étant archivées. Les données archivées (archive intermédiaire) ne doivent être accessibles qu’à un service spécifique chargé d’y accéder et de les sortir des archives le cas échéant. 

Veillez également à prévoir des modalités d’accès spécifiques aux données archivées du fait que l’utilisation d’une archive doit intervenir de manière ponctuelle et exceptionnelle. 

Si possible, utilisez la même implémentation lors de la mise en œuvre de la purge ou l’anonymisation des données que celle gérant le droit à l’effacement (cf. fiche sur l’exercice des droits), afin de garantir un fonctionnement homogène de votre système. 

 </p>
<h2>
Fiche n°15 Prendre en compte les bases légales dans l’implémentation technique  
</h2>
 
<p>
Définition des bases légales prévues par le RGPD 

 

Dans le cadre d’un développement pour un organisme privé (entreprises, associations, etc.), les bases légales les plus souvent utilisées sont :  

Le contrat : le traitement est nécessaire à l’exécution ou à la préparation d’un contrat entre la personne concernée et l’organisme mettant en place le traitement ; 

L’intérêt légitime : l’organisme mettant en place le traitement poursuit un intérêt "légitime" à mettre en place le traitement et celui-ci n’est pas susceptible d’affecter les droits et libertés des personnes concernées ; 

Le consentement : la personne concernée a explicitement consenti au traitement. 

Si vous êtes une autorité publique ou un organisme poursuivant des missions d’intérêt public, d’autres bases légales peuvent également être utilisées :  

L’obligation légale : le traitement est imposé par des textes réglementaires. 

La mission d’intérêt public : le traitement est nécessaire à l’exécution d’une mission d’intérêt public. 

Enfin, dans des cas très spécifiques, la sauvegarde des intérêts vitaux peut être retenue comme base légale, par exemple lorsque le traitement est nécessaire pour suivre la propagation d’épidémies ou dans les cas d’urgence humanitaire. 

Dans un premier temps, vérifiez sur le site de la CNIL qu’un texte n’impose pas des contraintes particulières 

 

Choisir la base légale adéquate  

 

Une seule base légale doit être choisie pour une finalité donnée. Les bases légales ne peuvent être cumulées pour une même finalité. Un même traitement de données peut poursuivre plusieurs finalités, c’est-à-dire plusieurs objectifs, et une base légale devra alors être définie pour chacune d’elles. 

Comme évoqué ci-dessus, si vous êtes un organisme public, l’obligation légale et la mission d’intérêt public seront les plus pertinentes dans la majorité des cas. 

Si votre traitement s’inscrit dans une relation contractuelle et que sa finalité est objectivement et strictement nécessaire à la fourniture du service de l’utilisateur (par exemple, le nom, le prénom et l’adresse pour créer un compte sur un site de e-commerce) alors la base légale du contrat devrait être appropriée. 

Si votre traitement ne s’inscrit pas dans une relation contractuelle avec l’utilisateur, alors les bases légales du consentement ou de l’intérêt légitime peuvent être mobilisées. si votre traitement est potentiellement intrusif (profilage, collecte de données de géolocalisation, etc.), le consentement est susceptible d’être la base légale appropriée. 

Lorsque votre traitement contient des données sensibles (données de santé, données relatives à la vie ou à l’orientation sexuelle, etc.), alors vous devrez identifier, en plus de la base légale, une exception prévue par l’article 9 du RGPD. 
Les bases légales utilisées doivent toujours figurer dans les informations transmises à la personne. 

Lorsque votre traitement est fondé sur l’intérêt légitime, vous devrez également indiquer les intérêts légitimes poursuivis (lutte contre la fraude, sécurité du système, etc.) 

Il est recommandé de documenter le choix de vos bases légales. Ce 

 

Le cas spécifique des cookies et autres traceurs  

 

La directive européenne ePrivacy requiert le consentement de l’utilisateur avant toute action visant à stocker des informations - via des cookies, identifiants ou autres traceurs (empreintes logiciels, pixels) ou à accéder à des informations stockées dans l’équipement terminal de l’utilisateur. 

Une exception existe néanmoins lorsque les cookies ont pour finalité exclusive de permettre ou faciliter la communication par voie électronique, ou sont strictement nécessaires à la fourniture d’un service demandé par l’utilisateur. 

Sous certaines conditions, les cookies relatifs à la mesure d'audience peuvent également être exemptés de consentement. 

Par ailleurs, le fait d’utiliser un seul traceur pour de multiples finalités n’exonère pas de recueillir le consentement pour les finalités qui le nécessitent. Par exemple, si un cookie d’authentification est également utilisé à des fins de ciblage publicitaire, le consentement de l’internaute devra être recueilli pour cette dernière finalité, de la même manière que pour un site non « loggué ». 
</p>
 <h2>

 Fiche n°16 Mesurer la fréquentation de vos sites web et de vos applications  
</h2>
 
<p>
Obtenir le consentement  

 

De manière générale, avant de déposer ou lire un cookie ou traceur, les éditeurs de sites ou d’applications doivent : 

informer les internautes de la finalité des cookies ; 

obtenir leur consentement ; 

leur fournir un moyen de les refuser. 

Sauf à rentrer exactement dans le périmètre défini ci-après, cette obligation s’applique aux traceurs utilisés pour la mesure d’audience. 

 

Bénéficier de l’exemption de consentement  

 

Sous réserve d’un certain nombre de conditions, les cookies utilisés pour la mesure d’audience sont dispensés de consentement. 

Ces conditions, comme précisé dans les lignes directrices sur les cookies et autres traceurs, sont : 

D’informer les utilisateurs de leur utilisation ; 

De leur donner la faculté de s’y opposer ; 

De limiter le dispositif aux seules finalités suivantes : 

la mesure d’audience, 

l’A/B testing ; 

De ne pas recouper les données traitées avec d’autres traitements (fichiers clients, statistiques de fréquentation d’autres sites...) ; 

De limiter la portée du traceur à un seul éditeur de site ou d’application ; 

De tronquer le dernier octet de l’adresse IP ; 

De limiter la durée de vie des traceurs à 13 mois. 

Dans la mesure où les conditions sont respectées, on donc passe d'un régime d'opt-in à un régime d'opt-out. 

Il est par ailleurs possible pour un même tiers (sous-traitant) de fournir un service de mesure d’audience comparatif à de multiples éditeurs, sous réserve que les données soient collectées, traitées et stockées de manière indépendante pour chaque éditeur et que les traceurs soient indépendants les uns des autres. 

 

En pratique  

 

Lorsque les fournisseurs indiquent réutiliser les données pour leur propre compte  

Pour pouvoir bénéficier de cette exemption de consentement rapprochez-vous de votre éditeur de solution ou bien utilisez un logiciel libre tel que Matomo (anciennement Piwik) que vous pouvez configurer vous-même. 
</p>
 </article>
</td>
</tr>

</table>
</div>
<div id="ML">
<a href="Mentions_legales.php" id="ml"> Mentions légales</a>
</div>
</body>
</html>