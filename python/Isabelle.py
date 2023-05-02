
aluno = input("Digite o nome do aluno:")
n1 = float(input("Digite a nota:"))
n2 = float(input("Digite a nota:"))
n3 = float(input("Digite a nota:"))

def media (n1,n2,n3,aluno):
    m = int((n1+n2+n3)/3)
    x = {aluno : m}
    print(x)
print(media(n1,n2,n3, aluno))

    
