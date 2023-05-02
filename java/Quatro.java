
package quatro;

import java.util.Scanner;


public class Quatro {


    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int tam = 10;
        //MUDAR O TAMANHO DO VETOR AQ
        int preto=0, loiro=0, ruivo=0, pretos = 0, loiros = 0, ruivos = 0, hm=0;
        int a[] = new int[tam];
        for (int i=0; i<tam;i++){
            System.out.println("Digite a cor do cabelo da pessoa:");
            System.out.println("1 para preto");
            System.out.println("2 para loiro");
            System.out.println("3 para ruivo");
            System.out.println("");
            a[i] = sc.nextInt();   
        }
        for (int i=0; i<tam;i++){
            switch (a[i]){
                case 1:
                    preto += 1; break;
                case 2:
                    loiro += 1; break;
                case 3: 
                    ruivo += 1; break;
                default:
                    break;
        }
        }
        //percentual
        hm = preto+loiro+ruivo;
        pretos = preto*100/hm;
        loiros = loiro*100/hm;
        ruivos = ruivo*100/hm;
        System.out.println("O percentual de pessoa de cabelo preto é de "+pretos+"%");
        System.out.println("O percentual de pessoa de cabelo loiro é de "+loiros+"%");
        System.out.println("O percentual de pessoa de cabelo ruivo é de "+ruivos+"%");

                
    }
}

    

