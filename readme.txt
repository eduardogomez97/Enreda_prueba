Para empezar importar la base de datos llamada enreda_prueba.sql

Copiar el proyecto de CodeIgniter en el servidor que vayamos a usar. En mi caso en la carpeta hdocs de XAMPP.

La url que debemos escribir para acceder al proyecto es: localhost/enreda_prueba

Esto nos dirigirá a un pequeño login. Para acceder tendremos el usuario: admin // contraseña: admin

Nos redirecciona al frontend de Facturas. Se puede comprobar que tiene las funciones del CRUD.
Crear, Leer, Actualizar y Borrar.

Para crear una nueva factura solo debemos darle al boton azul.
	- El id estará oculto.
	-La fecha es la actural.
	-Nos permite subir un fichero.
	-El iva y el precio total se calcularan solos.
	
	Para modificar le damos al boton naranja.
		-La id no es modificable.
		-El iva y total se vuelven a calcular solos.
		
Para borrar usamos el boton rojo.
	-Borra el registro.
	
Cuando clicamos en Contratos nos muestra la lista de contratos que hay en la BD.

El proceso para comprobar el CRUD es el mismo que el anterior:
	-Añadir nuevo contrato --> BOTON AZUL
	-Modificar contrato --> BOTON NARANJA
	-Borrar contrato --> BOTON ROJO (ESTO NOS BORRARÁ LAS FACTURAS ASOCIADAS A LOS CONTRATOS, YA QUE NO ES CONVENIENTE TENER FACTURAS NULAS)
	
	Ya que no se han dado datos sobre LICITACIONES y el archivo mostraba indicios de que ha sido borrado con intencion no se ha llevado acabo esa parte.
