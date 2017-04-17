# Dependency Inversion Principle (Inversion des dépendances)




## Voici un exemple du principe Dependency Inversion Principle (Inversion des dépendances)

* [Dependency Inversion Principle (Inversion des dépendances) - Source](https://github.com/stephweb/solid-php/tree/master/src/5_dependency-inversion-principle/index.php)






### Description

Il faut dépendre des abstractions, pas des implémentations.

Possibilité de remplacer les dépendances injectées.

Nos dépendances doivent se faire sur des interfaces/contrats ou encore sur des classes abstraites plutôt que sur des classes "concrètes".

L’injection de dépendances fournit un composant avec ses dépendances que ce soit via un constructeur,
des appels de méthodes ou la configuration de propriétés.

On sépare les dépendances en les contrôlant et en les instanciant ailleurs dans le système.

L’injection de dépendances nous permet d'injecter uniquement les dépendances dont nous avons besoin,
quand nous avons besoin et ceux sans avoir à écrire en dur quelques dépendances que ce soit.