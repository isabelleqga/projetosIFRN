
package calc;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Calc {

    public static void main(String[] args) {
        int ad=1;
        int sub=2;
        int mult=3;
        int div=4;
        int calc=0;
        int aux=0;
        while(aux==0){ 
            Scanner sc = new Scanner(System.in);
            try{
        System.out.println("menu de operação:");
        System.out.println("ad 1, sub 2, mult 3, div 4");
        int resp= sc.nextInt();          
              System.out.print("Primeiro: ");
              int num1 = sc.nextInt();
              System.out.print("Segundo: ");
              int num2 = sc.nextInt(); 
              aux=1;
              switch(resp){
            case 1:
                calc = num1+num2;break;
            case 2:
                calc = num1-num2;break;
            case 3:
                calc = num1*num2;break;
            case 4:
                calc = num1/num2;break;
            default:
                System.out.println("operacao invalida >:( faca de nv\n");
                aux=0;
            }

            }catch(InputMismatchException erro){        
                System.out.println("Deu erro, man. Tente de novo.\n");
                }
            
        }System.out.println("O resultado é "+calc);
        
              
    }
    
}
