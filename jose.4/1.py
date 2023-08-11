import datetime
hora_actual = datetime.datetime.now().time()
hora = hora_actual.replace(microsecond=0)

while True:
    ciudad = input("Ingrese ciudad de residencia: ")
    if ciudad.isalpha():
        break
    else:
        print("Ingresa solo texto para la ciudad. Inténtalo de nuevo.")

while True:
    ciudad = input("Ingrese fecha: ")
    if ciudad.isalpha():
        break
    else:
        print("Ingresa solo texto para la ciudad. Inténtalo de nuevo.")


while True:
    nombre = input("Ingrese su nombre: ")
    if nombre.isalpha():
        break
    else:
        print("Ingresa solo texto para el nombre. Inténtalo de nuevo.")

while True:
    producto = input("Ingrese el nombre del producto: ")
    if producto.isalpha():
        break
    else:
        print("Ingresa solo texto para el producto. Inténtalo de nuevo.")
# Solicitar cantidad, asegurarse de que no sea negativa
while True:
    precio = float(input("Ingrese el precio: "))
    if precio > 0:
        break
    else:
        print("Ingresa un precio válido (no negativo). Inténtalo de nuevo.")

while True:
    cantidad = int(input("Ingrese la cantidad de productos: "))
    if cantidad >= 0:
        break
    else:
        print("Ingresa una cantidad válida (no negativa). Inténtalo de nuevo.")

#esto es el precio
total = precio * cantidad
#esto es el decuento
tipo = 17.5
duscuento = precio * (tipo / 100)
total_decuento= precio - duscuento

total_descuen = total - total_decuento

print("================================================")
print("FACTURA")


#mostrar
print("Ciudad:", ciudad, "\nLa hora actual es:", hora)
print("Nombre:", nombre, "\nProducto:", producto, "\nCantidad:", cantidad)
print("valor total:", total)
print("valor con descuento:", duscuento)
print("valor total con descuento:", total_descuen)