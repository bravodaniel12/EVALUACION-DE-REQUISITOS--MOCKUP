# Inicializar variables de ventas por marca
ventas = {
    'samsung': 0,
    'motorola': 0,
    'huawei': 0
}

# Definir precios de celulares
precios = {
    'samsung': 600000,
    'motorola': 500000,
    'huawei': 550000
}

def calcular_descuento(cantidad):
    return 0.05 if cantidad > 10 else 0

def mostrar_resultados():
    print("\nResultados de Ventas:")
    for marca, cantidad in ventas.items():
        precio_unitario = precios[marca]
        subtotal = cantidad * precio_unitario
        descuento = calcular_descuento(cantidad)
        descuento_aplicado = subtotal * descuento
        total = subtotal - descuento_aplicado

        print(f"Marca: {marca.capitalize()}")
        print(f"Cantidad Vendida: {cantidad}")
        print(f"Precio Unitario: {precio_unitario}")
        print(f"Subtotal: {subtotal}")
        print(f"Descuento: {descuento * 100}%")
        print(f"Descuento Aplicado: {descuento_aplicado}")
        print(f"Total: {total}\n")

# Ciclo para ingresar ventas
for _ in range(1):
    print("Seleccione una marca:")
    print("1. Samsung")
    print("2. Motorola")
    print("3. Huawei")
    
    opcion = int(input())
    
    if opcion < 1 or opcion > 3:
        print("Opción no válida.")
        continue
    
    marca = None
    if opcion == 1:
        marca = 'samsung'
    elif opcion == 2:
        marca = 'motorola'
    elif opcion == 3:
        marca = 'huawei'
    
    cantidad = int(input("Ingrese la cantidad vendida: "))
    
    if cantidad <= 0:
        print("Ingrese una cantidad válida.")
    else:
        ventas[marca] += cantidad

mostrar_resultados()
