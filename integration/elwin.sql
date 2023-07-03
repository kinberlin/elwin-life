-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2023 at 06:49 PM
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
(4, 'Claudelle Noubisssie', '2023-06-01 12:01:18', 'test  claudelle', 'http://localhost:8000/uploads/blog/category/1685620877_photo_2_2023-05-26_23-02-37.jpg', 'http://localhost:8000/uploads/blog/category/1685620877_photo_2_2023-05-26_23-03-32.jpg', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user`, `message`, `createdat`, `video`, `article`, `product`, `id`) VALUES
(13, 'vraiment', '2023-06-19 23:06:10', 6, NULL, NULL, 1),
(13, 'J\'apprecie la pertinence de cet article. Bravo 👏👏👏👏', '2023-06-21 09:23:20', NULL, 41, NULL, 3),
(13, 'merci', '2023-06-21 09:44:18', 5, NULL, NULL, 4);

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
(5, 'bjr... besoin d\'aide', 13, 11, '2023-06-19 16:10:34', 2);

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
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `article` int DEFAULT NULL,
  `video` int DEFAULT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `history_ibfk_1` (`user`),
  KEY `history_ibfk_2` (`article`),
  KEY `history_ibfk_3` (`video`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user`, `article`, `video`, `createdat`) VALUES
(1, 13, 41, NULL, '2023-06-21 08:04:51'),
(2, 13, 41, NULL, '2023-06-21 08:17:01'),
(3, 13, 41, NULL, '2023-06-21 08:24:29'),
(4, 13, 41, NULL, '2023-06-21 08:49:54'),
(5, 13, 41, NULL, '2023-06-21 08:52:21'),
(6, 13, 41, NULL, '2023-06-21 08:58:19'),
(7, 13, 41, NULL, '2023-06-21 09:10:23'),
(8, 13, 41, NULL, '2023-06-21 09:13:00'),
(9, 13, 41, NULL, '2023-06-21 09:14:10'),
(10, 13, 41, NULL, '2023-06-21 09:18:20'),
(11, 13, 41, NULL, '2023-06-21 09:23:08'),
(12, 13, 41, NULL, '2023-06-21 09:23:21'),
(13, 13, 41, NULL, '2023-06-21 09:24:25'),
(14, 13, 41, NULL, '2023-06-21 09:25:37'),
(15, 13, 41, NULL, '2023-06-21 09:26:31'),
(16, 13, 41, NULL, '2023-06-21 09:26:55'),
(17, 13, NULL, 5, '2023-06-21 09:42:36'),
(18, 13, NULL, 5, '2023-06-21 09:44:22'),
(19, 13, NULL, 5, '2023-06-21 09:49:16'),
(21, 13, 38, NULL, '2023-07-03 16:27:24'),
(22, 13, NULL, 8, '2023-07-03 16:27:51');

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
  `country` text,
  `logo` text,
  `city` text,
  `name` text,
  `caf` double DEFAULT '0',
  `facebook` text,
  `twitter` text,
  `instagram` text,
  `linkedin` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `phone`, `email`, `address`, `lat`, `lon`, `country`, `logo`, `city`, `name`, `caf`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(1, '673955909', 'levegi@support.com', 'Rue Gallieni, Akwa, Douala - Cameroun', '40.712784', '-74.005941', 'Cameroun', NULL, 'Douala', 'Elwin Foundation', 25000, 'face', 'tweet', 'insta', 'link');

-- --------------------------------------------------------

--
-- Table structure for table `info_utiles`
--

DROP TABLE IF EXISTS `info_utiles`;
CREATE TABLE IF NOT EXISTS `info_utiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `lien` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info_utiles`
--

