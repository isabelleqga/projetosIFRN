package plmdds;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileNotFoundException;
import java.io.IOException;

public class Plmdds {

    public static String leitura()
    throws FileNotFoundException, IOException
    
    {
        FileReader in = new FileReader("dados.txt");//Informa o nome do arquivo
        BufferedReader bf = new BufferedReader(in);//Cria o leitor
        StringBuffer str = new StringBuffer();
        while(bf.ready()){//Verifica se tem linha para ler
            str.append(bf.readLine()).append("\n");// Lê a linha
        }
        return str.toString();
        
    }
    
    public static void main(String[] args) {
        try{
            String uhum = (leitura());
            String [] separado = uhum.split("[; \\n]");
            int i = 0;
            while (separado[i]!=null){
            System.out.println("Nome: "+separado[i]+"\n Idade: "+separado[i+1]);
            //com o \n fica mais bonitinho e eh isto
            i+=2;
            }
        }catch(FileNotFoundException e){
            System.out.println("Arquivo inexistente");
        }catch(IOException e){
            System.out.println("Problema de leitura");
        }catch(ArrayIndexOutOfBoundsException e){
            
                        }
    }
    
}