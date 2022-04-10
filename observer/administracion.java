package observer;

import java.util.ArrayList;


public class administracion {

	private ArrayList<libro> librosestropeados;
	administracion(){
		librosestropeados=new ArrayList<libro>();
	}
	
	public void update(libro devuelto) {
		// TODO Auto-generated method stub
		System.out.println("el libro "+devuelto.getnombre()+" tiene que ser cambiado");
		librosestropeados.add(devuelto);
	}

}
