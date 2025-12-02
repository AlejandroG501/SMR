---
mindmap-plugin: basic
---

# Tema 3: Almacenamiento

## Factores a considerar
- Confidencialidad
	- Privacidad de datos empresariales
		- Hay varios tipos
			- Información confidencial
			- Información interna
			- Información publica
- Rendimiento
- Integridad
	- La pérdida o deterioro de la información puede deberse a
	muchas causas distintas
		- Fallo de disco
		- Error humano
		- Fallo de software
		- Malware
		- Accidente
		- Desastre natural
- Accesiblidad
- Disponibilidad

## Estrategia de gestion
- Análisis exhaustivo
- Determinación
- Gestión de dispositivos de almacenamientos
- Copias de respaldo
- Plan de contingencias

## Cifrado de datos
- Hay varios tipos de cifrados de un archivo
	- Cifrado por hardware
	- Cifrado de dispositivos de bloques
	- El cifrado usando el propio sistema de archivos
	- Cifrado del contenido de parte de un sistema de archivos
		- Se usa software como
			- encfs
			- cryfs
			- gocryptfs

## Eliminación datos
- Hay que tener en cuenta que no se borra realmente del disco los modos de destruirlos son
	- Destruir físicamente el disco
	- Destruir los datos por la parte logica
		- Sobreescritura
		- Firmware
			- Comando TRIM
			- Borrado seguro

## Medios de almacenamiento
- Podemos distinguir
	- Discos duros
		- HDD
		- SSD
	- Discos opticos
		- CD
		- DVD
		- Blu-ray
	- Memoria o pinchos o llaveros USB
		- Similar a ssd
	- Sistemas de almacenamiento remoto
		- DAS
		- NAS
		- SAN
	- Cintas magneticas
		- Copias de seguridad
- Determinar qué dispositivo es adecuado
	- Política de almacenamiento en equipos de trabajo
	- Política sobre el uso de dispositivos externos
	- Política de almacenamiento en la red corporativa
	- Política de almacenamiento en la nube, que debe
	recoger