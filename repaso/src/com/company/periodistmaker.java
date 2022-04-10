package com.company;

public class periodistmaker {

    private int n;
    public periodistmaker(){
        n=0;
    }


    public Periodista makeperiodista(String name,String categoria){
        n++;
        Periodista p=new generic(name,n);
        p=changetype(categoria,p);
        return p;
    }

    public Periodista changetype(String categoria,Periodista p){
        Periodista resul = p;
        if(categoria.equals("reportero") && !p.getCategoria().equals("reportero")){
            resul = new Reportero(p.getNombre(),p.getNumempleado());
        }
        if (categoria.equals("redactor") && !p.getCategoria().equals("redactor")){
            resul = new Redactor(p.getNombre(),p.getNumempleado());
        }
        return resul;
    }
    
    
}
