package observer;

import java.util.ArrayList;


public class Stock {
	
	private ArrayList<libro> libros;
	Stock(){
		libros=new ArrayList<libro>();
	}

	public void update(libro devuelto){
		// TODO Auto-generated method stub
		System.out.println("el libro "+ devuelto.getnombre()+ " no sera aniadido al almacen");
	}

	public void addlibro(libro devuelto) {
		// TODO Auto-generated method stub
		libros.add(devuelto);
	}

}
