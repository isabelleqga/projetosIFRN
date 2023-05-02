package aniversario;

import java.util.Scanner;

public class Aniversario {

    public static void main(String[] args) {
        //hoje: 26/04/2018
        int diahj = 26;
        int meshj = 04;
        int anohj = 2018;
        int anos, meses, dias, diast;
        Scanner sc = new Scanner(System.in);  
        
        System.out.print("Digite o dia em que voce nasceu: ");
        int dia = sc.nextInt();
        System.out.print("Digite o mes em que voce nasceu: ");
        int mes = sc.nextInt();
        System.out.print("Digite o ano em que voce nasceu: ");
        int ano = sc.nextInt();

//n fez(
//mes dps
        if (mes>meshj){
            anos = (--anohj) - ano;
            meses = 12 - mes + meshj;
            dias = 30 - dia - diahj;
	
// )            
//fez(
//mes antes
        }else if(mes<meshj){
            anos = anohj - ano; 
            if(dia>diahj){
                meses = (--meshj) - mes;
                dias = 30-dia+diahj; 
            }else{
                meses = meshj - mes;
                dias = diahj - dia ;                              
            } 
// )
//msm mes
        }else{          
            //n fez (
            if(dia>diahj){
                meses = (12-mes)+(--meshj);
                dias = 30-dia+diahj;
                anos = (--anohj) - ano; 
                //)
                //fez(
            }else{
                meses = meshj - mes;
                dias = diahj - dia ;
                anos = anohj - ano; 
                //)
        }}
        
        //TOTAL DE DIAS
        diast = anos*365+meses*30+dias;
        
        System.out.println("");
        System.out.println("Voce tem "+anos+" anos, "+meses+" mes(es) e "+dias+" dia(s).");
        System.out.println("Voce viveu um total de "+diast+" dias.");
 
        
        
if (dia==diahj&&mes==meshj){
    System.out.println("Alias, feliz aniversario!");

}}}