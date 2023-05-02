package erros;

import java.util.Scanner;
import java.util.InputMismatchException;
public class Erros {

    public static void main(String[] args) {
           
        String nome=null;
        int idade = 0;
        while(true){
        try{
        Scanner sc = new Scanner(System.in);
        nome = sc.nextLine();
        idade = sc.nextInt();
        break;
        }catch(InputMismatchException e){
            System.out.println("Digite um valor válido");
            
        }
        }
        
        System.out.println("Nome:"+nome);
        System.out.println("Idade:"+idade);
    }
    
}
