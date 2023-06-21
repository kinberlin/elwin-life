-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2023 at 01:12 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elwin`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cover_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bloc1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `bloc2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bloc3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `channel` int DEFAULT NULL,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `category` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `channel` (`channel`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `cover_image`, `bloc1`, `bloc2`, `createdat`, `bloc3`, `channel`, `image1`, `image2`, `image3`, `image4`, `image5`, `category`) VALUES
(34, 'Comment perdre du Poids avec des Clou de Gironfle', 'http://localhost:8000/uploads/blog/article/1685615309_photo_4_2023-05-26_23-02-37.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p class=\"ql-align-justify\">Avez-vous <a href=\"https://deavita.fr/bien-etre/maigrir-60-ans-difficile-voici-secrets-obtenir-corps-sublime-434548/\" target=\"_blank\">du mal à perdre du poids</a> ? Les clous de girofle sont connus pour stimuler le métabolisme et aider énormément à perdre du poids. Si nous avons un métabolisme fort et rapide, il sera plus facile de perdre les kilos en trop. Pour une perte de poids efficace, voici une variante du <strong>thé au clou de girofle</strong>, par ailleurs ordinaire, qui vous aidera à <strong>brûler les graisses</strong> plus rapidement :</p><ul><li class=\"ql-align-justify\">1 cuillère à soupe de clous de girofle</li><li class=\"ql-align-justify\">50 g de cannelle</li><li class=\"ql-align-justify\">20 à 30 g de curcuma</li><li class=\"ql-align-justify\">Râper du gingembre frais</li><li class=\"ql-align-justify\">Un filet de citron</li></ul><p class=\"ql-align-justify\">Cette combinaison de super nutriments fera des merveilles pour votre apparence physique et votre système immunitaire également !</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p class=\"ql-align-justify\">Faire du thé au clou de girofle est facile, voici comment :</p><ol><li>Broyez une cuillère à soupe de clous de girofle.</li><li>Ensuite, portez de l’eau à ébullition.</li><li>Mettez-y les clous de girofle et laissez infuser pendant 5 à 6 minutes.</li><li>Enfin, filtrez et buvez.</li></ol><p class=\"ql-align-justify\">Vous pouvez ajouter du gingembre, du citron et de la cannelle à votre thé pour plus de saveur et encore plus de bienfaits pour la santé. Par exemple, le gingembre est un excellent ingrédient pour vous aider à perdre du poids. Vous pouvez faire un <a href=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY6Pqww_GY02kAJq9CDS1cUxHvLKy2HwpMvw&amp;usqp=CAU\" target=\"_blank\">shot de gingembre</a> pour renforcer rapidement votre immunité, ou l’ajouter à votre thé. C’est vous qui décidez. Maintenant, sans plus attendre, découvrons les bienfaits du thé au clou de girofle !</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-01 10:28:30', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p class=\"ql-align-justify\">Avez-vous <a href=\"https://deavita.fr/bien-etre/maigrir-60-ans-difficile-voici-secrets-obtenir-corps-sublime-434548/\" target=\"_blank\">du mal à perdre du poids</a> ? Les clous de girofle sont connus pour stimuler le métabolisme et aider énormément à perdre du poids. Si nous avons un métabolisme fort et rapide, il sera plus facile de perdre les kilos en trop. Pour une perte de poids efficace, voici une variante du <strong>thé au clou de girofle</strong>, par ailleurs ordinaire, qui vous aidera à <strong>brûler les graisses</strong> plus rapidement :</p><ul><li class=\"ql-align-justify\">1 cuillère à soupe de clous de girofle</li><li class=\"ql-align-justify\">50 g de cannelle</li><li class=\"ql-align-justify\">20 à 30 g de curcuma</li><li class=\"ql-align-justify\">Râper du gingembre frais</li><li class=\"ql-align-justify\">Un filet de citron</li></ul><p class=\"ql-align-justify\">Cette combinaison de super nutriments fera des merveilles pour votre apparence physique et votre système immunitaire également !</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, 'http://localhost:8000/uploads/blog/article/1685615309_clou.jpg', 'http://localhost:8000/uploads/blog/article/1685615309_theg.jpg', 'http://localhost:8000/uploads/blog/article/1685615309_multithé.jpg', 'http://localhost:8000/uploads/blog/article/1685615309_utilisations.jpg', 'http://localhost:8000/uploads/blog/article/1685615309_bienfait.jpg', 12),
(36, 'Comment maigrir efficacement et booster l’immunité ?!', 'http://localhost:8000/uploads/blog/article/1685778839_photo_3_2023-05-26_23-02-37.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h2>8. Utilisez de plus petites assiettes</h2><p>Vous pouvez<strong>&nbsp;tromper votre cerveau</strong>&nbsp;en choisissant la bonne taille d\'assiette lors de vos repas.&nbsp;<strong>Une petite assiette bien remplie apparaît à votre subconscient comme une grosse portion</strong>, alors que la même quantité de nourriture apparaît moins importante dans une grande assiette. Utilisez donc de petites assiettes au moment des repas pour ne pas être tenté.e de manger davantage. Cela augmente les chances de perdre du poids rapidement.</p><p><br></p><h2>9. Pratiquez la musculation et l\'endurance</h2><p>Vous ne pouvez pas éviter de faire du sport et de l\'exercice si vous voulez maigrir vite. Votre objectif de créer un déficit calorique peut également être atteint en ne mangeant pas, mais <strong>avec le sport, vous pouvez perdre du poids beaucoup plus rapidement</strong>. Une <strong>combinaison d\'entraînement de force et d\'endurance est idéale pour brûler des calories</strong>, maintenir le poids et activer le métabolisme. Passez donc aux haltères, aux appareils de musculation et consultez notre article sur <a href=\"https://www.nu3.fr/blogs/fitness/ameliorer-son-cardio\" target=\"_blank\">comment améliorer son cardio</a> !</p><h2><br></h2><h2>10. Dormez suffisamment</h2><p>Pendant que nous nous reposons la nuit pour nous ressourcer, notre corps continue de travailler de manière régulière. Nos cellules sont réparées, les toxines sont filtrées et éliminées. Pour tous ces processus, notre corps a besoin d\'énergie, qu\'il obtient à partir des réserves de graisse existantes. <strong>Un sommeil réparateur favorise donc la réussite de votre perte de poids rapide.</strong></p><p><strong>﻿</strong></p><h2>11. Évitez l\'alcool</h2><p>La plupart des <strong>boissons alcoolisées fournissent non seulement de nombreuses calories, mais inhibent également la décomposition des graisses</strong>. Lorsque vous buvez de l\'alcool, votre corps se concentre entièrement sur la décomposition de l\'alcool, ce qui réduit l\'utilisation des protéines et des glucides, et les graisses ne sont presque jamais utilisées pour produire de l\'énergie.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h2>3. Réduisez votre consommation de sucre</h2><p>Pour réussir à maigrir rapidement, vous devez réduire votre consommation de sucre, car sous forme de glucides à chaîne courte,&nbsp;<strong>le sucre fournit de nombreuses calories et a un effet négatif sur votre niveau d\'insuline</strong>. Résultat : après un repas riche en sucre, on a de nouveau faim plus rapidement. Si vous ne voulez pas vous passer complètement du goût sucré, vous pouvez utiliser des substituts de sucre à faible teneur en calories, voire même sans calories. </p><h2><br></h2><h2>4. Consommez plus de fibres et de protéines</h2><p>Ce que vous économisez en glucides lorsque vous perdez du poids, vous devez le reporter sur les protéines et les fibres solubles. Les fibres ne sont pas seulement importantes pour la digestion, elles garantissent également une <strong>faible densité énergétique</strong> des aliments. Cela signifie que les aliments riches en fibres sont généralement pauvres en calories. Incluez également dans votre alimentation des aliments riches en protéines, car les protéines qu\'ils contiennent <strong>aident à contrer la dégradation des muscles</strong>.</p><h2><br></h2><h2>5. Buvez de l\'eau avant les repas</h2><p>Si vous buvez un grand verre d\'eau environ 30 minutes avant un repas, <strong>vous vous sentirez plus vite rassasié.e</strong>&nbsp;après, car votre estomac sera déjà rempli de liquide. L\'eau peut également servir de&nbsp;<strong>petit coupe-faim entre les repas</strong>. De plus, le corps dépense des calories supplémentaires en buvant, surtout si l\'eau est froide et doit être réchauffée dans l\'estomac.</p><p><br></p><h2>6. Passez au café noir</h2><p><br></p><h2>7. Évitez les aliments industriellement transformés</h2><p>Après une longue journée de travail, vous n\'avez pas très envie de cuisiner le soir et vous préférez mettre rapidement une pizza surgelée au four ? La balance va alors indiquer quelques kilos supplémentaires : les aliments transformés industriellement, tels que <strong>les fast foods et autres, contiennent généralement beaucoup de sucre, de sel, de graisses trans nocives et de nombreux additifs</strong>. Non seulement vous vous sentez ballonné.e, mais vous prenez aussi du poids à long terme. Essayez d\'éviter les plats cuisinés avec une longue liste d\'ingrédients et&nbsp;<strong>cuisinez vous-même le plus possible avec des ingrédients frais</strong>.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-03 07:53:59', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h2>8. Utilisez de plus petites assiettes</h2><p>Vous pouvez<strong>&nbsp;tromper votre cerveau</strong>&nbsp;en choisissant la bonne taille d\'assiette lors de vos repas.&nbsp;<strong>Une petite assiette bien remplie apparaît à votre subconscient comme une grosse portion</strong>, alors que la même quantité de nourriture apparaît moins importante dans une grande assiette. Utilisez donc de petites assiettes au moment des repas pour ne pas être tenté.e de manger davantage. Cela augmente les chances de perdre du poids rapidement.</p><p><br></p><h2>9. Pratiquez la musculation et l\'endurance</h2><p>Vous ne pouvez pas éviter de faire du sport et de l\'exercice si vous voulez maigrir vite. Votre objectif de créer un déficit calorique peut également être atteint en ne mangeant pas, mais <strong>avec le sport, vous pouvez perdre du poids beaucoup plus rapidement</strong>. Une <strong>combinaison d\'entraînement de force et d\'endurance est idéale pour brûler des calories</strong>, maintenir le poids et activer le métabolisme. Passez donc aux haltères, aux appareils de musculation et consultez notre article sur <a href=\"https://www.nu3.fr/blogs/fitness/ameliorer-son-cardio\" target=\"_blank\">comment améliorer son cardio</a> !</p><h2><br></h2><h2>10. Dormez suffisamment</h2><p>Pendant que nous nous reposons la nuit pour nous ressourcer, notre corps continue de travailler de manière régulière. Nos cellules sont réparées, les toxines sont filtrées et éliminées. Pour tous ces processus, notre corps a besoin d\'énergie, qu\'il obtient à partir des réserves de graisse existantes. <strong>Un sommeil réparateur favorise donc la réussite de votre perte de poids rapide.</strong></p><p><strong>﻿</strong></p><h2>11. Évitez l\'alcool</h2><p>La plupart des <strong>boissons alcoolisées fournissent non seulement de nombreuses calories, mais inhibent également la décomposition des graisses</strong>. Lorsque vous buvez de l\'alcool, votre corps se concentre entièrement sur la décomposition de l\'alcool, ce qui réduit l\'utilisation des protéines et des glucides, et les graisses ne sont presque jamais utilisées pour produire de l\'énergie.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 4, 'http://localhost:8000/uploads/blog/article/1685778839_photo_4_2023-05-26_23-03-23.jpg', 'http://localhost:8000/uploads/blog/article/1685778839_photo_4_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/blog/article/1685778839_photo_3_2023-05-26_23-03-32.jpg', NULL, NULL, 14),
(38, 'tester', 'http://localhost:8000/uploads/blog/article/1686935409_slider-v2-img2.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>texte 1</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>texte 2</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-16 17:10:09', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>texte 4</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 2, 'http://localhost:8000/uploads/blog/article/1686935409_slider-v1-img1.jpg', 'http://localhost:8000/uploads/blog/article/1686935409_slider-v3-img1.jpg', 'http://localhost:8000/uploads/blog/article/1686935409_slider-v2-img1.jpg', NULL, NULL, 5),
(39, 'formation 01 a', 'http://localhost:8000/uploads/blog/article/1687116480_photo_20_2023-05-26_22-53-50.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><strong><em><u>contre palu</u></em></strong></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '<div class=\"ql-editor ql-blank\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 19:28:01', '<div class=\"ql-editor ql-blank\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, 'http://localhost:8000/uploads/blog/article/1687116480_photo_1_2023-05-26_23-01-47.jpg', 'http://localhost:8000/uploads/blog/article/1687116480_clou.jpg', 'http://localhost:8000/uploads/blog/article/1687116480_utilisations.jpg', NULL, NULL, 5),
(40, 'formation 02', 'http://localhost:8000/uploads/blog/article/1687116619_6.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>exercice de formation 2</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '<div class=\"ql-editor ql-blank\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 19:30:19', '<div class=\"ql-editor ql-blank\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 2, 'http://localhost:8000/uploads/blog/article/1687116619_theg.jpg', 'http://localhost:8000/uploads/blog/article/1687116619_multithé.jpg', 'http://localhost:8000/uploads/blog/article/1687116619_entreprendre.jpg', NULL, NULL, 5),
(41, 'formation 03', 'http://localhost:8000/uploads/blog/article/1687116800_utilisations.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>formation 03</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '<div class=\"ql-editor ql-blank\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 19:33:20', '<div class=\"ql-editor ql-blank\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, 'http://localhost:8000/uploads/blog/article/1687116800_theg.jpg', 'http://localhost:8000/uploads/blog/article/1687116800_clou.jpg', 'http://localhost:8000/uploads/blog/article/1687116800_multithé.jpg', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cart_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`, `createdat`) VALUES
(1, 'Santé', 'Produit essentiellement conçu pour entretenir, protéger, et nourir votre peau.', '2023-05-24 13:18:37'),
(5, 'Formations', 'Articles et vidéo a contenu de formation', '2023-06-17 23:18:14'),
(7, 'Entrepreunariat', 'Articles et vidéo centré sur l\'entrepreunariat', '2023-06-17 23:23:01'),
(8, 'Jeux Educatifs', 'Articles et vidéo a contenu de formation', '2023-06-17 23:24:28'),
(9, 'Traditions', 'Articles et vidéo centrés sur les traditions et coutumes', '2023-06-17 23:24:28'),
(10, 'Humour', 'Articles et vidéo  pour l\'humour', '2023-06-17 23:24:29'),
(11, 'Fables Africain', 'Articles et vidéo a contenu de formation', '2023-06-17 23:24:29'),
(12, 'Bien être', 'Articles et vidéo a contenu de formation', '2023-06-17 23:24:29'),
(13, 'Bien se nourri', 'Articles et vidéo a contenu de formation', '2023-06-17 23:24:29'),
(14, 'Bien se soigner', 'Articles et vidéo a contenu de formation', '2023-06-17 23:24:29'),
(15, 'Arts', 'Articles, produits et vidéo a contenu artistique', '2023-06-17 23:29:46'),
(16, 'Musiques', 'Articles, produit et vidéo sur la musique', '2023-06-17 23:29:47'),
(17, 'Fashion', 'Articles, produits et vidéo sur le fashion', '2023-06-17 23:29:47'),
(18, 'Carte de Voeux', 'Articles et vidéo a contenu de formation', '2023-06-17 23:29:47'),
(19, 'Pack Promos', 'Articles, produits et vidéo a contenu promotionelle', '2023-06-17 23:29:47'),
(20, 'Fashion', 'Mode, style, nouveautés etc...', '2023-06-19 13:08:32'),
(21, 'Pack Promos', 'Mode, style, nouveautés etc...', '2023-06-19 13:10:30'),
(22, 'Carte de Voeux', 'Cartes', '2023-06-19 13:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

DROP TABLE IF EXISTS `channel`;
CREATE TABLE IF NOT EXISTS `channel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text,
  `image` text,
  `cover_image` text,
  `etat` int DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`id`, `name`, `createdat`, `description`, `image`, `cover_image`, `etat`) VALUES
(1, 'Santé', '2023-05-26 22:09:03', 'Canal réservé pour les conseils de santé et d\'entretien', 'http://localhost:8000/uploads/blog/category/1685138942_photo_16_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/blog/category/1685140006_photo_1_2023-05-26_23-02-37.jpg', 1),
(2, 'Santé2', '2023-05-26 22:27:35', 'Test de Categorie de Post', 'http://localhost:8000/uploads/blog/category/1685140055_photo_16_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/blog/category/1685140055_photo_3_2023-05-26_23-02-37.jpg', 1),
(4, 'Claudelle Noubisssie', '2023-06-01 12:01:18', 'test  claudelle', 'http://localhost:8000/uploads/blog/category/1685620877_photo_2_2023-05-26_23-02-37.jpg', 'http://localhost:8000/uploads/blog/category/1685620877_photo_2_2023-05-26_23-03-32.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `user` int NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `video` int DEFAULT NULL,
  `article` int DEFAULT NULL,
  `product` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `article` (`article`),
  KEY `video` (`video`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user`, `message`, `createdat`, `video`, `article`, `product`, `id`) VALUES
(13, 'vraiment', '2023-06-19 23:06:10', 6, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `message` longtext NOT NULL,
  `sender` int NOT NULL,
  `receiver` int NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `receiver` (`receiver`),
  KEY `sender` (`sender`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `sender`, `receiver`, `createdat`, `status`) VALUES
(1, 'Bonjour. Besoin d\'aide svp.', 13, 11, '2023-06-12 13:16:45', 1),
(2, 'comment allez vous ?', 13, 11, '2023-06-14 13:19:39', 1),
(3, 'salut...', 13, 11, '2023-06-16 16:56:45', 1),
(4, 'Test', 13, 11, '2023-06-18 12:38:04', 2),
(5, 'bjr... besoin d\'aide', 13, 11, '2023-06-19 16:10:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `masquer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`id`, `masquer`) VALUES
(1, 'Visible'),
(2, 'Masquer');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int NOT NULL,
  `user` int NOT NULL,
  `article` int DEFAULT NULL,
  `video` int DEFAULT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `user` (`user`),
  KEY `article` (`article`),
  KEY `video` (`video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `phone`, `email`, `address`, `lat`, `lon`) VALUES
(1, '(+237)...', 'elwin@support.com', 'Rue Gallieni, Akwa, Douala - Cameroun', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` double NOT NULL,
  KEY `order_items_ibfk_1` (`order_id`),
  KEY `order_items_ibfk_2` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

DROP TABLE IF EXISTS `partnership`;
CREATE TABLE IF NOT EXISTS `partnership` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `activity` text,
  `mail` text,
  `ads` tinyint NOT NULL,
  `vente` tinyint NOT NULL,
  `description` text NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`id`, `user`, `activity`, `mail`, `ads`, `vente`, `description`, `createdat`, `phone`) VALUES
(1, 13, 'test', 'test@test.com', 1, 1, 'a un test', '2023-06-20 23:59:23', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `seller` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` double NOT NULL,
  `category_id` int NOT NULL,
  `description` text,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_period` int DEFAULT NULL,
  `image2` text,
  `image3` text,
  `image` text,
  `image1` text,
  `etat` int DEFAULT '1',
  `channel` int DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `seller` (`seller`),
  KEY `products_ibfk_1` (`category_id`),
  KEY `products_ibfk_2` (`etat`),
  KEY `products_ibfk_3` (`channel`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `seller`, `name`, `price`, `category_id`, `description`, `createdat`, `delivery_period`, `image2`, `image3`, `image`, `image1`, `etat`, `channel`) VALUES
(1, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pubs`
--

DROP TABLE IF EXISTS `pubs`;
CREATE TABLE IF NOT EXISTS `pubs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `begin` date NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `end` date NOT NULL,
  `etat` int DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `image`, `description`, `begin`, `createdat`, `end`, `etat`) VALUES
(2, 'http://localhost:8000/uploads/pub/1687160837_6.jpg', 'Offres de voiture mercedes dans tout nos boutiques.', '2023-06-03', '2023-06-19 07:47:17', '2023-06-24', 1),
(3, 'http://localhost:8000/uploads/pub/1687162602_7.jpg', NULL, '2023-07-01', '2023-06-19 08:16:42', '2023-07-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

DROP TABLE IF EXISTS `referral`;
CREATE TABLE IF NOT EXISTS `referral` (
  `user` int NOT NULL,
  `code` varchar(50) NOT NULL,
  `successful_referrals` int DEFAULT '0',
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`user`, `code`, `successful_referrals`) VALUES
(13, '$2y$10$h', 2),
(14, '$2y$10$l', 0),
(15, '$2y$10$x', 0);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `id` int NOT NULL AUTO_INCREMENT,
  `message` text,
  `sender` int NOT NULL,
  `receiver` int NOT NULL,
  `contact` int DEFAULT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `message`, `sender`, `receiver`, `contact`, `createdat`) VALUES
(4, 'Oui le test est concluant.', 13, 13, 4, '2023-06-18 14:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Administrateur'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE IF NOT EXISTS `sellers` (
  `seller_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`seller_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int NOT NULL AUTO_INCREMENT,
  `src` text NOT NULL,
  `texte` varchar(60) NOT NULL,
  `min` varchar(20) NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `src`, `texte`, `min`, `createdat`) VALUES
(1, 'http://localhost:8000/uploads/slide/1686848057_slider-v3-img3.jpg', 'La Fondation Elwin\r\n au service de la jeunesse', 'L\'education enfantin', '2023-06-15 16:54:17'),
(3, 'http://localhost:8000/uploads/slide/1686848896_slider-v2-img2.jpg', 'Nos produits, astuces et santé pour garder la forme', 'la santé', '2023-06-15 17:08:16'),
(5, 'http://localhost:8000/uploads/slide/1686936675_photo_1_2023-05-26_23-02-37.jpg', 'Panoplie de produit dentretien efficace et adapter.', 'La qualité', '2023-06-16 17:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Actif'),
(2, 'Inactif');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `channel` int NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `subscribers_ibfk_1` (`channel`),
  KEY `subscribers_ibfk_2` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `user`, `channel`, `createdat`) VALUES
(9, 14, 4, '2023-06-17 21:20:08'),
(10, 13, 2, '2023-06-17 22:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `product` int DEFAULT NULL,
  `article` int DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `video` int DEFAULT NULL,
  KEY `tag_ibfk_1` (`article`),
  KEY `tag_ibfk_2` (`product`),
  KEY `video` (`video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`product`, `article`, `name`, `video`) VALUES
(NULL, 34, 'girofle', NULL),
(NULL, 34, 'thé', NULL),
(NULL, 34, 'minceur', NULL),
(NULL, 36, 'poid', NULL),
(NULL, 36, 'minceur', NULL),
(NULL, 36, 'perdre', NULL),
(NULL, NULL, 'longrich', 2),
(NULL, NULL, 'dentifrice', 2),
(NULL, NULL, 'test', 4),
(NULL, NULL, 'video', 4),
(NULL, 38, 'teste', NULL),
(NULL, NULL, 'test', 5),
(NULL, NULL, 'teste', 5),
(NULL, NULL, 'presentation', 6),
(NULL, NULL, 'video', 6),
(NULL, NULL, 'formation', 7),
(NULL, NULL, '2023', 7),
(NULL, NULL, 'formation', 8),
(NULL, NULL, '2023', 8),
(NULL, 39, 'formation', NULL),
(NULL, 39, '2023', NULL),
(NULL, 40, 'formation', NULL),
(NULL, 40, '2023', NULL),
(NULL, 41, 'formation', NULL),
(NULL, 41, '2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `order_id` int NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaction_id`),
  KEY `customer_id` (`customer_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `firstname` varchar(50) NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `country` text,
  `BP` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `adress` text,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` int DEFAULT '2',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int DEFAULT '1',
  `referrer` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`),
  KEY `status` (`status`),
  KEY `referrer` (`referrer`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `phone`, `country`, `BP`, `lastname`, `email`, `city`, `company`, `id`, `adress`, `createdat`, `image`, `password`, `role`, `email_verified_at`, `remember_token`, `updated_at`, `status`, `referrer`) VALUES
('Ragil Kawe', NULL, NULL, NULL, NULL, 'ragilkawe@gmail.com', NULL, NULL, 10, NULL, '2023-05-26 16:57:14', NULL, '123456789', 2, NULL, NULL, NULL, 1, NULL),
('admin', NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, NULL, 11, NULL, '2023-06-08 11:34:31', NULL, '$2y$10$TTZsd1wnss/igk3iJ.VFbOhkrTFlFZnurPJq6g0F4BCLvKSCadd6e', 1, NULL, NULL, NULL, NULL, NULL),
('Drystan Tchamba', '+237 673955909', 'Cameroon', 'BP 3022 Ari Douala', 'Kinberlin', 'andersontchamba@gmail.com', 'Douala', 'Levegi Sarl', 13, 'Ari Village, Douala - Cameroon', '2023-06-08 11:42:10', 'http://localhost:8000/uploads/user/1686934796_slider-v3-img3.jpg', '$2y$10$Cn6zJZWqBRt9xMHTLP3iC.FqR13CrktuR1FVDavPsw8S7G3plknwK', 2, NULL, NULL, NULL, 1, NULL),
('parain anderson', '+237673955910', NULL, NULL, NULL, 'parainanderson@gmail.com', NULL, NULL, 14, NULL, '2023-06-17 18:59:12', NULL, '$2y$10$vKadzDCd/CNa0H5FGJlIfuaFt.1jpe8CnlA1uLWrmgETblE4CD7RG', 2, NULL, NULL, NULL, 1, 13),
('teste parain', '+237 673955911', NULL, NULL, NULL, 'testpar1a@gmail.com', NULL, NULL, 15, NULL, '2023-06-17 21:48:23', NULL, '$2y$10$5.BCe3PD2bE/xGysQYY6COi0//JKm5Cko.XI9xVFvh/NvkdVPa5CO', 2, NULL, NULL, NULL, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int NOT NULL AUTO_INCREMENT,
  `channel` int NOT NULL,
  `cover_image` text,
  `bloc1` longtext,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `video` text NOT NULL,
  `duration` varchar(10) NOT NULL,
  `authors` text NOT NULL,
  `recomended` int DEFAULT NULL,
  `titre` text NOT NULL,
  `category` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `channel` (`channel`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `channel`, `cover_image`, `bloc1`, `createdat`, `video`, `duration`, `authors`, `recomended`, `titre`, `category`) VALUES
(2, 4, 'http://localhost:8000/uploads/blog/video/1687086084_photo_2_2023-05-26_23-03-32.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>Présentation de la pâte dentifrice longrich</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-03 21:56:41', 'http://localhost:8000/videos/1685829401_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'Elwin life', NULL, 'Présentation de marque longrich', 12),
(4, 4, 'http://localhost:8000/uploads/blog/video/1686566596_photo_3_2023-05-26_22-53-50.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>ggggggggggggggggggggggggggggg</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-08 10:56:41', 'http://localhost:8000/videos/1686221801_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'Tester', NULL, 'Test vidéos', 5),
(5, 2, 'http://localhost:8000/uploads/blog/video/1686935567_slider-v3-img1.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>video d epresentation. description ....</p></div><div class=\"ql-clipboard\" tabindex=\"-1\" contenteditable=\"true\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-16 17:12:47', 'http://localhost:8000/videos/1686935567_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'testeur', NULL, 'video', NULL),
(6, 4, 'http://localhost:8000/uploads/blog/video/1687040960_photo_2_2023-05-26_23-01-47.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><strong><em>presentation testing 2</em></strong></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-17 22:29:20', 'http://localhost:8000/videos/1687040960_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'drystan', NULL, 'video de presentation', 12),
(7, 4, 'http://localhost:8000/uploads/blog/video/1687113517_multithé.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>formation 1</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 18:38:37', 'http://localhost:8000/videos/1687113517_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'formateurs 1', NULL, 'formation 01', 5),
(8, 1, 'http://localhost:8000/uploads/blog/video/1687113719_7.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>my auto training</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 18:41:59', 'http://localhost:8000/videos/1687113719_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'formateurs 2', NULL, 'formation 02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  PRIMARY KEY (`wishlist_id`),
  UNIQUE KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`) VALUES
(1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_items`
--

DROP TABLE IF EXISTS `wishlist_items`;
CREATE TABLE IF NOT EXISTS `wishlist_items` (
  `wishlist_id` int NOT NULL,
  `product_id` int NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `wishlist_id` (`wishlist_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist_items`
--

INSERT INTO `wishlist_items` (`wishlist_id`, `product_id`, `createdat`, `quantity`, `id`) VALUES
(1, 1, '2023-06-10 19:26:12', 1, 17),
(1, 1, '2023-06-14 13:01:53', 2, 20),
(1, 1, '2023-06-16 16:58:39', 15, 22),
(1, 1, '2023-06-18 16:56:24', 2, 24);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`channel`) REFERENCES `channel` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categories` (`category_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`video`) REFERENCES `video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`receiver`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`sender`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`article`) REFERENCES `article` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`video`) REFERENCES `video` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`etat`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`channel`) REFERENCES `channel` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `referral`
--
ALTER TABLE `referral`
  ADD CONSTRAINT `referral_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribers_ibfk_1` FOREIGN KEY (`channel`) REFERENCES `channel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscribers_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_ibfk_1` FOREIGN KEY (`article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tag_ibfk_2` FOREIGN KEY (`product`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tag_ibfk_3` FOREIGN KEY (`video`) REFERENCES `video` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`referrer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`channel`) REFERENCES `channel` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD CONSTRAINT `wishlist_items_ibfk_1` FOREIGN KEY (`wishlist_id`) REFERENCES `wishlist` (`wishlist_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `wishlist_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