INSERT INTO `info_utiles` (`id`, `nom`, `lien`) VALUES
(1, 'nature', 'https://liens.com'),
(4, 'nature', 'http://localhost:8000/admin/info'),
(7, 'local host', 'http://localhost:8000/admin/info'),
(8, 'local host', 'http://localhost:8000/admin/info'),
(9, 'local host', 'http://localhost:8000/admin/info'),
(10, 'local host', 'http://localhost:8000/admin/info'),
(11, 'local host', 'http://localhost:8000/admin/info'),
(12, 'local host', 'http://localhost:8000/admin/info'),
(13, 'local host', 'http://localhost:8000/admin/info'),
(14, 'local host', 'http://localhost:8000/admin/info');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_06_21_105956_create_article_table', 0),
(2, '2023_06_21_105956_create_categories_table', 0),
(3, '2023_06_21_105956_create_channel_table', 0),
(4, '2023_06_21_105956_create_comments_table', 0),
(5, '2023_06_21_105956_create_contact_table', 0),
(6, '2023_06_21_105959_add_foreign_keys_to_article_table', 0),
(7, '2023_06_21_105959_add_foreign_keys_to_comments_table', 0),
(8, '2023_06_21_105959_add_foreign_keys_to_contact_table', 0),
(9, '2023_06_21_110213_create_etat_table', 1),
(10, '2023_06_21_110213_create_history_table', 1),
(11, '2023_06_21_110213_create_info_table', 1),
(12, '2023_06_21_110213_create_orders_table', 1),
(13, '2023_06_21_110216_add_foreign_keys_to_history_table', 1),
(14, '2023_06_21_110216_add_foreign_keys_to_orders_table', 1),
(15, '2023_06_21_110414_create_order_items_table', 2),
(16, '2023_06_21_110414_create_partnership_table', 2),
(17, '2023_06_21_110414_create_products_table', 2),
(18, '2023_06_21_110417_add_foreign_keys_to_order_items_table', 2),
(19, '2023_06_21_110417_add_foreign_keys_to_products_table', 2),
(20, '2023_06_21_110545_create_pubs_table', 3),
(21, '2023_06_21_110545_create_referral_table', 3),
(22, '2023_06_21_110545_create_response_table', 3),
(23, '2023_06_21_110545_create_role_table', 3),
(24, '2023_06_21_110548_add_foreign_keys_to_referral_table', 3),
(25, '2023_06_21_110720_create_sellers_table', 4),
(26, '2023_06_21_110720_create_slide_table', 4),
(27, '2023_06_21_110720_create_status_table', 4),
(28, '2023_06_21_110720_create_subscribers_table', 4),
(29, '2023_06_21_110723_add_foreign_keys_to_subscribers_table', 4),
(30, '2023_06_21_110857_create_tag_table', 5),
(31, '2023_06_21_110857_create_transactions_table', 5),
(32, '2023_06_21_110857_create_user_table', 5),
(33, '2023_06_21_110857_create_video_table', 5),
(34, '2023_06_21_110900_add_foreign_keys_to_tag_table', 5),
(35, '2023_06_21_110900_add_foreign_keys_to_user_table', 5),
(36, '2023_06_21_110900_add_foreign_keys_to_video_table', 5),
(37, '2023_06_21_111009_create_wishlist_table', 6),
(38, '2023_06_21_111009_create_wishlist_items_table', 6),
(39, '2023_06_21_111012_add_foreign_keys_to_wishlist_table', 6),
(40, '2023_06_21_111012_add_foreign_keys_to_wishlist_items_table', 6),
(41, '2023_06_22_141326_create_orders_table', 7),
(42, '2023_06_22_141326_create_transactions_table', 7),
(43, '2023_06_22_141329_add_foreign_keys_to_orders_table', 7),
(44, '2023_06_22_141329_add_foreign_keys_to_transactions_table', 7),
(45, '2023_06_22_213101_create_order_items_table', 8),
(46, '2023_06_22_213101_create_orders_table', 8),
(47, '2023_06_22_213104_add_foreign_keys_to_order_items_table', 8),
(48, '2023_06_22_213104_add_foreign_keys_to_orders_table', 8),
(49, '2023_07_01_185110_create_history_table', 9),
(50, '2023_07_01_185113_add_foreign_keys_to_history_table', 9),
(51, '2023_07_02_161230_create_info_table', 10),
(52, '2023_07_03_170114_create_info_utiles_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `country` text,
  `address` text,
  `payment` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT '0',
  `discount` double DEFAULT '0',
  `delivery_fee` double DEFAULT '0',
  PRIMARY KEY (`order_id`),
  KEY `orders_ibfk_1` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user`, `status`, `createdat`, `name`, `email`, `phone`, `city`, `country`, `address`, `payment`, `amount`, `discount`, `delivery_fee`) VALUES
(6, 13, 'Livrer', '2023-06-29 11:48:39', 'Kinberlin', 'andersontchamba@gmail.com', '+237 673955909', 'Douala', 'Cameroon', 'Ari - Douala', 'MTN (Momo)', 25000, 0, 0),
(7, 13, 'Waiting for Payment', '2023-06-29 15:07:15', 'Kinberlin', 'andersontchamba@gmail.com', '+237 673955909', 'Douala', 'Cameroon', 'Ari - Douala', 'Orange (OM)', 20000, 3200, 5000);

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
  `id` int NOT NULL AUTO_INCREMENT,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_items_ibfk_1` (`order_id`),
  KEY `order_items_ibfk_2` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `quantity`, `price`, `id`, `createdat`) VALUES
