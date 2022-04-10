package com.company;

public class Reportero extends Periodista{


    public Reportero(){this("",0);}

    public Reportero(String name, int n) {
        super(name,n);
        this.setCategoria("reportero");
    }

    @Override
    public String trabajar() {
        return this.getCategoria()+" trabajando"+"\n";
    }
}
