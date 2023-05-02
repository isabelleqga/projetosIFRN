valorfinal = 0
mediadepedidos = 0
qa = 0
qb = 0
qc = 0
print("Para fazer um pedido, digite qualquer coisa. Para finalizar, digite 0.")
ped = input()
while ped != "0":
    qqa = (int(input("Quantidade de a:")))
    qqb = (int(input("Quantidade de b:")))
    qqc = (int(input("Quantidade de c:")))
    qa = qa + qqa
    qb = qb + qqb
    qc = qc + qqc
    print("Para fazer outro pedido, digite qualquer coisa. Para finalizar, digite 0.")
    ped = input(":")
valorfinal = (25 * qa) + (35 * qb) + (45 * qc)
media = (qa + qb + qc) /3    
print("Valor apurado: R$",valorfinal)
print("Media de pedidos:",media)
