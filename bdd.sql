CREATE TABLE `etudiant` (
  `ID` int() NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `codepostal` varchar(100) NOT NULL,
  `annee` varchar(100) NOT NULL,
  `spe` varchar(100) NOT NULL,
  `situation` varchar(100) NOT NULL,
  `commentaire` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET=utf8mb4