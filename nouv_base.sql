
--
-- Structure de la table ingredients
--

CREATE TABLE ingredients (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table ingredients
--

INSERT INTO ingredients (nom) VALUES

('Pommes de terre'),
('Huile'),
('Sel'),
('Tranche de pain de mie'),
('Fromage râpé'),
('Beurre'),
('Béchamel'),
('Tranche de jambon'),
('Pâte à pizza'),
('Sauce tomate'),
('Poivron'),
('Origan'),
("Huile d'olive"),
('Chorizo'),
('Pâte à lasagnes'),
('Oignon'),
('Carotte'),
('Thym'),
('Parmesan'),
('Farine'),
('Lardon'),
('Poivre'),
('Boeuf'),
('Vin rouge'),
('Sucre en poudre'),
('Biscuits italiens'),
('Mascarpone'),
('Oeuf'),
('Cacao en poudre');

-- --------------------------------------------------------

--
-- Structure de la table recettes
--

CREATE TABLE recettes (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) DEFAULT NULL,
  image_url varchar(255) DEFAULT NULL,
  instructions text DEFAULT NULL,
  description text DEFAULT NULL,
  temps_preparation int DEFAULT NULL,
  temps_cuisson int DEFAULT NULL,
  nb_portions int DEFAULT NULL,
  prix float DEFAULT NULL,
  certification int DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table recettes
--

INSERT INTO recettes (nom, image_url, instructions, description, temps_preparation, temps_cuisson, nb_portions, prix, certification) VALUES
('Frites croustillantes', 'https://img-3.journaldesfemmes.fr/C5EOtA1h6Kn6_Jthz_R1nZWVOac=/1500x/smart/d72f4f8d3c6a45699a979e56df4b2d53/ccmcms-jdf/10820734.jpg', "Préchauffez le four à 200°C.Pelez et coupez les pommes de terre en bâtonnets.Rincez-les à l'eau froide puis séchez-les bien.Versez 2 cuillères à soupe d'huile sur une plaque allant au four, puis ajoutez les bâtonnets de pommes de terre.Mélangez bien pour que les pommes de terre soient bien enrobées d'huile.Enfournez pour 25-30 minutes en les retournant à mi-cuisson.Une fois les frites cuites, saupoudrez-les de sel fin.", 'Une recette simple et délicieuse de frites croustillantes.', 10, 30, 4, 2.99, 1),
('Croque-monsieur à la sauce béchamel', 'https://cloudfront-eu-central-1.images.arcpublishing.com/liberation/TMGCPQVUQJCSLHFXZPKABK4E4Q.jpg', "Préchauffer le four 240°C. Faire la sauce béchamel.Placer sur 1 tranche de pain de mie lègérement beurré une couche de béchamel, du gruyère râpé, 1/2 tranche de jambon, de la béchamel et du gruyère râpé, fermer avec la 2ème tranche de pain de mie et recouvrir les croque-monsieur de béchamel et de fromage râpé.Poser les 4 croque-monsieur sur la plaque du four recouverte de papier alu (attention à ne pas les laisser bruler dans le four), cuire 15 à 20 mn.Déguster accompagné de salade verte.", 'Une recette de Croque Monsieur qui va définitivement ravir tous vos convives.', 40, 15, 2, 3.90, 1);
INSERT INTO recettes (nom, image_url, instructions, description, temps_preparation, temps_cuisson, nb_portions, prix) VALUES
('Pizza chorizo-poivron', 'https://www.cuisine-et-mets.com/wp-content/uploads/2017/07/pizza-chorizo-opt.jpg', "Rincer les poivrons et les tailler en fines lamelles ou en cubes.Faire chauffer un filet d'huile dans une poêle à feu moyen et y faire revenir les poivrons pendant 15 minutes.Pendant de temps, découper le chorizo en tranches.Étaler la pâte à pizza.Recouvrir de sauce de tomate et des tranches de chorizo.Déposer la poêlée de poivron sur la pizza et recouvrir de fromage râpé et parsemer un peu d'origan sur le dessus.Enfourner 15 minutes à 220°C.", 'Une magnifique pizza a réalisé pour enfin réunir toute la famille autour de la table', 40, 15, 6, 8.49);
INSERT INTO recettes (nom, image_url, instructions, description, temps_preparation, temps_cuisson, nb_portions, prix, certification) VALUES
('Lasagnes à la bolognaise', 'https://assets.afcdn.com/recipe/20180119/76936_w1024h768c1cx2680cy1786.jpg', "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.Ajouter la purée de tomates, l'eau et les herbes. Saler, poivrer, puis laisser mijoter à feu doux 45 minutes.Préparer la béchamel : faire fondre 100 g de beurre.Hors du feu, ajouter la farine d'un coup.Remettre sur le feu et remuer avec un fouet jusqu'à l'obtention d'un mélange bien lisse.Remuer sans cesse, jusqu'à ce que le mélange s'épaississe.Préchauffer le four à 200°C (thermostat 6-7). Huiler le plat à lasagnes. Poser une fine couche de béchamel puis des feuilles de lasagnes, de la bolognaise, de la béchamel et du parmesan. Répéter l'opération 3 fois de suite.Enfourner pour environ 25 minutes de cuisson.", 'Gouter à ces magnifiques lasagnes qui vont vous réchauffer le cœur.', 120, 85, 4, 10.5, 1);
INSERT INTO recettes (nom, image_url, instructions, description, temps_preparation, temps_cuisson, nb_portions, prix) VALUES
('Boeuf bourguignon', 'https://www.epicurien.be/magazine/00-img-epicurien/recettes-w2000/boeuf-bourguignon-cocotte-4.jpg', "Dans une cocotte-minute, faire revenir sans matière grasse (celle naturelle des lardons suffit) les lardons et les oignons coupés en petits morceaux dans l'huile ou le beurre.Sans rincer la cocotte, faire dorer sur toutes les faces la viande dans l'huile ou le beurre selon votre préférence.Une fois la viande bien dorée, ajouter les lardons et oignons qui avaient été réservés précédemment.Ajouter 25 cl d'eau.Saler et poivrer. Ajouter l’ail coupé finement et le bouquet garni.Laisser cuire à feu très doux pendant 45 min.Faire refroidir la cocotte et ajouter les 4 carottes coupées en rondelles.Saler, poivrer et ajouter un peu de muscade.", 'Ce vieux bourguignon de mamie va vous rappeler de très bons souvenirs, grâce à ses saveurs irrésistibles.', 90, 60, 6, 15.29);
INSERT INTO recettes (nom, image_url, instructions, description, temps_preparation, temps_cuisson, nb_portions, prix, certification) VALUES
('Tiramisu', 'https://www.mycake.fr/wp-content/uploads/2020/11/rs_tiramisu_1x1.jpg', "Cassez les oeufs, séparez les blancs des jaunes dans deux saladiers. Ajoutez le sucre aux jaunes et fouettez jusqu'à ce que le mélange blanchisse et fasse un ruban quand on soulève le fouet.Incorporez le mascarpone en petits morceaux, et fouettez pour rendre la préparation homogène. Fouettez les blancs d'oeufs en neige très fermement, avec une pincée de sel.Incorporez-les délicatement à la préparation précédente, avec la spatule, en mélangeant du bas vers le haut, pour ne pas faire retomber les blancs.Versez 1/4 de la crème ainsi obtenue dans le fond d’un plat creux rectangulaire de 30x20 cm. Versez le café dans une assiette creuse. Trempez rapidement 1/3 des biscuits et disposez les côte à côte sur la crème. Recouvrez les d’un second quart de crème, puis de biscuits trempés, etc... jusqu'à ce que vous ayez réalisé 4 couches de crème et 3 couches de biscuits. Terminez par une couche de crème et placez au frais au moins 4 heures.Juste avant de servir, saupoudrez de cacao tamisé à travers une passoire fine.", "Ce tiramisu va faire renaître l'enfant qui était en vous. Cette fois-ci, ne le privé pas.", 40, 0, 2, 3.86, 1);




-- --------------------------------------------------------

--
-- Structure de la table recettes_images
--

CREATE TABLE recettes_images (
  id int NOT NULL AUTO_INCREMENT,
  id_recette int DEFAULT NULL,
  image_url varchar(255) DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id_recette) REFERENCES recettes(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table recettes_images
--

INSERT INTO recettes_images (id_recette, image_url) VALUES 
(1, 'https://resize.prod.femina.ladmedia.fr/rblr/652,438/img/var/2021-11/recette-frites-philippe-etchebest.jpg'),
(1, 'https://assets.afcdn.com/story/20230228/2211493_w2121h1414cx1069cy700cxt0cyt0cxb2121cyb1414.jpg'),
(1, 'https://img.mesrecettesfaciles.fr/2022-10/frites-de-patates-douces-croustillantes-fjb2.jpg'),
(2, 'https://recette.supertoinette.com/153694/b/croque-monsieur-a-la-bechamel.jpg'),
(2, 'https://www.lesepicesrient.fr/wp-content/uploads/2020/02/croque-monsieur-campagnard.jpg'),
(2, 'https://www.myparisiankitchen.com/wp-content/uploads/2020/04/croque-monsieur-mpk-pa-2.jpg'),
(3, 'https://www.rustica.fr/images/pizza-chorizo.jpg'),
(3, 'https://www.foodette.fr/files/products/pizza-basque-espagnole-manchego-chorizo-sauce-piquante-piment-espelette-bis-721x524.JPG'),
(3, 'https://www.palacios.fr/palacios_francia/usuariosFtp/conexion/imagenes4048a.jpg'),
(4, 'https://img.mesrecettesfaciles.fr/2020-03/gratin-de-lasagnes-a-la-bolognaise-1.jpg'),
(4, 'https://www.mapatisserie.net/wp-content/uploads/2018/11/i19403-lasgnes-bolognaise-facile.jpg'),
(4, 'https://cache.marieclaire.fr/data/photo/w1200_h630_c1/cuisine/4k/lasagnes-bolognaise.jpg'),
(5, 'https://cdn1.charal.fr/wp-content/uploads/2019/07/2-BOEUF-BOURGUIGNON-768x1087.jpg'),
(5, 'https://www.radiofrance.fr/s3/cruiser-production/2020/02/0ce7dc22-8fc2-4336-9c35-55ff1fa1461b/1200x680_bourguignon.jpg'),
(5, 'https://youcancookit.fr/wp-content/uploads/2023/03/Recette-boeuf-bourguignon-500x500.jpg'),
(6, 'https://www.bettybossi.ch/rdbimg/bb_jbxx060101_0040a/bb_jbxx060101_0040a_r01_v004_x0020.jpg'),
(6, 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/328c504c-e269-4676-90c4-bf5a7242e030/Derivates/95302347-5a9f-4873-a81e-c584708999c7.jpg'),
(6, 'https://www.healthyfoodcreation.fr/wp-content/uploads/2020/01/IMG_0070.jpg');

-- --------------------------------------------------------

--
-- Structure de la table mesure
--

CREATE TABLE mesures (
  id int NOT NULL AUTO_INCREMENT,
  unite varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table mesure
--

INSERT INTO mesures (unite) VALUES 
(''),
('pincée'),
('g'),
('kg'),
('cL'),
('L'),
('verre'),
('c.à.c'),
('c.à.s'),
('filet');

-- --------------------------------------------------------

--
-- Structure de la table recettes_ingredients
--

CREATE TABLE recettes_ingredients (
  id_recette int DEFAULT NULL,
  id_ingredient int DEFAULT NULL,
  quantite float DEFAULT NULL,
  id_mesures int DEFAULT NULL,
  FOREIGN KEY (id_recette) REFERENCES recettes(id),
  FOREIGN KEY (id_ingredient) REFERENCES ingredients(id),
  FOREIGN KEY (id_mesures) REFERENCES mesures(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table recettes_ingredients
--

INSERT INTO recettes_ingredients (id_recette, id_ingredient, quantite, id_mesures) VALUES 
(1, 1, 1, 4), 
(1, 2, 2, 7), 
(1, 3, 2, 2), 
(2, 4, 4, 1), 
(2, 5, 100, 3), 
(2, 6, 50, 3), 
(2, 7, 50, 5),
(2, 8, 1, 1), 
(3, 9, 1, 1), 
(3, 10, 20, 5), 
(3, 11, 2, 1), 
(3, 5, 120, 3), 
(3, 12, 1, 2),
(3, 13, 1, 10), 
(3, 14, 1, 1),
(4, 15, 1, 1), 
(4, 16, 1.5, 1), 
(4, 17, 1, 1), 
(4, 18, 1, 1), 
(4, 5, 35, 3), 
(4, 19, 65, 3), 
(4, 20, 50, 3), 
(5, 21, 100, 3), 
(5, 6, 50, 3), 
(5, 17, 4, 1), 
(5, 16, 2, 1), 
(5, 23, 1, 4), 
(5, 24, 0.5, 6),
(6, 25, 25, 3), 
(6, 26, 50, 3), 
(6, 27, 125, 3), 
(6, 28, 1.5, 1), 
(6, 29, 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table tags
--

CREATE TABLE tags (
	id int NOT NULL AUTO_INCREMENT,
	nom varchar(255) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table tags
--

INSERT INTO tags (nom) VALUES
('Débutant'),
('Intermediaire'),
('Expert'),
('-5 euros'),
('Rapide'),
('Végétarien'),
('Vegan'),
('Mexicain'),
('Japonais'),
('Italien'),
('Français'),
('Léger en calorie'),
('boisson'),
('repas'),
('désert');

-- ---------------------------------------------------------

--
-- Structure de la table recettes_tags
--

CREATE TABLE recettes_tags (
  id_recette int NOT NULL,
  id_tag int NOT NULL,
  PRIMARY KEY (id_recette, id_tag),
  FOREIGN KEY (id_recette) REFERENCES recettes(id),
  FOREIGN KEY (id_tag) REFERENCES tags(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table recettes_tags
--

INSERT INTO recettes_tags (id_recette, id_tag) VALUES 
(1, 1),
(1, 4),
(1, 5),
(1, 7),
(2, 1),
(2, 4),
(2, 5),
(2, 11),
(2, 14),
(3, 1),
(3, 10),
(3, 14),
(4, 2),
(4, 10),
(4, 14),
(5, 2),
(5, 11),
(5, 14),
(6, 1),
(6, 4),
(6, 5),
(6, 6),
(6, 10),
(6, 15);

-- --------------------------------------------------------


--
-- Structure de la table ustensiles
--

CREATE TABLE ustensiles (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table ustensiles
--

INSERT INTO ustensiles (nom) VALUES 
('Couteau'),
('Planche à découper'),
('Plaque allant au four'),
('Appareil à croque-monsieur'),
('Râpe'),
('Aluminium'),
('Set de poêle'),
('Plat à gratin'),
('Set de casserole'),
('Fouet'),
('Four'),
('Saladier'),
('Cocotte'),
('Pinceau'),
('Spatule'),
('Tamis');


-- --------------------------------------------------------
--
-- Structure de la table recettes_ustensiles
--

CREATE TABLE recettes_ustensiles (
  id_recette int NOT NULL,
  id_ustensile int NOT NULL,
  PRIMARY KEY (id_recette, id_ustensile),
  FOREIGN KEY (id_recette) REFERENCES recettes(id),
  FOREIGN KEY (id_ustensile) REFERENCES ustensiles(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table recettes_ustensiles
--

INSERT INTO recettes_ustensiles (id_recette, id_ustensile) VALUES 
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 2),
(3, 7),
(4, 8),
(4, 1),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 7),
(5, 14),
(5, 11),
(6, 10),
(6, 15),
(6, 16),
(6, 12);


-- --------------------------------------------------------


--
-- Structure de la table utilisateur
--

CREATE TABLE utilisateur (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) DEFAULT NULL,
  email varchar(255) DEFAULT NULL,
  mdp varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- ---------------------------------------------------------- 

-- 
-- Nouvel ajout de données
--

INSERT INTO recettes (nom, image_url, instructions, description, temps_preparation, temps_cuisson, nb_portions, prix, certification) VALUES
('Wrap au saumon fumé', 'https://img.cuisineaz.com/660x660/2015/05/22/i10988-wraps.jpeg', "Tartiner les tortillas de blé avec le fromage frais.Parsemer d'aneth.Répartir le saumon fumé sur toute la surface.Ajouter la salade, les tomates.Saler, poivrer.Rouler très serré le wrap et le mettre dans du film étirable.Réserver au frais, servir.", "Régalez-vous avec ces délicieux amuse-bouches qui plairont à tous vos amis.", 10, 0, 2, 5.39, 1),
('Makis saumon, concombre, avocat', 'https://img.cuisineaz.com/660x660/2016/09/24/i91126-makis-saumon-et-avocat.jpg', "Rincez le riz jusqu'à ce que l'eau de rincage ne soit plus trouble. Laissez égoutter.Plongez le riz dans 1,5 fois son volume d'eau, a ébullition donnez un coup de spatule et laissez cuire 15 min à feux doux et à couvert.Laissez refroidir le riz quelques instants, et incorporez le sucre dissous au préalable dans le vinaigre de riz.Coupez en lamelles le saumon, le concombre, les avocats.Posez la feuille d'algue dans le sens de la largeur, et recouvrez-la d'une couche de riz, laissez un ou deux centimètres non recouvert sur la largeur supérieure afin de pouvoir ensuite refermer aisément le rouleau.Enroulez l'algue en vous servant du célophane, humidifiez la bande laissée libre pour une fermeture plus facile.Avant de servir, découpez les rouleaux en lamelles de 2 à 3 cm.", "Voyager à travers le monde grâce à cette recette exotique.", 90, 0, 4, 12.90, 1),
('Ramens au Boeuf', 'https://www.izakaya-isse.fr/wp-content/uploads/2022/12/image-3.png', "Faire bouillir 1.5 L d'eau avec les 2 cubes de bouillon.Couper le chou, les échalotes, les oignons, la coriandre et le gingembre en petits morceaux.Quand l'eau bout y mettre les ingrédients dans l'ordre suivant : La coriandre > le gingembre > les échalotes > les oignons > le chou.2 min après avoir mis le choux, mettre dans l'eau les 2 œufs et les morceaux de steak pour 3 min de cuisson.Après ces 3 min de cuisson le bouillon est prêt !.Verser le bouillon et la sauce sur les ramens et mélanger.", "Réchauffer votre corps et votre esprit grâce à cet excellent bouillon de bœuf.", 35, 10, 2, 8.49, 1),
('Onigiri', 'https://www.lidl-recettes.fr/var/site/storage/images/_aliases/960x720/2/4/4/9/89442-3-fre-FR/Onigiri.jpg', "Il faut faire griller le poisson au four ou sur du feu : utilisez une grille pour cette opération.Préparez tous les ingrédients sur la table : Nori sur une grande assiette qui va accueillir les Onigiri; saumon grillé et émietté; Umeboshi ecrasée; un bol d'eau ; Gohan(riz) dans un grand saladier; sel.Prenez du riz sur une main (mains bien remplie) et mettez un morceau de saumon au milieu du riz.Recouvrez avec du riz d'une quantité égale et pressez-le avec l'autre main, de manière à former le sommet d'un triangle.Aplatissez les 2 faces et mettez la feuille de Nori au centre d'un coté du triangle afin d'entourer la boule.", "Apprécier vos mignons petits Onigiri avec cette saveur inégalable.", 30, 40, 2, 3.48, 1),
('Pâtes au pesto', 'https://cdn.pratico-pratiques.com/app/uploads/sites/2/2019/07/02111940/pennes-au-pesto-et-bacon.jpg', "Faire bouillir de l'eau dans une casserole, la saler, cuire les pâtes 9 minutes, puis les égoutter.Mélanger 1 cuillère à soupe d'huile d'olive aux pâtes, 3 cuillères à soupe de pesto et les olives.Faire griller la chapelure et les pignons à sec dans un poêle, attention, elle ne doit pas noircir.Au moment de servir ajouter les pignons de pin, la chapelure et la roquette.", "N'attendez plus et goûter ces magnifiques pâtes au pesto qui vous feront redécouvrir les saveurs de l'Italie.", 15, 10, 2, 3.76, 1);


INSERT INTO recettes_images (id_recette, image_url) VALUES 
(7, 'https://platetrecette.com/wp-content/uploads/2022/12/wrap-roule-au-saumon-ww.jpg'),
(7, 'https://www.lidl-recettes.fr/var/site/storage/images/_aliases/960x960/6/3/8/6/36836-3-fre-FR/Wraps-au-saumon-fume.jpg'),
(7, 'https://www.healthymood.fr/wp-content/uploads/recette-healthy-wrap-saumon-fume.jpg'),
(8, 'https://img.mesrecettesfaciles.fr/2020-02/makis-au-saumon-1.jpg'),
(8, 'https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,h_387,q_auto,w_650/https://s3-eu-west-1.amazonaws.com/images-ca-1-0-1-eu/tag_photos/original/2846/makis_flickr-4592182275_8798cee948_b.jpg'),
(8, 'https://img.over-blog-kiwi.com/1/18/19/62/20140906/ob_caae1c_makis-3.jpg'),
(9, 'https://www.recettethermomix.com/wp-content/uploads/2022/04/Ramen-au-Boeuf-Japonais-Leger.jpg'),
(9, 'https://www.commeaujapon.fr/wp-content/uploads/2020/10/ramen-titre.jpg'),
(9, 'https://res.cloudinary.com/livre-recettes/image/upload/v1476146173/itd0wckecstfezagv79a.jpg'),
(10, 'https://www.toutlevin.com/img/6ca911e5d0e6f1ec638990b0bbef556f004740003000-960.jpg'),
(10, 'https://twoplaidaprons.com/wp-content/uploads/2022/07/spicy-tuna-onigiri-cut-in-half-thumbnail.jpg'),
(10, 'https://www.thespruceeats.com/thmb/n0VlLZRoDD20d1DMdP7lUJgkNeU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/rice-balls-2031330-hero-images-01-ebc74ee7b0c348e2bc9055026d24d123.JPG'),
(11, 'https://img.cuisine-etudiant.fr/image/recette/800500/df61b8cbd13e97a75cab23c6ab218ff6bea647a8-recipe.jpg'),
(11, 'https://recette.supertoinette.com/150903/b/pates-au-poulet-et-au-pesto.jpg'),
(11, 'https://backend.panzani.fr/app/uploads/2022/05/gettyimages-1023769454-mob-scaled.jpg');




INSERT INTO mesures (unite) VALUES 
('feuille');

INSERT INTO ingredients (nom) VALUES
('Tortilla'),
('Tomate'),
('Aneth'),
('Tranches de saumon fumé'),
('Fromage frais'),
('Salade'),
('Sésame'),
('Persil'),
('Concombre'),
('Avocat'),
('Saumon frais'),
('Feuille de nori'),
('Harissa'),
('Gingembre'),
('Ramen'),
('Steak de boeuf'),
('Choux chinois'),
('Oeufs'),
('Riz'),
('Pesto'),
('Pâtes crus'),
('Olive');


INSERT INTO recettes_ingredients (id_recette, id_ingredient, quantite, id_mesures) VALUES 
(7, 30, 2, 1), 
(7, 31, 1, 1), 
(7, 3, 0.5, 2),
(7, 32, 0.5, 2),
(7, 33, 2, 1),
(7, 34, 75, 3),
(7, 35, 2, 1),

(8, 36, 25, 3), 
(8, 37, 10, 3), 
(8, 38, 1, 1), 
(8, 39, 2, 1), 
(8, 40, 2, 1), 
(8, 41, 2, 1),

(9, 42, 2, 2), 
(9, 43, 2, 1), 
(9, 44, 200, 3), 
(9, 45, 2, 1), 
(9, 46, 0.5, 1), 
(9, 47, 1, 1), 

(10, 48, 150, 3), 
(10, 3, 1, 2), 
(10, 40, 50, 3), 
(10, 41, 1, 1), 

(11, 49, 3, 9), 
(11, 50, 120, 3), 
(11, 51, 10, 1); 


INSERT INTO recettes_tags (id_recette, id_tag) VALUES 
(7, 1),
(7, 4),
(7, 5),
(7, 8),
(7, 12),

(8, 2),
(8, 5),
(8, 9),
(8, 14),

(9, 2),
(9, 9),
(9, 14),

(10, 1),
(10, 4),
(10, 9),
(10, 12),

(11, 1),
(11, 6),
(11, 7),
(11, 10),
(11, 12),
(11, 14);




INSERT INTO ustensiles (nom) VALUES 
('Balance'),
('Bol à soupe'),
('Cuillère en bois');




INSERT INTO recettes_ustensiles (id_recette, id_ustensile) VALUES 
(7, 2),

(8, 15),
(8, 9),
(8, 17),

(9, 1),
(9, 18),
(9, 19),

(10, 11),
(10, 12),
(10, 18),

(11, 9),
(11, 7),
(11, 19);

