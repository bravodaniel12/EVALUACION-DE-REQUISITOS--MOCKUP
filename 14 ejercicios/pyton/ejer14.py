ph  = float(input("Acidez del suelo: "))
materiaOrganica = float(input("Materia Organico: "))
fosforo = float(input("Cantidad de Fosforo: "))
calcio = float(input("Cantidad de Calcio: "))  
magnesio = float(input("Cantidad de Magnesio: "))
potasio = float(input("Cantidad de Potasio: "))
aluminio = float(input("Cantidad de Aluminio: "))
if ph >= 5 and ph <= 5.5 and materiaOrganica > 8 and fosforo > 30 and calcio > 3 and magnesio > 0.9 and potasio > 0.4 and aluminio < 1:
    print ("El Suelo esta apto")
else:
    print ("El Suelo no esta apto")