# Punition-de-Bart

C'est pour un devoir à faire en BTS SIO SLAM.

Globalement, c'est un simple formulaire avec un champ pour rentrer du texte et un autre pour la sélection du nombre de lignes à effectuer.

J'ai utilisé les sessions et cookies pour améliorer un peu le tout (avec une grande aide de Stackoverflow, il faut dire que la syntaxe abrégée des conditions en .PHP, c'est pas encore mon fort).

**Ce qui a été fait :**

Récapitulons alors :

-> Un formulaire pour rentrer la ligne qu'on souhaite écrire et le nombre de fois.
-> Un CSS pour afficher un "simili"-tableau.
-> Du code PHP pour récupérer les variables qu'on a utilisé (par exemple, si je mets "Je ne rendrai pas mon devoir en retard" et que je configure le nombre de lignes à 50, cela sera sauvegardé).
-> Le "htmlspecialchars" que je mets tout le temps depuis mon stage pour éviter les attaques XSS et injection SQL.

**Les problèmes rencontrés + Les solutions apportées :**

C'est globalement tout ce qui est lié aux sessions et cookies. En général, c'est juste car cela n'était pas défini à la base. J'ai donc fait une condition où les sessions et cookies sont pris en compte uniquement qu'à partir du moment où on a envoyé une première fois le formulaire.

**Les problèmes persistants :**

Globalement, j'ai réglé mes soucis, après, sait-on jamais, peut-être que j'ai oublié quelque chose ?

**Ce qu'il reste à faire :**

Bonne question... euh...