(6, 1, 5, 5000, 7, '2023-06-29 11:48:40'),
(7, 1, 4, 5000, 8, '2023-06-29 15:07:15');

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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` text NOT NULL,
  `token` text NOT NULL,
  `createdat` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `createdat`) VALUES
('andersontchamba@gmail.com', 'p1Dj2QCbaAvFsTlrDQAGhVBXORAghAfQLQ73qu0Iwo0e8gwYzWFnWI9nN57yjqaH', '2023-07-02 16:03:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `seller`, `name`, `price`, `category_id`, `description`, `createdat`, `delivery_period`, `image2`, `image3`, `image`, `image1`, `etat`, `channel`) VALUES
(1, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(2, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(3, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(4, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(5, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(6, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(7, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(8, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(9, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(10, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(11, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(12, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(13, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(14, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(15, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(16, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(17, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(18, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(19, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(20, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(21, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(22, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(23, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(24, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(25, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(26, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(27, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(28, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(29, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(30, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(31, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(32, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(33, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(34, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(35, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(36, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(37, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(38, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(39, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(40, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(41, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(42, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(43, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(44, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(45, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(46, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(47, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(48, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4),
(49, 'LongRich', 'DERMOFEAR', 5000, 1, 'Fabuleux et efficace.', '2023-05-24 23:59:53', 20, 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-02-47.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-32.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_13_2023-05-26_22-53-50.jpg', 'http://localhost:8000/uploads/shop/photo/1686847063_photo_1_2023-05-26_23-03-23.jpg', 1, 4);

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
(15, '$2y$10$x', 0),
(16, '$2y$10$w', 0),
(17, '$2y$10$/', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `message`, `sender`, `receiver`, `contact`, `createdat`) VALUES
(4, 'Oui le test est concluant.', 13, 13, 4, '2023-06-18 14:43:20'),
(5, 'salut. comment puis je vous aider?', 11, 13, 5, '2023-06-25 19:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Administrateur'),
(2, 'Client'),
(3, 'Chaînes'),
(4, 'Publicités'),
(5, 'Article'),
(6, 'Vidéo'),
(7, 'Annonces'),
(8, 'Slides'),
(9, 'Publicités/Annonces'),
(10, 'Blog'),
(11, 'Boutique');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `user`, `channel`, `createdat`) VALUES
(9, 14, 4, '2023-06-17 21:20:08');

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
(NULL, 41, '2023', NULL),
(NULL, NULL, 'entreprendre', 9);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `order_id` int NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaction_id`),
  KEY `order_id` (`order_id`),
  KEY `user` (`user`)
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
  UNIQUE KEY `email` (`email`),
  KEY `role` (`role`),
  KEY `status` (`status`),
  KEY `referrer` (`referrer`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `phone`, `country`, `BP`, `lastname`, `email`, `city`, `company`, `id`, `adress`, `createdat`, `image`, `password`, `role`, `email_verified_at`, `remember_token`, `updated_at`, `status`, `referrer`) VALUES
