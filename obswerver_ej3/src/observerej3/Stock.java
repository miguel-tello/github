package observer;

import java.util.ArrayList;


public class Stock implements observer{
	
	private ArrayList<libro> libros;
	Stock(){
		libros=new ArrayList<libro>();
	}



	public void addlibro(libro devuelto) {
		// TODO Auto-generated method stub
		libros.add(devuelto);
	}

	@Override
	public void update(subjet o, Object arg) {
		// TODO Auto-generated method stub
		if(arg instanceof libro){
			libro l = (libro) arg;
			System.out.println("el libro "+l.getnombre()+" no sera a�adido al almacen");
		}
	}

}
