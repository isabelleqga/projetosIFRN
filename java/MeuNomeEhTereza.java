
package meunomeehtereza;

import java.util.InputMismatchException;
import java.util.Scanner;

public class MeuNomeEhTereza {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int idade = 0;
        int aux=0;
        System.out.print("Digite o seu nome: ");
        String nome = sc.nextLine();
        while(aux==0){ 
            Scanner scan = new Scanner(System.in);
            try{
              System.out.print("Digite a sua idade: ");
              idade = scan.nextInt(); 
              aux=1;
            }catch(InputMismatchException erro){
                System.out.println("Deu erro, man. Tente de novo.");
                }
        }
    System.out.println("Olá, "+nome+". Você tem "+idade+" anos.");
    
}}
