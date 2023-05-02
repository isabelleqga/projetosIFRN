package volume;

import java.util.Scanner;

public class Volume {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        System.out.println("Digite o valor do raio:");
        
        double raio = sc.nextDouble(), v=0, rcubo=0;
        rcubo = Math.pow(raio,3);
        v = 4/3*Math.PI*rcubo;
        System.out.println("O volume do círculo é de "+v);
        
    }
    
}
