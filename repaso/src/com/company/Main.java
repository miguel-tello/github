package com.company;


public class Main {


    public static void main(String[] args) {
	// write your code here
        input_output io = new input_output();
        Team a = new Team(100);
        a.addPeriodista("peter","reportero");
        a.addPeriodista("homer","redactor");
        io.output(a.toString());
        io.output(a.trabajar());
    }
}
