/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entidade;

/**
 *
 * @author 20171104010037
 */
public class Boletim {
    private float a;
    private float b;
    private float c;
    private float d;
    
    public Boletim(){
        a = 0;
        b = 0;  
        c = 0;
        d = 0;
    }
    
    public float getA(){
        return a;
    }
    public void setA(float a){
        this.a = a;
    }
    //thiago silva
    public float getB(){
        return b;
    }
    public void setB(float b){
        this.b = b;
    }
    
    public float getC(){
        return c;
    }
    
    public void setC(float c){
        this.c = c;
    }
    
    public float getD(){
        return d;
    }
    
    public void setD(float d){
        this.d = d;
    }
    
    public float media(){
        return (a+b+c+d)/4;
    }

    
}
        