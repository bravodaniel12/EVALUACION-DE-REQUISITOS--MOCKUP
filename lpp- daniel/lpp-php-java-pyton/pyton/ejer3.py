# Función para convertir un número en letras
def numero_en_letras(numero):
    unidades = ['', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve']
    decenas = ['', 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa']

    if numero < 10:
        return unidades[numero]
    elif numero < 20:
        if numero == 15:
            return 'quince'
        return 'dieci' + unidades[numero - 10]
    else:
        decena = numero // 10
        unidad = numero % 10
        if unidad == 0:
            return decenas[decena]
        return decenas[decena] + ' y ' + unidades[unidad]

# Solicitar iniciales y altura en metros y centímetros
inicial1 = input('Ingresa la primera inicial: ')
inicial2 = input('Ingresa la segunda inicial: ')
metros = int(input('Ingresa la parte entera de la altura en metros: '))
centimetros = int(input('Ingresa la parte de centímetros de la altura: '))

# Convertir altura a letras
altura_en_letras = f"{numero_en_letras(metros)} metros con {numero_en_letras(centimetros)} centímetros"

# Mostrar resultado
print(f"Las iniciales son: {inicial1.upper()}{inicial2.upper()}")
print(f"La altura es: {altura_en_letras}")
