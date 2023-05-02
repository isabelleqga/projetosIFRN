
package dias;

import java.util.Scanner;

public class Dias {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int idadeano = 0, idademes, idadedia, idadediaresto, idademesresto;
        System.out.println("day");
        int dia = sc.nextInt();
        System.out.println("month");
        int mes = sc.nextInt();
        System.out.println("year");
        int ano = sc.nextInt();
        int anohj=2018, meshj=4, diahj=26;
        if(mes>=meshj){
            //se nao fez aniversario
                idadeano = --anohj - ano;
                idadedia = (idadeano*365)+(meshj*30)+(diahj);
                idademesresto = ++meshj;
                if(dia<diahj){
                    idadediaresto = diahj-dia;
                }else{
                    idadediaresto = dia-diahj;
                }
                System.out.println("O usuário tem "+idadedia+" dias.");
                System.out.println("O usuário tem "+idadeano+" anos, "+idademesresto+" meses e "+idadediaresto+" dias.");

        }else{
            //se vc ja fez aniversario esse ano
            idadeano = anohj - ano;
            idadedia = (idadeano*365)+(meshj-mes)*30+(diahj);
            idademesresto = meshj-mes;
            if(dia<diahj){
                    idadediaresto = diahj-dia;
                }else{
                    idadediaresto = dia-diahj;
                }
            System.out.println("O usuário tem "+idadedia+" dias.");
            System.out.println("O usuário tem "+idadeano+" anos, "+idademesresto+" meses e "+idadediaresto+" dias.");
                
            
        }
        
        
        
    
    }
    
}