('Ragil Kawe', NULL, NULL, NULL, NULL, 'ragilkawe@gmail.com', NULL, NULL, 10, NULL, '2023-05-26 16:57:14', NULL, '123456789', 2, NULL, NULL, NULL, 1, NULL),
('admin', '+237651558585', 'Cameroun', NULL, 'Drystan', 'admin@gmail.com', 'Douala', NULL, 11, 'Ari Douala', '2023-06-08 11:34:31', 'http://localhost:8000/uploads/user/1687515736_7.jpg', '$2y$10$TTZsd1wnss/igk3iJ.VFbOhkrTFlFZnurPJq6g0F4BCLvKSCadd6e', 1, NULL, NULL, NULL, 1, NULL),
('Drystan Tchamba', '+237 673955909', 'Cameroon', 'BP 3022 Ari Douala', 'Kinberlin', 'andersontchamba@gmail.com', 'Douala', 'Levegi Sarl', 13, 'Ari Village, Douala - Cameroon', '2023-06-08 11:42:10', 'http://localhost:8000/uploads/user/1686934796_slider-v3-img3.jpg', '$2y$10$k9PNrW4rLyBjvTzMuNGGzeygv/Cx.UzU.b5MASuaDOY/dDvvr4HhW', 2, NULL, NULL, NULL, 1, NULL),
('parain anderson', '+237673955910', NULL, NULL, NULL, 'parainanderson@gmail.com', NULL, NULL, 14, NULL, '2023-06-17 18:59:12', NULL, '$2y$10$vKadzDCd/CNa0H5FGJlIfuaFt.1jpe8CnlA1uLWrmgETblE4CD7RG', 2, NULL, NULL, NULL, 1, 13),
('teste parain', '+237 673955911', NULL, NULL, NULL, 'testpar1a@gmail.com', NULL, NULL, 15, NULL, '2023-06-17 21:48:23', NULL, '$2y$10$5.BCe3PD2bE/xGysQYY6COi0//JKm5Cko.XI9xVFvh/NvkdVPa5CO', 2, NULL, NULL, NULL, 1, 13),
('parain anderson2', '+237 673955919', NULL, NULL, NULL, 'andersontchamba2@gmail.com', NULL, NULL, 16, NULL, '2023-06-22 13:00:53', NULL, '$2y$10$QKCmhr8qdi/a4IN1agnn9.G.Go1dRj50fb7olDYsbcBNkonEHgKdC', 2, NULL, NULL, NULL, 1, NULL),
('ragil', '+237673955910', NULL, NULL, NULL, 'ragil33@gmail.com', NULL, NULL, 17, NULL, '2023-06-22 13:21:35', NULL, '$2y$10$9wd6wndcIwdnFja/uf3xQuhb5S4CiwrNYQeu0QzMuRFcV2P6rw1pe', 2, NULL, NULL, NULL, 1, NULL),
('kinberlins', '+237673955917', NULL, NULL, NULL, 'kinberlintchamba2003@gmail.com', NULL, NULL, 19, NULL, '2023-06-26 21:27:44', NULL, '$2y$10$ceBHE7Y7GPr0CqsRzIpYM.A.WZzwZH2K1TKBpbPjkws3HyzgK5F8K', 9, NULL, NULL, NULL, 1, NULL);

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
  KEY `channel` (`channel`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `channel`, `cover_image`, `bloc1`, `createdat`, `video`, `duration`, `authors`, `recomended`, `titre`, `category`) VALUES
(2, 4, 'http://localhost:8000/uploads/blog/video/1687086084_photo_2_2023-05-26_23-03-32.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>Présentation de la pâte dentifrice longrich</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-03 21:56:41', 'http://localhost:8000/videos/1685829401_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'Elwin life', NULL, 'Présentation de marque longrich', 12),
(5, 2, 'http://localhost:8000/uploads/blog/video/1686935567_slider-v3-img1.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>video d epresentation. description ....</p></div><div class=\"ql-clipboard\" tabindex=\"-1\" contenteditable=\"true\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-16 17:12:47', 'http://localhost:8000/videos/1686935567_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'testeur', NULL, 'video', 15),
(6, 4, 'http://localhost:8000/uploads/blog/video/1687040960_photo_2_2023-05-26_23-01-47.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><strong><em>presentation testing 2</em></strong></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-17 22:29:20', 'http://localhost:8000/videos/1687040960_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'drystan', NULL, 'video de presentation', 12),
(7, 4, 'http://localhost:8000/uploads/blog/video/1687113517_multithé.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>formation 1</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 18:38:37', 'http://localhost:8000/videos/1687113517_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'formateurs 1', NULL, 'formation 01', 5),
(8, 1, 'http://localhost:8000/uploads/blog/video/1687113719_7.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>my auto training</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-18 18:41:59', 'http://localhost:8000/videos/1687113719_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'formateurs 2', NULL, 'formation 02', 5),
(9, 4, 'http://localhost:8000/uploads/blog/video/1687981831_photo_1_2023-05-26_23-01-47.jpg', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><strong><em>entreprendre</em></strong></p></div><div class=\"ql-clipboard\" tabindex=\"-1\" contenteditable=\"true\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2023-06-28 19:50:31', 'http://localhost:8000/videos/1687981831_WhatsApp Vidéo 2023-05-03 à 21.54.25.mp4', '00:17', 'Claudelle Priscille et Paul Noubissie', NULL, 'Comment lancer son affaire en 2025', 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist_items`
--

INSERT INTO `wishlist_items` (`wishlist_id`, `product_id`, `createdat`, `quantity`, `id`) VALUES
(1, 1, '2023-07-01 21:22:23', 6, 28);

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
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`video`) REFERENCES `video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`channel`) REFERENCES `channel` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categories` (`category_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
