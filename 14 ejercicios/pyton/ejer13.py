
nombre = str(input("Nombre: "))
genero = int(input("Genero (1=Masculino; 2=Femenino): "))
salario_basico = float(input("Salario Basico: $"))
tiempo = int(input("Tiempo de servicio: "))

if genero == 2 and tiempo > 5 :
    bonificacion = 0.20
    print (f"Salario con bonificación: {(salario_basico*bonificacion) + (salario_basico)}")
elif genero == 2 and tiempo <= 5 :
    bonificacion = 0.15
    print (f"Salario con bonificación: {(salario_basico*bonificacion) + (salario_basico)}")
elif genero == 1 and tiempo > 6 :
    bonificacion = 0.20
    print (f"Salario con bonificación: {(salario_basico*bonificacion) + (salario_basico)}")
elif genero == 1 and tiempo >=1 and tiempo <= 6 :
    bonificacion = 0.15
    print (f"Salario con bonificación: {(salario_basico*bonificacion) + (salario_basico)}")