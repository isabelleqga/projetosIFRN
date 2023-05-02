def funcao ():
    lista1 = ['a','b','c']
    lista2 = ['y']
    lista1.append (lista2)
    print("A lista tem ",len(lista1), "elementos")
    lista1.remove('a')
    lista1.remove('b')
    lista1.remove('c')
    print("...")
    print("A lista tem ",len(lista1), "elementos")
    return
print(funcao())
