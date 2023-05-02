/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package comecandomal;
import java.util.Scanner;

public class ComecandoMal {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("type in how many bis u will calc");
        int bi = sc.nextInt();  
        int b1 = 0;
        int b2 = 0;
        int b3 = 0;
        int b4 = 0;

        switch (bi){
            case 4: 
            System.out.println("type in the 4 grade");
            b4 = sc.nextInt() ;

            ;   
            case 3: 
            System.out.println("type in the 3 grade");
            b3 = sc.nextInt() ;

            ;     
            case 2:  
            System.out.println("type in the 2 grade");
            b2 = sc.nextInt() ;
            
            ;          
            case 1: 
            System.out.println("type in the 1 grade");
            b1 = sc.nextInt() ;

            ;               
            default: System.out.println("sua média é "+((b1*0.2)+(b2*0.2)+(b3*0.3)+(b4*0.3)));
        } 
        
    }
    

    
}
