
def teorema(a,b,c,n):
    tem = a**n+ b**n==c**n
    return tem
a = float(input("Digite a: "))
b = float(input("Digite b: "))
c = float(input("Digite c: "))
n = float(input("Digite n: "))
if(teorema(a,b,c,n)) == False:
    print("O Teorema está correto")
else:
    print("O Teorema está incorreto")

          
