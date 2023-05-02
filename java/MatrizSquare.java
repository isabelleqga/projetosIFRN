
package matrizsquare;

import java.util.Scanner;


public class MatrizSquare {
    public static int calculaDiagonal(int m[][], int ordem){

        //achar a diagonal
        int soma = 0;
        for (int linha =0; linha<ordem;linha++){
            for (int coluna=0; coluna<ordem;coluna++){
                if (linha==coluna){
                    soma+= m[linha][coluna];
                }
            }
        }
    
        return soma;
    } 

    public static void main(String[] args) {
        Scanner sc = new Scanner (System.in);
        System.out.print("Digite a ordem da matriz quadrada: ");
        int ordem = sc.nextInt();
        int m[][] = new int [ordem][ordem];
        for (int linha =0; linha<ordem;linha++){
            for (int coluna=0; coluna<ordem;coluna++){
                m[linha][coluna] = sc.nextInt(); 
            }
        }

                System.out.println("A soma dos valores da diagonal principal vale "+calculaDiagonal(m, ordem));}
                   
            }
            
        
            
      

