# mvc_pdo I
Aproximació a l'arquitectura **MVC amb PDO**.

Repositori pensat per alumnes del **Mòdul 7: Desenvolupament en entorn servidor** del CFGS de DAW, concretament per la **UF3: Tècniques d'accés a dades**.

La idea és veure el funcionament de PDO (PHP Data Objects) tot creant un CRUD. I aprofitant aquesta situació també s'estructura el projecte de tal forma segueixi el patró de disseny MVC (Model-Vista-Controlador), tal com es veu en el següent esquema:

![MVC](https://github.com/adalmau/mvc_pdo-I/blob/master/esquema.png)

Aquest projecte no té cap arxiu de configuració. Els únics paràmetres que cal canviar per fer-lo funcionar es troben en el model (**AlumneModel.php**), on dins la funció *modConnect()* trobem:

```
$servername = "host de la BD";
$username = "nom d'usuari";
$password = "contrasenya d'usuari";
$dbname = "nom de la BD";
```

Òbviament també cal crear la taula **Alumnes** amb els camps:

```
Nom, Cognoms, Data_naixement
```
