
//pede o valor em km fora da funcao
//funcao só fz o calculo

package redondeta;

import java.util.Scanner;


public class Redondeta {
    public static double converteEmMilhas(double km){
        double milhas = km/1.609;
    return milhas;
    }
    public static double converteEmPes(double km){
        double pes = km*3280.8;
    return pes;
    }

    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        System.out.print("Digite o valor dos quilometros: ");
        double km = sc.nextDouble(); 
        System.out.println("O valor em milhas é de "+converteEmMilhas(km));
        System.out.println("O valor em pes é de "+converteEmPes(km));
        
    }
    
}
