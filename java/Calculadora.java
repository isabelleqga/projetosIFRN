
package erros;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Calculadora {

    public static int soma(int a , int b){
        return a+b;
    }
    
    public static int subtrair(int a, int b){
        return a-b;
    }
    
    public static int multiplicar(int a, int b){
        return a*b;
    }
    
    public static double dividir(int a, int b)
    throws ArithmeticException{
        return a/b;
    }
    
    public static void menu(){
        System.out.println("1-Somar");
        System.out.println("2-Subtrair");
        System.out.println("3-Multiplicar");
        System.out.println("4-Dividir");
        System.out.println("Digite sua opção:");
    }
    
    public static void main(String[] args) {
        int opcao = 0;
        int a = 0;
        int b = 0;
        while(true){
            try{
                Scanner sc = new Scanner(System.in);
                menu();
                opcao = sc.nextInt();
                System.out.println("Digite a:");
                a = sc.nextInt();
                System.out.println("Digite b:");
                b = sc.nextInt();
                break;
            }catch(InputMismatchException e){
                System.out.println("Digite um valor válido.");
            }
        }
        
        switch(opcao){
            case 1:
                System.out.println("Soma:"+soma(a, b));
                break;
            case 2:
                System.out.println("Sub:"+subtrair(a, b));
                break;
            case 3:
                System.out.println("Mult:"+multiplicar(a, b));
                break;
            case 4:
                try{
                    System.out.println("Div:"+dividir(a, b));
                }catch(ArithmeticException e){
                    System.out.println("Erro de divisão por zero");
                }
                break;
        }
        
        
    }
    
}
