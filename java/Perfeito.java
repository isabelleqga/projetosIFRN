
package perfeito;

public class Perfeito {

    public static void main(String[] args) {
        int i, soma, p = 0;
        long n = 2;       
        long pf[]=new long[5];
        
            //numero
            for (n=2; n<10000000;n++){
                //zera a soma
                soma=0;
                //divisor
                for(i=1;i<n;i++){
                    if(n%i==0){
                            soma+=i;
                        }
                }if (soma==n){
                    pf[p] = n;
                    System.out.println(n);
                    //pra tu ver q ta rodando
                    //so q demora mt pra chegar no ultimo
                    p++;
                    }                         
            
        }
            
            for (p=0; p<5;p++){
                    System.out.println(pf[p]);
            }

                
          
 
        
        
    }
    
}