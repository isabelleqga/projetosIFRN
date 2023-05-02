def funcao():
    nomes = ['a', 'b', 'c', 'd', 'a','that', 'is', 'lame', 'i', 'am', 'depressed', ':)']
    x = input("Digite o que deve ser procurado:")
    print ("O elemento",x,"foi encontrado",nomes.count(x),"vezes.")
    return
print(funcao())
