x = int(input("Digite o número:"))
s = 0
for n in range(1,26):
    s = s - (n/x**n)
print(s)
    
