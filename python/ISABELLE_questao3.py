
def teorema(a,b,c,n):
    tem = a**n+ b**n==c**n
    return tem
a = int(input("Digite a: "))
b = int(input("Digite b: "))
c = int(input("Digite c: "))
n = int(input("Digite n: "))
if(teorema(a,b,c,n)) == False:
    print("O Teorema está correto")
else:
    print("O Teorema está incorreto")

          
