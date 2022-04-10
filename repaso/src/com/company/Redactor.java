package com.company;

public class Redactor extends Periodista {


    public Redactor(){this("",0);}

    public Redactor(String name, int n) {

        super(name,n);
        this.setCategoria("redactor");

    }

    @Override
    public String trabajar() {
        return this.getCategoria()+" trabajando"+"\n";
    }
}
