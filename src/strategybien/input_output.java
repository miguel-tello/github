package strategybien;
import java.util.Scanner;
import java.lang.String;
import java.lang.System;
public class input_output {
	
	private Scanner myObj;
	public input_output() {
		myObj = new Scanner(System.in);
	}
    public void output(String output){
        System.out.println(output);
    }

    public String inputString(){
        
        return myObj.nextLine();
    }
    
    public int inputint(){
        
        return myObj.nextInt();
    }
    
    public void close() {
    	myObj.close();
    }
    
}
