package eusouavitima;
import java.util.Scanner;

public class EuSouAVitima {

    public static void main(String[] args) {
        
        System.out.println("NUMERO DE VITIMAS:");
        Scanner sc = new Scanner(System.in);
        
        int vict = sc.nextInt();
        for (int i = 1; vict >= i  ; i++){
            
            System.out.println("\n ABERTURA OCULAR: \n" +
            "Digite 4 se espontanea.\n" +
            "Digite 3 se ao comando verbal. \n" +
            "Digite 2 se a  estimulo doloroso.\n" +
            "Digite 1 se nenhuma.\n");
            int eye = sc.nextInt();
            
                System.out.println("\n RESPOSTA VERBAL: \n" +
                "Digite 5 se responde coerentemente.\n" +
                "Digite 4 se ha alguma desorientacao e confusao.\n" +
                "Digite 3 se fala de forma aleatoria.\n" +
                "Digite 2 se houves apenas gemidos e grunidos.\n" +
                "Digite 1 se nenhuma.\n");
                int verb = sc.nextInt();
                
            System.out.println("\n RESPOSTA MOTORA: \n" +
            "Digite 6 se obedece ordens verbais.\n" +
            "Digite 5 se sabe localizar a dor.\n" +
            "Digite 4 se ha retirada inespecÃ­fica a  dor.\n" +
            "Digite 3 se ha padrao flexor a  dor. \n" +
            "Digite 2 se ha padrao extensor a  dor.\n" +
            "Digite 1 se nenhuma.\n");
            int mob = sc.nextInt();
            
            
            System.out.println("---------------------");
            System.out.println("CONDICAO DO PACIENTE "+i+":");
        if (mob+eye+verb <= 8){
             System.out.println("Grave. Necessaria intubacao imediata.");
             System.out.println("---------------------\n");
        }else if (mob+eye+verb >= 9 && mob+eye+verb <= 12){
            System.out.println("Moderada.");
            System.out.println("---------------------\n");
        }else if (mob+eye+verb >= 13){
            System.out.println("Leve.");
            System.out.println("---------------------\n");
            
         }
 
        }
        
    }
    
}
