package com.company;
import java.util.Scanner;
import java.lang.String;
import java.lang.System;
public class input_output {

    public void output(String output){
        System.out.println(output);
    }

    public String inputString(){
        Scanner myObj = new Scanner(System.in);
        return myObj.nextLine();
    }
}
