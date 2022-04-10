package com.company;

public class Team implements empleable {

    periodistmaker pm;
    private Periodista[] periodistas;
    private int ultimo;
    public Team(int len){
        this.ultimo=0;
        pm=new periodistmaker();
        periodistas=new Periodista[len];
    }
    public void addPeriodista(String nombre,String categoria){
        Periodista p=pm.makeperiodista(nombre,categoria);
        if(ultimo<periodistas.length-1){
            periodistas[ultimo]=p;
            ultimo++;
        }
    }

    @Override
    public String trabajar() {
        String s="";
        for (int i = 0;i<ultimo;i++){
            s=s+periodistas[i].trabajar();
        }
        return s;
    }

    @Override
    public String toString() {
       String s = "equipo formado por:";
       for (int i =0;i<ultimo;i++){
           s=s+" "+periodistas[i].toString();
       }
        return s;
    }
}
