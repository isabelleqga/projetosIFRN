
def funcao(a,b):
    list1 = list(range(0,(a+1),25))
    list2 = list(range(0,(b+1),15))
    if len(list1) > len(list2):
        print("A lista1",list1,"é maior, com", (len(list1)), "elementos")
    elif len(list2) > len(list1):
        print("A lista2",list2,"é maior, com", (len(list2)), "elementos")
    else:
        print("Lista são de tamanhos iguais")
    return
x = int(input("Digite o limite da lista1:"))
w = int(input("Digite o limite da lista2:"))
print(funcao(x,w))
