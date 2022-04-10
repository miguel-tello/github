package com.company;

public abstract class Periodista implements empleable{

    private String categoria;
    private String nombre;
    private int numempleado;

    public Periodista(){
        this("",0);
    }

    public Periodista(String nombre,int numempleado){
        this.nombre=nombre;
        this.numempleado=numempleado;
        this.categoria="NULL";
    }

    @Override
    public abstract String trabajar();

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getNombre() {
        return nombre;
    }

    public int getNumempleado() {
        return numempleado;
    }

    @Override
    public String toString() {
        return "\n"+
                "categoria='" + getCategoria() + '\''+ "\n" +
                "nombre='" + getNombre() + '\''+ "\n"+
                "numempleado=" + getNumempleado() + "\n";
    }
}
